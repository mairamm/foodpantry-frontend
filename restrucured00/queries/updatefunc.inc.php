<?php

function updateInventory($connection, $prodid, $quantity, $pointcost, $expirationdate){
    //$sql = "UPDATE inventory SET (quantity,`point-cost`,`expiration-date`) VALUES(?,?,?) WHERE `prod-id` = ?;";
    $sql = "UPDATE inventory SET quantity=?, `point-cost`=?,`expiration-date`=? WHERE `prod-id`=?;";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../staff/staffUpdate.php?error=failedtoupdate");
        echo "Update failed: (". $stmt->errno.") " .$stmt->error. "<br>";
        exit();
        } else {

        mysqli_stmt_bind_param($stmt, "ssss", $prodid, $quantity, $pointcost, $expirationdate);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../staff/staffUpdate.php?error=success");
        echo"Database updated!";
        exit();
        }
    }
