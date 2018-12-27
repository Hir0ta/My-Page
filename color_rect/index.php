<div class="panel-body">
  <div class="buttons">
    <button id="start">Start</button>
    <button id="stop">Stop</button>
  </div>
  <div class="warning text-danger text-center">
    <h1>WARNING</h1>
    <h2>Photosensitive epilepsy</h2>
    <p>This page contains flashing image which may not be suitable for photosensitive epilepsy</p>
  </div>
  <br>
  <div class="container mx-auto text-center">
    <canvas id="myCanvas"></canvas>
  </div>
  <script>
    function colorRect(){
      var canvas = document.getElementById("myCanvas");
      var ctx = canvas.getContext("2d");
      canvas.width = window.innerWidth/2;
      canvas.height = window.innerHeight/2;
      var x = 0;
      var y = 0;
      var h = canvas.height;
      var w = canvas.width;
      var redu = 10;
      var date = new Date();
      var change = date.getMilliseconds();
      var hue = change*1000;

      for (i=0;i<17;i++){
        ctx.fillStyle = "hsla(" + hue + ", 50%, 45%, 1)";
        ctx.fillRect(x,y,w,h);
        x = x + redu;
        y = y + redu;
        w = w - 2*redu;
        h  = h - 2*redu;
        hue = hue - (360/17);
      }
    };
    $(document).ready(function(){
      $("#start").click(function(){
        var start = setInterval(function(){ colorRect(); }, 100)
        $("#stop").click(function(){
          clearInterval(start);
        });
      });
    });
  </script>
  </div>