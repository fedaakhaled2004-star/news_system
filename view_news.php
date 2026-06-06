<?php

include 'config.php';

$sql = "SELECT * FROM news";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>

<head>

    <title>View News</title>

</head>

<body>

<h2>All News</h2>

<table border="1" cellpadding="10">

<tr>

    <th>ID</th>

    <th>Title</th>

    <th>Details</th>

    <th>Image</th>

    <th>Delete</th>

</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

    <td><?php echo $row['id']; ?></td>

    <td><?php echo $row['title']; ?></td>

    <td><?php echo $row['details']; ?></td>
    <td>

<img src="images/<?php echo $row['image']; ?>" width="100">

</td>

    <td>

        <a href="delete_news.php?id=<?php echo $row['id']; ?>">

            Delete

        </a>

    </td>

</tr>

<?php } ?>

</table>

</body>

</html>