<div class="panel-body d-flex p-2">
    <!--
    <div class="input">
        <form>
            <p>Write a number to change the size:</p>
            <input type="number" id="size">
            <button id="change">Click to change</button>
        </form>
    </div>
    <br>
    -->
    <div class="canvas">
        <canvas class="mx-auto" id='myCanvas'></canvas>
        <script>
            var canvas = document.getElementById('myCanvas');
            var context = canvas.getContext('2d');
            
            var numberOfSides = 6;
            var size = 20;
            var Xcenter=canvas.width/2;
            var Ycenter=canvas.height/2;
            var space=3;
            var newX;
            var newY;

            // draw the hexagon
            function hexagon(Xcenter, Ycenter){ 
                context.beginPath();
                context.moveTo (Xcenter +  size * Math.cos(0), Ycenter +  size * Math.sin(0));          
                for (var i = 1; i <= numberOfSides;i++) {
                    context.lineTo (Xcenter + size * Math.cos(i * 2 * Math.PI / numberOfSides), Ycenter + size * Math.sin(i * 2 * Math.PI / numberOfSides));
                }
                context.strokeStyle = '#f9c901';
                context.lineWidth = 0.5;
                context.stroke();
                return;
            }
            //make the center hexagon:
            hexagon(Xcenter,Ycenter,size);
            //make the empty hexagons:
            for (j = 1; j <= 9; j++){
            if (j % 2 !=0){
                newX = Xcenter + Math.cos(j * (2 * Math.PI / 12)) * (2 * size);
                newY = Ycenter - Math.sin(j * (2 * Math.PI / 12)) * (2 * size);
                hexagon(newX,newY,size);
            }
            }
            //make the filled hexagon:
            hexagon(Xcenter + Math.cos(11 * (2 * Math.PI / 12)) * (2 * size),Ycenter - Math.sin(11 * (2 * Math.PI / 12)) * (2 * size),size);
            context.fillStyle = '#f9c901';
            context.fill();
        </script>
    </div>
    <br>

</div>