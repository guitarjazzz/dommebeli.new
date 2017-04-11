<?php /* Smarty version 3.1.27, created on 2017-03-27 20:27:59
         compiled from "/Users/user/Sites/dommebeli.new/manager/templates/default/workspaces/index.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:103126302658d959af9594c8_50383896%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'ae0cb1fdecd5202bc91514a3e3cbdce110989365' => 
    array (
      0 => '/Users/user/Sites/dommebeli.new/manager/templates/default/workspaces/index.tpl',
      1 => 1486528672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103126302658d959af9594c8_50383896',
  'variables' => 
  array (
    'error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d959af964097_38428075',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d959af964097_38428075')) {
function content_58d959af964097_38428075 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '103126302658d959af9594c8_50383896';
echo (($tmp = @$_smarty_tpl->tpl_vars['error']->value)===null||$tmp==='' ? '' : $tmp);?>

<div id="modx-panel-workspace-div"></div>
<?php }
}
?>