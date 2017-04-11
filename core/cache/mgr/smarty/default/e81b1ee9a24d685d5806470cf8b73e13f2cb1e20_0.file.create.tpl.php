<?php /* Smarty version 3.1.27, created on 2017-04-11 16:29:40
         compiled from "/Users/user/Sites/dommebeli.new/manager/templates/default/resource/staticresource/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:103101153558ece854499e36_78716417%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'e81b1ee9a24d685d5806470cf8b73e13f2cb1e20' => 
    array (
      0 => '/Users/user/Sites/dommebeli.new/manager/templates/default/resource/staticresource/create.tpl',
      1 => 1486528672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '103101153558ece854499e36_78716417',
  'variables' => 
  array (
    'tvOutput' => 0,
    'onDocFormPrerender' => 0,
    'resource' => 0,
    '_config' => 0,
    'onRichTextEditorInit' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ece8544b5751_40085077',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ece8544b5751_40085077')) {
function content_58ece8544b5751_40085077 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '103101153558ece854499e36_78716417';
?>
<div id="modx-panel-static-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>