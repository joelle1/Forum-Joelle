<?php 
require('action/user/signupaction.php');
?>
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
    <label for="exampleInputEmail" class="form-label">Nom</label>
    <input type="text" class="form-control" name="lastname" >
  </div>
  <div class="mb-3">
    <label for="exampleInputEmail" class="form-label">prenom</label>
    <input type="text" class="form-control" name="firstname">
  </div>
  <div class="mb-3">
    <label for="exampleInputpassword" class="form-label">Password</label>
    <input type="password" class="form-control" name="password">
  </div>
  <div class="mb-3 form-check">
    <input type="checkbox" class="form-check-input" id="exampleCheck1">
    <label class="form-check-label" for="exampleCheck1">Accepter les conditions et termes d'utilisation de notre site web</label>
  </div>
  <button type="submit" class="btn btn-primary" name="Validate">S'inscrire</button>
  <br>
  <br>
  <a href="login.php"><p>J'ai deja un compte, je me connecte  </p></a>
</form>


</body>
</html>