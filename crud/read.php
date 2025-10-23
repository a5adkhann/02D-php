<?php
    include("../config/db_connection.php");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Read Operation</title>
</head>
<body>
    <table border="1" cellspacing = "0" cellpadding="50">
        <tr>
            <th>Index</th>
            <th>Name</th>
            <th>Message</th>
            <th>Action</th>
        </tr>
        
        <?php
        echo "<br>";
        $sno = 1;
        $select_query = "SELECT * FROM users";
        $execute = mysqli_query($connection, $select_query);
        // $fetch = mysqli_fetch_array($execute);
        // print_r($fetch);
        while($fetch = mysqli_fetch_array($execute)){
        ?>
        <tr>
            <td><?php echo $sno++?></td>
            <td><?php echo $fetch['name']?></td>
            <td><?php echo $fetch['message']?></td>
            <td>
                <a href="update.php?id=<?php echo $fetch['id']?>">Edit</a>
                <a href="delete.php?id=<?php echo $fetch['id']?>">Delete</a>
            </td>
        </tr>
        <?php
        }
        ?>


    </table>    
</body>
</html>