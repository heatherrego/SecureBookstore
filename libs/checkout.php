<?php
/**
 * Created by PhpStorm.
 * User: Chris Hamlet
 * Date: 10/6/2017
 * Time: 4:04 PM
 */

if ($_POST) {
    $_SESSION['shippingAddress1'] = $_POST['shippingAddress1'];
    $_SESSION['shippingAddress2'] = $_POST['shippingAddress2'];
    $_SESSION['shippingCity'] = $_POST['shippingCity'];
    $_SESSION['shippingState'] = $_POST['shippingState'];
    $_SESSION['shippingCountry'] = $_POST['shippingCountry'];
    $_SESSION['shippingZip'] = $_POST['shippingZip'];
    header("Location:checkout2.php");
}
?>