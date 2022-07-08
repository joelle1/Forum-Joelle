<?php require('action/user/loginaction.php'); ?>
<! DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>
<body>

    <br><br>
   <form class="container" method="POST">

        <?php if(isset($errorMessage)){ echo '<p>'.$errorMessage. '</p>'; } ?>

    <div class="mb-3">
        <label for="exampleInputPseudo" class="form-label">Pseudo</label>
        <input type="text" class="form-control" name="pseudo" >
        <div id="emailHelp" class="form-text"></div>
    </div>
    
    <div class="mb-3">
        <label for="exampleInputpassword" class="form-label">Password</label>
        <input type="password" class="form-control" name="password">
    </div>
   <button type="submit" class="btn btn-primary" name="Validate">Se connecter</button>
   <br>
   <br>

   <a href="signup.php"><p>Je n'ai pas de compte, je m'inscris </p></a>

   
</form>


</body>
</html>