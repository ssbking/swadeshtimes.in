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
</ons-splitter>

<template id="home.html">
  <ons-page>
    <ons-toolbar>
      <div class="center">
      {if $logoon == '2'}
        <a class="navbar-brand" href="{$sitepath}">{$logotext}</a>
        {/if}
        {if $logoon == '1'}
        <a class="navbar-brand" href="/category/2/Business.html"><img src="{$sitepath}/themes/{$themes}/styles/images/logo.png" alt="{$sitetitle}" width="250" height="45" /></a>
        {/if}
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
