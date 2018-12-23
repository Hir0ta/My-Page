<div class="panel-body d-flex p-2">
    <div class="row">
        <div class="col-xs-12 col-md-12">
            <form id="myForm">
            <div class="sizeChange">
                <p>Type the size:</p><input type="text" id="size" value="">
            </div>
            <div class="colorChange">
                <p>Type a color:</p><input type="text" id="color" value="yellow">
                <input type="submit" id="change">
            </div>
            </form>
        </div>
        <div class="col-xs-12 col-md-12">
            <canvas size= width:vw id='myCanvas'></canvas>
            <script>
                function broodComb(){
                    var canvas = document.getElementById('myCanvas');
                    var context = canvas.getContext('2d');
                    var size = $("#size").val();
                    var color = '"' + $("#color").val() + '"';
                    var space= 3 ;
                    canvas.width = window.innerWidth;
                    canvas.height = window.innerHeight + 3*size;
                    var numberOfSides = 6;
                    var Xcenter=canvas.width/2;
                    var Ycenter=canvas.height/2;
                    var newX;
                    var newY;

                    // draw the hexagon
                    function hexagon(Xcenter, Ycenter){ 
                    context.beginPath();
                    context.moveTo (Xcenter +  size * Math.cos(0), Ycenter +  size * Math.sin(0));          
                    for (var i = 1; i <= numberOfSides;i++) {
                        context.lineTo (Xcenter + size * Math.cos(i * 2 * Math.PI / numberOfSides), Ycenter + size * Math.sin(i * 2 * Math.PI / numberOfSides));
                    }
                    context.strokeStyle = color;
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
                    context.fillStyle = color;
                    context.fill();
                };

                $('#myForm').submit(function (event) {
                    event.preventDefault();
                    $(document).ready(function(){
                        $("#change").on("click",function(){
                            
                            broodComb();
                            
                        });
                        event.preventDefault();
                    });
                });
            </script>
        </div>
    </div>
</div>