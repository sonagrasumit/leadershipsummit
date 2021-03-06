
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
    <link rel="stylesheet" href="css/aboutUs.css">

  
</head>

 
<div class="grid-container">

  <?php include("topnav.php"); ?>

  <div class="nav_spacer_top">
      &nbsp
  </div>

  <?php include("modal.php"); ?>

<br><br>

  <div class="top-left" id="content">
    <br>
    <h1 style="text-align: left;">ABOUT US</h1><br>
  	St. Xavier’s College (Autonomous), Mumbai, one of the oldest and most prestigious colleges in India, offers courses in Arts, Commerce, Science, Management Studies, Information Technology and Mass Media. Founded by the Jesuits in 1869, the college has upheld the Jesuit values on the basis of which it was started. The college is a part of the worldwide group of Jesuit institutions, numbering over 100. In the U.S.A the Jesuits have 28 colleges, the George Town college and Boston College to name a few. 
The college motto is ‘Provocans Ad Volandvm’, which means ‘Provoke to Fly’. This very spirit is reflected by over 2,700 students who are a part of this institution. The college continues to reach new heights in the fields of higher secondary, undergraduate and postgraduate studies and research. Eminent alumni of the college include Azim Premji, Zubin Mehta, Soli Sorabjee, Shabana Azmi, and the Late Alyque Padamsee, amongst others</div>

<div class="nav_spacer_bottom">
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
      if (y.className === "top-left") {
        y.className += " new_margin";
      } else {
        y.className = "top-left";
      }
    
    }

  </script>

</body>
</html>