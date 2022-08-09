<?php

include 'partials/dbconnect.php';
$showalert = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//insert thred into commentdb

$id = $_GET['threadid'];

$dhcomment = $_POST['comment'];
// Provides: <body text='black'>
$dhcomment = str_replace("<", "&lt;","$dhcomment");
$dhcomment = str_replace(">","&gt;","$dhcomment");

$sno = $_POST['sno'];

$sql = "INSERT INTO `comment` ( `comment_text`, `thread_id`, `comment_time`, `commentby`) VALUES ( '$dhcomment', '$id', current_timestamp(), '$sno')";
$result = mysqli_query($conn,$sql); 

$showalert = true;

}



?>


<?php



$id = $_GET['threadid'];
$sql = "SELECT * FROM `threads` WHERE thread_id = $id";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);

$noresult = false;

if ($num>0) {

while ($row = mysqli_fetch_assoc($result)) {
  $noresult = true;
    $title = $row['thread_title'];
$description = $row['thread_description'];
$thread_user_id = $row['thread_user_id']; 
    $sql2 = "SELECT email FROM users WHERE srno = '$thread_user_id'";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);
$postedby = $row2['email'];


}

}








?>
<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IForum - Discuss Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"
        integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous">
    </script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-ho+j7jyWK8fNQe+A12Hb8AhRq26LrZ/JpcUGGOn+Y7RsweNrtN/tE3MoK7ZeZDyx" crossorigin="anonymous">
    </script>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/css/bootstrap.min.css"
        integrity="sha384-TX8t27EcRE3e/ihU7zmQxVncDAy5uIKz4rEkgIXeMed4M0jlfIDPvg6uqKI2xXr2" crossorigin="anonymous">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <link rel="icon" href="gc.jpg" type="image/x-icon">
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        <link rel="icon" href="gc.jpg" type="image/x-icon">

</head>

<body class="w3-light-grey">
    <?php
include 'partials/_header.php';
include 'partials/dbconnect.php'
?>
    <?php

if ($showalert) {
    if($showalert){
        echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
        <strong>Success!</strong> Your comment has been
        <button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
        </div>';
        }
}

?>
<!-- Lorem ipsum dolor sit, amet consectetur adipisicing elit. Rerum optio temporibus praesentium doloribus maiores! Quidem mollitia quis rerum architecto molestiae ipsam possimus repudiandae labore ipsa, quae quasi aliquid suscipit excepturi, adipisci incidunt quisquam tenetur! Eligendi, possimus? Animi, facilis nisi. Quibusdam libero veritatis dignissimos quae iure eius. Veritatis praesentium pariatur soluta ipsam voluptas molestiae eos, repellat quam ipsa vero nemo ducimus facere quae, voluptates nam culpa doloremque aperiam modi qui id similique vitae deserunt esse? Ratione quas dicta quod ad libero totam cumque. Eos quod atque explicabo laboriosam, illo dignissimos eius deleniti non ducimus fugiat harum praesentium sit dolor labore deserunt. -->


    <div class="container my-5">
        <div class="jumbotron" style="border: 1px solid black; border-radius:20px;">
            <h1 class="display-4"><?php echo $title; ?></h1>
            <p class="lead"><?php echo $description; ?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum so you can shre your knowledge. No Spam / Advertising / Self-promote in the
                forums.
                Do not post copyright-infringing material.
                Do not post “offensive” posts, links or images.
                Do not cross post questions.
                Remain respectful of other members at all times.</p>
            <a class="btn btn-success btn-lg" href="#" role="button">Posted By <?php echo $postedby; ?></a>
        </div>



    </div>

<?php


if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true ) {


    echo  '    <div class="container mb-5" id="ques">
    <form action="' . $_SERVER['REQUEST_URI']  . '" method="POST">
        <h1>POST A COMMENT</h1>


        <div class="form-group">
            <label for="exampleFormControlTextarea1">Post Comment</label>
            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="comment"></textarea>
         <input type="hidden" name="sno" value="' .  $_SESSION['sno'] . '">
        </div>
        <button type="submit" class="btn btn-success">Post comment</button>
    </form>
</div>
';
      }
  else {
      echo '
      <div class="container">
      
      <p class="lead">You are not loggedin login start a discussion</p>
      </div>';
  }
  

?>





    <div class="container mb-5" style="min-height:444px;">

        <h1 class="py-2">Discussion</h1>

        <?php

$id = $_GET['threadid'];
$sql = "SELECT * FROM `comment` WHERE thread_id = $id";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
$noresult = true;

if ($num>0) {

while ($row = mysqli_fetch_assoc($result)) {
  $noresult = false;
  $id = $row['comment_id'];
    $content = $row['comment_text'];
    $comment_time = $row['comment_time'];
$thread_user_id = $row['commentby']; 

    $sql2 = "SELECT email FROM users WHERE srno = '$thread_user_id'";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);

        
  echo'      <div class="media my-3">
            <img src="//joeschmoe.io/api/v1/'.$row2['email'].'" width="40px" class="mr-3" alt="..."
                style="border: 3px black solid; border-radius:20px;">   
            <div class="media-body">
            
        <p class="font-weight-bold my-0">' . $row2['email'] . '  '  .$comment_time . ' </p> ' 
            
            .$content. '
               
                </div>
        </div>';


}

}




if ($noresult) {
    echo '<div class="jumbotron jumbotron-fluid">
    <div class="container">
      <h1 class="display-4">No comments for this category</h1>
      <p class="lead">Be the first person to comment</p>
    </div>
    </div>';
      
    }
    

?>

    </div>

</div>



    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
    
    <?php
include 'partials/_footer.php';
?>


</body>

</html>