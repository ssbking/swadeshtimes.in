
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