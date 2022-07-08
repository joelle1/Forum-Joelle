<?php 
       require('action/user/securityaction.php'); 
       require('action/question/editquestionaction.php');
       require('action/question/saveeditquestionaction.php');
    ?>
    

    <! DOCTYPE html>
    <html lang="en">

    <?php include 'includes/head.php'; ?>
    <body>

        <?php include 'includes/navbar.php';?>

        <br>
        <br>
        <div class="container">
                
            <?php if(isset($errorMessage)){ 
                    echo '<p>'.$errorMessage. '</p>'; 
                }elseif(isset($sucessMessage)){
                    echo'<p>'.$sucessMessage.'</p>';}
            ?>
            <?php
            if(isset($date_publication)){
                ?>
                    <form class="container" method="POST">
            <div class="mb-3">
                <label for="exampleInputPseudo" class="form-label">Sujet </label>
                <input type="text" class="form-control" name="title" value="<?=$question_titre ;?>" >
                <div id="emailHelp" class="form-text"></div>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Description courte</label>
                <textarea  class="form-control" name="description" ><?=$question_description ;?></textarea>
            </div>
            <div class="mb-3">
                <label for="exampleInputEmail" class="form-label">Grande description</label>
                <textarea class="form-control" name="content" ><?=$question_contenu ;?></textarea>
            </div>
            
            
            <button type="submit" class="btn btn-primary" name="ok">Enregistrer les modifications</button>
            
            </form>
        </div >


                <?php
            }
            
            ?>
            


    </body>
    </html>
        
    