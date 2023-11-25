<?php
session_start(); 
include('config.php');
$money=$_POST['money'];
$email=$_POST['email'];
$ID=$_SESSION['ID'];


$query="SELECT Amount from balance WHERE ID='$ID'";
$result=mysqli_query($conn,$query);
$present=mysqli_num_rows($result);
if($present>0){
	$row=mysqli_fetch_array($result);
	$deposit=$row['Amount'];
	if($deposit>=$money){
	$take="SELECT Amount from balance WHERE ID=(SELECT ID FROM user_db WHERE Email='$email')";	
	$trans=mysqli_query($conn,$take);
	$past=mysqli_num_rows($trans);
	if($past>0){
	$col=mysqli_fetch_array($trans);
	$transfer=$col['Amount'];
	$total=$transfer+$money;
	$give=$deposit-$money;

$querys="UPDATE balance SET Amount='$give' WHERE ID='$ID'";
$squerys="UPDATE balance SET Amount='$total' WHERE ID=(SELECT ID FROM user_db WHERE Email='$email')";
$sql="INSERT INTO transfer_record (ID,REmail,Amount)VALUES($ID,'$email',$money)";
$result=mysqli_query($conn,$querys);
$trans=mysqli_query($conn,$squerys);
$result1=mysqli_query($conn,$sql);
$a="INSERT INTO Transaction(ID, Name, Date, Type, Amount, Balance)
SELECT t.ID, u.Name, t.Time, 'Transfer', t.Amount, b.Amount
FROM transfer_record t
INNER JOIN user_db u ON t.REmail = u.Email
INNER JOIN Balance b ON b.ID = t.ID
WHERE NOT EXISTS (
  SELECT 1 FROM Transaction tr WHERE tr.Date = t.Time AND tr.Type = 'Transfer'
)
LIMIT 1;
";
$b=mysqli_query($conn,$a);
header("Location:Dashboard.php");
}else{
	$_SESSION['alert_email']='Wrong Email';
        header("Location:Transfer.php");
}
}else{
	$_SESSION['alert']='No Money';
        header("Location:Transfer.php");
}
}

 ?>