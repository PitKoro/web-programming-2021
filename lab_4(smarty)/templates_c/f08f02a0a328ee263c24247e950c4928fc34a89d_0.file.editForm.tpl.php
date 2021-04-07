<?php
/* Smarty version 3.1.39, created on 2021-04-03 21:57:26
  from '/var/www/students.yss.su/data/www/students.yss.su/PSTGU/2019/korolev/2021/lab4/templates/editForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6068ba96054764_29708308',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'f08f02a0a328ee263c24247e950c4928fc34a89d' => 
    array (
      0 => '/var/www/students.yss.su/data/www/students.yss.su/PSTGU/2019/korolev/2021/lab4/templates/editForm.tpl',
      1 => 1617475556,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6068ba96054764_29708308 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
?edit=" method="post" enctype="multipart/form-data">
    <div class="form-group m-2">
        <a href="<?php echo $_smarty_tpl->tpl_vars['URL']->value;?>
">Add user</a>
    </div>
    
    <div class="form-group m-2">
        <input class="form-control" type="number" name="id" value="<?php echo $_smarty_tpl->tpl_vars['editUser']->value['id'];?>
" hidden readonly />
        <label>Name</label>
        <input class="form-control" type="text" name="name" value="<?php echo $_smarty_tpl->tpl_vars['editUser']->value['name'];?>
" required />
    </div>
    <div class="form-group m-2">
        <label>description</label>
        <input class="form-control" type="text" name="description" value="<?php echo $_smarty_tpl->tpl_vars['editUser']->value['description'];?>
" required />
    </div>
    <button type="submit" class="btn btn-primary m-2">Edit</button>
</form><?php }
}
