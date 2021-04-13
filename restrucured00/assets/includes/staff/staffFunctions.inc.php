<?php

//functions below handle inventory stuff

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

// Functions below all handle consumer stuff

function emptyQRcode($QRcode) {
    $result;
    if (empty($prodid)) {
        $result = true;
    } else {
            $result = false;

    }
    return $result;
}


function deleteIndividual($connection, $QRcode) {
    $sql = "DELETE FROM individual WHERE QRcode = ?;";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        echo "Delete failed: (". $stmt->errno.") " .$stmt->error. "<br>";
        exit();
        } else {

        mysqli_stmt_bind_param($stmt, "s", $QRcode);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../../../staff/consumerC/delete_consumer.inc.php?error=success");
        echo"Individual Deleted!";
        exit();
        }
    }


function addconsumerEmpty($QRcode, $fname, $lname, $email, $passwd, $pointbalance, $consumertype, $avgweekpoints, $visitnum) {
    $result;
    if (empty($QRcode) || empty($fname) || empty($lname) || empty($email) || empty($passwd) || empty($pointbalance) || empty($consumertype) || empty($avgweekpoints) || empty($visitnum) {
        $result = true;
    } else { 
        $result - false;

    }
    return $result;
}

function addConsumer($connection, $QRcode, $fname, $lname, $email, $passwd, $pointbalance, $consumertype, $avgweekpoints, $visitnum) {
    $sql1 = "INSERT INTO individual (QRcode, fname, lname, email, passwd) VALUES(?, ?, ?, ?, ?);";
    $sql2 = "INSERT INTO consumer (QRcode, `point-balance`, `consumer-type`, `avg-week-points`, `visit-num`) VALUES(?, ?, ?, ?, ?);";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $sql1)) {
        echo "Add failed: (". $stmt->errno.") " .$stmt->error. "<br>";
        exit();
        } 
        
    if(!mysqli_stmt_prepare($stmt, $sql2)) {
        echo "Add failed: (". $stmt->errno.") " .$stmt->error. "<br>";
        exit();
        } else {

        mysqli_stmt_bind_param($stmt, "sssssssss", $QRcode, $fname, $lname, $email, $passwd, $pointbalance, $consumertype, $avgweekpoints, $visitnum);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../../../staff/consumerC/register_consumer.php?error=success");
        exit();
        }
}


function updateConsumerEmpty($QRcode, $pointbalance, $visitnum) {
    if (empty($QRcode) || empty($pointbalance) || empty($visitnum)) {
        $result == true;
    } else {
            $result == false;
    }
    return $result;
}

//this function will allow the staff to update a consumers point balance and number of vists based off their QRcode
function updateConsumer($connection, $QRcode, $pointbalance, $visitnum){
    $sql = "UPDATE consumer SET `point-balance`=?, `visit-num`=? WHERE `QRcode`=?;";
    $stmt = mysqli_stmt_init($connection);
    if(!mysqli_stmt_prepare($stmt, $sql)) {
        header("location: ../../../staff/consumerC/update_consumer.php?error=failedtoupdate");
        echo "Update failed: (". $stmt->errno.") " .$stmt->error. "<br>";
        exit();
        } else {

        mysqli_stmt_bind_param($stmt, "sss", $QRcode, $pointbalance, $visitnum);
        mysqli_stmt_execute($stmt);
        mysqli_stmt_close($stmt);
        header("location: ../../../staff/consumerC/update_consumer.php?error=success");
        echo"Database updated!";
        exit();
        }
    }
