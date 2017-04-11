<?php /* Smarty version 3.1.27, created on 2017-03-27 15:38:23
         compiled from "/Users/user/Sites/dommebeli.new/manager/templates/default/welcome.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:209004232858d915cf21c534_13491058%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '03db4bb9582f6694820986389908a51417feb516' => 
    array (
      0 => '/Users/user/Sites/dommebeli.new/manager/templates/default/welcome.tpl',
      1 => 1486528672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209004232858d915cf21c534_13491058',
  'variables' => 
  array (
    'dashboard' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d915cf221010_10910277',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d915cf221010_10910277')) {
function content_58d915cf221010_10910277 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '209004232858d915cf21c534_13491058';
?>
<div id="modx-panel-welcome-div"></div>

<div id="modx-dashboard" class="dashboard">
<?php echo $_smarty_tpl->tpl_vars['dashboard']->value;?>

</div><?php }
}
?>