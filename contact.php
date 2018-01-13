<!DOCTYPE HTML>
<html>
<head>
<title>Contact Us</title>
<link href="styles/style.css" rel="stylesheet" type="text/css" media="screen" />
<link rel="icon" href="Images/Title Logo.jpg" type="image/gif" sizes="16x16">
<script>
function validateForm() {
    var nm = document.forms["contactform"]["name"].value;
	var email=document.forms["contactform"]["email"].value; 
	var mes=document.forms["contactform"]["message"].value;
	var atposition=email.indexOf("@");  
	var dotposition=email.lastIndexOf(".");  
    if (nm == "") {
        alert("Name must be filled out");
        return false; } 
	else if(email == "") {
		alert ("Email cannot be left blank");
		return false;}
	else if (atposition<1 || dotposition<atposition+2 || dotposition+2>=email.length)
	{  
 	 alert("Please enter a valid e-mail address");  
  	 return false;  
  	}
	else if (mes == "")
	{alert("Message must have some text");}
}
</script>
</head>
<body>
<div id="container">
  <header>
    <nav>
      <ul id="nav">
        <li><a href="index.html">Home</a></li>
        <li><a href="about.html">About</a></li>
        <li><a href="gallery.html">Gallery</a></li>
        <li><a href="reviews.html">Reviews</a></li>
        <li><a href="contact.php" class="current">Contact</a></li>
      </ul>
    </nav>
  </header>
  <div class="wrapper">
    <div class="border"></div>
    <article>
      <h3>Contact Us</h3>
      <br />
      <p><b><font color="9c5959">Feel free to fill out this and reach out to us:</font></b></p>
      
<?php
mysql_connect("localhost","root","");
mysql_select_db("lemonmint-db");
error_reporting(0);
if(isset($_POST['submit']))
{
 $sql = "INSERT INTO contact (name,subject,email,message) VALUES ('".$_POST['name']."','".$_POST['subject']."','".$_POST['email']."','".$_POST['message']."')"; 
mysql_query($sql);
}
?>

      <form name="contactform" action="#" method="post" onSubmit="return validateForm()">
        <label for="name">Name:</label>
        <br>
	<input type="text" name="name" id="name" value="" tabindex="1" />
        <br>
        <br>
        <label for="name">Subject:</label>
        <br>
        <input type="text" name="subject" id="subject" value="" tabindex="1" />
        <br>
        <br>
        <label for="name">Email:</label>
        <br>
        <input type="text" name="email" id="email" value="" tabindex="1" />
        <br>
        <br>
        <label for="textarea">Message:</label>
        <br>
        <textarea cols="40" rows="8" name="message" id="textares"></textarea>
        <br>
        <br>
        <input type="submit" name="submit" value="Submit" class="button" />
      </form>
      <br>
      <br>
      <br>
    </article>
    <aside class="sidebar">
      <h3>Necessities</h3>
      <ul class="blog">
      <font color="9c5959">  <li><strong>24hrs. Reception Desk</strong><br/></li>
        <li><strong>Travel Desk</strong><br/></li>
        <li><strong>Money Changer</strong><br/></li>
        <li><strong>Laundry</strong><br/></li>
        <li><strong>Free Wi-Fi Internet Facility</strong><br/></li>
        <li><strong>Swimming Pool with Kids Pool</strong><br/></li>
        <li><strong>Restro Bar</strong><br/></li>
        <li><strong>Kids Zone</strong><br/></li>
        <li><strong>Bike and car rental (Assistance)</strong><br/></li>
        <li><strong>Water Sports</strong><br/></li>
        <li><strong>Doctor on call</strong><br/></li>
	</font>
      </ul>
      <div class="border3"></div>
      <h3>Why Us?</h3>
      <img src="images/home/03.jpg" width="280" alt="" />
      <p><strong><font color="9c5959">We assure you of loving memories at The Lemonmint Beach Resort</font></strong> <br></p>
    </aside>
    <div class="border2"></div>
    <br>
  </div>
  <footer>
        <div class="footer-widget">
          <h4>We Are Social!</h4>
          <div id="social"> <a href="https://twitter.com/login" class="s3d twitter" target="_blank"> Twitter <span class="icons twitter"></span> </a> <a href="https://www.facebook.com/" class="s3d facebook" target="_blank"> Facebook <span class="icons facebook"></span> </a> </div>
        </div>
        <br />
        </footer>
</div>
</body>
</html>