<!DOCTYPE html>
<html>
<head>
	<title>Dados</title>
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
</head>
<body>

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
		    
		    <form action="valordados.php" method="post">

		   		<button type="button" onclick="tirar()">tirar</button>

		   	</form>

		   </div>       	

		 </div>

		<div class="row">
		      
		   <div class="col-md-4">       
		    
		   		<div id="dado"><label id="Label1">1</label></div>

		   </div>       	

		 </div>

<br><br><br>
		 <div class="row">
		      
		   <div class="col-md-4">       
		    
		   		<div id="dado"><label id="Label2">1</label></div>

		   </div>       	

		 </div>
<br><br><br>
		<div class="row">
		      
		   <div class="col-md-4">       
		    
		   		<div id="dado"><label id="Label3">1</label></div>

		   </div>       	

		 </div>

<br><br><br>	

		<div class="row">
		      
		   <div class="col-md-4">       
		    
		   		<div id="dado"><label id="Label4">1</label></div>

		   </div>       	

		 </div>

<br><br><br>	

		<div class="row">
		      
		   <div class="col-md-4">       
		    
		   		<div id="dado"><label id="Label5">1</label></div>

		   </div>       	

		 </div>
		

	</div>


</body>
</html>

<script type="text/javascript">

	function tirar() {

		document.querySelector('#Label1').innerText = '11';



  var url = "valordados.php";
  $.ajax({                                       
     url: url,                     
     data:{}, 
     method : 'post',
     dataType : 'json',
     success: function(data)             
     {
      document.querySelector('#Label1').innerText =data[0];
      document.querySelector('#Label2').innerText =data[1];
      document.querySelector('#Label3').innerText =data[2];
      document.querySelector('#Label4').innerText =data[3];
      document.querySelector('#Label5').innerText =data[4];
           
     },
     error: function(data)             
     {
      document.querySelector('#Label1').innerText =data[0];
      document.querySelector('#Label2').innerText =data[1];
      document.querySelector('#Label3').innerText =data[2];
      document.querySelector('#Label4').innerText =data[3];
      document.querySelector('#Label5').innerText =data[4];

     }

   });
		
	}
	

</script>