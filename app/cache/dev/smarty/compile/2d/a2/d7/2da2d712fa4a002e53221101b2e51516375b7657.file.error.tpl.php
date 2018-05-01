<?php /* Smarty version Smarty-3.1.19, created on 2018-05-01 13:33:14
         compiled from "/var/www/html/ambre/admin884supze1/themes/default/template/error.tpl" */ ?>
<?php /*%%SmartyHeaderCode:5335329415ae8507af06af6-47115568%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '2da2d712fa4a002e53221101b2e51516375b7657' => 
    array (
      0 => '/var/www/html/ambre/admin884supze1/themes/default/template/error.tpl',
      1 => 1525168232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '5335329415ae8507af06af6-47115568',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'php_errors' => 0,
    'php_error' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae8507af1aef1_60420476',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae8507af1aef1_60420476')) {function content_5ae8507af1aef1_60420476($_smarty_tpl) {?>
<?php if (isset($_smarty_tpl->tpl_vars['php_errors']->value)&&count($_smarty_tpl->tpl_vars['php_errors']->value)) {?>
<div class="bootstrap">
	<div id="error-modal" class="modal fade">
		<div class="modal-dialog">
			<div class="alert alert-danger clearfix">
				<?php  $_smarty_tpl->tpl_vars['php_error'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['php_error']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['php_errors']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['php_error']->key => $_smarty_tpl->tpl_vars['php_error']->value) {
$_smarty_tpl->tpl_vars['php_error']->_loop = true;
?>
					<?php echo smartyTranslate(array('s'=>'%1$s on line %2$s in file %3$s','sprintf'=>array($_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['type']),$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['errline']),$_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['errfile'])),'d'=>'Admin.Notifications.Error'),$_smarty_tpl);?>
<br />
					[<?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['errno']);?>
] <?php echo $_smarty_tpl->smarty->registered_plugins[Smarty::PLUGIN_MODIFIER]['escape'][0][0]->smartyEscape($_smarty_tpl->tpl_vars['php_error']->value['errstr']);?>
<br /><br />
				<?php } ?>
				<button type="button" class="btn btn-default pull-right" data-dismiss="modal"><i class="icon-remove"></i> Close</button>
			</div>
		</div>
	</div>
</div>
<?php }?>
<?php }} ?>
