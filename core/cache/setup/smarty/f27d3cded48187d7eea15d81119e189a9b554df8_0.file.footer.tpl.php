<?php /* Smarty version 3.1.27, created on 2017-03-27 15:37:50
         compiled from "/Users/user/Sites/dommebeli.new/setup/templates/footer.tpl" */ ?>
<?php
/*%%SmartyHeaderCode:79104845558d915ae0a3365_81172753%%*/
if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f27d3cded48187d7eea15d81119e189a9b554df8' => 
    array (
      0 => '/Users/user/Sites/dommebeli.new/setup/templates/footer.tpl',
      1 => 1486528674,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '79104845558d915ae0a3365_81172753',
  'variables' => 
  array (
    '_lang' => 0,
  ),
  'has_nocache_code' => false,
  'version' => '3.1.27',
  'unifunc' => 'content_58d915ae0b1e41_13734761',
),false);
/*/%%SmartyHeaderCode%%*/
if ($_valid && !is_callable('content_58d915ae0b1e41_13734761')) {
function content_58d915ae0b1e41_13734761 ($_smarty_tpl) {
if (!is_callable('smarty_modifier_replace')) require_once '/Users/user/Sites/dommebeli.new/core/model/smarty/plugins/modifier.replace.php';

$_smarty_tpl->properties['nocache_hash'] = '79104845558d915ae0a3365_81172753';
?>
        </div>
        <!-- end content -->
        <div class="clear">&nbsp;</div>
    </div>
</div>

<!-- start footer -->
<div id="footer">
    <div id="footer-inner">
    <div class="container_12">
        <p><?php ob_start();
echo date('Y');
$_tmp1=ob_get_clean();
echo smarty_modifier_replace($_smarty_tpl->tpl_vars['_lang']->value['modx_footer1'],'[[+current_year]]',$_tmp1);?>
</p>
        <p><?php echo $_smarty_tpl->tpl_vars['_lang']->value['modx_footer2'];?>
</p>
    </div>
    </div>
</div>

<div class="post_body">

</div>
<!-- end footer -->
</body>
</html><?php }
}
?>