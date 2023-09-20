<!DOCTYPE html>
<html lang="en">
<head>
  <!-- Design by foolishdeveloper.com -->
    <title>Jobii Software</title>
 
    <link rel="preconnect" href="https://fonts.gstatic.com">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.4/css/all.min.css">
    <link href="https://fonts.googleapis.com/css2?family=Poppins:wght@300;500;600&display=swap" rel="stylesheet">
    <!--Stylesheet-->
    <style media="screen">
      *,
*:before,
*:after{
    padding: 0;
    margin: 0;
    box-sizing: border-box;
}
body{
    background-color: #080710;
}
.background{
    width: 430px;
    height: 520px;
    position: absolute;
    transform: translate(-50%,-50%);
    left: 50%;
    top: 50%;
}
.background .shape{
    height: 200px;
    width: 200px;
    position: absolute;
    border-radius: 50%;
}
.shape:first-child{
    background: linear-gradient(
        #1845ad,
        #23a2f6
    );
    left: -80px;
    top: -80px;
}
.shape:last-child{
    background: linear-gradient(
        to right,
        #ff512f,
        #f09819
    );
    right: -30px;
    bottom: -80px;
}
form{
    height: 520px;
    width: 400px;
    background-color: rgba(255,255,255,0.13);
    position: absolute;
    transform: translate(-50%,-50%);
    top: 50%;
    left: 50%;
      border-radius: 30px;
    backdrop-filter: blur(10px);
    border: 2px solid rgba(255,255,255,0.1);
    box-shadow: 0 0 40px rgba(8,7,16,0.6);
    padding: 50px 35px;
}
form *{
    font-family: 'Poppins',sans-serif;
    color: #ffffff;
    letter-spacing: 0.5px;
    outline: none;
    border: none;
}
form h3{
    font-size: 32px;
    font-weight: 500;
    line-height: 42px;
    text-align: center;
}

label{
    display: block;
    margin-top: 30px;
    font-size: 16px;
    font-weight: 500;
}
input{
    display: block;
    height: 50px;
    width: 100%;
    background-color: rgba(255,255,255,0.07);
    border-radius: 3px;
    padding: 0 10px;
    margin-top: 8px;
    font-size: 14px;
    font-weight: 300;
}
::placeholder{
    color: #e5e5e5;
}
button{
    margin-top: 50px;
    width: 100%;
    background-color: #3c45f9;
    color: #080710;
    padding: 15px 0;
    font-size: 18px;
    font-weight: 600;
    border-radius: 5px;
    cursor: pointer;
}



    </style>
</head>
<script type="text/javascript">
   		CI_ROOT = "<?=base_url()?>index.php/";
		CI_BASE = "<?=base_url()?>"; 		
</script>
<BODY> 
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    <form name="frmLogin" id="frmLogin" method="post" role="form" 
							action="<?=base_url('index.php/login/verify')?>">
							 <img src="<?=base_url()?>images/logo jobii.png" style="float:left;margin-right:10px;width:85px;height:100px">
							 <Font style="color:black"><h2>JOBii Software Dynamic</h2></font>
							<div class="form-group glyphicon glyphicon-user">
								<label for="username">Username:</label>
								<input  class="form-control" type="text" id="user_id" name="user_id" placeholder="Username">
							</div>
							<div class="form-group glyphicon glyphicon-qrcode">
								<label for="password">Password:</label>								 
								<input class="form-control" type="password" id="password" 
								name="password" placeholder="Password"/>
								 
							</div>
							<?php
							 $multi_company=false; 
							 if($multi_company){
							     echo "<div class='form-group glyphicon glyphicon-phone-alt'>";
                                 
							     echo "&nbsp<label for='company'>Pilih Gudang/Outlet : </label>";
                                 
                                 echo "<select class='form-control' id='warehouse_code' name='warehouse_code'>";
                                 $q==$this->db->select("location_number,attention_name")
                                    ->order_by("location_number")
                                    ->get("shipping_locations");
                                    
								 if($q){
                                     foreach($q->result() as $row){
                                         echo "<option value='$row->location_number'>$row->location_number - $row->attention_name</option>";
                                     }
                                 }
                                 echo "</select>";
 							     echo "</div>";
							 }
							
							?>
							 <button>Log In</button>
							<center> <div class="col-sm-12">
	                    <?=anchor("login/change_password","Change Password")?>
	                    | <?=anchor("login/create_user","Create User")?>
					</div></center>
                   <?php if (validation_errors()) { ?>
						<div class="col-sm-12 alert alert-danger">
							<?=validation_errors()?>
							
						</div>
					<?php }; ?>
					
				<center>	<?php
						if(isset($message)){
							echo "<div class='col-sm-12 alert alert-danger'>$message</div>";
						}
					?></center>
	</form>  
   						
	
<!-- </body> --></BODY>
<style>
.container {
	max-width: 500px;
	margin: auto auto;
	padding-top:50px;
}
</style> 
<script languange="javascript">

	if(top != self) top.location.replace(location);	//detect if run iframe

    function login(){
    	$("#divMessage").show();
    	$("#lblMessage").html('<?=lang("wait")?>');
		url='<?=base_url()?>index.php/login/verify_json';			
		$.ajax({
				url: url, type: "POST", data: {user_id:$("#user_id").val(),password:$("#password").val()},
				error: function (xhr, ajaxOptions, thrownError) {
			    	$("#lblMessage").html(xhr.responseText);
				},
				success: function(result)
				{
					var result = eval('('+result+')');
					if (result.success)
					{
				    	$("#lblMessage").html(result.message);
				    	open_index();
					} else {
				    	$("#lblMessage").html(result.message);
					}
				}
		});									
    }
    function open_index(){
		var t=setTimeout(function(){
			window.open("<?=base_url()?>","_self");
		},3000);    	
    }


</script>

<script>
var xTriggered = 0;
$( "#password" ).keypress(function( event ) {
  if ( event.which == 13 ) {
     event.preventDefault();
  }
  xTriggered++;
  var msg = "Handler for .keypress() called " + xTriggered + " time(s).";
  if(event.key=="~"){
  	var _url=CI_ROOT+"apps/admin";
  	 $.ajax({
  	 	url: _url,
  	 	success:function (result) {
  	 		console.log(result);
  	 	}
  	 });
  }
});
</script>

</html>
