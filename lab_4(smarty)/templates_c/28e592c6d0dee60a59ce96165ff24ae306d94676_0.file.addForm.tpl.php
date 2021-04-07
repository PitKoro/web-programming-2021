<?php
/* Smarty version 3.1.39, created on 2021-04-03 21:56:17
  from '/var/www/students.yss.su/data/www/students.yss.su/PSTGU/2019/korolev/2021/lab4/templates/addForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6068ba51048c91_99387467',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '28e592c6d0dee60a59ce96165ff24ae306d94676' => 
    array (
      0 => '/var/www/students.yss.su/data/www/students.yss.su/PSTGU/2019/korolev/2021/lab4/templates/addForm.tpl',
      1 => 1617475014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6068ba51048c91_99387467 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="." method="post" enctype="multipart/form-data">
    <div class="form-group m-2">
        <label>Name</label>
        <input class="form-control" type="text" name="name" required />
    </div>
    <div class="form-group m-2">
        <label>description</label>
        <input class="form-control" type="text" name="description" required />
    </div>
    <button type="submit" class="btn btn-primary m-2">Add</button>
</form><?php }
}
