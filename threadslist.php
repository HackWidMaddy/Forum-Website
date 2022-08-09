<?php

include 'partials/dbconnect.php';
$showalert = false;

if ($_SERVER['REQUEST_METHOD'] == 'POST') {
//insert thred into db

$id = $_GET['catid'];
$sno = $_POST['sno'];

$dhtitle = $_POST['title'];
$dhdesc =  $_POST['description'];

$dhtitle = str_replace("<", "&lt;","$dhtitle");
$dhtitle = str_replace(">", "&gt;","$dhtitle");

$dhdesc = str_replace("<", "&lt;","$dhdesc");
$dhdesc = str_replace(">", "&gt;","$dhdesc");



$sql = "INSERT INTO `threads` (`thread_title`, `thread_description`, `thread_cat_id`, `thread_user_id`, `thread_time`) VALUES ( '$dhtitle', '$dhdesc', '$id', '$sno', current_timestamp())";
$result = mysqli_query($conn,$sql); 

$showalert = true;

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
        <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Oswald">
<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Open Sans">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous"></script>

        <link rel="icon" href="gc.jpg" type="image/x-icon">

    <style>
    #ques {
        min-height: 433px;
    }
    </style>

</head>

<body class="w3-light-grey">
    <?php
include 'partials/_header.php';
include 'partials/dbconnect.php'
?>
<?php
if($showalert){
echo '<div class="alert alert-success alert-dismissible fade show" role="alert">
<strong>Success!</strong> Your thread has been added please wait for community to respond
<button type="button" class="btn-close" data-bs-dismiss="alert" aria-label="Close"></button>
</div>';
}
?>

    <?php



$id = $_GET['catid'];
$sql = "SELECT * FROM `categories` WHERE category_id = $id";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);


if ($num>0) {

while ($row = mysqli_fetch_assoc($result)) {
  $catname = $row['category_name'];
$catdesc = $row['category_description'];
}

}








?>


    <div class="container my-4">
        <div class="jumbotron" style="border: 1px solid black; border-radius:20px;">
            <h1 class="display-4">Welcome to <?php echo $catname; ?> Forums</h1>
            <p class="lead"><?php echo $catdesc; ?></p>
            <hr class="my-4">
            <p>This is a peer to peer forum so you can shre your knowledge. No Spam / Advertising / Self-promote in the
                forums.
                Do not post copyright-infringing material.
                Do not post “offensive” posts, links or images.
                Do not cross post questions.
                Remain respectful of other members at all times.</p>
            <a class="btn btn-success btn-lg" href="#" role="button">Learn More</a>
        </div>



    </div>




<?php

if (isset($_SESSION['loggedin']) && $_SESSION['loggedin']==true ) {


  echo  '<div class="container" id="ques">
  <h1>Start a Discussion</h1>   
  <form action=" ' . $_SERVER["REQUEST_URI"] . '" method="POST">
            <div class="form-group">
                <label for="text">Problem Title</label>
                <input type="text" class="form-control" id="text" name="title">
                <small id="text" class="form-text text-muted">Keep your title as short as possible</small>
            </div>


            <div class="form-group">
                <label for="exampleFormControlTextarea1">Elabourate your consern</label>
                <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                <input type="hidden" name="sno" value="' .  $_SESSION['sno'] . '">

            </div>
            <button type="submit" class="btn btn-success">Submit</button>
        </form>
        </div>';
    }
else {
    echo '
    <div class="container">
    
    <p class="lead">You are not loggedin login start a discussion</p>
    </div>';
}

?>


        <div class="container">
        <h1 class="py-2">Browse Question</h1>



        <?php

$id = $_GET['catid'];
$sql = "SELECT * FROM `threads` WHERE thread_cat_id = $id";
$result = mysqli_query($conn,$sql);

$num = mysqli_num_rows($result);
$noresult = true;


while ($row = mysqli_fetch_assoc($result)) {
  $noresult = false;
  $id = $row['thread_id'];
  $title = $row['thread_title'];
$desc = $row['thread_description'];
$thread_time = $row['thread_time']; 
$thread_user_id = $row['thread_user_id']; 

    $sql2 = "SELECT email FROM users WHERE srno = '$thread_user_id'";
$result2 = mysqli_query($conn,$sql2);
$row2 = mysqli_fetch_assoc($result2);

        
  echo'      <div class="media my-3">
            <img src="//joeschmoe.io/api/v1/jon' . $row2['email'] .'" width="40px" class="mr-3" alt="..."
                style="border: 1px black solid; border-radius:20px;">
                <div class="font-weight-bold my-0">Asked by: ' .$row2['email'] ." at " .  $thread_time . '</div>'. '</div>
            <div class="media-body pb-3">
            <h5 class="mt-0"><a href="thread.php?threadid=' . $id . '" class="text-dark">Title: '.$title .' </a></h5>Description: '

                .$desc.'
               
               
                </div>
        ';

}










if ($noresult) {
echo '<div class="jumbotron jumbotron-fluid">
<div class="container">
  <h1 class="display-4">No question results for this category</h1>
  <p class="lead">Be the first person to ask a question</p>
</div>
</div>';
  
}

?>



    </div>



    <?php
include 'partials/_footer.php';
?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>