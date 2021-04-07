<?php
/* Smarty version 3.1.39, created on 2021-04-03 13:02:55
  from 'C:\MAMP\htdocs\lab4\templates\bootstrapPage.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6068677f149827_89864451',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'd5b3472c259d6e75bb9080615e8b1c66a9b2b6b1' => 
    array (
      0 => 'C:\\MAMP\\htdocs\\lab4\\templates\\bootstrapPage.tpl',
      1 => 1617454952,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:table.tpl' => 1,
  ),
),false)) {
function content_6068677f149827_89864451 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>

    <?php $_smarty_tpl->_subTemplateRender('file:table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
    
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body><?php }
}
