<?php /* Smarty version 3.1.27, created on 2017-03-27 16:36:28
         compiled from "/Users/user/Sites/dommebeli.new/manager/templates/default/resource/weblink/create.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:33732351558d9236ce46db9_98866873%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'df578c103aefd852636078507b5c5a65e8ac8d45' => 
    array (
      0 => '/Users/user/Sites/dommebeli.new/manager/templates/default/resource/weblink/create.tpl',
      1 => 1486528672,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '33732351558d9236ce46db9_98866873',
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
  'unifunc' => 'content_58d9236ce5b475_96369383',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d9236ce5b475_96369383')) {
function content_58d9236ce5b475_96369383 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '33732351558d9236ce46db9_98866873';
?>
<div id="modx-panel-weblink-div"></div>
<div id="modx-resource-tvs-div" class="modx-resource-tab x-form-label-left x-panel"><?php echo (($tmp = @$_smarty_tpl->tpl_vars['tvOutput']->value)===null||$tmp==='' ? '' : $tmp);?>
</div>

<?php echo $_smarty_tpl->tpl_vars['onDocFormPrerender']->value;?>

<?php if ($_smarty_tpl->tpl_vars['resource']->value->richtext && $_smarty_tpl->tpl_vars['_config']->value['use_editor']) {?>
    <?php echo $_smarty_tpl->tpl_vars['onRichTextEditorInit']->value;?>

<?php }

}
}
?>