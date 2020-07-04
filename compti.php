<?php 
///obligatoire de faire start session au debut de la page lors de l'usage
session_start();
if(isset($_POST['logout'])) unset($_SESSION['user']);
if(isset( $_SESSION['user'])){
  $login=$_SESSION['user']['login'];
  $nom=$_SESSION['user']['nom_prenom'];
  $email=$_SESSION['user']['email'];
 
?>


<!DOCTYPE html>
<html>
   <head>
      <title>Profile Card</title>
      <link rel="stylesheet" type="text/css" href="cmpti.css">
   </head>
   <body>
      <div class="card-container">
         <div class="upper-container">
            <div class="image-container">
               <img src="foto.png" />
            </div>
         </div>
         <div class="lower-container">
    
               <h3>P R O F I L</h3>

          
            <div>
			<h4>Nom<h4>
               <p><?php echo $nom; ?></p>
			   	<h4>Email<h4>
                 <p><?php echo $email; ?></p>
               </p>
            </div>
            <div>
			  <form method="POST">
               <button  type="submit" name="logout" class="btn">Déconnecter</button> 
			      </form>
            </div>
         </div>
      </div>
	  
 



<?php 
}else header("location:index.php")

;

?>
   </body>
</html>