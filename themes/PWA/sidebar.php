
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
        <!-- category list -->
        <div class="collapse navbar-collapse" id="navbarNavAltMarkup">
            <ul id="coolMenu" class="nav navbar-nav ml-auto">
                {foreach from=$categori item=caty}
                {assign var="ifavaible" value=$caty@total}
                {if $caty@index < {$toplinks}}
                {if $rewritemod == 2}
                <li class="nav-item"><a class="nav-link" href="{$sitepath}/categories.php?id={$caty.catid}">{$caty.name|stripslashes}</a>
                {/if}
                {if $rewritemod == 1}
                <li class="nav-item"><a class="nav-link" href="{$sitepath}/category/{$caty.catid}/{$caty.seoname}.html">{$caty.name|stripslashes}</a>
                {/if}
            <ul>
                {foreach from=$subcat item=inc}
                {if $inc.cord neq 0 && $caty.catid eq $inc.parent}
                {if $rewritemod == 2}
                <li class="nav-item"><a class="nav-link" href="{$sitepath}/categories.php?id={$inc.catid}">{$inc.name|stripslashes|replace:" ":"&nbsp;"}</a>
                {/if}
                {if $rewritemod == 1}
                <li class="nav-item"><a class="nav-link" href="{$sitepath}/category/{$inc.catid}/{$inc.seoname}.html">{$inc.name|stripslashes|replace:" ":"&nbsp;"}</a>
                {/if}
                {/if}
                {/foreach}
            </ul>
            </li>
            {/if}
            {/foreach}
            <li class="nav-item">
            {if $ifavaible > {$toplinks}}<a class="nav-link" href="#">{$lang.114}</a>
            <ul>
            {foreach from=$categori item=morecat}
            {if $morecat.cord eq 0 && $morecat@index >= {$toplinks}}
            {if $rewritemod == 2}
            <li class="nav-item"><a class="nav-link" href="{$sitepath}/categories.php?id={$morecat.catid}">{$morecat.name|stripslashes|replace:" ":"&nbsp;"}</a>
            {/if}
            {if $rewritemod == 1}
            <li class="nav-item"><a class="nav-link" href="{$sitepath}/category/{$morecat.catid}/{$morecat.seoname}.html">{$morecat.name|stripslashes|replace:" ":"&nbsp;"}</a>
            {/if}
            {/if}
            {foreachelse}
            <li class="nav-item"><a class="nav-link" href="{$sitepath}">Categories</li></a>
            {/foreach}
            </ul>
            {/if}
            </ul>
        </div>
      </ons-list>
    </ons-page>
  </ons-splitter-side>
  <ons-splitter-content>
    <ons-navigator id="myNavigator" page="home.html"></ons-navigator>
  </ons-splitter-content>
</ons-splitter>