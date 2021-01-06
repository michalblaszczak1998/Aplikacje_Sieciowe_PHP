<?php
/* Smarty version 3.1.30, created on 2020-11-29 13:44:59
  from "C:\xampp\htdocs\usOopKalkulatorKredytowy\templates\main.html" */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array(
    'version' => '3.1.30',
    'unifunc' => 'content_5fc397cb181054_75228424',
    'has_nocache_code' => false,
    'file_dependency' =>
        array(
            '74612fe5fe9b8fe02b814696b3448554af6f5282' =>
                array(
                    0 => 'C:\\xampp\\htdocs\\usOopKalkulatorKredytowy\\templates\\main.html',
                    1 => 1606653572,
                    2 => 'file',
                ),
        ),
    'includes' =>
        array(),
), false)) {
    function content_5fc397cb181054_75228424(Smarty_Internal_Template $_smarty_tpl)
    {
        $_smarty_tpl->_loadInheritance();
        $_smarty_tpl->inheritance->init($_smarty_tpl, false);
        ?>
        <!doctype html>
        <html lang="pl">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <meta name="description"
              content="<?php echo(($tmp = @$_smarty_tpl->tpl_vars['page_description']->value) === null || $tmp === '' ? 'Opis domyślny' : $tmp); ?>
">
        <title><?php echo(($tmp = @$_smarty_tpl->tpl_vars['page_title']->value) === null || $tmp === '' ? "Tytuł domyślny" : $tmp); ?>
        </title>
        <link rel="stylesheet" href="https://unpkg.com/purecss@0.6.2/build/pure-min.css"
              integrity="sha384-UQiGfs9ICog+LwheBSRCt1o5cbyKIHbwjWscjemyBMT9YCUMZffs6UqUTd0hObXD"
              crossorigin="anonymous">
        <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['conf']->value->app_url; ?>
/css/style.css">
    </head>
    <body>

    <div class="header">
        <h1><?php echo(($tmp = @$_smarty_tpl->tpl_vars['page_title']->value) === null || $tmp === '' ? "Tytuł domyślny" : $tmp); ?>
        </h1>
        <h2><?php echo(($tmp = @$_smarty_tpl->tpl_vars['page_header']->value) === null || $tmp === '' ? "Tytuł domyślny" : $tmp); ?>
        </h2>
        <p>
            <?php echo(($tmp = @$_smarty_tpl->tpl_vars['page_description']->value) === null || $tmp === '' ? "Opis domyślny" : $tmp); ?>

        </p>
    </div>

    <div class="content">
        <?php
        $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_20637427525fc397cb17fe12_39303800', 'content');
        ?>

    </div><!-- content -->

    <div class="footer">
        <p>
            <?php
            $_smarty_tpl->inheritance->instanceBlock($_smarty_tpl, 'Block_3359442725fc397cb180931_58600571', 'footer');
            ?>

        </p>
        <p>
            Widok oparty na stylach <a href="http://purecss.io/" target="_blank">Pure CSS Yahoo!</a>. (autor przykładu:
            Kacper Przybylski)
        </p>
    </div>

    </body>
        </html><?php }

    /* {block 'content'} */

    class Block_20637427525fc397cb17fe12_39303800 extends Smarty_Internal_Block
    {
        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>
            Domyślna treść zawartości .... <?php
        }
    }

    /* {/block 'content'} */

    /* {block 'footer'} */

    class Block_3359442725fc397cb180931_58600571 extends Smarty_Internal_Block
    {
        public function callBlock(Smarty_Internal_Template $_smarty_tpl)
        {
            ?>
            Domyślna treść stopki .... <?php
        }
    }
    /* {/block 'footer'} */
}
