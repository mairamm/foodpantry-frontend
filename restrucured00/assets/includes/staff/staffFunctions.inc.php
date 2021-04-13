<?php
// This function is made to check if update inventory items fields are empty or not
function updateInvEmpty($prodid, $brandid, $quantity, $pointcost, $expirationdate, $brandname,$producetype) {
    if (empty($prodid) || empty($quantity) || empty($pointcost) || empty($expirationdate)) {
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
        header("location: ../../../staff/inventoryC/update_item.php?error=failedtoupdate");
        echo "Update failed: (". $stmt->errno.") " .$stmt->error. "<br>";
        exit();
        } else {

        mysqli_stmt_bind_param($stmt, "ssss", $prodid, $quantity, $pointcost, $expirationdate);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../../../staff/inventoryC/update_item.php?error=success");
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
        header("location: ../../../staff/inventoryC/delete_item.php?error=success");
        echo"Item Deleted!";
        exit();
        }
    }

function additemEmpty($prodid, $brandid, $quantity, $pointcost, $expirationdate, $brandname, $producetype, $prodpic) {
    $result;
    if (empty($prodid) || empty($brandid) || empty($quantity) || empty($pointcost) || empty($expirationdate)    || empty($brandname) || empty($producetype) || empty($prodpic)) {
        $result = true;
    } else { 
        $result - false;

    }
    return $result;
}


function addItem($connection, $prodid, $brandid, $quantity, $pointcost, $expirationdate, $brandname, $producetype, $prodpic) {
    $sql1 = "INSERT INTO inventory (`prod-id`, quantity, `point-cost`, `expiration-date`, `prod-pic`) VALUES(?, ?, ?, ?, ?);";
    $sql2 = "INSERT INTO brandType (`brand-id`, `brand-name`, `produce-type`) VALUES(?, ?, ?);";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $sql1)) {
        echo "Add failed: (". $stmt->errno.") " .$stmt->error. "<br>";
        exit();
        } 
        
    if(!mysqli_stmt_prepare($stmt, $sql2)) {
        echo "Add failed: (". $stmt->errno.") " .$stmt->error. "<br>";
        exit();
        } else {

        mysqli_stmt_bind_param($stmt, "ssssssss", $prodid, $brandid, $quantity, $pointcost, $expirationdate,$brandname, $producetype,$prodpic);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../../../staff/inventoryC/add_item.php?error=success");
        echo"Item Deleted!";
        exit();
        }
}
