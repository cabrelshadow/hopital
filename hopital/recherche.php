	
	
	


	
	
	
	
	
	<!DOCTYPE html>
	<html lang="en">
	<head>
		<meta charset="UTF-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1.0">
	
	<link rel="icon" type="image/png" href="images/icons/favicon.ico"/>
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/bootstrap/css/bootstrap.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="fonts/font-awesome-4.7.0/css/font-awesome.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/animate/animate.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="vendor/select2/select2.min.css">
<!--===============================================================================================-->
	<link rel="stylesheet" type="text/css" href="css/util.css">
	<link rel="stylesheet" type="text/css" href="css/main.css">
		<title>recherche</title>
	</head>
	<body>
    <nav class="navbar navbar-expand-lg navbar-light bg-light">
  <!-- Container wrapper -->
  <div class="container-fluid">
    <!-- Toggle button -->
    <button
      class="navbar-toggler"
      type="button"
      data-mdb-toggle="collapse"
      data-mdb-target="#navbarSupportedContent"
      aria-controls="navbarSupportedContent"
      aria-expanded="false"
      aria-label="Toggle navigation"
    >
      <i class="fas fa-bars"></i>
    </button>

    <!-- Collapsible wrapper -->
    <div class="collapse navbar-collapse" id="navbarSupportedContent">
      <!-- Navbar brand -->
      <a class="navbar-brand mt-2 mt-lg-0" href="#">
        <img
          src="images/car.png"
          height="50"
          alt="MDB Logo"
          loading="lazy"
        />
      </a>
      <!-- Left links -->
      <ul class="navbar-nav me-auto mb-2 mb-lg-0">
       
        <li class="nav-item">
          <a class="nav-link" href="enregistrement.php">enregistrement</a>
        </li>
        <li class="nav-item">
          <a class="nav-link" href="recherche.php">recherche</a>
        </li>
      </ul>
      <!-- Left links -->
    </div>
    <!-- Collapsible wrapper -->

    <!-- Right elements -->
    <div class="d-flex align-items-center">
      <!-- Icon -->
      <a class="text-reset me-3" href="#">
        <i class="fas fa-shopping-cart"></i>
      </a>

      <!-- Notifications -->
     
       
      </div>
    </div>
    <!-- Right elements -->
  </div>
  <!-- Container wrapper -->
</nav>
        <h1 class="text-center text capitalize my-5">recherche l'hopital de votre choix</h1>
	  <form action="" method="post">
          <div class="container pt-5" >
              <input type="text" name="search" class="form-control" placeholder="recherche.....">
                  <br>
                  <center>
              <button type="submit" class="btn btn-primary btn-lg" name="send" >rechercher</button>
              </center>
          </div>
          <?php 
          include("db.php");
if(isset($_POST['send'])){
$nom=$_POST['search'];
        
$allhopital=$pdo->prepare("SELECT * FROM coordonee WHERE nom_hopital=?");
$allhopital->execute([$nom]);
if($allhopital->rowCount()>0){


          while($hopital=$allhopital->fetch())
          {
        
            $nom = $hopital['nom_hopital'];
            $ville = $hopital['ville'];
            $telephone= $hopital['telephone'];
            $boite_postal = $hopital['boite_postal'];
            $soin = $hopital['types_soin'];
            $date_creation = $hopital['date_creation'];
        
      ?>
      <br>
      <div class="container">
        <table class="table table-hover table-bordered">
            <tr>
                <th>nom</th>
                <th>ville</th>
                <th>date de creation</th>
                <th>telephone</th>
              <th>boite postal</th>
              <th>type soint</th>
            </tr>
            <tr>
                <th><?=$nom?></th>
                <th><?=$ville?></th>
                <th><?=$date_creation?></th>
                <th><?=$telephone?></th>
             
                <th><?=$boite_postal?></th>
             
               
               
                <th><?=$soin?></th>
            </tr>
        </table>
        </div>
          <?php }}else{
              echo"<h3 class='text-center text-info mt-5'>aucun resultat trouvé</h3><br>
              <center>
              <img src='images/re.png' height='300' class='img img-center'>
              </center>
              ";
          }
          }
   ?>
  
          <hr>
      </form>
	<script src="vendor/jquery/jquery-3.2.1.min.js"></script>
	<script src="vendor/bootstrap/js/popper.js"></script>
    <script src="js/validation.js"></script>	
	</body>
	</html>