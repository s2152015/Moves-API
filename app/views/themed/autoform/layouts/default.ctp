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

	<!--To request authorization from a desktop website, direct the user to the following url.-->
	<div>
		<a href="https://api.moves-app.com/oauth/v1/authorize?response_type=code&client_id=mYGL3F9T0AdvFi9lVWOLs1RsROGSP61r&scope=activity">Register to APP</a>
   </div>
<?php
  if(isset($_GET['code'])){
    $result = $this->requestAction('/moves_users/getAccessToken/'.$_GET["code"]);
	if(isset($result['access_token'])){
		$accesstoken = $result['access_token'];
	}else{
		echo $result['error'];
	}
  }
if(!empty($accesstoken)){?>
 
 <!--<div>
     <a href="https://api.moves-app.com/oauth/v1/tokeninfo?access_token=<?php echo $accesstoken; ?>">Check access token</a>
 </div>-->
 <div>
	 <a href="moves_activities/getDailyActivity/<?php echo $accesstoken; ?>"> Get Daily activity</a>
</div>
<div>
	<a href="moves_activities/getActivitiesByUser"> Get Activities By Users</a>
</div>

<?php } ?>

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
</body>	
</html>