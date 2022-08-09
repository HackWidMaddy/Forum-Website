

<!doctype html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>IForum - Discuss Coding</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-gH2yIJqKdNHPEq0n4Mqa/HGKIhSkIHeL5AyhkYV8i59U5AR6csBvApHHNl/vI1Bx" crossorigin="anonymous">
        <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.11.5/dist/umd/popper.min.js" integrity="sha384-Xe+8cL9oJa6tN/veChSP7q+mnSPaj5Bcu9mPX5F5xIGE0DVittaqT5lorf0EI7Vk" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.min.js" integrity="sha384-ODmDIVzN+pFdexxHEHFBQH3/9/vQ9uori45z4JjnFsRydbmQbmL5t1tQ0culUzyK" crossorigin="anonymous"></script>
<link rel="icon" href="gc.jpg" type="image/x-icon">

<style>

    </style>

    </head>

<body>
    <?php
include 'partials/_header.php';
include 'partials/dbconnect.php'
?>
<div class="container" id="container" style="min-height:100vh;">
<h1 class="py-2">Search Results For <em>"<?php echo htmlspecialchars($_GET['search']) ?>"</em></h1>

<?php


$noresult = true;

$query = htmlspecialchars($_GET['search']);
$query2 =  htmlspecialchars($query);
$sql = "SELECT * FROM threads WHERE match (thread_title,thread_description) against ('$query2')";
$result = mysqli_query($conn,$sql);
$num = mysqli_num_rows($result);
if ($num>0) {

while ($row = mysqli_fetch_assoc($result)) {
   $noresult = false;
    $title = $row['thread_title'];
$description = $row['thread_description'];
$thread_id = $row['thread_id'];

  //display search result
echo '<div class="container my-3" style="border:3px black solid; border-radius:10px;">

<div class="result">
<h3><a href="http://localhost/forum/thread.php?threadid=' .$thread_id . '" class="text-dark">' . $title . '</a></h3>
<p>' .$description.' </p>

</div>
</div>
';








}



}


echo '<br>';
if ($noresult) {
    echo '<div class="container" style="min-height:100vh;"><div class="container jumbotron jumbotron-fluid" style="background-color:lightgrey; width:1000px; border-radius:25px;">
    <div class="container p-3">
      <h1 class="display-4">No results found</h1>
      <p class="lead">
      
      Suggestions:
<br>
    <li>Make sure that all words are spelled correctly.</li>
    <li>Try different keywords.</li>
    <li>Try more general keywords.</li>
      
      </p>
    </div>
    </div>
    </div>
    ';
}

?>

</div>

<!-- search results -->



    <?php
include 'partials/_footer.php';
?>




    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.0/dist/js/bootstrap.bundle.min.js"
        integrity="sha384-A3rJD856KowSb7dwlZdYEkO39Gagi7vIsF0jrRAoQmDKKtQBHUuLZ9AsSv4jD4Xa" crossorigin="anonymous">
    </script>
</body>

</html>