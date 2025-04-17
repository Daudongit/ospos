<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

// require_once APPPATH . 'third_party/PhpSpreadsheet/autoload.php';

use PhpOffice\PhpSpreadsheet\IOFactory;
use PhpOffice\PhpSpreadsheet\Shared\Date as PhpSpreadsheetDate;

function generate_import_items_csv($stock_locations, $attributes)
{
    $csv_headers = pack('CCC', 0xef, 0xbb, 0xbf); //Encode the Byte-Order Mark (BOM)
    $csv_headers .= 'Id,Barcode,"Item Name",Category,"Supplier ID","Cost Price","Unit Price","Tax 1 Name","Tax 1 Percent","Tax 2 Name","Tax 2 Percent","Reorder Level",Description,"Allow Alt Description","Item has Serial Number",Image,HSN,expiring_date';
    $csv_headers .= generate_stock_location_headers($stock_locations);
    $csv_headers .= generate_attribute_headers($attributes);

    return $csv_headers;
}

function generate_stock_location_headers($locations)
{
    $location_headers = '';

    foreach ($locations as $location_name) {
        $location_headers .= ',"location_' . $location_name . '"';
    }

    return $location_headers;
}

function generate_attribute_headers($attribute_names)
{
    $attribute_headers = '';
    unset($attribute_names[-1]);

    foreach ($attribute_names as $attribute_name) {
        $attribute_headers .= ',"attribute_' . $attribute_name . '"';
    }

    return $attribute_headers;
}

function get_csv_file($file_name)
{
    ini_set('auto_detect_line_endings', true);

    $csv_rows = FALSE;

    if (($csv_file = fopen($file_name, 'r')) !== FALSE) {
        $CI =& get_instance();
        $CI->load->helper('security');

        $csv_rows = [];

        //Skip Byte-Order Mark
        if (bom_exists($csv_file) === TRUE) {
            fseek($csv_file, 3);
        }

        $headers = fgetcsv($csv_file);

        while (($row = fgetcsv($csv_file)) !== FALSE) {
            //Skip empty lines
            if ($row !== array(null)) {
                $csv_rows[] = array_combine($headers, $CI->security->xss_clean($row));
            }
        }

        fclose($csv_file);
    }

    return $csv_rows;
}

function get_excel_file($file_name)
{
    $CI =& get_instance();
    $CI->load->helper('security');

    try {
        $spreadsheet = IOFactory::load($file_name);
        $worksheet = $spreadsheet->getActiveSheet();
        $rows = $worksheet->toArray();

        // Process headers (first row)
        $headers = array_shift($rows);
        $headers = $CI->security->xss_clean($headers);

        $data = [];
        foreach ($rows as $row) {
            // Skip empty rows
            if (empty(array_filter($row))) {
                continue;
            }

            // Clean each cell value
            $cleaned_row = $CI->security->xss_clean($row);
            
            // Convert Excel dates to PHP dates if needed
            foreach ($cleaned_row as &$cell) {
                if (is_numeric($cell) && $cell > 25569) { // Excel date threshold (1970-01-01)
                    try {
                        $cell = PhpSpreadsheetDate::excelToDateTimeObject($cell)->format('Y-m-d');
                    } catch (Exception $e) {
                        // Not a date, leave as is
                    }
                }
            }

            $data[] = array_combine($headers, $cleaned_row);
        }

        return $data;
    } catch (Exception $e) {
        log_message('error', 'Error reading Excel file: ' . $e->getMessage());
        return FALSE;
    }
}

function bom_exists(&$file_handle)
{
    $result = FALSE;
    $candidate = fread($file_handle, 3);

    rewind($file_handle);

    $bom = pack('CCC', 0xef, 0xbb, 0xbf);

    if (0 === strncmp($candidate, $bom, 3)) {
        $result = TRUE;
    }

    return $result;
}

/**
 * Determines the file type and calls the appropriate reader function
 * 
 * @param string $file_name Path to the file
 * @return array|bool Array of data or FALSE on failure
 */
function get_import_file($file_name)
{
    $extension = strtolower(pathinfo($file_name, PATHINFO_EXTENSION));
    
    switch ($extension) {
        case 'csv':
            return get_csv_file($file_name);
        case 'xls':
        case 'xlsx':
        case 'ods':
            return get_excel_file($file_name);
        default:
            log_message('error', 'Unsupported file type: ' . $extension);
            return FALSE;
    }
}
