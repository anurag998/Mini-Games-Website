var canvas;
	var canvascontext;
	var ballX=50;
	var ballY=50;
	var ballXspeed=15;
	var ballYspeed=15;
	var paddleY=225;
	var deltaY;
	var gameover=false;
	var date1 =new Date();
	function calculateMousePos(evt){
		var rect=canvas.getBoundingClientRect();
		var root=document.documentElement;
		var mouseX=evt.clientX-rect.left-root.scrollLeft;
		var mouseY=evt.clientY-rect.top-root.scrollTop;
		return{
			x:mouseX,
			y:mouseY
		};
	}
	window.onload=function(){
		canvas=document.getElementById('gameCanvas');
		canvasContext=canvas.getContext('2d');
		var fps=30;
		setInterval(callBoth,1000/30);	
		canvas.addEventListener('mousemove',function(evt){
			var mousePos=calculateMousePos(evt);
			paddleY=mousePos.y-50;
		})
	}
	function callBoth()
	{
		if (gameover==true)
		{
			return;
		}
		else{
		moveEverything();
		drawEverything();
	}
	}
	function moveEverything(){
		ballX=ballX+ballXspeed; 
		ballY=ballY+ballYspeed;
		if(ballX>canvas.width){
			ballXspeed=-ballXspeed;
		}
		if(ballY>canvas.height || ballY<15)
		{
			ballYspeed=-ballYspeed;
		}
		if(ballX<0)
		{
			if(ballY>paddleY && ballY<(paddleY+150))
			{
				ballXspeed=-(ballXspeed+ballXspeed*0.1);
				deltaY=ballY-(75+paddleY);
				ballYspeed=deltaY*0.35;
			}
			else
			{
				gameover=true;
				var date2 = new Date();
				var diff=date2-date1;
				document.getElementById("time").innerHTML=parseInt(diff/1000)+ "seconds";
			}
		}
	}
	function drawEverything(){
	
		canvasContext.fillStyle='black';
		canvasContext.fillRect(0,0,canvas.width,canvas.height);
		canvasContext.fillStyle='white';
		canvasContext.fillRect(0,paddleY,10,150)
		canvasContext.fillStyle='red';
		canvasContext.beginPath();
		canvasContext.arc(ballX, ballY, 15, 0, Math.PI*2);
		canvasContext.fill();
	}
	function reset(){
		gameover=false;
		ballX=canvas.width;
		ballY=canvas.height/2;	
		ballYspeed=15;
		ballXspeed=15;
		date1=new Date();
		document.getElementById('time').innerHTML="";
	}