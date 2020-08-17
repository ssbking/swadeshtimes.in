<?php
/* Smarty version 3.1.32, created on 2020-08-17 13:12:38
  from 'C:\wamp64\www\swadeshtimes.in\themes\PWA\maindir.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f3a82460a9434_21683974',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    '95759ccdd9c3cee19c661e10e1137f1f8945cf03' => 
    array (
      0 => 'C:\\wamp64\\www\\swadeshtimes.in\\themes\\PWA\\maindir.php',
      1 => 1597669955,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
  ),
),false)) {
function content_5f3a82460a9434_21683974 (Smarty_Internal_Template $_smarty_tpl) {
?>
<ons-splitter>
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
</ons-splitter><?php }
}
