<?php /* Smarty version Smarty-3.1.16, created on 2015-07-15 15:17:11
         compiled from "/opt/lampp/htdocs/booked/tpl/Controls/DatePickerSetup.tpl" */ ?>
<?php /*%%SmartyHeaderCode:103786208355a65d57c6ec34-97089915%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '5e25983fe5220d0371f6ba04fc248c722f4a8712' => 
    array (
      0 => '/opt/lampp/htdocs/booked/tpl/Controls/DatePickerSetup.tpl',
      1 => 1435073766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103786208355a65d57c6ec34-97089915',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'ControlId' => 0,
    'NumberOfMonths' => 0,
    'ShowButtonPanel' => 0,
    'OnSelect' => 0,
    'DayNames' => 0,
    'DayNamesShort' => 0,
    'DayNamesMin' => 0,
    'DateFormat' => 0,
    'FirstDay' => 0,
    'MonthNames' => 0,
    'MonthNamesShort' => 0,
    'AltId' => 0,
    'AltFormat' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55a65d57c9bf13_25438247',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a65d57c9bf13_25438247')) {function content_55a65d57c9bf13_25438247($_smarty_tpl) {?>
<script type="text/javascript">
$(function(){
  $("#<?php echo $_smarty_tpl->tpl_vars['ControlId']->value;?>
").datepicker({
		 numberOfMonths: <?php echo $_smarty_tpl->tpl_vars['NumberOfMonths']->value;?>
,
		 showButtonPanel: <?php echo $_smarty_tpl->tpl_vars['ShowButtonPanel']->value;?>
,
		 onSelect: <?php echo $_smarty_tpl->tpl_vars['OnSelect']->value;?>
,
		 dayNames: <?php echo $_smarty_tpl->tpl_vars['DayNames']->value;?>
,
		 dayNamesShort: <?php echo $_smarty_tpl->tpl_vars['DayNamesShort']->value;?>
,
		 dayNamesMin: <?php echo $_smarty_tpl->tpl_vars['DayNamesMin']->value;?>
,
		 dateFormat: '<?php echo $_smarty_tpl->tpl_vars['DateFormat']->value;?>
',
		 <?php if ($_smarty_tpl->tpl_vars['FirstDay']->value>=0&&$_smarty_tpl->tpl_vars['FirstDay']->value<=6) {?>
	  		firstDay: <?php echo $_smarty_tpl->tpl_vars['FirstDay']->value;?>
,
		 <?php }?>
		 monthNames: <?php echo $_smarty_tpl->tpl_vars['MonthNames']->value;?>
,
		 monthNamesShort: <?php echo $_smarty_tpl->tpl_vars['MonthNamesShort']->value;?>
,
		 currentText: "<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Today'),$_smarty_tpl);?>
"
	  	 <?php if ($_smarty_tpl->tpl_vars['AltId']->value!='') {?>
		   ,
	  		altField: "#<?php echo $_smarty_tpl->tpl_vars['AltId']->value;?>
",
	  	 	altFormat: '<?php echo $_smarty_tpl->tpl_vars['AltFormat']->value;?>
'
		  <?php }?>
  });

  <?php if ($_smarty_tpl->tpl_vars['AltId']->value!='') {?>
	$("#<?php echo $_smarty_tpl->tpl_vars['ControlId']->value;?>
").change(function() {
 		if ($(this).val() == '') {
			$("#<?php echo $_smarty_tpl->tpl_vars['AltId']->value;?>
").val('');
		}
		else{
			var dateVal = $("#<?php echo $_smarty_tpl->tpl_vars['ControlId']->value;?>
").datepicker('getDate');
			var dateString = dateVal.getFullYear() + '-' + ('0' + (dateVal.getMonth()+1)).slice(-2) + '-' + ('0' + dateVal.getDate()).slice(-2);
			$("#<?php echo $_smarty_tpl->tpl_vars['AltId']->value;?>
").val(dateString);
		}
  	});
  <?php }?>

});
</script><?php }} ?>