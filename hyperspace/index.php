<div class="panel-body">
  <div class="buttonbar">
    <button class="button" id="white">White</button>
    <button class="button" id="blue">Blue</button>
    <button class="button" id="green">Green</button>
    <button class="button" id="red">Red</button>
  </div>
  <canvas id="myCanvas"></canvas>
  <script>
    function hyperSpace(colorButton){
      var canvas = document.getElementById('myCanvas');
      var ctx = canvas.getContext('2d');
      canvas.width = window.innerWidth;
      canvas.height = window.innerHeight;
      var centerX = canvas.width/2;
      var centerY = canvas.height/2;
      var random = function(max, min) {
        return Math.floor(Math.random()*(max-min+1)+min);
      }

      function lineToCenter(x,y,color){  
        ctx.beginPath();
        ctx.moveTo(x,y);
        ctx.lineTo(centerX,centerY);
        ctx.strokeStyle= color;
        ctx.stroke();
        return;
      }

      for(i=0;i<=100;i++){
      lineToCenter(random(canvas.width,0),random(canvas.height,0),colorButton);
      }
    };
    /*JQuery script*/
    $(document).ready(function(){
      $('#white').click(function(){
        $('.panel-body').css({'background-color':'black'});
        var colorButton = "white";
        hyperSpace(colorButton);
      });
      $('#blue').click(function(){
        $('.panel-body').css({'background-color':'black'});
        var colorButton = "blue";
        hyperSpace(colorButton);
      });
      $('#green').click(function(){
        $('.panel-body').css({'background-color':'black'});
        var colorButton = "green";
        hyperSpace(colorButton);
      });
      $('#red').click(function(){
        $('.panel-body').css({'background-color':'black'});
        var colorButton = "red";
        hyperSpace(colorButton);
      });
    });
  </script>
</div>