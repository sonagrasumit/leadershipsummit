
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1">

<link rel="icon" href="images/LeadershipLogo.png">
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/style.css">

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
    <link rel="stylesheet" href="css/contact.css">  
</head>

<body>
 
<div class="grid-container">

  <?php include("topnav.php"); ?>

  <div class="nav_spacer_top">
      &nbsp
  </div>

  <?php include("modal.php"); ?>

<br><br>
<div id="container" class="forms">
<h1>&bull; CONTACT US &bull;</h1>
  <div class="underline">
  </div>
  <form action="db_save.php" method="post" id="contact_form" style = "background-color: white;">
    <div class="name">
      <label for="name_input"></label>
      <input type="text" placeholder="My name is" name="name" id="name_input" required>
    </div>
    <div class="email">
      <label for="email_input"></label>
      <input type="email" placeholder="My e-mail is" name="email" id="email_input" required>
    </div>
    <div class="telephone">
      <label for="telephone_input"></label>
      <input type="text" placeholder="My number is" name="telephone" id="telephone_input" required>
    </div>
    <div class="message">
      <label for="message_input"></label>
      <textarea name="message" placeholder="I'd like to chat about" id="message_input" cols="30" rows="5" required></textarea>
    </div>
    <div class="submit">
      <input type="submit" value="Send Message" id="form_button" />
    </div>
  </form><!-- // End form -->
  </div>
</div>
<div class="social" id="social">
  <a class="active_social" href="https://m.facebook.com/sxcbom/"><img src="images/facebook.png" style="height: 50px;"></a>
  <a href="https://mobile.twitter.com/alumnixaviers"><img src="images/twitter.png" style="height: 60px;"></a>
  <a href="https://www.linkedin.com/school/st.-xavier's-college"><img src="images/linkedin.png" style="height: 50px;"></a>
  <a href="https://instagram.com/sxcbom?igshid=1otsqm4j73u1u"><img src="images/instagram.png" style="height: 50px;"></a>
</div>
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

      var y = document.getElementById("container");
      if (y.className === "forms") {
        y.className += " new_margin";
      } else {
        y.className = "forms";
      }
      var z = document.getElementById("social");
      if (z.className === "social") {
        z.className += " new_margin";
      } else {
        z.className = "social";
      }
    
    }

  </script>
</body>
</html>