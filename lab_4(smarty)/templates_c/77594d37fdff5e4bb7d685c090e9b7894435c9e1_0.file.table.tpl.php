<?php
/* Smarty version 3.1.39, created on 2021-04-03 18:41:14
  from 'C:\MAMP\htdocs\lab4\templates\table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6068b6cae4af45_41424722',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '77594d37fdff5e4bb7d685c090e9b7894435c9e1' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\lab4\\templates\\table.tpl',
      1 => 1617475263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6068b6cae4af45_41424722 (Smarty_Internal_Template $_smarty_tpl) {
?><table class="table table-bordered table-hover pl-2 pr-2 text-center">
    <tr>
        <th>ID</th>
        <th>Name</th>
        <th>Description</th>
        <th>Edit</th>
        <th>Delete</th>
    </tr>
    <?php
$_from = $_smarty_tpl->smarty->ext->_foreach->init($_smarty_tpl, $_smarty_tpl->tpl_vars['allUsers']->value, 'user');
$_smarty_tpl->tpl_vars['user']->do_else = true;
if ($_from !== null) foreach ($_from as $_smarty_tpl->tpl_vars['user']->value) {
$_smarty_tpl->tpl_vars['user']->do_else = false;
?>
      <tr>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value['name'];?>
</td>
          <td><?php echo $_smarty_tpl->tpl_vars['user']->value['description'];?>
</td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
?edit=&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Edit<a></td>
          <td><a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
?delete=&id=<?php echo $_smarty_tpl->tpl_vars['user']->value['id'];?>
">Delete<a></td>
      </tr>
    <?php
}
$_smarty_tpl->smarty->ext->_foreach->restore($_smarty_tpl, 1);?>
</table><?php }
}
