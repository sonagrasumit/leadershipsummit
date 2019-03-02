<!DOCTYPE html>
</section>
<html>
<head>
    <title>Leadership Summit</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_block1.css">
    <link rel="stylesheet" href="css/style_block6.css">
    <link rel="stylesheet" href="css/style_block7.css">
    <link rel="stylesheet" href="min/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">  
    <link rel="stylesheet" href="min/font-awesome-animation.min.css">	
   <!-- <link rel="stylesheet" href="index.css"> -->
    <link rel="stylesheet" href="min/bootstrap.min.css">  
    <script src="min/jquery-1.10.2.min.js"></script>   	
</head>
<body>
 

<header class="headers">
    <div class="header_inner_grid">
        <div class="header_sxc"><a href="http://xaviers.edu/">St. Xavier College (Autonomous)<br>Mumbai</a></div>
        <div class="header_logo"><img src="images/logo.png" alt="Logo of St. Xavier's College"/></div>
        <div class="header_contact">Contact</div>
    </div>
</header>

<div class="grid-container">
 <!--   <div class="item1">
        <div class="header_inner_grid">
            <div class="header_sxc"><a href="http://xaviers.edu/">St. Xavier College (Autonomous)<br>Mumbai</a></div>
            <div class="header_logo"><img src="images/logo.png" alt="Logo of Saint Xavier College, Mumbai"/></div>
            <div class="header_contact">Contact</div>
        </div>
    </div>

-->

    <!--<div class="item1"></div>-->
    <div class="item2" style = "margin-top: -100px;">
        <h3>About Xaviers</h3>
        <p>ST. Xavier's College (Autonomous), Mumbai, one of the oldest and most pretigious colleges in India, offers courses in Arts, Commerce, Science Management Studies, Information Technology and Mass Media. Founded by the Jesuits in 1869, the college has upheld the Jesuit values on the basis of which it was started.</p>
    </div>   
    <div class="item3">
            <div class="speakers_inner_grid">
                <div class="speaker1">S1</div>
                <div class="speaker2">S2</div>
                <div class="speaker3">S3</div>
            </div>        
    </div>


    <div class="item4">Workshops and Talks</div>
    <div class="item5">

    <img class="imgs" src="images/zomato.svg" width="100px" height="100px">
    <img class="imgs" src="images/zomato.svg" width="100px" height="100px">
    <img class="imgs" src="images/zomato.svg" width="100px" height="100px">
    <img class="imgs" src="images/zomato.svg" width="100px" height="100px">
    


    </div>
    
    
    <!-- Contact form and and get in touch -->
    <div class="item6">
        <div class="contact_form">
        <form method="post" action="" align="left">
                <h3 align="center"> Contact Us </h3>
                <div class="formss">
				<div>                
                	<label>NAME* </label>
               	 	<input type="text" name="user_email" class="form-control" id="user-name" placeholder="Name" width="300px" required/>
                </div><br>
				<div>
					<label>ORGANIZATION : </label>
                	<input type="password" name="user_org" class="form-control" id="user-org" placeholder="Organisation">
                </div><br>
                <div>
					<label>EMAIL ADDRESS* : </label>
                	<input type="password" name="user_email" class="form-control" id="user-email" placeholder="Email" required>
                </div><br>
                <div>
					<label>ABOUT YOURSELF : </label>
                    <textarea type="text" name="user_about" class="form-control" id="user-about" required ></textarea>
                </div>
				<br>
				<div>
                	<input type="submit" name="btn_submit" class="btn_form " id="submit_btn" placeholder="Email" width="200px" value="SUBMIT" required>
				</div>
				</div>
			</form>

        </div>
<!-- Make this block responsive -->
        <div class="in_touch">

        <h3>Get Your Passes Now!</h3>
        <div class="passes_inner_class">
            <div class="card card1" >
                <div class="card-body">
                    <h5 class="card-title">Early Bird</h5><br>
                    <p class="card-text">This is a dummy text for regular passes I hope they give us content soon</p>
                    
                </div>
            </div>
            <div class="card card2" >
                <div class="card-body">
                    <h5 class="card-title">Regular</h5><br>
                    <p class="card-text">This is a dummy text for regular passes I hope they give us content soon</p>
                    
                </div>
            </div>
        </div>
            <a href="#" class="btn_in_touch " id="buy_ticket">Buy Now</a>
        </div>
        
    
    </div>
    
    
    <!-- Footer block -->
    <div class="item7">
        <div class="footer_block7">
            <?php include("footer.php"); ?>
        <div>
    </div>
</div>



</body>
</html>
