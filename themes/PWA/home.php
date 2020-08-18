<ons-page>
    <ons-toolbar>
      <div class="center">
      {if $logoon == '2'} 
        <ons-list-item onclick="fn.load('home.html')" tappable>
        {$logotext}
        </ons-list-item>
        {/if}
        {if $logoon == '1'}
        <ons-list-item onclick="fn.load('home.html')" tappable>
        <img src="{$sitepath}/themes/{$themes}/styles/images/logo.png" alt="{$sitetitle}" width="250" height="45" />
        </ons-list-item>
        {/if}
      </div>
      <div class="right">
        <ons-toolbar-button onclick="fn.open()">
          <ons-icon icon="md-menu"></ons-icon>
        </ons-toolbar-button>
      </div>
    </ons-toolbar>
<div class="center">

<ons-search-input float="center" style="left: 10%;width: 80%;top: 1vh;"
      placeholder="Search"
      onchange="ons.notification.alert('Searched for: ' + this.value)"
    ></ons-search-input>
</div>

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