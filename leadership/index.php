<!DOCTYPE html>
</section>
<html>
<head>
    <title>Leadership Summit</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" href="css/style_block6.css">
    <link rel="stylesheet" href="css/style_block7.css">
    <link rel="stylesheet" href="min/bootstrap.min.css">
    <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.7.0/css/all.css">  
    <link rel="stylesheet" href="min/font-awesome-animation.min.css">
</head>
<body>

<div class="grid-container">
    <div class="item1">        
            <div class="speakers_inner_grid">
                    <div class="speaker1">S1</div>
                    <div class="speaker2">S2</div>
                    <div class="speaker3">S3</div>
            </div>
    </div>


    <div class="item2">About Xavier</div>   
    <div class="item3">
            <div class="speakers_inner_grid">
                <div class="speaker1">S1</div>
                <div class="speaker2">S2</div>
                <div class="speaker3">S3</div>
            </div>        
    </div>


    <div class="item4">Workshops and Talks</div>
    <div class="item5">Sponsers</div>
    
    
    <!-- Contact form and and get in touch -->
    <div class="item6">
        <div class="contact_form">
        <form method="post" action="" align="left">
                <h3 align="center"> Contact Us </h3>
                <div class="formss">
				<div>                
                	<label>NAME* </label>
               	 	<input type="text" name="user_email" class="form-control" id="user-email" placeholder="Name" width="300px" required/>
                </div><br>
				<div>
					<label>ORGANIZATION : </label>
                	<input type="password" name="user_org" class="form-control" id="user-org" placeholder="Organisation" required>
                </div><br>
                <div>
					<label>EMAIL ADDRESS* : </label>
                	<input type="password" name="user_email" class="form-control" id="user-email" placeholder="Email" >
                </div><br>
                <div>
					<label>ABOUT YOURSELF : </label>
                    <textarea type="text" name="user_about" class="form-control" id="user-about" required ></textarea>
                </div>
				<br>
				<div>
                	<input type="submit" name="btn_submit" class="btn btn-primary" id="submit_btn" placeholder="Email" width="200px" value="SUBMIT" required>
				</div>
				</div>
			</form>

        </div>
<!-- Make this block responsive -->
        <div class="in_touch">

        <h3>Get in Touch</h3>
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
