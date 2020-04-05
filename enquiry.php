<?php
$error = "";
if(!empty($_POST['send1'])){
   echo "helo";
   
   if(!$_POST['email']){
       
       $error.="Email is required.<br>";
   }
   
   if(!$_POST['message']){
       
       $error.=" Message is required.<br>";
   }
   
   else{
       
       $to="aakritigupta298@gmail.com";
       $email=$_POST['email'];
       $subject=$_POST['subject'];
       $message=$_POST['message'];
       $header = "From:".$email."\r\n";
         $header .= "Cc:afgh@somedomain.com \r\n";
         $header .= "MIME-Version: 1.0\r\n";
         $header .= "Content-type: text/html\r\n";
         
         $retval = mail ($to,$subject,$message,$header);
         
         if( $retval == true ) {
           alert("Message sent successfully!");
         }else {
            alert("Message could not be sent. Please try again after some time!");
         }
       
   }
   
}
?>




<!doctype html>
<html lang="en">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">

    <!-- Bootstrap CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">

    <title>Enquiry</title>
  </head>
  <style type="text/css">
        html{
            background-color:#feb72b;
        }
        body{
            background:none;
        }
        .container{
            border-radius: 10px;
            border:solid;
        }
  </style>
  <body>
<div>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark" id="navbar" style=" position: fixed; top: 0; left: 0; z-index: 9999; width:100%" >
        <a class="navbar-brand" href="index.html">Balasundari Enterprises</a>
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>         
    </nav>
</div>
<div class="container" style="margin-top:100px">
  <form method="POST">
  <div class="form-group">
  <?php echo $error; ?>
    <label>Email address</label>
    <input type="text" class="form-control" name="email" placeholder="">
  </div>
  <div class="form-group">
    <label>Subject</label>
    <input type="text" class="form-control" name="subject" placeholder="">
  </div>
  <div class="form-group">
    <label>Message</label>
    <textarea class="form-control" name="message" rows="12"></textarea>
  </div>
  <button class="btn btn-dark" name="send1">Send</button>
</form>
<br>
</div>


    <!-- Optional JavaScript -->
    <!-- jQuery first, then Popper.js, then Bootstrap JS -->
    <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
    <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  </body>
</html>