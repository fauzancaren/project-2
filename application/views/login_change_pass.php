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
    padding: 30px 35px;
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
    font-size: 14px;
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
    margin-top: 10px;
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
<?php 
if(!isset($multi_company))$multi_company=false;
?>
<body>
    <div class="background">
        <div class="shape"></div>
        <div class="shape"></div>
    </div>
    
						<p>Silahkan isi userid dan password lama anda disini :</p>
						<form name="frmLogin" id="frmLogin" method="post" role="form" 
						action="<?=base_url()?>index.php/login/change_password">
						<img src="<?=base_url()?>images/logo jobii.png" style="float:left;margin-right:10px;width:85px;height:100px">
							 <Font style="color:black"><h2>JOBii Software Dynamic</h2></font>
							<div class="form-group glyphicon glyphicon-user">
								<label for="username">Username :</label>
								<input  class="form-control" type="text" id="user_id" name="user_id" placeholder="Username">
							</div>
							<div class="form-group glyphicon glyphicon-qrcode">
								<label for="password">Password (Lama):</label>								 
								<input class="form-control" type="password" id="password" name="password" placeholder="Password Lama"/>
								 
							</div>
                            <div class="form-group glyphicon glyphicon-qrcode">
                                <label for="password">Password (Baru):</label>                               
                                <input class="form-control" type="password" id="password_new" name="password_new" placeholder="Password Baru"/>
                                 
                            </div>
							<div class="form-group">
							<button>Log In</button>
                             
								<?php if ($message!="") { ?>
								<div id="lblMessage" class="alert alert-danger" style="margin-top:10px">
									<?php echo $message; ?>
								</div>
								<?php }; ?>
							</div>
						</form>      	
					 
  
   
		
</BODY>
<style>
.container {
	max-width: 430px;
	padding-top: 5%;
	margin: auto auto;
}
</style> 
<?
//echo $library_src;
//echo $script_head;
?>


<script languange="javascript">

	if(top != self) top.location.replace(location);	//detect if run iframe

    function loginx(){
    	$("#lblMessage").html("Please wait...");
//		loading();
		url='<?=base_url()?>index.php/login/verify';
			$('#frmLogin').form('submit',{
				url: url,
				onSubmit: function(){
					return $(this).form('validate');
				},
				success: function(result){
//					loading_close();
					var result = eval('('+result+')');
					
					if (result.success){
						window.open("<?=base_url()?>index.php","_self");
					} else {
						$("#lblMessage").show();
						$("#lblMessage").html(result.msg);
					}
				}
			});
    }
</script>
</html>
