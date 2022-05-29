<?php 

include_once("../databaseconnect.php");




/* Main page with two forms: sign up and log in */
    if(!isset($_SESSION)) 
    { 
        session_start(); 
    } 
?>


<?php
//include("header.php");

//include_once("../../dbconnectg.php"); 


?>  
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>High School Golf Scores App</title>
  <!-- materialize icons, css & js -->
  <link type="text/css" href="/css/materialize.min.css" rel="stylesheet">
  <link href="https://fonts.googleapis.com/icon?family=Material+Icons" rel="stylesheet">
  <link type="text/css" href="/css/styles.css" rel="stylesheet">
  <script type="text/javascript" src="/js/materialize.min.js"></script>
  <link rel="manifest" href="/manifest.json">
  <!-- ios support -->
  <link rel="apple-touch-icon" href="/img/icons/icon-96x96.png">
  <meta name="apple-mobile-web-app-status-bar" content="#FFE1C4">
  <meta name="theme-color" content="#FFE1C4">
  
     <style media="screen">
      body { background: #ECEFF1; color: rgba(0,0,0,0.87); font-family: Roboto, Helvetica, Arial, sans-serif; margin: 0; padding: 0; }
      #message { background: white; max-width: 360px; margin: 100px auto 16px; padding: 32px 24px; border-radius: 3px; }
      #message h2 { color: #ffa100; font-weight: bold; font-size: 16px; margin: 0 0 8px; }
      #message h1 { font-size: 22px; font-weight: 300; color: rgba(0,0,0,0.6); margin: 0 0 16px;}
      #message p { line-height: 140%; margin: 16px 0 24px; font-size: 14px; }
      #message a { display: block; text-align: center; background: #039be5; text-transform: uppercase; text-decoration: none; color: white; padding: 16px; border-radius: 4px; }
      #message, #message a { box-shadow: 0 1px 3px rgba(0,0,0,0.12), 0 1px 2px rgba(0,0,0,0.24); }
      #load { color: rgba(0,0,0,0.4); text-align: center; font-size: 13px; }
      @media (max-width: 600px) {
        body, #message { margin-top: 0; background: white; box-shadow: none; }
        body { border-top: 16px solid #ffa100; }
      }
    </style>
  <?php include 'css/css.html'; ?>
</head>



<?php  

 
if ($_SERVER['REQUEST_METHOD'] == 'POST') 
{
    if (isset($_POST['login'])) { //user logging in

        require 'login.php';
        
    }
    
    elseif (isset($_POST['register'])) { //user registering
        
        require 'register.php';
        
    }
}  
?>
<body>
  <div class="form">
      
   
      
      <div class="tab-content">

         <div id="login">   
          <h1>Player Login Page</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
            <div class="field-wrap">
            <label>
             UserName<span class="req">*</span>
            </label>
            <input type="username" required autocomplete="off" name="username"/>
          </div>
          
          <div class="field-wrap">
            <label>
              Password<span class="req"></span>
            </label>
            <input type="password" required autocomplete="off" name="password"/>
          </div>
          
      
          
          <button class="button button-block" name="login" />Log In</button>
          
          </form>

        </div>
          
        <div id="signup">   
          <h1>Sign Up for Free</h1>
          
          <form action="index.php" method="post" autocomplete="off">
          
          <div class="top-row">
            <div class="field-wrap">
              <label>
                First Name<span class="req">*</span>
              </label>
              <input type="text" required autocomplete="off" name='firstname' />
            </div>
        
            <div class="field-wrap">
              <label>
                Last Name<span class="req">*</span>
              </label>
              <input type="text"required autocomplete="off" name='lastname' />
            </div>
          </div>

          <div class="field-wrap">
            <label>
              Username<span class="req">*</span>
            </label>
            <input type="varchar"required autocomplete="off" name='username' />
          </div>
          
                    <div class="field-wrap">
            <label>
             Phone <span class="req">*</span>
            </label>
            <input type="varchar"required autocomplete="off" name='phone' />
          </div>
          
          <div class="field-wrap">
            <label>
              Set A Password<span class="req">*</span>
            </label>
            <input type="password"required autocomplete="off" name='password'/>
          </div>

          
          <button type="submit" class="button button-block" name="register" />Register</button>
          
          </form>

        </div>  
        
      </div><!-- tab-content -->
      
</div> <!-- /form -->
  <script src='http://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>

    <script src="js/index.js"></script>

</body>
</html>

