<!DOCTYPE html>
</section>
<html>
<head>
    <title>Leadership Summit</title>
    <link rel="icon" href="images/LeadershipLogo.png">
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_block1.css">
    <link rel="stylesheet" href="css/style_block2.css">
    <link rel="stylesheet" href="css/style_block5.css">
    <link rel="stylesheet" href="css/style_block7.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" href="min/bootstrap.min.css">
    <link rel="stylesheet" href="css/style_block6.css">
    <link rel="stylesheet" type="text/css" href=" https://fonts.googleapis.com/css?family=Cinzel">
    <link rel="stylesheet" type="text/css" href=" https://fonts.googleapis.com/css?family=Lora">
    <script src="https://raw.githubusercontent.com/maxwellito/vivus/master/src/vivus.js"></script>
    <script src="js/vivus.js"></script>
    <script src="https://raw.githubusercontent.com/maxwellito/vivus/master/src/pathformer.js"></script>
    <script src="js/pathformer.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">  
    <link rel="stylesheet" href="min/font-awesome-animation.min.css">	
   <!-- <link rel="stylesheet" href="index.css"> -->
    <script src="min/jquery-1.10.2.min.js"></script>   
    	
</head>
<body style = "min-width: 650px;">
 
<div class="grid-container">

<div class="topnav" id="Topnav" style = "right: -3px">
    <a href="#item1" style = "color: #916b2f">Home</a>
    <a href="#item2" style = "color: #916b2f">About Us</a>
    <a href="speakers.php" style = "color: #916b2f">Speakers</a>
    <a href="#" style = "color: #916b2f">Sponsors</a>
    <a href="#item6" style = "color: #916b2f">Contact</a>
    <a href="#item6" style = "color: #916b2f; border-right: none;">Tickets</a>
    <button class="button button4">Attend</button>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>

</div>

  <div class="item1" style="margin-top:-30px;" id="item1">
    <div class="leadership_summit_info">
        <div>
            
            <img src="images/LeadershipLogo1.png" class="summit_logo" width="50%" alt="Logo of Leadership Summit" style = "display: block; margin-top : -40px; margin-left: auto; margin-right: auto;"/><span style="width:160px; display:inline-block;"> </span>
            </div>
            <h3 style = "margin-top: -70px;"> 13th July 2019</h3>
            <br>
            <br>
            <br>
            <p style="font-family:Cinzel; font-size: 30px;"> EARLY BIRD REGISTRATION CLOSES ON 30<sup>TH</sup> MAY 2019</p>
            <button class="button button4">BUY NOW</button>
            <br><br>
        </div>
    </div>
  </div>
    
    
    <!-- Footer block -->
    
    <div class="item7"  id="item7" >
        <div class="margin_class">
        <div class="footer_block7" >
            <?php include("footer.php"); ?>
        <div>
        </div>
    </div>
</div>
<script>
    function myFunction() {
  var x = document.getElementById("Topnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}

</script>


</body>
</html>
