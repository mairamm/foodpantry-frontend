<?php
// This function is made to check if update inventory items fields are empty or not
function updateInvEmpty($prodid, $brandid, $quantity, $pointcost, $expirationdate, $brandname,$producetype) {
    if (empty($prodid) || empty($brandid) || empty($quantity) || empty($pointcost) || empty($expirationdate)    || empty($brandname) || empty($producetype)) {
        $result == true;
    } else {
            $result == false;
    }
    return $result;
}

// This function is made to update inventory items based on the selected product id
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

// Function to check if product id field is empty or not
function prodidEmpty($prodid) {
        $result
        if (empty($prodid){
            $result == true;
        } else {
                $result == false;
        }

        return $result;
}

// Function to check if product id field is empty or not (SAME AS prodidEmpty?)
function emptyField($prodid) {
    $result;
    if (empty($prodid)) {
        $result = true;
    } else {
            $result = false;

    }
    return $result;
}

// Function to delete item from inventory
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
