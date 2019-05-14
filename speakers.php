
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="images/LeadershipLogo.png">
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/card.css">

    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href=" https://fonts.googleapis.com/css?family=Cinzel">
    <link rel="stylesheet" type="text/css" href=" https://fonts.googleapis.com/css?family=Lora">
    
    <script src="https://raw.githubusercontent.com/maxwellito/vivus/master/src/vivus.js"></script>
    <script src="js/vivus.js"></script>
    <script src="https://raw.githubusercontent.com/maxwellito/vivus/master/src/pathformer.js"></script>
    <script src="js/pathformer.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">  
    <link rel="stylesheet" href="min/font-awesome-animation.min.css">

   <!-- <link rel="stylesheet" href="index.css"> -->
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/topnav.css">
    <link rel="stylesheet" href="css/style_block7.css">
    <link rel="stylesheet" href="css/aboutUs.css">
    <link rel="stylesheet" href="css/speakers.css">

</head>

<body >
 
<div class="grid-container">
<!-- Fixed top navigation menu -->
  <?php include("topnav.php"); ?>

  <div class="nav_spacer_top">
      &nbsp
  </div>

<!-- modal class -->
  <?php include("modal.php"); ?>

<!-- speaker blocks -->

<br><br>
<div id="speaker1" class="speaker1 ">
  
  <div id="img-div" class="align-self-center">
    <img id="image" src="images/leadership_improv.jpg" alt = "pic from flickr">
  </div>


  <div id="speaker-info">
    
    <ul>
      <h1 id="headline" >Mr. Rishabh Banerjee</h1>
      <summary>Sniper with Pineapple.</summary>
      <li><strong>1999</strong> - Born in Mumbai, Maharashtra</li>
      <li><strong>2010</strong> - Downloaded Steam.
      The four laws of thermodynamics define fundamental physical quantities (temperature, energy, and entropy) that characterize thermodynamic systems at thermal equilibrium. ... Third law of thermodynamics: The entropy of a system approaches a constant value as the temperature approaches absolute zero.</li>
      <li><strong>2012</strong> - Downloaded Fortnite.
      Brandon Stark, commonly called Bran, is the fourth child and second son of Eddard and Catelyn Stark. Bran is a warg and currently the new Three-Eyed Raven, using his supernatural gifts to assist his family in the war against the White Walkers.</li>
      <li><strong>2019</strong> - Camping since then.</li>
    </ul>

    <blockquote>
      <p>Don't play with him.</p>
      <div>-- The Steam Community</div>
    </blockquote>
  </div>
</div>

<div class="nav_spacer_bottom">
    &nbsp
</div>
    <div class="item7"  id="item7" style=" background-color: black;">
        <div class="footer_block7" >
            <?php include("footer.php"); ?>
    	   </div>
		</div>
</div>

<script type="text/javascript">
    function centerModal() {
        $(this).css('display', 'block');
        var $dialog = $(this).find(".modal-dialog");
        var offset = ($(window).height() - $dialog.height()) / 2;
        // Center modal vertically in window
        $dialog.css("margin-top", offset);
    }

    $('.modal').on('show.bs.modal', centerModal);
    $(window).on("resize", function () {
        $('.modal:visible').each(centerModal);
    });
    function myFunction() {
      var x = document.getElementById("myTopnav");
      if (x.className === "topnav") {
        x.className += " responsive";
      } else {
        x.className = "topnav";
      }
    }
  </script>

</body>
</html>