<?php 


function generateTrackingID()
{
    return bin2hex(random_bytes(8));
}

function generateTransactionID()
{
    return bin2hex(random_bytes(7));
}