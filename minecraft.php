<!DOCTYPE html>
<html>
<body>

<link href='//fonts.googleapis.com/css?family=Roboto:100,400,300' rel='stylesheet' type='text/css'>
<link rel="stylesheet" type="text/css" href="styless.css">
<link rel="stylesheet" href="//maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<div class="quiz-window">
  <div class="quiz-window-header">
    <div class="quiz-window-title">Minecraft Servers</div>
    <div class="server-status">
    Class server is currently <span style="color: green;"class="">Online</span>!
    </div>
    <div style="color: ;">IP: <span style="color: blue;"class="">98.143.255.140</span></div>
  </div>
  <div class="quiz-window-body">
    <div class="gui-window-awards">
      <ul class="guiz-awards-row guiz-awards-header">
        <li class="guiz-awards-header-star">&nbsp;</li>
        <li class="guiz-awards-header-title">Name</li>
        <li class="guiz-awards-header-track">Player</li>
        <li class="guiz-awards-header-time">Version</li>
      </ul>
      <ul class="guiz-awards-row guiz-awards-row-even">
        <li class="guiz-awards-star"><span class="star goldstar"></span></li>
        <li class="guiz-awards-title">Tekkit Server
          <div style="color: green;" class="server-online"></div>
        </li>
        <li class="players-now"></li>

        <li class="guiz-awards-time">1.12.2</li>
      </ul>
      <ul class="guiz-awards-row">
        <li class="guiz-awards-star"><span class="star silverstar"></span></li>
        <li class="guiz-awards-title">Vanilla Server
          <div style="color: red;" class="server-onlinen">Offline</div>
        </li>
        <li class="guiz-awards-track"><span class="null">0</span></li>
        <li class="guiz-awards-time"><span class="null">1.15.2</span></li>
      </ul>
      
     
    </div>
    <div class="guiz-awards-buttons"></div>
  </div>
</div>



<script src="https://mcapi.us/scripts/minecraft.js"></script>
    

    <script>
      MinecraftAPI.getServerStatus('98.143.255.140', {
        port: 25565 // optional, only if you need a custom port
      }, function (err, status) {
        if (err) {
          return document.querySelector('.server-status').innerHTML = 'Error loading status';
        }
       
        // you can change these to your own message!
        document.querySelector('.server-online').innerHTML = status.online ? 'Online' : 'Offline'; // Server online Message 

       

        document.querySelector('.players-now').innerHTML = status.players.now; // Player count 

        document.querySelector('.server-version').innerHTML = status.server.name; // Server Version

        document.querySelector('.server-motd').innerHTML = status.motd; // Server Version        
      });
    </script>


<p></p>

</body>
</html>
