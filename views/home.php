<?php include 'header.php'; ?>

<?php
$id = 1;
$result = findUser($id);
while ($row = mysqli_fetch_assoc($result)) :
    echo $row['name'];
endwhile; //sample function query
?>

<?php include 'footer.php'; ?>