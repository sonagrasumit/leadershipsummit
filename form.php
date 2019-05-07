


<html>
<style>

html,body{
  font-family:"Lora";
  font-size: 20px;
  text-align:center;
  min-width:400px;
  color:#333;
}

#main{
  margin:10px auto;
  padding:15px;
  border:0px solid;
  border-radius:10px;
}

h1{
  font-family: "Cinzel";
  font-weight: normal;
  color: #CFA057;
}
#image{
    width: 400px;
    height: 400px;
    position: relative;
    overflow: hidden;
    border:7px solid #CFA057;
    border-radius: 50%;
    display: block;
    margin-top: 10%;
    margin-left: 8%;
    margin-bottom: 10%;
}

#img-div{
  width: 50%;
  float: left;
}

#speaker-info{
  float: left;

}

img {
    display: inline;
    margin: 45 auto;
    height: 100%;
    width: auto;
}

#img-caption{
  margin:15px;
  margin-top: -15px;
  font-family: Cinzel;
  color: #CFA057;
  font-size: 20px;
}
#headline{
  margin-top:50px;
  text-align:left;
  color: #CFA057;
}
ul{
  max-width:550px;
  margin:0 auto;
  text-align:left;
}
li{
  margin: 10px;
}
blockquote{
  font-style: italic;
  float: right;
}
.striped-border {
    border: 1px dashed #000;
    width: 50%;
    margin: auto;
    margin-top: 5%;
    margin-bottom: 5%;
}
hr{
  width: 100%;
  display: inline-block;
  color: #CFA057;
  height: 3px;
  background-color: #CFA057;
}
#speaker1{
  position: relative;
}
</style>
<link rel="icon" href="images/LeadershipLogo.png">
    <link rel="stylesheet" href="css/css_reset.css">
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_block1.css">
    <link rel="stylesheet" href="css/style_block2.css">
    <link rel="stylesheet" href="css/style_block5.css">
    <link rel="stylesheet" href="css/style_block7.css">
    <link rel="stylesheet" href="css/card.css">
    <link rel="stylesheet" type="text/css" href="css/form.css">
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
    

    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<body>
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
<style type="text/css">
  .modal-body{
    margin-top: 100px;
    
    background-color: transparent;
  }
  .modal-content{
    border:none;
    background-color: transparent;
  }
.modal-backdrop{
  opacity:0; transition:opacity .2s;
}
.modal-backdrop.in{
  opacity:.7;
}

.social {
  width: 100%;
  background-color: #FFF;
  overflow: auto;
}

/* Navigation links */
.social a {
  float: left;
  padding: 12px;
  color: white;
  text-decoration: none;
  font-size: 17px;
  width: 25%; /* Four equal-width links. If you have two links, use 50%, and 33.33% for three links, etc.. */
  text-align: center; /* If you want the text to be centered */

}

/* Add a background color on mouse-over */
.social a:hover {
  background-color: #000;
}


/* Add responsiveness - on screens less than 500px, make the navigation links appear on top of each other, instead of next to each other */
@media screen and (max-width: 500px) {
  .social a {
    float: none;
    display: block;
    width: 100%;
    text-align: left; /* If you want the text to be left-aligned on small screens */
  }
}
</style>  
</head>
<body style = "min-width: 650px;">
 


<div class="topnav" id="Topnav" style = "right: -3px right: -3px; margin-top: 0px; padding-top: 10px; padding-bottom: 10px; top: 0px;">
    <a href="index_main.php" style = "color: #916b2f">Home</a>
    <a href="aboutus.php" style = "color: #916b2f">About Us</a>
    <a href="speakers.php" style = "color: #916b2f">Speakers</a>
    <a href="sponsors.php" style = "color: #916b2f">Sponsors</a>
    <a href="form.php" style = "color: #916b2f; border-right: none;">Contact</a>
    <button class="button button4" data-toggle = "modal" data-target = "#myModal" data-backdrop = "true">Attend</button>
    <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>

</div>

<div id="myModal" class="modal fade" tabindex="-1" role="dialog" aria-labelledby="myModalLabel" aria-hidden="true">
  <div class="modal-dialog">
    <div class="modal-content">
        <div class="modal-body">
            <img src="ticket.png" class="img-responsive"  style = "margin-left: -200px;height: 300px; width:846px;" usemap="#mapname">
            <map name="mapname" id="mapname">
        <area alt="" title="" href="#" shape="rect" coords="140,190,250,225" style="cursor: pointer;" />
    
        </map>
        </div>
    </div>
  </div>
</div>
<br><br>

<div id="container">
  <h1>&bull; CONTACT US &bull;</h1>
  <div class="underline">
  </div>
  <form action="#" method="post" id="contact_form" style = "background-color: white;">
    <div class="name">
      <label for="name"></label>
      <input type="text" placeholder="My name is" name="name" id="name_input" required>
    </div>
    <div class="email">
      <label for="email"></label>
      <input type="email" placeholder="My e-mail is" name="email" id="email_input" required>
    </div>
    <div class="telephone">
      <label for="name"></label>
      <input type="text" placeholder="My number is" name="telephone" id="telephone_input" required>
    </div>
    <div class="message">
      <label for="message"></label>
      <textarea name="message" placeholder="I'd like to chat about" id="message_input" cols="30" rows="5" required></textarea>
    </div>
    <div class="submit">
      <input type="submit" value="Send Message" id="form_button" />
    </div>
  </form><!-- // End form -->
</div><!-- // End #container -->
<div class="social" style="height: 20%;">
  <a class="active_social" href="#"><img src="images/facebook.png" style="height: 50px;"></a>
  <a href="#"><img src="images/twitter.png" style="height: 50px;"></a>
  <a href="#"><img src="images/linkedin.png" style="height: 50px;"></a>
  <a href="#"><img src="images/instagram.png" style="height: 50px;"></a>
</div>

<div class="item7"  id="item7" style="margin-top: -5px;" >
        <div class="margin_class" style="margin-top: 5px;">
        <div class="footer_block7" >
            <?php include("footer.php"); ?>
        <div>
        </div>
    </div>
</div>
</body>
</html>