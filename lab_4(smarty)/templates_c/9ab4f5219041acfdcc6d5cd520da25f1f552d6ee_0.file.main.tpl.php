<?php
/* Smarty version 3.1.39, created on 2021-04-03 21:56:17
  from '/var/www/students.yss.su/data/www/students.yss.su/PSTGU/2019/korolev/2021/lab4/templates/main.tpl' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.39',
  'unifunc' => 'content_6068ba510406c2_23964772',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '9ab4f5219041acfdcc6d5cd520da25f1f552d6ee' => 
    array (
      0 => '/var/www/students.yss.su/data/www/students.yss.su/PSTGU/2019/korolev/2021/lab4/templates/main.tpl',
      1 => 1617475324,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:editForm.tpl' => 1,
    'file:addForm.tpl' => 1,
    'file:table.tpl' => 1,
  ),
),false)) {
function content_6068ba510406c2_23964772 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css" integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">
</head>
<body>
    <div class="container mt-5">
        <div class="row mb-5">
            <div class="col-6">
                <?php if ($_smarty_tpl->tpl_vars['editPage']->value && !is_null($_smarty_tpl->tpl_vars['editUser']->value)) {?> 
                    <?php $_smarty_tpl->_subTemplateRender('file:editForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php } else { ?>
                    <?php $_smarty_tpl->_subTemplateRender('file:addForm.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
                <?php }?>
            </div>
        </div>
        
        <div class="row mb-5">
            <div class="col-sm-12">
                <?php $_smarty_tpl->_subTemplateRender('file:table.tpl', $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, false);
?>
            </div>
                
        </div>
    </div>
    
    <?php echo '<script'; ?>
 src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"><?php echo '</script'; ?>
>
    <?php echo '<script'; ?>
 src="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-Piv4xVNRyMGpqkS2by6br4gNJ7DXjqk09RmUpJ8jgGtD7zP9yug3goQfGII0yAns" crossorigin="anonymous"><?php echo '</script'; ?>
>
</body>

<?php }
}
