<?php /* Smarty version 3.1.27, created on 2017-04-11 18:09:20
         compiled from "/Users/user/Sites/dommebeli.new/core/components/gallery/elements/tv/galleryitem.input.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:127513551558ecffb035c537_91844844%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '9a114732010b91fa09add64e00e0e08d5d68c8a8' => 
    array (
      0 => '/Users/user/Sites/dommebeli.new/core/components/gallery/elements/tv/galleryitem.input.tpl',
      1 => 1491926673,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '127513551558ecffb035c537_91844844',
  'variables' => 
  array (
    'tv' => 0,
    'itemjson' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58ecffb03cc296_51399272',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58ecffb03cc296_51399272')) {
function content_58ecffb03cc296_51399272 ($_smarty_tpl) {

$_smarty_tpl->properties['nocache_hash'] = '127513551558ecffb035c537_91844844';
?>
<div id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
-form"></div>
<input type="hidden" id="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" name="tv<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
" value="<?php if ($_smarty_tpl->tpl_vars['itemjson']->value) {
echo htmlspecialchars($_smarty_tpl->tpl_vars['itemjson']->value, ENT_QUOTES, 'UTF-8', true);
} else { ?>{}<?php }?>" />


<?php echo '<script'; ?>
 type="text/javascript">
// <![CDATA[
Ext.onReady(function() {
    MODx.load({
        xtype: 'gal-panel-tv'
        ,tv: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->id;?>
'
        ,tvValue: '<?php echo $_smarty_tpl->tpl_vars['tv']->value->value;?>
'
        <?php if ($_smarty_tpl->tpl_vars['itemjson']->value) {?>,data: <?php echo $_smarty_tpl->tpl_vars['itemjson']->value;
}?>
    });
});
// ]]>
<?php echo '</script'; ?>
>
<?php }
}
?>