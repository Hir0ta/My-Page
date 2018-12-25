<div class="panel-body">
  <div class="buttonbar">
    <button class="button" id="white">White</button>
    <button class="button" id="blue">Blue</button>
    <button class="button" id="green">Green</button>
    <button class="button" id="red">Red</button>
    <button class="button" id="random">Randomize</button>
    <button class="buttons" id="stop">Stop</button>
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

    /*Random color change:*/
    function randomChanger(){
      /*Get a random number between 0 and 3*/
      function getRandomInt() {
        min = Math.ceil(0);
        max = Math.floor(3);
        return Math.floor(Math.random() * (max - min + 1)) + min;
      };
      /*Assign every number with a color*/
      if (getRandomInt() == 0){
        var colorButton = "white";
      }else if (getRandomInt() == 1){
        var colorButton = "blue";
      }else if (getRandomInt() == 2){
        var colorButton = "green";
      }else{
        var colorButton = "red";
      }
      return colorButton;
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
      setInterval(function(){
        
      },1000)
      $("#random").click(function(){
        $('.panel-body').css({'background-color':'black'});
        var randomColor = setInterval(function(){ hyperSpace(randomChanger()); }, 1000);
        $("#stop").click(function(){
        clearInterval(randomColor);
        });
      });

    });

    
  </script>
</div>