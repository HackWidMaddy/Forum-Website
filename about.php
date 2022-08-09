
<?php
error_reporting(0);

if ($_SERVER['REQUEST_METHOD'] == 'POST') {

  
$email = $_POST['subscriptionemail'];



$fulltxt = "Mail form greencat's forum website \n\n  There is an subscription email for you \n\n\n" . $email. "\n\n\n Thank you";



  
$to = "00000superman@gmail.com";
$subject = "Mail form greencat forum";
$txt = "$txt";

$mailresult = mail($to,$subject,$fulltxt);


if ($mailresult) {


  echo ' <div class="alertt">
  <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
  Your form is submitted successfully we will reach you soon
</div> ';
}
else {
 

  echo ' <div class="alert">
  <span class="closebtn" onclick="this.parentElement.style.display="none";">&times;</span>
  Sorry we are running through some problem try again after some time
</div> ';
}
}

?>





<!DOCTYPE html>
<html>
<head>
<title>About Us</title>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>
<link rel="shortcut icon" href="gc.jpg" type="image/x-icon">
<style>
html{
  scroll-behavior: smooth;
}

 .alert {
  padding: 20px;
  background-color: #f44336; 
  color: white;
  margin-bottom: 15px;
}

.alertt {
  padding: 20px;
  background-color: green; 
  color: white;
  margin-bottom: 15px;
}
.closebtn {
  margin-left: 15px;
  color: white;
  font-weight: bold;
  float: right;
  font-size: 22px;
  line-height: 20px;
  cursor: pointer;
  transition: 0.3s;
}

.closebtn:hover {
  color: black;
} 

h1,h2,h3,h4,h5,h6 {font-family: "Oswald"}
body {font-family: "Open Sans"}
</style>


<style>
.alert {
  opacity: 1;
  transition: opacity 0.6s; 
}
</style>

<script>
var close = document.getElementsByClassName("closebtn");
var i;

for (i = 0; i < close.length; i++) {
  close[i].onclick = function(){

    var div = this.parentElement;

    div.style.opacity = "0";

    setTimeout(function(){ div.style.display = "none"; }, 600);
  }
}
</script>
</head>
<?php
include 'partials/_header.php';
include 'partials/dbconnect.php';
?>
<body class="w3-light-grey" style="z-index:0;">


  
<div class="w3-content" style="max-width:1600px">

  <header class="w3-container w3-center w3-padding-48 w3-white">
    <h1 class="w3-xxxlarge"><b>GreenCat</b></h1>
    <h6>Welcome to the <span class="w3-tag">GreenCat's world</span></h6>
  </header>

  <header class="w3-display-container w3-wide" id="home">
    <img class="w3-image" src="bg.png" alt="bg" width="1600" height="1060">
    <div class="w3-display-left w3-padding-large">
      <h1 class="w3-text-white">GreenCat's</h1>
      <h1 class="w3-jumbo w3-text-white w3-hide-small"><b>Coding Forum</b></h1>
      <h6><button class="w3-button w3-white w3-padding-large w3-large w3-opacity w3-hover-opacity-off" onclick="document.getElementById('subscribe').style.display='block'">SUBSCRIBE</button></h6>
    </div>
  </header>

  <div class="w3-row w3-padding w3-border">

    <div class="w3-col l8 s12">
    
      <div class="w3-container w3-white w3-margin w3-padding-large">
        <div class="w3-center">
          <h3>About Us</h3>
        </div>

        <div class="w3-justify">
          <img src="https://cloudfront-us-east-1.images.arcpublishing.com/coindesk/CEH5YZ3BWRCY7KUTYVPVZ3N5TU.jpg" alt="Girl Hat" style="width:100%" class="w3-padding-16">
          <p><strong>More Hats!</strong> Hello there wanna know about us so lets begin so hello i am <b>Madhav Shah</b> An computer science student developed this website to help others with coding related problems especially my friends who spen a lots of hours on coding to find a bug this webesite would help us all just all i need is a little support so i can take this website to next level help us by donating <a href="https://greencatarticles.wordpress.com/solana-and-ethereum-wallet-address/" target="_blank">Donation Link</a>
          </p>
          <p>Thank You <br> <u>Madhav Shah</u></p>
          <p class="w3-left"><button class="w3-button w3-white w3-border" onclick="likeFunction(this)"><b><i class="fa fa-thumbs-up"></i> Like</b></button></p>
          <p class="w3-clear"></p>
          <div class="w3-row w3-margin-bottom" id="demo1" style="display:none">
            <hr>
                       </div>
        </div>
      </div>

      
    </div>

    <div class="w3-col l4">
      <div class="w3-white w3-margin">
        <img src="gc.jpg" alt="Jane" style="width:100%" class="w3-grayscale">
        <div class="w3-container w3-black">
          <h4>Madhav Shah</h4>
          <p>Just me, myself and I, exploring the universe of uknownment. I have a heart of love and a interest of  Hacking,programming etc. I want to share my world with you.</p>
        </div>
      </div>
      <hr>

      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Popular Blogs</h4>
        </div>
        <ul class="w3-ul w3-hoverable w3-white">
    <a href="https://greencatarticles.wordpress.com/ransomeware/" class="text-dark" style="text-decoration: none;" target="_blank">      <li class="w3-padding-16">
            <img src="https://greencatarticles.files.wordpress.com/2022/04/wana_decrypt0r_screenshot.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Ransomeware</span>
            <br>
            <span>Ransomware is a type of malware introduced in the year 1989. Ransomware encrypts the file and does not let the user open the file unless and until Ransome is paid through some cryptocurrency here the cryptocurrency are used as it is untraceable the user using cyptowallet. It is not recommended...</span>
          </li></a>
         <a href="https://greencatarticles.wordpress.com/eternalblue/" class="text-dark" style="text-decoration: none;"> <li class="w3-padding-16" target="_blank">
            <img src="https://greencatarticles.files.wordpress.com/2022/07/ff5ab-1xjecl9n0ryrftiir7ylf0a.png" alt="Image" class="w3-left w3-margin-right" style="width:50px">
            <span class="w3-large">Eternal Blue</span>
            <br>
            <span>Eternal blue is a window’s exploit developed by the NSA(US National Security Agency ) in the year  April 14, 2017, spending decades in research to find out this type of vulnerability type which is RCE...</span>
          </li>
