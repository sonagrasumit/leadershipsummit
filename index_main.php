<!DOCTYPE html>
</section>
<html>
<head>
    <title>Leadership Summit</title>
    <link rel="icon" href="images/LeadershipLogo.png">
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/style_block7.css">
    <link rel="stylesheet" type="text/css" href=" https://fonts.googleapis.com/css?family=Cinzel">
    <link rel="stylesheet" type="text/css" href=" https://fonts.googleapis.com/css?family=Lora">
    <script src="https://raw.githubusercontent.com/maxwellito/vivus/master/src/vivus.js"></script>
    <script src="js/vivus.js"></script>
    <script src="https://raw.githubusercontent.com/maxwellito/vivus/master/src/pathformer.js"></script>
    <script src="js/pathformer.js"></script>
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">  
    <link rel="stylesheet" href="min/font-awesome-animation.min.css">
    <link rel="stylesheet" href="css/style.css">

	
   <!-- <link rel="stylesheet" href="index.css"> -->
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="css/modal.css">
    <link rel="stylesheet" href="css/topnav.css">



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
    </script>
	

</head>
<body >
 
<div class="grid-container">

<?php include("topnav.php"); ?>

<div class="nav_spacer_top">
    &nbsp
</div>

<?php include("modal.php"); ?>


  <div class="item1"  id="item1">
    <div class="leadership_summit_info">
        <div>
            
        <img src="images/LeadershipLogo5.png" class="summit_logo" width="50%" alt="Logo of Leadership Summit" style = "display: block; margin-left: auto; margin-right: auto;"/><span style="width:1%; display:inline-block;"> </span>
        </div>
            <h3 style="margin-top: -4vh;" 
            > 13th July 2019</h3>
            <br>
            <br>
            <br>
            <p style=""
            align="center"> EARLY BIRD REGISTRATION CLOSES ON 30<sup>TH</sup> MAY 2019</p>
            <div align="center">
            <button class="button button4 "  data-toggle = "modal" data-target = "#myModal" data-backdrop = "true">DONATE</button></div>    
            <br><br>
    </div>
  </div>
  </div>
    
    
    <!-- Footer block -->
    <div class="nav_spacer_top">
    
    </div>
    <div class="item7" id="item7"  align="center" >
        <div class="margin_class">
            <div class="footer_block7" >
                <?php include("footer.php"); ?>
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
