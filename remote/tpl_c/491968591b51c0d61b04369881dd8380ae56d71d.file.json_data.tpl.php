<?php /* Smarty version Smarty-3.1.16, created on 2015-07-15 15:16:52
         compiled from "/opt/lampp/htdocs/booked/tpl/json_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:44606845355a65d447cb8d6-62671140%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '491968591b51c0d61b04369881dd8380ae56d71d' => 
    array (
      0 => '/opt/lampp/htdocs/booked/tpl/json_data.tpl',
      1 => 1435073766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '44606845355a65d447cb8d6-62671140',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'data' => 0,
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55a65d4481bba1_59982796',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a65d4481bba1_59982796')) {function content_55a65d4481bba1_59982796($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['data']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['error']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }?><?php }} ?>