</a>
        </ul>
      </div>
      <hr>

   
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Tags</h4>
        </div>
        <div class="w3-container w3-white">
          <p>
            <span class="w3-tag w3-black w3-margin-bottom">GreenCat</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">WebDev</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">TryHackMe</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Kali</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">EthicalHacking</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">tech</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">Ideas</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">coding</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">software</span>
            <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">programming</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">geek</span> <span class="w3-tag w3-light-grey w3-small w3-margin-bottom">technology</span>
         
          </p>
        </div>
      </div>
      <hr>

      
      <div class="w3-white w3-margin">
        <div class="w3-container w3-padding w3-black">
          <h4>Subscribe</h4>
        </div>
        <div class="w3-container w3-white">
          <p>Enter your e-mail below and get notified on the latest blog posts.</p>
          <form action="about.php" method="POST">
          <p><input class="w3-input w3-border" type="email" placeholder="Enter e-mail" style="width:100%" name="subscriptionemail"></p>
          <p><button type="submit">Subscribe</button></p>
</form>
        </div>
      </div>

    </div>

  </div>

</div>

<div id="subscribe" class="w3-modal w3-animate-opacity">
  <div class="w3-modal-content" style="padding:32px">
    <div class="w3-container w3-white">
      <i onclick="document.getElementById('subscribe').style.display='none'" class="fa fa-remove w3-transparent w3-button w3-xlarge w3-right"></i>
      <h2 class="w3-wide">SUBSCRIBE</h2>
      <p>Join my mailing list to receive updates on the latest blog posts and other things.</p>
      <form action="about.php" method="POST">
      <p><input class="w3-input w3-border" type="email" placeholder="Enter e-mail" name="subscriptionemail"></p>
      <button type="submit" class="w3-button w3-block w3-padding-large w3-red w3-margin-bottom" onclick="document.getElementById('subscribe').style.display='none'">Subscribe</button>
      </form>
    </div>
  </div>
</div>

<!-- Footer -->
<?php
include 'partials/_footer.php';
?>


<script>
// // Toggle between hiding and showing blog replies/comments
// document.getElementById("myBtn").click();
// function myFunction(id) {
//   var x = document.getElementById(id);
//   if (x.className.indexOf("w3-show") == -1) {
//     x.className += " w3-show";
//   } else { 
//     x.className = x.className.replace(" w3-show", "");
//   }
// }

function likeFunction(x) {
  x.style.fontWeight = "bold";
  x.innerHTML = "✓ Liked";
}
</script>

</body>
</html>
