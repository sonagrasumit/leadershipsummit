<?php
if ($_POST){
    $name = $_POST['user_name'];
    $email = $_POST['user_email'];
    $org = $_POST['user_org'];
    $about = $_POST['user_about'];
   
    //$mail_to = "abhijotsasson@icloud.com";
    $mail_to = "shivamc021999@gmail.com";
    $subject = $name." from ".$org;
  
  	$headers = "From: ".$email; // Where the email is sent from.
  
    $txt = "This is a confirmation email regarding your query on Leadership Summit.";

    $link = mysqli_connect('localhost','scicondb_user','redael098','scicondb_user');
    $query = "INSERT into `Contact_Us` (Name, Organisation, Email, Message) values ('$name','$org','$email','$about')";
    
  
  	if($result = mysqli_query($link,$query)){
       echo '<script type="text/javascript">
        alert("Your response has been recorded.");
        </script>';    
    }else{
        echo '<script type="text/javascript">
        alert("Some error occured.");
        </script>';
    }
	/* Mail to admin */
    if(mail($mail_to, $subject, $about, $headers)){
        echo '<script type="text/javascript">
        alert("Mail has been sent.");
        location="index.php";
        </script>';
         /* Home*/
    }else{
       echo '<script type="text/javascript">
        alert("Mail could not be sent.");
        location="index.php";
        </script>';
        /* Home*/

    }
 
  	/* Mail to user */
    if(mail($email, "Leadership Summit" , $txt, $headers)){
        echo '<script type="text/javascript">
        alert("Mail has been sent.");
        location="index.php";
        </script>';
         /* Home*/

    }else{
       echo '<script type="text/javascript">
        alert("Mail could not be sent.");
        location="index.php";
        </script>';
         /* Home*/

    }
   

    }

?>