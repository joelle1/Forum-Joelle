    <?php 
       require('action/user/securityaction.php') ; 
       require('action/question/publicationaction.php');
       
    ?>
    

    <! DOCTYPE html>
    <html lang="en">

    <?php include 'includes/head.php'; ?>
    <body>

        <?php include 'includes/navbar.php';?>

        <br>
        <br>
        <form class="container" method="POST">
        

        <?php if(isset($errorMessage)){ echo '<p>'.$errorMessage. '</p>'; }elseif(isset($sucessMessage)){echo'<p>'.$sucessMessage.'</p>';}?>

        <div class="mb-3">
            <label for="exampleInputPseudo" class="form-label">Sujet </label>
            <input type="text" class="form-control" name="title" >
            <div id="emailHelp" class="form-text"></div>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Description courte</label>
            <textarea  class="form-control" name="description" ></textarea>
        </div>
        <div class="mb-3">
            <label for="exampleInputEmail" class="form-label">Grande description</label>
            <textarea class="form-control" name="content"></textarea>
        </div>
        
        
        <button type="submit" class="btn btn-primary" name="ok">Publier une question </button>
        
        </form>


    </body>
    </html>