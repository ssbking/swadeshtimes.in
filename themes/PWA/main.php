<!DOCTYPE html>
<html lang="en">
<head>
    <meta http-equiv="content-type" content="text/html; charset=UTF-8" />
    <meta name="ROBOTS" content="All" />
    <meta name="viewport" content="width=device-width, initial-scale=1, user-scalable=no" />
    <meta name="keywords" content="{$keywords}" />
    <meta name="description" content="{$metadesc}" />

    <meta name="apple-mobile-web-app-status-bar-style" content="black-translucent">
    <meta name="apple-mobile-web-app-capable" content="yes">
    <meta name="mobile-web-app-capable" content="yes">
   
    <link href="{$sitepath}/themes/{$themes}/styles/images/favicon.ico" type="image/x-icon" rel="shortcut icon" />

    <link rel="stylesheet" href="{$sitepath}/themes/{$themes}/styles/onsenui.css" />

    <link rel="stylesheet" href="{$sitepath}/themes/{$themes}/styles/onsen-css-components.min.css" />

    <link rel="alternate" type="application/atom+xml" title="{$sitetitle} - RSS" href="{$sitepath}/rss.php" />
    <script src="{$sitepath}/themes/{$themes}/styles/js/onsenui.min.js"></script>
    <title>{$sitetitle}</title>
</head> 
<body>
{include file="themes/$themes/maindir.php"}


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

<script>
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
};</script>

</body>