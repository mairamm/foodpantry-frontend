<?php

function emptyField($prodid) {
    $result;
    if (empty($prodid)) {
        $result = true;
    } else {
            $result = false;

    }
    return $result;
}

function deleteItem($connection, $prodid) {
    $sql = "DELETE FROM inventory WHERE `prod-id` = ?;";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Delete failed: (". $stmt->errno.") " .$stmt->error. "<br>";
        exit();
        } else {

        mysqli_stmt_bind_param($stmt, "s", $prodid);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../staff/staffDelete.php?error=success");
        echo"Item Deleted!";
        exit();
        }
    }
