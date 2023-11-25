<?php
session_start(); 
include('config.php');
$money=$_POST['money'];
$ID=$_SESSION['ID'];

$query="SELECT Amount from balance WHERE ID='$ID'";
$result=mysqli_query($conn,$query);
$present=mysqli_num_rows($result);
if($present>0){
	$row=mysqli_fetch_array($result);
	$deposit=$row['Amount'];
	$total=$deposit+$money;

$querys="UPDATE balance SET Amount='$total' WHERE ID='$ID'";
$sql1="INSERT INTO deposit_record (ID,Amount)VALUES($ID,$money)";
$result=mysqli_query($conn,$querys);
$result1=mysqli_query($conn,$sql1);
$sl="INSERT INTO Transaction (ID, Name, Date, Type, Amount, Balance)
SELECT d.ID, u.Name, d.Time, 'Deposit', d.Amount, b.Amount
FROM deposit_record d
JOIN user_db u ON u.ID = d.ID
JOIN Balance b ON b.ID = d.ID
WHERE NOT EXISTS (
    SELECT 1
    FROM Transaction t
    WHERE t.Date = d.Time AND t.Type = 'Deposit' AND t.Amount = d.Amount
)
LIMIT 1";
$rt=mysqli_query($conn,$sl);
header("Location:Dashboard.php");
}else{

$sql="INSERT INTO balance (ID,Amount)VALUES($ID,$money)";
$sql1="INSERT INTO deposit_record (ID,Amount)VALUES($ID,$money)";
$result=mysqli_query($conn,$sql);
$result1=mysqli_query($conn,$sql1);
$sl="INSERT INTO Transaction (ID, Name, Date, Type, Amount, Balance)
SELECT d.ID, u.Name, d.Time, 'Deposit', d.Amount, b.Amount
FROM deposit_record d
JOIN user_db u ON u.ID = d.ID
JOIN Balance b ON b.ID = d.ID
WHERE NOT EXISTS (
    SELECT 1
    FROM Transaction t
    WHERE t.Date = d.Time AND t.Type = 'Deposit' AND t.Amount = d.Amount
)
LIMIT 1";
$rt=mysqli_query($conn,$sl);
header("Location:Dashboard.php");


}

 ?>