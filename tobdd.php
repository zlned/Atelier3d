<html>
</html>
<head>
</head>
<bod>
	
		 <?php
if (isset ($_GET['vers']))
{
$valeur =$_GET['vers'] ;
}
	?>
	
<div id="container">
  <div id="cube" class="animate" height="50" width="20">
	  <div id="1"><h1><p>hello the world</p></h1></div>
    <div id="2"><p>wooooooh</p></div>
    <div id="3"><p>wooooooh</p></div>
    <div id="4"><p>wooooooh</p></div>
    <div id="5"><p>wooooooh</p></div>
    <div id ="6"><p>wooooooh</p></div>
  </div>
</div>
	</bod>
</html>
<style>
body {
     margin-top: 125px;
	
 }

@-moz-keyframes spinningH {
  from {
    -moz-transform: rotateX(0deg) rotateY(0deg);
  }
  to{
    -moz-transform: rotateX(360deg) rotateY(360deg);
  }
}

@-webkit-keyframes spinningH {
  from {
    -webkit-transform: rotateX(0deg) rotateY(0deg);
  }
  to{
    -webkit-transform: rotateX(360deg) rotateY(360deg);
  }
}

@-o-keyframes spinningH {
  from {
    -o-transform: rotateX(0deg) rotateY(0deg);
  }
  to{
    -o-transform: rotateX(360deg) rotateY(360deg);
  }
}

@-ms-keyframes spinningH {
  from {
    -ms-transform: rotateX(0deg) rotateY(0deg);
  }
  to{
    -ms-transform: rotateX(360deg) rotateY(360deg);
  }
}

@keyframes spinningH {
  from {
    transform: rotateX(0deg) rotateY(0deg);
  }
  to{
    transform: rotateX(360deg) rotateY(360deg);
  }
}

 #container {
  -webkit-perspective : 1000px;
  -moz-perspective    : 1000px;
  -o-perspective      : 1000px;
  -ms-perspective     : 1000px;
  perspective         : 1000px;

  -webkit-perspective-origin  : 50% 50%;
  -moz-perspective-origin     : 50% 50%;
  -moz-transform-origin       : 50% 50%;
  -o-perspective-origin       : 50% 50%;
  -ms-perspective-origin      : 50% 50%;
  perspective-origin          : 50% 50%;
 }

.animate {
  -webkit-animation : spinningH 15s infinite linear;
  -moz-animation    : spinningH 15s infinite linear;
  -o-animation      : spinningH 15s infinite linear;
  -ms-animation     : spinningH 15s infinite linear;
  animation         : spinningH 15s infinite linear;
}

	
#cube {
  position: fixed;
  	margin: 200 400;
  
	

  -webkit-transition  : -webkit-transform 2s linear;
  -moz-transition     : -moz-transform 2s linear;
  -o-transition       : -o-transform 2s linear;
  -ms-transition      : -ms-transform 2s linear;
  transition          : transform 2s linear;

  -webkit-transform-style : preserve-3d;
  -moz-transform-style    : preserve-3d;
  -o-transform-style      : preserve-3d;
  -ms-transform-style     : preserve-3d;
  transform-style         : preserve-3d;
}

#cube>div {
  position: fixed;
  height: 360px;
  width: 360px;
  padding: 40px;
  opacity: 0.9;
  
}

#cube div:nth-child(1) {
  -webkit-transform : translateZ(200px);
  -moz-transform    : translateZ(200px);
  -o-transform      : translateZ(200px);
  -ms-transform     : translateZ(200px);
  transform         : translateZ(200px);
  background-color  : white;
  background-image: url();
  background-repeat : no-repeat;
}

#cube div:nth-child(2) {
  -webkit-transform : rotateY(90deg) translateZ(200px);
  -moz-transform    : rotateY(90deg) translateZ(200px);
  -o-transform      : rotateY(90deg) translateZ(200px);
  -ms-transform     : rotateY(90deg) translateZ(200px);
  transform         : rotateY(90deg) translateZ(200px);
  background-color  : #2D3A4D;
  background-image: url();
  background-repeat : no-repeat;
}

#cube div:nth-child(3) {
  -webkit-transform : rotateY(180deg) translateZ(200px);
  -moz-transform    : rotateY(180deg) translateZ(200px);
  -o-transform      : rotateY(180deg) translateZ(200px);
  -ms-transform     : rotateY(180deg) translateZ(200px);
  transform         : rotateY(180deg) translateZ(200px);
  background-color  : #2D1C12;
  background-image: url();
  background-repeat : no-repeat;
}

#cube div:nth-child(4) {
  -webkit-transform : rotateY(-90deg) translateZ(200px);
  -moz-transform    : rotateY(-90deg) translateZ(200px);
  -o-transform      : rotateY(-90deg) translateZ(200px);
  -ms-transform     : rotateY(-90deg) translateZ(200px);
  transform         : rotateY(-90deg) translateZ(200px);
  background-color  : #693C1F;
  background-image  : url();
  background-repeat : no-repeat;
}

#cube div:nth-child(5) {
  -webkit-transform : rotateX(-90deg) translateZ(200px) rotate(180deg);
  -moz-transform    : rotateX(-90deg) translateZ(200px) rotate(180deg);
  -o-transform      : rotateX(-90deg) translateZ(200px) rotate(180deg);
  -ms-transform     : rotateX(-90deg) translateZ(200px) rotate(180deg);
  transform         : rotateX(-90deg) translateZ(200px) rotate(180deg);
  background-color  : #955122;
  background-image  : url();
  background-repeat :no-repeat;
}

#cube div:nth-child(6)  {
  -webkit-transform : rotateX(90deg) translateZ(200px);
  -moz-transform    : rotateX(90deg) translateZ(200px);
  -o-transform      : rotateX(90deg) translateZ(200px);
  -ms-transform     : rotateX(90deg) translateZ(200px);
  transform         : rotateX(90deg) translateZ(200px);
  background-color  : #E34C26;
  background-image: url();
  background-repeat :no-repeat;
  text-align:center;  
}
</style>