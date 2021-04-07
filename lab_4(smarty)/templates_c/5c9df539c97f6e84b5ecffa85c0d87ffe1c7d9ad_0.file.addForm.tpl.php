<?php
/* Smarty version 3.1.39, created on 2021-04-03 18:36:58
  from 'C:\MAMP\htdocs\lab4\templates\addForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6068b5ca692167_81081740',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '5c9df539c97f6e84b5ecffa85c0d87ffe1c7d9ad' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\lab4\\templates\\addForm.tpl',
      1 => 1617475014,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_6068b5ca692167_81081740 (Smarty_Internal_Template $_smarty_tpl) {
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
