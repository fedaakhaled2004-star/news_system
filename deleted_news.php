<?php

include 'config.php';

$sql = "SELECT * FROM news
        WHERE status='deleted'";

$result = mysqli_query($conn,$sql);

?>

<!DOCTYPE html>
<html>

<head>

    <title>Deleted News</title>

</head>

<body>

<h2>Deleted News</h2>

<table border="1" cellpadding="10">

<tr>

    <th>ID</th>

    <th>Title</th>

    <th>Details</th>

</tr>

<?php

while($row = mysqli_fetch_assoc($result)){

?>

<tr>

    <td><?php echo $row['id']; ?></td>

    <td><?php echo $row['title']; ?></td>

    <td><?php echo $row['details']; ?></td>

</tr>

<?php } ?>

</table>

</body>

</html>