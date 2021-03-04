<?php

$id = '';
if(isset($_GET['id'])){
    $formID = $_GET['id'];


$queryselect = "SELECT * FROM forms inner join users on forms.fk_user = users.userId WHERE formId = $formID";
$results = mysqli_query($conn, $queryselect);
$rows = mysqli_fetch_row($results);

$formId = $rows['0'];
$fk_user = $rows['1'];
$region = $rows['2'];
$ward = $rows['3'];
$district = $rows['4'];
$requested_date = $rows['5'];
$status = $rows['6'];
$request_for = $rows['7'];
$contact = $rows['8'];
$Id_type = $rows['9'];
$Id_number = $rows['10'];
$pillar = $rows['11'];
$phase = $rows['12'];
$controlNo = $rows['13'];
$wiresize = $rows['14'];
$update_date = $rows['15'];
$fullname = $rows['20'];

}
 ?>
