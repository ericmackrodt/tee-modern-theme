<div class="side-content">
  <?php $this->insert('modern::categories') ?>

  <window window-id="twitter" v-bind:desktop="sidePanelDesk" title="Twitter" icon="/templates/modern/public/folder-icon.png">
    <a class="twitter-timeline" data-height="400" data-theme="light" href="https://twitter.com/EricMackrodt?ref_src=twsrc%5Etfw">Tweets by EricMackrodt</a>
  </window>

  <window window-id="soundcloud" v-bind:desktop="sidePanelDesk" title="SoundCloud" icon="/templates/modern/public/folder-icon.png">
    <iframe width="100%" height="350" scrolling="no" frameborder="no" allow="autoplay" src="https://w.soundcloud.com/player/?url=https%3A//api.soundcloud.com/users/55172079&color=%23ff5500&auto_play=false&hide_related=false&show_comments=true&show_user=true&show_reposts=false&show_teaser=true"></iframe>
    <div style="font-size: 10px; color: #cccccc;line-break: anywhere;word-break: normal;overflow: hidden;white-space: nowrap;text-overflow: ellipsis; font-family: Interstate,Lucida Grande,Lucida Sans Unicode,Lucida Sans,Garuda,Verdana,Tahoma,sans-serif;font-weight: 100;"><a href="https://soundcloud.com/eric-mackrodt" title="The Eric Mackrodt Project" target="_blank" style="color: #cccccc; text-decoration: none;">The Eric Mackrodt Project</a></div>
  </window>

  <window window-id="compatibility" v-bind:desktop="sidePanelDesk" title="Compatibility" icon="/templates/modern/public/folder-icon.png">
    <div id="compatibility-content">
      <div class="compatibility-row">
        Show me the <a href="/enable-oldie">REAL</a> website.
      </div>
      <div class="compatibility-row">
        <a href="/windows3x/essentialsoftware#internetexplorer501">
          <img src="/templates/modern/public/200.gif" width="88" height="31" alt="Compatible with IE" />
        </a>
        <a href="/windows3x/essentialsoftware#netscapecommunicator407">
          <img src="/templates/modern/public/netscap4.gif" alt="Compatible with Netscape" />
        </a>
      </div>
    </div>
  </window>
</div>