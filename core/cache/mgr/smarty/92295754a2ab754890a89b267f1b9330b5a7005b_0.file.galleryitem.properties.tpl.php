<?php /* Smarty version 3.1.27, created on 2017-04-11 18:08:47
         compiled from "/Users/user/Sites/dommebeli.new/core/components/gallery/elements/tv/galleryitem.properties.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:209735216358ecff8f7252f5_92835569%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '92295754a2ab754890a89b267f1b9330b5a7005b' => 
    array (
      0 => '/Users/user/Sites/dommebeli.new/core/components/gallery/elements/tv/galleryitem.properties.tpl',
      1 => 1491926673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '209735216358ecff8f7252f5_92835569',
  'variables' => 
  array (
    'tv' => 0,
    'params' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ecff8f77fde9_42092096',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ecff8f77fde9_42092096')) {
function content_58ecff8f77fde9_42092096 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '209735216358ecff8f7252f5_92835569';
?>
<div id="tv-wprops-form<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
"></div>


<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
var params = <?php echo $_smarty_tpl->tpl_vars['params']->value;?>
;
var oc = {'change':{fn:function(){Ext.getCmp('modx-panel-tv').markDirty();},scope:this}};
var tv = '<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
';
MODx.load({
    xtype: 'panel'
    ,layout: 'form'
    ,autoHeight: true
    ,labelWidth: 150
    ,border: false
    ,items: []
    ,renderTo: 'tv-wprops-form<?php echo $_smarty_tpl->tpl_vars['tv']->value;?>
'
});
// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>