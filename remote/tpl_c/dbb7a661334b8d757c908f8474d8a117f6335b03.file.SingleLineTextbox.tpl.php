<?php /* Smarty version Smarty-3.1.16, created on 2015-07-15 15:17:11
         compiled from "/opt/lampp/htdocs/booked/tpl/Controls/Attributes/SingleLineTextbox.tpl" */ ?>
<?php /*%%SmartyHeaderCode:9771101855a65d579c5074-77861746%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'dbb7a661334b8d757c908f8474d8a117f6335b03' => 
    array (
      0 => '/opt/lampp/htdocs/booked/tpl/Controls/Attributes/SingleLineTextbox.tpl',
      1 => 1435073766,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9771101855a65d579c5074-77861746',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'attributeName' => 0,
    'attribute' => 0,
    'align' => 0,
    'readonly' => 0,
    'class' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.16',
  'unifunc' => 'content_55a65d579dd5a5_01648367',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55a65d579dd5a5_01648367')) {function content_55a65d579dd5a5_01648367($_smarty_tpl) {?>
<label class="customAttribute" for="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Label(), ENT_QUOTES, 'UTF-8', true);?>
:</label>
<?php if ($_smarty_tpl->tpl_vars['align']->value=='vertical') {?>
<br/>
<?php }?>
<?php if ($_smarty_tpl->tpl_vars['readonly']->value) {?>
<span class="attributeValue <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
"><?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
</span>
<?php } else { ?>
<input type="text" id="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" name="<?php echo $_smarty_tpl->tpl_vars['attributeName']->value;?>
" value="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['attribute']->value->Value(), ENT_QUOTES, 'UTF-8', true);?>
" class="customAttribute textbox <?php echo $_smarty_tpl->tpl_vars['class']->value;?>
" />
<?php }?><?php }} ?>
