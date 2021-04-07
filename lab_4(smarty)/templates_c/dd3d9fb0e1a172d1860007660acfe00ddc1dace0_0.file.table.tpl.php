<?php
/* Smarty version 3.1.39, created on 2021-04-03 21:56:17
  from '/var/www/students.yss.su/data/www/students.yss.su/PSTGU/2019/korolev/2021/lab4/templates/table.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6068ba5105ded1_64140641',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'dd3d9fb0e1a172d1860007660acfe00ddc1dace0' => 
    array (
      0 => '/var/www/students.yss.su/data/www/students.yss.su/PSTGU/2019/korolev/2021/lab4/templates/table.tpl',
      1 => 1617475263,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6068ba5105ded1_64140641 (Smarty_Internal_Template $_smarty_tpl) {
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
