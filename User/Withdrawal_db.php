<?php
session_start(); 
include('config.php');
$money=$_POST['money'];
$ID=$_SESSION['ID'];

$query="SELECT Amount from balance WHERE ID='$ID'";
$result=mysqli_query($conn,$query);
$present=mysqli_num_rows($result);
if($present>0)
{
	$row=mysqli_fetch_array($result);
	$Amount=$row['Amount'];
	if($Amount>=$money)
	{
       $sum=$Amount-$money;
       $querys="UPDATE balance SET Amount='$sum' WHERE ID='$ID'";
       $result=mysqli_query($conn,$querys);
       $sql1="INSERT INTO withdrawal_record (ID,Amount)VALUES($ID,$money)";
       $result1=mysqli_query($conn,$sql1);
       $sl1="INSERT INTO Transaction (ID, Name, Date, Type, Amount, Balance)
SELECT w.ID, u.Name, w.Time, 'Withdrawal', w.Amount, b.Amount
FROM withdrawal_record w
JOIN user_db u ON w.ID = u.ID
JOIN Balance b ON w.ID = b.ID
WHERE NOT EXISTS (
  SELECT 1
  FROM Transaction t
  WHERE t.Date = w.Time AND t.Amount = w.Amount AND t.Type = 'Withdrawal'
)
LIMIT 1;
";
$rt1=mysqli_query($conn,$sl1);

       header("Location:Dashboard.php");

	}else
	{
        $_SESSION['alert']='No Money';
        header("Location:Withdrawal.php");
    }
 }

 ?>