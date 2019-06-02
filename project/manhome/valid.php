<!-- Adding oh-autoVal css style -->
<link rel="stylesheet" type="text/css" href="https://rawgit.com/ozonhub/oh-autoVal/master/css/oh-autoval-style.css">
<!-- Adding jQuery script. It must be before other script files -->
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<!-- Adding oh-autoVal script file -->
<script src="https://rawgit.com/ozonhub/oh-autoVal/master/js/oh-autoval-script.js"></script>

<form action="" method="post" onsubmit="return" class="oh-autoval-form">
      <input type="text" name="email" av-message="invalid email" class="oh-autoval av-email"> 
      <input type="text" name="phone" av-message="invalid phone" class="oh-autoval av-phone"> 
      <input type="submit" name="sub" value="Submit">
</form>