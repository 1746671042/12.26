<?php
/* Smarty version 3.1.30, created on 2017-12-25 12:13:41
  from "D:\phpStudy\WWW\php\AdminMVC\View\index.tpl" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.30',
  'unifunc' => 'content_5a407af5c717b7_47922303',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'cdd6d0a7d49998081bafc7e78d6d7b61b5a472e1' => 
    array (
      0 => 'D:\\phpStudy\\WWW\\php\\AdminMVC\\View\\index.tpl',
      1 => 1514175218,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5a407af5c717b7_47922303 (Smarty_Internal_Template $_smarty_tpl) {
?>
<html>
    <head>
        <title>title</title>
    </head>
    <body>
        <table border="1px">
            <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['list']->value, 'value');
if ($_from !== null) {
foreach ($_from as $_smarty_tpl->tpl_vars['value']->value) {
?>
            <tr>
                <td>管理员:<?php echo $_smarty_tpl->tpl_vars['value']->value['admin_name'];?>
</td>
                <td>密码:<?php echo $_smarty_tpl->tpl_vars['value']->value['admin_pwd'];?>
</td>
                <td>时间:<?php echo $_smarty_tpl->tpl_vars['value']->value['admin_time'];?>
</td>
            </tr>
            <?php
}
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl);
?>

        </table>
    </body>
</html>

<?php }
}
