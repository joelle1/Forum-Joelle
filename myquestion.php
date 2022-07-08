<?php
//require('action/user/securityaction.php');
 require('action/question/myquestionaction.php'); 
  ?>

<! DOCTYPE html>
<html lang="en">

<?php include 'includes/head.php'; ?>
<br>
<br>
<body>
    <?php include 'includes/navbar.php';?>

    <?php 
        while($allQuestion=$getAllMyQuestion->fetch()){

            ?>
            <div class="card">

            
                <h5 class="card-header">
                    <?php echo $allQuestion['titre'] ;?>
                 </h5>
                 <div class="card-body">
                    
                    <p class="card-text">
                    <?= $allQuestion['description'] ;?>
                    </p>
                    
                    <a href="questionshow.php?id=<?php echo $allQuestion['id'] ;?>" class="btn btn-primary">Acceder à la question</a>
                    <a href="editquestion.php?id=<?php echo $allQuestion['id'] ;?>" class="btn btn-warning">Modifier la question</a>
                    <a href="action/question/deletquestionaction.php?id=<?php echo $allQuestion['id'] ;?>" class="btn btn-danger">Supprimer la question</a>
                </div>
            </div>
            <br>
            <?php
            



        }

            
    ?>
        
    


</body>
</html>
   
    
