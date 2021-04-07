<?php
/* Smarty version 3.1.39, created on 2021-04-03 13:42:12
  from 'C:\MAMP\htdocs\lab4\templates\addingForm.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_606870b4a05374_53024342',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '09eaac0a7d8dce65a3c52ae5016d136dbd7d4f3a' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\lab4\\templates\\addingForm.tpl',
      1 => 1614636931,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_606870b4a05374_53024342 (Smarty_Internal_Template $_smarty_tpl) {
?><form action="." method="post" enctype="multipart/form-data">
    <div class="form-group m-2">
        <label>Name</label>
        <input class="form-control" type="text" name="name" required />
    </div>
    <div class="form-group m-2">
        <label>Position</label>
        <input class="form-control" type="text" name="position" required />
    </div>
    <button type="submit" class="btn btn-primary m-2">Submit</button>
</form><?php }
}
