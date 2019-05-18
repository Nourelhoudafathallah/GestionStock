<!DOCTYPE html>
<html>
<title>Tech Space</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<body class="w3-content" style="max-width:1200px">


<!-- Sidebar/menu -->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <br>
    <h3 class="w3-wide"><b><a href="#" style="text-decoration:none">Tech Space</a></b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="../index.html" class="w3-bar-item w3-button">Accueil</a>
    <a href="form.html" class="w3-bar-item w3-button">Ajouter un produit</a>
    <a href="prod.php" class="w3-bar-item w3-button">Gérer produits</a>
    <a href="seecontact.php" class="w3-bar-item w3-button">Avis consommateur</a>
  </div>
</nav>


<!-- !PAGE CONTENT! -->
<div class="w3-main" style="margin-left:250px">
  
 <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-right">
    </p>
  </header>

<div class="w3-container w3-grey w3-padding-32">
  <?php
  $id=$_REQUEST["id"];
  $conn=new mysqli ("localhost","root","","tech");
  $req="select * from produits where id='$id'";
  $result=$conn->query($req);
  $row=$result->fetch_assoc();
  echo"
    <h1>Modifier le produit</h1>
    <form action='modifierproduit.php?id=".$row["id"]."' method='post' enctype='multipart/form-data'>
    <p>Type</p>
    <input disabled type='text' name='type' value='".$row["type"]."'>
    </p>
    <p>Nom</p>
    <p><input class='w3-input w3-border' type='text' placeholder='Nom' style='width:100%' name='name' value='".$row["nom"]."'></p>
    <p>Description</p>
    <p><input type='text'  class='w3-input w3-border' placeholder='Description' style='width:100%' name='description' value='".$row["description"]."'></p>
    <p>Prix</p>
    <p><input class='w3-input w3-border' type='text' placeholder='Prix' style='width:100%' name='prix' value='".$row["prix"]."'></p>
    <p>Marque</p>
    <p><input class='w3-input w3-border' type='FILE' style='width:100%' name='marque' value='".$row["marque"]."'  ></p>
    <p>Image</p>
    <p><input class='w3-input w3-border' type='FILE' style='width:100%' name='image' value='".$row["image"]."'></p>
    <button type='submit' class='w3-button w3-red w3-margin-bottom'>Modifier</button>
    </form>
  </div>";
  ?>

  
 
  <div class="w3-black w3-center w3-padding-24">© 2018 All rights reserved</div>


<script>
// Accordion 
function myAccFunc() {
    var x = document.getElementById("demoAcc");
    if (x.className.indexOf("w3-show") == -1) {
        x.className += " w3-show";
    } else {
        x.className = x.className.replace(" w3-show", "");
    }
}



// Script to open and close sidebar
function w3_open() {
    document.getElementById("mySidebar").style.display = "block";
    document.getElementById("myOverlay").style.display = "block";
}
 
function w3_close() {
    document.getElementById("mySidebar").style.display = "none";
    document.getElementById("myOverlay").style.display = "none";
}
</script>

</body>
</html>
