<?php /* Smarty version Smarty-3.1.19, created on 2018-05-01 13:33:14
         compiled from "/var/www/html/ambre/admin884supze1/themes/default/template/content.tpl" */ ?>
<?php /*%%SmartyHeaderCode:19923275045ae8507aab4b93-16038163%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    '7e1b211c3936373f8584e5afa5089ecfdfa9082a' => 
    array (
      0 => '/var/www/html/ambre/admin884supze1/themes/default/template/content.tpl',
      1 => 1525168232,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '19923275045ae8507aab4b93-16038163',
  'function' => 
  array (
  ),
  'variables' => 
  array (
    'content' => 0,
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae8507aabc591_37704195',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae8507aabc591_37704195')) {function content_5ae8507aabc591_37704195($_smarty_tpl) {?>
<div id="ajax_confirmation" class="alert alert-success hide"></div>

<div id="ajaxBox" style="display:none"></div>


<div class="row">
	<div class="col-lg-12">
		<?php if (isset($_smarty_tpl->tpl_vars['content']->value)) {?>
			<?php echo $_smarty_tpl->tpl_vars['content']->value;?>

		<?php }?>
	</div>
</div>
<?php }} ?>
