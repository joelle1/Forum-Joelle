<?php
session_start();
require('action/database.php');
require('action/user/profilusershow.php');
    ?>
<! DOCTYPE html>
<html lang="en">

    <?php include 'includes/head.php'; ?>
    <body>
        <?php include('includes/navbar.php')?>

        <div class="container">

            <?php if(isset($errorMessage)){echo'<p>'.$errorMessage.'</p>';}

                
                if(isset($getAllQuestionOfUser)){
                    ?>
                    
                        <div class="card">
                            
                            <div class="card-header">
                                <p><h3>@<?php echo $userInfos["pseudo"]; ?></h3></p>
                            </div>
                            <div class="card-body">
                                <p><?php echo $userInfos["nom"].''.$userInfos["prenom"];?>
                            </div>
                        </div>
                    
                    <br><br>
                    
                    <?php

                    while( $allQUestionOfThisUser=$getAllQuestionOfUser->fetch()){
                        ?>
                        <div class="card">
                            <div class="card-header">
                                <?php echo $allQUestionOfThisUser['titre'] ;   ?>   
                            </div>
                            <div class="card-body">
                                <?= $allQUestionOfThisUser['description']    ?>   
                            </div>
                            <div class="card-footer">
                                Publié par  <a href="profilusersd.php?id=<?= $_SESSION['id'];?>"><?= $allQUestionOfThisUser["pseudo_auteur"];?> </a> le <?= $allQUestionOfThisUser['date_publication'];   ?>   
                            </div>
                            
                        </div>
                        <br><br>
                        <?php
                    }
                        
                        
                }
            ?>
         </div>   
    </body>
</html>
