<?php /* Smarty version Smarty-3.1.18, created on 2015-08-29 09:46:02
         compiled from "/volume1/web/www-sb/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:81858080755e15738bd6361-39303410%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'd3192ab2bc60fbdf2412fcb8a4dfc8e606035c46' => 
    array (
      0 => '/volume1/web/www-sb/templates/header.tpl',
      1 => 1440837929,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '81858080755e15738bd6361-39303410',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_55e15738d332a2_08643491',
  'variables' => 
  array (
    'title' => 0,
    'includeheadercss' => 0,
    'code' => 0,
    'includeheaderjs' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_55e15738d332a2_08643491')) {function content_55e15738d332a2_08643491($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es"><head><title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title><meta charset="UTF-8"><link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'><?php  $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['code']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['includeheadercss']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['code']->key => $_smarty_tpl->tpl_vars['code']->value) {
$_smarty_tpl->tpl_vars['code']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
<?php } ?><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><?php  $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['code']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['includeheaderjs']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['code']->key => $_smarty_tpl->tpl_vars['code']->value) {
$_smarty_tpl->tpl_vars['code']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
<?php } ?></head><body><div class="align_center"><img src="<?php echo @constant('DOMAIN');?>
/images/logos/<?php echo $_SESSION['cliente'];?>
<?php if (isset($_SESSION['local'])) {?>.<?php echo $_SESSION['local'];?>
<?php }?>.png" <?php if ((@constant('TEMPLATE_NAME')!='login')&&(@constant('TEMPLATE_NAME')!='contrasena')) {?> width="150px"<?php }?>></div><br>
        
<?php }} ?>
