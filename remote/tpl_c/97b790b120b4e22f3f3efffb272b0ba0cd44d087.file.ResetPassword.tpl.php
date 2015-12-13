<?php /* Smarty version Smarty-3.1.16, created on 2015-11-23 16:25:16
         compiled from "/var/www/html/remote/lang/si_si/ResetPassword.tpl" */ ?>
<?php /*%%SmartyHeaderCode:24989196456532fdc84f7d5-86972351%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '97b790b120b4e22f3f3efffb272b0ba0cd44d087' => 
    array (
      0 => '/var/www/html/remote/lang/si_si/ResetPassword.tpl',
      1 => 1438186771,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '24989196456532fdc84f7d5-86972351',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'TemporaryPassword' => 0,
    'ScriptUrl' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_56532fdc853431_14377220',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_56532fdc853431_14377220')) {function content_56532fdc853431_14377220($_smarty_tpl) {?>


Vaše začasno geslo za program Booked Scheduler je: <?php echo $_smarty_tpl->tpl_vars['TemporaryPassword']->value;?>


<br/>

Vaše staro geslo ne bo več delovalo.

Prosimo, <a href="<?php echo $_smarty_tpl->tpl_vars['ScriptUrl']->value;?>
">prijavite se v program Booked Scheduler</a> in zamenjajte svoje geslo.
<?php }} ?>
