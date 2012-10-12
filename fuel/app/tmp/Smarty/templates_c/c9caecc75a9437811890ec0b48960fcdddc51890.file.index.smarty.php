<?php /* Smarty version Smarty-3.1.12, created on 2012-10-12 16:25:40
         compiled from "/Applications/MAMP/htdocs/blog/fuel/app/views/home/index.smarty" */ ?>
<?php /*%%SmartyHeaderCode:9818927450782e57a51d88-60576406%%*/if(!defined('SMARTY_DIR')) exit('no direct access allowed');
$_valid = $_smarty_tpl->decodeProperties(array (
  'file_dependency' => 
  array (
    'c9caecc75a9437811890ec0b48960fcdddc51890' => 
    array (
      0 => '/Applications/MAMP/htdocs/blog/fuel/app/views/home/index.smarty',
      1 => 1350058812,
      2 => 'file',
    ),
  ),
  'nocache_hash' => '9818927450782e57a51d88-60576406',
  'function' => 
  array (
  ),
  'version' => 'Smarty-3.1.12',
  'unifunc' => 'content_50782e57b20284_60428993',
  'variables' => 
  array (
    'article' => 0,
    'foo' => 0,
  ),
  'has_nocache_code' => false,
),false); /*/%%SmartyHeaderCode%%*/?>
<?php if ($_valid && !is_callable('content_50782e57b20284_60428993')) {function content_50782e57b20284_60428993($_smarty_tpl) {?><?php if (!is_callable('smarty_modifier_date_format')) include '/Applications/MAMP/htdocs/blog/fuel/app/vendor/Smarty/libs/plugins/modifier.date_format.php';
?><?php  $_smarty_tpl->tpl_vars['foo'] = new Smarty_Variable; $_smarty_tpl->tpl_vars['foo']->_loop = false;
 $_from = $_smarty_tpl->tpl_vars['article']->value; if (!is_array($_from) && !is_object($_from)) { settype($_from, 'array');}
foreach ($_from as $_smarty_tpl->tpl_vars['foo']->key => $_smarty_tpl->tpl_vars['foo']->value){
$_smarty_tpl->tpl_vars['foo']->_loop = true;
?>

    <article>
        <header>
            <h2><?php echo $_smarty_tpl->tpl_vars['foo']->value['title'];?>
</h2>
            <div class="article_info">
                <span class="date"><?php echo smarty_modifier_date_format($_smarty_tpl->tpl_vars['foo']->value['created_at'],"%G/%m/%d");?>
</span>
            </div>
        </header>

        <p><?php echo nl2br($_smarty_tpl->tpl_vars['foo']->value['body']);?>
</p>

        <footer>

        </footer>
    </article>

<?php } ?><?php }} ?>