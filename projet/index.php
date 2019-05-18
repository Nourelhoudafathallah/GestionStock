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
    <h3 class="w3-wide"><b><a href="#" style="text-decoration:none">Tech Space</a></b></h3>
  </div>
  <div class="w3-padding-64 w3-large w3-text-grey" style="font-weight:bold">
    <a href="#" class="w3-bar-item w3-button">Accueil</a>
    <a onclick="myAccFunc()" href="javascript:void(0)" class="w3-button w3-block w3-white w3-left-align" id="categories">
      Categories <i class="fa fa-caret-down"></i>
    </a>
    <div id="demoAcc" class="w3-bar-block w3-hide w3-padding-large w3-medium">
      <a href="#ord" class="w3-bar-item w3-button">ordinateurs</a>
      <a href="#tab" class="w3-bar-item w3-button">tablettes</a>
      <a href="#impr" class="w3-bar-item w3-button">imprimantes</a>
      <a href="#ecr" class="w3-bar-item w3-button">écrans</a>
    </div>
  </div>
  <a href="javascript:void(0)" class="w3-bar-item w3-button w3-padding" onclick="document.getElementById('contact').style.display='block'">Contact</a>
  <a href="#propos" class="w3-bar-item w3-button w3-padding">à propos</a> 
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

  <!-- Image header -->
  <div class="w3-display-container w3-container">
    <img src="headp.jpg" alt="laptop" style="width:100%">
    <div class="w3-display-topleft w3-text-white" style="padding:24px 48px">
      <h1 class="w3-jumbo w3-hide-small">Tech Space</h1>
      <h1 class="w3-hide-large w3-hide-medium">Tech Space</h1>
      <h1 class="w3-hide-small">Matériel Informatique</h1>
      <p><a href="#ord" class="w3-button w3-grey w3-padding-large w3-large">Voir les offres</a></p>
    </div>
  </div>

  <div class="w3-container w3-text-grey" id="ord">
    <br><br><br>
    <h1>Ordinateurs</h1>
    
  </div>

  <!-- Les produits -->
  <div class="w3-row ">
    <?php
$conn=new mysqli ("localhost","root","","tech");
$req="select * from produits";
$result=$conn->query($req);
$val=0;
while ($row=$result->fetch_assoc())
{
  if ($row["type"]==='ordinateur')
  {
  $val=$val+1;
  if ($val % 5===0)
  echo "<div class='w3-row l3 s6 '>";
  echo"
  <div class='w3-col l3 s6'>
      <div class='w3-container'>
        <div class='w3-display-container'>
        <a href='produit.php?id=".$row["id"]."'><img src='admin/images/".$row["image"]."' style='width:100%'></a>
        <div class='w3-display-middle w3-display-hover'>
            <button class='w3-button w3-black'>Acheter <i class='fa fa-shopping-cart'></i></button>
          </div>
        </div>
        <center><img src='admin/images/".$row["marque"]."' style='width:60%'></center>
        <a href='produit.php?id=".$row["id"]."' style='text-decoration:none'><p>".$row["nom"]."<br><b>".$row["prix"]."</b></p></a>
      </div>        
      </div>";
      if ($val % 5===0)
        echo "</div>";
  }
}
      ?>
  </div>
  
    <div class="w3-container w3-text-grey" id="tab">
    <br><br><br>
    <h1>Tablettes</h1>
    
    </div>
    
      <div class="w3-row ">
    <?php
$conn=new mysqli ("localhost","root","","tech");
$req="select * from produits";
$result=$conn->query($req);
$val=0;
while ($row=$result->fetch_assoc())
{
  if ($row["type"]==='tablette')
  {
  $val=$val+1;
  if ($val % 5===0)
  echo "<div class='w3-row l3 s6 '>";
  echo"
  <div class='w3-col l3 s6'>
      <div class='w3-container'>
        <div class='w3-display-container'>
        <a href='produit.php?id=".$row["id"]."'><img src='admin/images/".$row["image"]."' style='width:100%'></a>
        <div class='w3-display-middle w3-display-hover'>
            <button class='w3-button w3-black'>Acheter <i class='fa fa-shopping-cart'></i></button>
          </div>
        </div>
        <center><img src='admin/images/".$row["marque"]."' style='width:60%'></center>
        <a href='produit.php?id=".$row["id"]."' style='text-decoration:none'><p>".$row["nom"]."<br><b>".$row["prix"]."</b></p></a>
      </div>        
      </div>";
      if ($val % 5===0)
        echo "</div>";
  }
}
      ?>
      </div>
    
      <div class="w3-container w3-text-grey" id="impr">
    <br><br><br>
    <h1>Imprimantes</h1>
    
  </div>
      
        <div class="w3-row ">
    <?php
