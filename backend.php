<?php
include_once('connection.php');

if (isset($_POST['email'])) {
    $name = mysql_real_escape_string($_POST['email']);

    $sql = 'INSERT INTO querys (email) VALUES ("'.$name.'")';

    if (mysqli_query($conn, $sql)) {
        header('Location: index.php?success');
    } else {
        echo "Error: " . $sql . "<br>" . mysqli_error($conn);
    }
}
?>
