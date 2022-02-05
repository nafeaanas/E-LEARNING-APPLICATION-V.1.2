<?php
include '../Students/Connection.php';
$query="select sum(amount_paid) as 'total' from payment_details ";
$res=mysqli_query($conn,$query);
$data=mysqli_fetch_assoc($res);
echo $data['total'];

?>