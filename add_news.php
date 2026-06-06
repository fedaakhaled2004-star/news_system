<?php

include 'config.php';

if(isset($_POST['submit']))
{
    $title = $_POST['title'];

    $details = $_POST['details'];

    $image = $_FILES['image']['name'];

    $tmp = $_FILES['image']['tmp_name'];

    move_uploaded_file($tmp,"images/".$image);

    $sql = "INSERT INTO news(title,details,image)
            VALUES('$title','$details','$image')";

    mysqli_query($conn,$sql);

    header("Location:view_news.php");
}

?>

<!DOCTYPE html>
<html>

<head>
    <title>Add News</title>
</head>

<body>

<h2>Add News</h2>

<form method="POST" enctype="multipart/form-data">

    <input type="text" name="title" placeholder="News Title">

    <br><br>

    <textarea name="details" placeholder="News Details"></textarea>

    <br><br>

    <input type="file" name="image">

    <br><br>

    <input type="submit" name="submit" value="Add News">

</form>

</body>
</html>