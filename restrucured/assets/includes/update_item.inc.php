<?php

function updateInvEmpty($prodid, $brandid, $quantity, $pointcost, $expirationdate, $brandname,$producetype) {
    if (empty($prodid) || empty($brandid) || empty($quantity) || empty($pointcost) || empty($expirationdate)    || empty($brandname) || empty($producetype)) {
        $result == true;
    } else {
            $result == false;
    }
    return $result;
}
