<?php /* Smarty version Smarty-3.1.19, created on 2018-05-01 13:33:14
         compiled from "/var/www/html/ambre/modules/welcome/views/templates/tooltip.tpl" */ ?>
<?php /*%%SmartyHeaderCode:3648833035ae8507ae64102-54877141%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'f921a7ff8639817428280af4226d55aa89a33505' => 
    array (
      0 => '/var/www/html/ambre/modules/welcome/views/templates/tooltip.tpl',
      1 => 1525168235,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '3648833035ae8507ae64102-54877141',
  'function' => 
  array (
  ),
  'has_nocache_code' => false,
  'version' => 'Smarty-3.1.19',
  'unifunc' => 'content_5ae8507ae6a199_57929512',
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_5ae8507ae6a199_57929512')) {function content_5ae8507ae6a199_57929512($_smarty_tpl) {?>

<div class="onboarding-tooltip">
  <div class="content"></div>
  <div class="onboarding-tooltipsteps">
    <div class="total"><?php echo smartyTranslate(array('s'=>'Step','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
 <span class="count">1/5</span></div>
    <div class="bulls">
    </div>
  </div>
  <button class="btn btn-primary btn-xs onboarding-button-next"><?php echo smartyTranslate(array('s'=>'Next','d'=>'Modules.Welcome.Admin'),$_smarty_tpl);?>
</button>
</div>
<?php }} ?>
