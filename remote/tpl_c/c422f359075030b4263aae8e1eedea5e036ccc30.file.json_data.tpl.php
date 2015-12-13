<?php /* Smarty version Smarty-3.1.16, created on 2015-11-25 17:47:59
         compiled from "/var/www/html/remote/tpl/json_data.tpl" */ ?>
<?php /*%%SmartyHeaderCode:12523897945655e63f66a6c3-43630502%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c422f359075030b4263aae8e1eedea5e036ccc30' => 
    array (
      0 => '/var/www/html/remote/tpl/json_data.tpl',
      1 => 1437386751,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '12523897945655e63f66a6c3-43630502',
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
  'unifunc' => 'content_5655e63f67a616_08135289',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5655e63f67a616_08135289')) {function content_5655e63f67a616_08135289($_smarty_tpl) {?>
<?php if ($_smarty_tpl->tpl_vars['data']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['data']->value;?>

<?php }?>
<?php if ($_smarty_tpl->tpl_vars['error']->value!='') {?>
<?php echo $_smarty_tpl->tpl_vars['error']->value;?>

<?php }?><?php }} ?>
