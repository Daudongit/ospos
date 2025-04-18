<ul id="error_message_box" class="error_message_box"></ul>

<?php echo form_open_multipart('items/import_csv_file/', array('id'=>'csv_form', 'class'=>'form-horizontal')); ?>
	<fieldset id="item_basic_info">
		<div class="form-group form-group-sm">
			<div class="col-xs-12">
				<a href="<?php echo site_url('items/generate_csv_file'); ?>"><?php echo $this->lang->line('common_download_import_template'); ?></a><br>
				<a href="<?php echo site_url('items/download_import_excel_xlsx_template'); ?>">Download Import Excel Template (XLSX)</a>
			</div>
		</div>

		<div class="form-group form-group-sm">
			<div class='col-xs-12'>
				<div class="fileinput fileinput-new input-group" data-provides="fileinput">
					<div class="form-control" data-trigger="fileinput"><i class="glyphicon glyphicon-file fileinput-exists"></i><span class="fileinput-filename"></span></div>
					<span class="input-group-addon input-sm btn btn-default btn-file"><span class="fileinput-new"><?php echo $this->lang->line('common_import_select_file'); ?></span><span class="fileinput-exists"><?php echo $this->lang->line('common_import_change_file'); ?></span><input type="file" id="file_path" name="file_path" accept=".csv,.xls,.xlsx,.ods"></span>
					<a href="#" class="input-group-addon input-sm btn btn-default fileinput-exists" data-dismiss="fileinput"><?php echo $this->lang->line('common_import_remove_file'); ?></a>
				</div>
			</div>
		</div>
	</fieldset>
<?php echo form_close(); ?>

<script type="text/javascript">
//validation and submit handling
$(document).ready(function()
{
	$('#csv_form').validate($.extend({
		submitHandler: function(form) {
			$(form).ajaxSubmit({
				success:function(response)
				{
					dialog_support.hide();
					table_support.handle_submit('<?php echo site_url('items'); ?>', response);
				},
				dataType: 'json'
			});
		},

		errorLabelContainer: '#error_message_box',
 
		rules: 
		{
			file_path: 'required'
   		},

		messages: 
		{
   			file_path: "<?php echo $this->lang->line('common_import_full_path'); ?>"
		}
	}, form_support.error));
});
</script>
