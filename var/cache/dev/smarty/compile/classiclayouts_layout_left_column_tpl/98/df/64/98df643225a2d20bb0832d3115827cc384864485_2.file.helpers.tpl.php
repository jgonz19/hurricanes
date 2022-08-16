<?php
/* Smarty version 3.1.43, created on 2022-08-16 00:36:32
  from '/Users/jeysongonzalez/Documents/GitHub/hurricanes/themes/classic/templates/_partials/helpers.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.43',
  'unifunc' => 'content_62faca70b44986_15048917',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '98df643225a2d20bb0832d3115827cc384864485' => 
    array (
      0 => '/Users/jeysongonzalez/Documents/GitHub/hurricanes/themes/classic/templates/_partials/helpers.tpl',
      1 => 1658575415,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_62faca70b44986_15048917 (Smarty_Internal_Template $_smarty_tpl) {
$_smarty_tpl->smarty->ext->_tplFunction->registerTplFunctions($_smarty_tpl, array (
  'renderLogo' => 
  array (
    'compiled_filepath' => '/Users/jeysongonzalez/Documents/GitHub/hurricanes/var/cache/dev/smarty/compile/classiclayouts_layout_left_column_tpl/98/df/64/98df643225a2d20bb0832d3115827cc384864485_2.file.helpers.tpl.php',
    'uid' => '98df643225a2d20bb0832d3115827cc384864485',
    'call_name' => 'smarty_template_function_renderLogo_163159233262faca70b42276_81097301',
  ),
));
?> 

<?php }
/* smarty_template_function_renderLogo_163159233262faca70b42276_81097301 */
if (!function_exists('smarty_template_function_renderLogo_163159233262faca70b42276_81097301')) {
function smarty_template_function_renderLogo_163159233262faca70b42276_81097301(Smarty_Internal_Template $_smarty_tpl,$params) {
foreach ($params as $key => $value) {
$_smarty_tpl->tpl_vars[$key] = new Smarty_Variable($value, $_smarty_tpl->isRenderingCache);
}
?>

  <a href="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['urls']->value['pages']['index'], ENT_QUOTES, 'UTF-8');?>
">
    <img
      class="logo img-fluid"
      src="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['src'], ENT_QUOTES, 'UTF-8');?>
"
      alt="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['name'], ENT_QUOTES, 'UTF-8');?>
"
      width="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['width'], ENT_QUOTES, 'UTF-8');?>
"
      height="<?php echo htmlspecialchars($_smarty_tpl->tpl_vars['shop']->value['logo_details']['height'], ENT_QUOTES, 'UTF-8');?>
">
  </a>
<?php
}}
/*/ smarty_template_function_renderLogo_163159233262faca70b42276_81097301 */
}
