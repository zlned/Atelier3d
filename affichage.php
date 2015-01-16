<!DOCTYPE html>
<html dir="ltr" lang="en-US">
	<head>
		<meta charset="UTF-8" />
		<title></title>
		<link rel="shortcut icon" href="https://gurde.com/wp-content/themes/gurde/favicon.ico" />
		<link type="text/css" rel="stylesheet" href="css/galaxy.css" media="all" />
		
				
		<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.3.2/jquery.min.js"></script>
	<style>
		
		
		
		#spinner div {
    position: absolute;
    width: 300px;
    height: 300px;
    border: 1px solid #ccc;
    background: rgba(255,255,255,0.8);
    box-shadow: inset 0 0 20px rgba(0,0,0,0.2);
    text-align: center;
    line-height: 10px;
    font-size: 10px;
  }

  #spinner .face1 { -webkit-transform: translateZ(15px);}
  #spinner .face2 { -webkit-transform: rotateY(90deg) translateZ(15px);}
  #spinner .face3 { -webkit-transform: rotateY(90deg) rotateX(90deg) translateZ(15px);}
  #spinner .face4 { -webkit-transform: rotateY(180deg) rotateZ(90deg) translateZ(15px);}
  #spinner .face5 { -webkit-transform: rotateY(-90deg) rotateZ(90deg) translateZ(15px);}
  #spinner .face6 { -webkit-transform: rotateX(-90deg) translateZ(15px);}

@-webkit-keyframes spincube {
    from,to  {                                                    }
    16%      { -webkit-transform: rotateY(-90deg);                }
    33%      { -webkit-transform: rotateY(-90deg) rotateZ(90deg); }
    50%      { -webkit-transform: rotateY(180deg) rotateZ(90deg); }
    66%      { -webkit-transform: rotateY(90deg) rotateX(90deg);  }
    83%      { -webkit-transform: rotateX(90deg);                 }
}

 
}
	</style>
		
	</head>
	<?php 
if (isset($_GET["id"]))
{
	echo"<h1>";
echo $identifiant = $_GET["id"];
	echo"</h1>";
}
	if (isset($_GET["id_cube"]))
{
	echo"<h1>";
echo $id_cube= $_GET["id_cube"];
	echo"</h1>";
	}

	?>
	<body>

<div id="galaxy">
	<div class="bg"></div>
	<div class="stars-back"></div>
	<div class="stars-middle"></div>
	<div class="stars-front"></div>
	<div class="bg center">	 
	<div id="container" ></center>							
	<div id="stage">
    <div id="spinner">
   <div class="face1" id="<?php echo $identifiant;?>">
		<form method="get" action="php_vue.php">
			
			
			<input type="hidden" name="id_cube" value="<?php echo $identifiant ?>" />
			<input type="hidden" name="id_face" value="<?php echo $id_cube ?>" />
			<input type="text" name="vers" />
			<input type="submit" value="envoi">
			<p> votre vers ici</p>
			
		</form>
		
		</div></a>
    </div>
		</div>
	
	
		
</div>

	</body>
</html>