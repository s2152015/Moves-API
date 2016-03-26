<?php 
	$base_url="/workspace/doctorsmobile/"; 
	$accesstoken = "G9qaqJ17wavw5TKw25I8A_OfPdVI4eugpL7vRUuvL42h789fC9P643w020tmwP1u";
	  $user_accesstoken = $this->Session->read('accestoken');
	  if($user_accesstoken){
	  	$accesstoken =$this->Session->read('accestoken');
	  }
	
	?>
<html>
	<head>
		<link rel="stylesheet" href="<?php echo $base_url;?>assets/css/style.css">
		<script src="http://code.jquery.com/jquery-latest.min.js" type="text/javascript"></script>
         <title>Doctors Mobile</title>
	</head>
<body>
<?php echo $content_for_layout; ?>
</body>
<script>
	var statusIntervalId = window.setInterval(updateMovesActivities, 7200000);

function updateMovesActivities() {
	var accestoken='<?php echo $accesstoken; ?>';
    $.ajax({
    	type:"GET",
        url: 'moves_activities/updateMovesActivities/'+accestoken,
        success: function(data) {
           // alert(data);
        }
    });
}
</script>
</html>