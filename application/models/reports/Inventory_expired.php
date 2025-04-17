<?php if ( ! defined('BASEPATH')) exit('No direct script access allowed');

require_once("Report.php");

class Inventory_expired extends Report
{
	public function getDataColumns()
	{
		return array(
			array('item_name' => $this->lang->line('reports_item_name')),
			array('item_number' => $this->lang->line('reports_item_number')),
			array('item_expiring_date' => 'Item Expiring Date'),
			array('quantity' => $this->lang->line('reports_quantity')),
			array('reorder_level' => $this->lang->line('reports_reorder_level')),
			array('location_name' => $this->lang->line('reports_stock_location'))
        );
	}

	public function getData(array $inputs)
	{// items.expiring_date,
        $format = $this->db->escape(dateformat_mysql());
		// DATE_FORMAT(items.expiring_date, $format) as item_expiring_date,
		$query = $this->db->query("SELECT " . $this->Item->get_item_name('name') . ", 
			items.item_number,
			items.expiring_date as item_expiring_date,
			item_quantities.quantity, 
			items.reorder_level,
			stock_locations.location_name
			FROM " . $this->db->dbprefix('items') . " AS items
			JOIN " . $this->db->dbprefix('item_quantities') . " AS item_quantities ON items.item_id = item_quantities.item_id
			JOIN " . $this->db->dbprefix('stock_locations') . " AS stock_locations ON item_quantities.location_id = stock_locations.location_id
			WHERE items.deleted = 0
			AND items.stock_type = 0
			AND item_quantities.quantity <= items.reorder_level
			AND stock_locations.deleted = 0
			AND items.expiring_date is not null
			ORDER BY items.expiring_date"); //DESC

		return $query->result_array();
	}

	public function getSummaryData(array $inputs)
	{
		return array();
	}
}
?>