$conn=new mysqli ("localhost","root","","tech");
$req="select * from produits";
$result=$conn->query($req);
$val=0;
while ($row=$result->fetch_assoc())
{
  if ($row["type"]==='imprimante')
  {
  $val=$val+1;
  if ($val % 5===0)
  echo "<div class='w3-row l3 s6 '>";
  echo"
  <div class='w3-col l3 s6'>
      <div class='w3-container'>
        <div class='w3-display-container'>
        <a href='produit.php?id=".$row["id"]."'><img src='admin/images/".$row["image"]."' style='width:100%'></a>
        <div class='w3-display-middle w3-display-hover'>
            <button class='w3-button w3-black'>Acheter <i class='fa fa-shopping-cart'></i></button>
          </div>
        </div>
        <center><img src='admin/images/".$row["marque"]."' style='width:60%'></center>
        <a href='produit.php?id=".$row["id"]."' style='text-decoration:none'><p>".$row["nom"]."<br><b>".$row["prix"]."</b></p></a>
      </div>        
      </div>";
      if ($val % 5===0)
        echo "</div>";
  }
}
      ?>
        </div>
      
    <div class="w3-container w3-text-grey" id="ecr">
    <br><br><br>
    <h1>écran</h1>
    
  </div>
    
      <div class="w3-row ">
    <?php
$conn=new mysqli ("localhost","root","","tech");
$req="select * from produits";
$result=$conn->query($req);
$val=0;
while ($row=$result->fetch_assoc())
{
  if ($row["type"]==='ecran')
  {
  $val=$val+1;
  if ($val % 5===0)
  echo "<div class='w3-row l3 s6 '>";
  echo"
  <div class='w3-col l3 s6'>
      <div class='w3-container'>
        <div class='w3-display-container'>
        <a href='produit.php?id=".$row["id"]."'><img src='admin/images/".$row["image"]."' style='width:100%'></a>
        <div class='w3-display-middle w3-display-hover'>
            <button class='w3-button w3-black'>Acheter <i class='fa fa-shopping-cart'></i></button>
          </div>
        </div>
        <center><img src='admin/images/".$row["marque"]."' style='width:60%'></center>
        <a href='produit.php?id=".$row["id"]."' style='text-decoration:none'><p>".$row["nom"]."<br><b>".$row["prix"]."</b></p></a>
      </div>        
      </div>";
      if ($val % 5===0)
        echo "</div>";
  }
}
      ?>
      </div>
 
<!-- à propos -->
  
   <div class="w3-container w3-grey w3-padding-32" id="propos">
    <h1>à propos de nous</h1>
    <div class="w3-row-padding">
     <div class="w3-col s4" style="width:"60%">
        <p> Tech Space est le meuilleur site tunisien qui propose la vente en ligne d’ordinateurs de portables, écran, tablettes, imprimantes.

Commander en ligne chez Tech Space, c'est l'assurance d'avoir une commande livrée  dans les meilleurs délais à l'adresse de votre choix.</p>
    
      </div>
     <div class="w3-col s4">
          <h4>Store</h4>
        <p><i class="fa fa-fw fa-map-marker"></i> Tech Space</p>
        <p><i class="fa fa-fw fa-phone"></i> 0044123123</p>
        <p><i class="fa fa-fw fa-envelope"></i> TechSpace@mail.com</p>
        
      </div>
     <div class="w3-col s4 w3-justify">
<h4>Nous acceptons</h4>
        <p><i class="fa fa-fw fa-cc-amex"></i> Amex</p>
        <p><i class="fa fa-fw fa-credit-card"></i> Carte de crédit</p>
        <br>
        <i class="fa fa-facebook-official w3-hover-opacity w3-large"></i>
        <i class="fa fa-instagram w3-hover-opacity w3-large"></i>
        <i class="fa fa-snapchat w3-hover-opacity w3-large"></i>
        <i class="fa fa-pinterest-p w3-hover-opacity w3-large"></i>
        <i class="fa fa-twitter w3-hover-opacity w3-large"></i>
        <i class="fa fa-linkedin w3-hover-opacity w3-large"></i>
        
     </div>
     </div>
  </div>
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
