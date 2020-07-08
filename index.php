<!DOCTYPE html>
<html>
<head>
	<title>Dados</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

<?php 
$dado1=random_int ( 1 , 6 );
$dado2=random_int ( 1 , 6 );
$dado3=random_int ( 1 , 6 );
$dado4=random_int ( 1 , 6 );
$dado5=random_int ( 1 , 6 );

    
?>

	<style type="text/css">

	#panio { 

		width: 200px; 
		border-top-style: solid;
	  border-right-style: double;
	  border-bottom-style: dashed;
	  border-left-style: double;
	}

	#dado { 

		width: 30px; 
		height: 30px;
		border-top-style: solid;
	  border-right-style: double;
	  border-bottom-style: dashed;
	  border-left-style: double;
	}	

	</style>

	<div id="panio">

		<div class="row">
		      
		   <div class="col-md-12">       
		    
		    <form action="index.php" method="post">

		   		<button type="submit" >tirar</button>

		   	</form>

		   </div>       	

		 </div>

		<div class="row">
		      
		   <div class="col-md-4">       
		    
		   		<div id="dado"><label id="Label1"><?php echo $dado1; ?></label></div>

		   </div>       	

		 </div>

<br><br><br>
		 <div class="row">
		      
		   <div class="col-md-4">       
		    
		   		<div id="dado"><label id="Label2"><?php echo $dado2; ?></label></div>

		   </div>       	

		 </div>
<br><br><br>
		<div class="row">
		      
		   <div class="col-md-4">       
		    
		   		<div id="dado"><label id="Label3"><?php echo $dado3; ?></label></div>

		   </div>       	

		 </div>

<br><br><br>	

		<div class="row">
		      
		   <div class="col-md-4">       
		    
		   		<div id="dado"><label id="Label4"><?php echo $dado4; ?></label></div>

		   </div>       	

		 </div>

<br><br><br>	

		<div class="row">
		      
		   <div class="col-md-4">       
		    
		   		<div id="dado"><label id="Label5"><?php echo $dado5; ?></label></div>

		   </div>       	

		 </div>
		

	</div>


</body>
</html>

