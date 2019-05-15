
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="images/LeadershipLogo.png">
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/style.css">

    <link rel="stylesheet" type="text/css" href="css/form.css">
    <link rel="stylesheet" type="text/css" href=" https://fonts.googleapis.com/css?family=Cinzel">
    <link rel="stylesheet" type="text/css" href=" https://fonts.googleapis.com/css?family=Lora">
    
    <script src="js/vivus.js"></script>
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
    <link rel="stylesheet" href="css/sponsor.css">

</head>

<body>

<div class="grid-container">

  <?php include("topnav.php"); ?>

  <div class="nav_spacer">
      &nbsp
  </div>

  <?php include("modal.php"); ?>

<br><br>
<div class="sponsor_grid" id="content">
<img src="images/sponsor_accent.png" class="accent-class" alt="Snow" >

      <div class="sponsor_block sponsor_block_1">
      <h1>Mercedes</h1> 
      <img src="images/sponsor/mercedes-logo.png" class="sponsor-logo" alt="Mercedes logo"> 
      </div>
      <div class="sponsor_block sponsor_block_2">
        <h1>Tata</h1>
        <img src="images/sponsor/tata-Logo.jpg" class="sponsor-logo" alt="Tata logo"> 
      </div>
      <div class="sponsor_block sponsor_block_3">
        <h1>Titan</h1>
        <img src="images/sponsor/titan-logo.png" class="sponsor-logo" alt="Titan logo"> 
      </div>
      <div class="sponsor_block sponsor_block_4">
        <h1>Taj</h1>
        <img src="images/sponsor/taj-logo.jpg" class="sponsor-logo" alt="Taj logo"> 
      </div>
      <div class="sponsor_block sponsor_block_5">
        <h1>Times of India</h1>
        <img src="images/sponsor/toi-logo.jpg" class="sponsor-logo" alt="TOI logo"> 
      </div>
      <div class="sponsor_block sponsor_block_6">
        <h1>Vistara</h1>
        <img src="images/sponsor/vistara-logo.png" class="sponsor-logo" alt="Vistara logo"> 
      </div>


      <!--<div class="sponsor_block sponsor_block_7">6</div>
      <div class="sponsor_block sponsor_block_8">7</div>
      <div class="sponsor_block sponsor_block_9">8</div>-->
</div>

<div class="nav_spacer">
    &nbsp
</div>
    <div class="item7"  id="item7" style=" background-color: black;" >
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

      var y = document.getElementById("content");
      if (y.className === "sponsor_grid") {
        y.className += " new_margin";
      } else {
        y.className = "sponsor_grid";
      }
    
    }
  </script>

</body>
</html>