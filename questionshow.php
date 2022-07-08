<?php 
require('action/user/signupaction.php');
require('action/question/questionshowaction.php');
require('action/reponse/publishreponseaction.php');
require('action/reponse/showallreponseofthisquestionaction.php');

?>
<! DOCTYPE html>
<html lang="en">

    <?php include 'includes/head.php'; ?>
    <body>

        <br><br>
        <div class="container" >
            <?php 

                 if(isset($errorMessage)){ echo $errorMessage;}
                if(isset($question_date_publication)){
                    

                    ?>
                    <section class="show content">
                    <h3> <?php echo $question_title ; ?></h3>
                    <hr>
                    <p><?php echo $question_content ; ?></p>
                    <small> <?php echo $question_pseudo.' '.$question_date_publication ; ?></small>
                    
                    </section>
                    <br>
                    <br>
                    <section class="show comments">

                        <form cless="from-group" method="POST">
                           
                            <div class="mb-3">
                                <label for="exampleInputEmail" class="form-label">Reponse:</label>
                                <textarea  class="form-control" name="reponse" ></textarea>
                                <br><br>
                                <button class="btn btn-primary" type="submit" name="validate">Repondre</button>
                            </div>                 

                        </form>
                        <br<<br>

                        <?php
                             while($allReponse=$showAllReponseOfQuestion->fetch()){
                                ?>
                                <div class="card">
                                    <div class="card-header">
                                        <p><h3><?php echo $allReponse["pseudo_auteur"]; ?></h3></p>
                                    </div>
                                    <div class="card-body">
                                    <?php echo $allReponse["contenu"];?>
                                    </div>
                                </div>
                                <br><br>
            
            
                                <?php
                            }
                         
                        ?>
                        <br> <br>

                    </section>

                    
                    <?php
                }
            ?>
            
        </div>

    </body>
</html>
            
