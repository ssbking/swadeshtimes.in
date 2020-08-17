<?php
/* Smarty version 3.1.32, created on 2020-08-17 11:43:23
  from 'C:\wamp64\www\swadeshtimes.in\themes\PWA\maindir.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f3a6d5b117573_48897893',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95759ccdd9c3cee19c661e10e1137f1f8945cf03' => 
    array (
      0 => 'C:\\wamp64\\www\\swadeshtimes.in\\themes\\PWA\\maindir.php',
      1 => 1597664444,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3a6d5b117573_48897893 (Smarty_Internal_Template $_smarty_tpl) {
?><ons-splitter>
  <ons-splitter-side id="menu" side="right" width="220px" collapse swipeable>
    <ons-page>
      <ons-list>
        <ons-list-item onclick="fn.load('home.html')" tappable>
          Home
        </ons-list-item>
        <ons-list-item onclick="fn.load('cards.html')" tappable>
          Cards
        </ons-list-item>
        <ons-list-item onclick="fn.load('settings.html')" tappable>
          Settings
        </ons-list-item>
      </ons-list>
    </ons-page>
  </ons-splitter-side>
  <ons-splitter-content>
    <ons-navigator id="myNavigator" page="home.html"></ons-navigator>
  </ons-splitter-content>
</ons-splitter>

<template id="home.html">
  <ons-page>
    <ons-toolbar>
      <div class="center">
      <?php if ($_smarty_tpl->tpl_vars['logoon']->value == '2') {?>
        <a class="navbar-brand" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
"><?php echo $_smarty_tpl->tpl_vars['logotext']->value;?>
</a>
        <?php }?>
        <?php if ($_smarty_tpl->tpl_vars['logoon']->value == '1') {?>
        <a class="navbar-brand" href="/category/2/Business.html"><img src="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/images/logo.png" alt="<?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
" width="250" height="45" /></a>
        <?php }?>
      </div>
      <div class="right">
        <ons-toolbar-button onclick="fn.open()">
          <ons-icon icon="md-menu"></ons-icon>
        </ons-toolbar-button>
      </div>
    </ons-toolbar>

    <h2>Home</h2>
    <div style="text-align: center">
      <br>
      <ons-button onclick="myNavigator.pushPage('pageNav1.html')">
        Push Page
      </ons-button>
    </div>

    <p style="text-align: center; opacity: 0.6; padding-top: 20px;">
      Swipe left to open the menu!
    </p>
  </ons-page>
</template>
<?php }
}
