<?php
/* Smarty version 3.1.32, created on 2020-08-17 11:43:22
  from 'C:\wamp64\www\swadeshtimes.in\themes\PWA\main.php' */

/* @var Smarty_Internal_Template $_smarty_tpl */
if ($_smarty_tpl->_decodeProperties($_smarty_tpl, array (
  'version' => '3.1.32',
  'unifunc' => 'content_5f3a6d5ac6d582_56022977',
  'has_nocache_code' => false,
  'file_dependency' => 
  array (
    'ea4d96a777632bf34d5145c4c3d03040d61c0b33' => 
    array (
      0 => 'C:\\wamp64\\www\\swadeshtimes.in\\themes\\PWA\\main.php',
      1 => 1597664599,
      2 => 'file',
    ),
  ),
  'includes' => 
  array (
    'file:themes/".((string)$_smarty_tpl->tpl_vars[\'themes\']->value)."/maindir.php' => 1,
  ),
),false)) {
function content_5f3a6d5ac6d582_56022977 (Smarty_Internal_Template $_smarty_tpl) {
?><!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="ROBOTS" content="All" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="keywords" content="<?php echo $_smarty_tpl->tpl_vars['keywords']->value;?>
" />
    <meta name="description" content="<?php echo $_smarty_tpl->tpl_vars['metadesc']->value;?>
" />

    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
   
    <link href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/images/favicon.ico" type="image/x-icon" rel="shortcut icon" />

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/onsenui.css" />

    <link rel="stylesheet" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/onsen-css-components.min.css" />

    <link rel="alternate" type="application/atom+xml" title="<?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
 - RSS" href="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/rss.php" />
    <?php echo '<script'; ?>
 src="<?php echo $_smarty_tpl->tpl_vars['sitepath']->value;?>
/themes/<?php echo $_smarty_tpl->tpl_vars['themes']->value;?>
/styles/js/onsenui.min.js"><?php echo '</script'; ?>
>
    <title><?php echo $_smarty_tpl->tpl_vars['sitetitle']->value;?>
</title>
</head> 
<body>
<?php $_smarty_tpl->_subTemplateRender("file:themes/".((string)$_smarty_tpl->tpl_vars['themes']->value)."/maindir.php", $_smarty_tpl->cache_id, $_smarty_tpl->compile_id, 0, $_smarty_tpl->cache_lifetime, array(), 0, true);
?>


<template id="home.html">
  <ons-page>
    <ons-toolbar>
      <div class="center">
        Splitter+Navigator
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

<template id="pageNav1.html">
  <ons-page id="pageNav1">
    <ons-toolbar>
      <div class="left">
        <ons-back-button>Back</ons-back-button>
      </div>
      <div class="center"></div>
      <div class="right">
        <ons-toolbar-button onclick="fn.open()">
          <ons-icon icon="md-menu"></ons-icon>
        </ons-toolbar-button>
      </div>
    </ons-toolbar>

    <div style="text-align: center">
      <h1>Custom Page</h1>
      <p>
        <ons-input modifier="underbar" placeholder="Title" float></ons-input>
      </p>
      <ons-button onclick="customPush()">
        Push Page
      </ons-button>
      <ons-button onclick="myNavigator.popPage()">
        Pop Page
      </ons-button>
    </div>

    <p style="text-align: center; opacity: 0.6; padding-top: 20px;">
      Swipe left to open the menu!
    </p>
  </ons-page>
</template>

<template id="cards.html">
  <ons-page>
    <ons-toolbar>
      <div class="center">
        Splitter+Navigator
      </div>
      <div class="right">
        <ons-toolbar-button onclick="fn.open()">
          <ons-icon icon="md-menu"></ons-icon>
        </ons-toolbar-button>
      </div>
    </ons-toolbar>

    <h2>Cards</h2>
    <ons-list-title>Card List</ons-list-title>
    <ons-list>
      <ons-list-item onclick="customPush2(event)">Card One</ons-list-item>
      <ons-list-item onclick="customPush2(event)">Card Two</ons-list-item>
      <ons-list-item onclick="customPush2(event)">Card Three</ons-list-item>
    </ons-list>

    <p style="text-align: center; opacity: 0.6; padding-top: 20px;">
      Swipe left to open the menu!
    </p>
  </ons-page>
</template>

<template id="pageNav2.html">
  <ons-page id="pageNav2">
    <ons-toolbar>
      <div class="left">
        <ons-back-button>Back</ons-back-button>
      </div>
      <div class="right">
        <ons-toolbar-button onclick="fn.open()">
          <ons-icon icon="md-menu"></ons-icon>
        </ons-toolbar-button>
      </div>
    </ons-toolbar>

    <ons-card>
      <img src="https://monaca.io/img/logos/download_image_onsenui_01.png" alt="Onsen UI" style="width: 100%">
      <div class="title"></div>
      <div class="content">
        <div>
          <ons-button>
            <ons-icon icon="ion-thumbsup"></ons-icon>
          </ons-button>
          <ons-button>
            <ons-icon icon="ion-share"></ons-icon>
          </ons-button>
        </div>
        <ons-list>
          <ons-list-header>Bindings</ons-list-header>
          <ons-list-item>Vue</ons-list-item>
          <ons-list-item>Angular</ons-list-item>
          <ons-list-item>React</ons-list-item>
        </ons-list>
      </div>
    </ons-card>

    <p style="text-align: center; opacity: 0.6; padding-top: 20px;">
      Swipe left to open the menu!
    </p>
  </ons-page>
</template>

<template id="settings.html">
  <ons-page>
    <ons-toolbar>
      <div class="center">
        Splitter+Navigator
      </div>
      <div class="right">
        <ons-toolbar-button onclick="fn.open()">
          <ons-icon icon="md-menu"></ons-icon>
        </ons-toolbar-button>
      </div>
    </ons-toolbar>

    <h2>Settings</h2>

    <p style="text-align: center; opacity: 0.6; padding-top: 20px;">
      Swipe left to open the menu!
    </p>
  </ons-page>
</template>

<?php echo '<script'; ?>
>
window.fn = {};

window.fn.open = function () {
  var menu = document.getElementById('menu');
  menu.open();
};

window.fn.load = function (page) {
  var menu = document.getElementById('menu');
  var myNavigator = document.getElementById('myNavigator');

  menu.close();
  myNavigator.resetToPage(page, { animation: 'fade' });
};

document.addEventListener('init', function (event) {
  if (event.target.id === 'pageNav1') {
    var title = event.target.data && event.target.data.title ? event.target.data.title : 'Custom Page';
    event.target.querySelector('ons-toolbar div.center').textContent = title;
  }
  if (event.target.id === 'pageNav2') {
    var cardTitle = event.target.data && event.target.data.cardTitle ? event.target.data.cardTitle : 'Custom Card';
    event.target.querySelector('ons-card div.title').textContent = cardTitle;
  }
});

var customPush = function () {
  myNavigator.pushPage('pageNav1.html', { data: { title: myNavigator.topPage.querySelector('ons-input').value } })
};

var customPush2 = function (event) {
  myNavigator.pushPage('pageNav2.html', { data: { cardTitle: event.target.textContent } })
};<?php echo '</script'; ?>
>

</body><?php }
}
