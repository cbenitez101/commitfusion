<?php /* Smarty version Smarty-3.1.18, created on 2014-10-16 15:48:04
         compiled from "/var/www/vhosts/servibyte.com/servibyte.net/templates/header.tpl" */ ?>
<?php /*%%SmartyHeaderCode:1319983344543fdaa41395a7-77759019%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '77c5ee063d129ae9304fb7364b915633e93d15d6' => 
    array (
      0 => '/var/www/vhosts/servibyte.com/servibyte.net/templates/header.tpl',
      1 => 1413315754,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '1319983344543fdaa41395a7-77759019',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'title' => 0,
    'includeheader' => 0,
    'code' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.18',
  'unifunc' => 'content_543fdaa4237979_25045279',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_543fdaa4237979_25045279')) {function content_543fdaa4237979_25045279($_smarty_tpl) {?><!DOCTYPE html>
<html lang="es"><head><title><?php echo $_smarty_tpl->tpl_vars['title']->value;?>
</title><meta charset="UTF-8"><link href='http://fonts.googleapis.com/css?family=Open+Sans' rel='stylesheet' type='text/css'><script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.1/jquery.min.js"></script><?php  $_smarty_tpl->tpl_vars['code'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['code']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['includeheader']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['code']->key => $_smarty_tpl->tpl_vars['code']->value) {
$_smarty_tpl->tpl_vars['code']->_loop = true;
?><?php echo $_smarty_tpl->tpl_vars['code']->value;?>
<?php } ?></head><body><div class="align_center"><img src="images/logo.png" <?php if (@constant('TEMPLATE_NAME')!='login') {?> width="150px"<?php }?>></div><br>
        
<?php }} ?>
