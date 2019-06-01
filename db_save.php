<?php
if ($_POST){
    $name = $_POST['name'];
    $email = $_POST['email'];
    $number = $_POST['telephone'];
    $message = $_POST['message'];
   
    //$mail_to = "abhijotsasson@icloud.com";
    //$mail_to = "shivamc021999@gmail.com";
    $mail_to = "leadership.summit@xaviers.edu";
    $subject = $name." has posted a query";
  
  	$headers = "From: ".$email; // Where the email is sent from. i.e., the user
  
    $txt = "Hey ".$name.".\n We have received your feedback. \n Thanks for visiting us! \nRegards.";
    
    /* Change this according to server */
    
    $link = mysqli_connect('localhost','leadership','Leadership0','leadership_summit');
    $query = "INSERT into `Contact_Us` (Name, Email, Number, Message) values ('$name','$email','$number','$message')";
    
    /* ....................................................*/
  
  	if($result = mysqli_query($link,$query)){
       echo '<script type="text/javascript">
        alert("Your response has been recorded.");
        location="contact.php";
        </script>';    
    }else{
        echo '<script type="text/javascript">
        alert("Some error occured.");
        location="contact.php";
        </script>';
    }
	/* Mail to admin */
    if(mail($mail_to, $subject, $message, $headers)){
        echo '<script type="text/javascript">
        alert("Mail has been sent.");
        location="contact.php";
        </script>';
         /* Home*/
    }else{
       echo '<script type="text/javascript">
        alert("Mail could not be sent.");
        location="contact.php";
        </script>';
        /* Home*/

    }
 
  	/* Mail to user */
    if(mail($email, "Leadership Summit" , $txt, "leadership.summit@xaviers.edu")){
        echo '<script type="text/javascript">
        alert("Mail has been sent.");
        location="contact.php";
        </script>';
         /* Home*/

    }else{
       echo '<script type="text/javascript">
        alert("Mail could not be sent.");
        location="contact.php";
        </script>';
         /* Home*/

    }
}
?>