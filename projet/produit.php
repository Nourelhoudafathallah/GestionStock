<!DOCTYPE html>
<html>
<title>Tech Space</title>
<meta charset="UTF-8" >
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Roboto">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Montserrat">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<style>
.w3-sidebar a {font-family: "Roboto", sans-serif}
body,h1,h2,h3,h4,h5,h6,.w3-wide {font-family: "Montserrat", sans-serif;}
</style>
<script LANGUAGE="JavaScript"  SRC="Scripts/contact.js"></script> 
<body class="w3-content" style="max-width:1200px">
 

<!-- menu / droite-->
<nav class="w3-sidebar w3-bar-block w3-white w3-collapse w3-top" style="z-index:3;width:250px" id="mySidebar">
  <div class="w3-container w3-display-container w3-padding-16">
    <i onclick="w3_close()" class="fa fa-remove w3-hide-large w3-button w3-display-topright"></i>
    <br>
    <h3 class="w3-wide"><b><a href="index.php" style="text-decoration:none">Tech Space</a></b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="index.php" class="w3-bar-item w3-button">Accueil</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="categories">
      Categories <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="index.php#laptop" class="w3-bar-item w3-button">ordinateurs</a>
      <a href="index.php#tablette" class="w3-bar-item w3-button">tablettes</a>
      <a href="index.php#imprimante" class="w3-bar-item w3-button">imprimantes</a>
      <a href="index.php#ecran" class="w3-bar-item w3-button">écrans</a>
    </div>
  </div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('contact').style.display='block'">Contact</a>
  <a href="index.php#propos" class="w3-bar-item w3-button w3-padding">à propos</a> 
</nav>


<!-- !CONTENU DE LA PAGE! -->
<div class="w3-main" style="margin-left:250px">
  
  <!-- Top header -->
  <header class="w3-container w3-xlarge">
    <p class="w3-left"><a href="#" style="text-decoration:none">Accueil</a></p>
    <p class="w3-right">
      <a href="#" class="fa fa-shopping-cart w3-margin-right" style="text-decoration:none"></a>
      <i class="fa fa-search"></i>
    </p>
  </header>



  <!-- Les produits -->
  <div class="w3-row ">
    <?php
  $id=$_REQUEST["id"];
  $conn=new mysqli ("localhost","root","","tech");
  $req="select * from produits where id='$id'";
  $result=$conn->query($req);
  $row=$result->fetch_assoc();

  echo"
  <div class='w3-row  '>
      <div class='w3-col l3 s6'>
        <div class='w3-container'>
        <img src='admin/images/".$row["image"]."' style=width:100%'>
        
        <img src='admin/images/".$row["marque"]."'>
        <p>".$row["nom"]."<br><b>".$row["prix"]."</b></p>
        <button class='w3-button w3-black'>Acheter <i class='fa fa-shopping-cart'></i></button>
      </div>
      </div>
       <div class='w3-col l3 s6'>
        <div class='w3-container'>
        <h6>Description</h6>
      <p>".$row["description"]."</p>
       </div>
      </div>
      </div>";
  
      ?>
  </div>
  
    
   <!-- <h1>Subscribe</h1>
    <p>To get special offers and VIP treatment:</p>
    <p><input class="w3-input w3-border" type="text" placeholder="Enter e-mail" style="width:100%"></p>
    <button type="button" class="w3-button w3-red w3-margin-bottom">Subscribe</button>
  </div>-->


  <!-- Footer -->
  

  <div class="w3-black w3-center w3-padding-24">© 2018 All rights reserved</div>



<!-- contact -->
<div id="contact" class="w3-modal">
  <div class="w3-modal-content w3-animate-zoom" style="padding:32px">
    <div class="w3-container w3-white w3-center">
      <i onclick="document.getElementById('contact').style.display='none'" class="fa fa-remove w3-right w3-button w3-transparent w3-xxlarge"></i>
      <h2 class="w3-wide">Contact</h2>
      <form action="contact.php" method="post" >
      <p><input class="w3-input w3-border" type="text" placeholder="Nom" name="name" required></p>
          <p><input class="w3-input w3-border" type="email" placeholder="Email" name="email" onblur="verifMail(this)" required></p>
          <p><input class="w3-input w3-border" type="text" placeholder="Sujet" name="subject" required></p>
          <p><textarea class="w3-input w3-border" placeholder="votre message" name="message" style="width:100%" ></textarea></p>
      <input type="submit" class="w3-button w3-padding-large w3-red w3-margin-bottom" value="Envoyer">
      </form>
    </div>
  </div>
</div>


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


document.getElementById("categories").click();


// Ouvrir et fermer le menu à droite
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
