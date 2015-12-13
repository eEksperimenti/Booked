<?php /* Smarty version Smarty-3.1.16, created on 2015-11-21 08:49:57
         compiled from "/var/www/html/remote/tpl/Ajax/reservation/delete_successful.tpl" */ ?>
<?php /*%%SmartyHeaderCode:214673800656502225cf8f05-80012283%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '0d890bb030f75e08d9beb8d9a2a5c0c8c6bb0c3c' => 
    array (
      0 => '/var/www/html/remote/tpl/Ajax/reservation/delete_successful.tpl',
      1 => 1437386689,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '214673800656502225cf8f05-80012283',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56502225d0ca09_16314893',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56502225d0ca09_16314893')) {function content_56502225d0ca09_16314893($_smarty_tpl) {?>
<div>
	<div><?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'ReservationRemoved'),$_smarty_tpl);?>
</div>

	<input type="button" id="btnSaveSuccessful" value="<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_FUNCTION]['translate'][0][0]->SmartyTranslate(array('key'=>'Close'),$_smarty_tpl);?>
" class="button" />

</div><?php }} ?>
