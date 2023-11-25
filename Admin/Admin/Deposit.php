<?php 
session_start();
include('config.php');

$a="SELECT * From Transaction Where Type='Deposit'";
$b=mysqli_query($conn,$a);
$c=mysqli_num_rows($b);

$query="SELECT * from deposit_record";
$result11=mysqli_query($conn,$query);
$present1=mysqli_num_rows($result11);

?>
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
            <link href="assets/css/bootstrap.min.css" rel="stylesheet" type="text/css" />
            <!-- <link href="assets/css/app.min.css" rel="stylesheet" type="text/css" /> -->
    <style type="text/css">
        h1{
            font-weight: bold;
            font-size: 20px;
            text-align: center;
        }
    h2{
      color: red;
      text-align: center;
    }
    </style>
 </head>
 <body>
 <?php include('master.php') ?>
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">All Deposits</h4>
            
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">ID<br></th>
                                                        <th scope="col">Beneficiary Name</th>
                                                        <th scope="col">Date</th>
                                                        <th scope="col"><br></th>
                                                        <th scope="col">Transaction Type<br></th>
                                                        <th scope="col">Amount</th>
                                                        <th scope="col">Balance<br></th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                               
                                                <?php
                                                    // For transactions in Home Page(index page)
                                                    $query_for_transactions = "SELECT * FROM transaction WHERE Type='Deposit' ORDER BY Date DESC";
                                                    $transaction_result = mysqli_query($conn,$query_for_transactions);
                                                    $no_of_transaction = mysqli_num_rows($transaction_result);

                                                    while($row = mysqli_fetch_array($transaction_result)) {
                                                        $to_ID = $row['Date'];
                                                        $query_for_ben_name = "SELECT Name FROM transaction WHERE Date='$to_ID';";
                                                        $result_ben_name = mysqli_query($conn, $query_for_ben_name);
                                                        $ben_name = mysqli_fetch_array($result_ben_name)[0];
                                                       echo 
                                                       '<tr>                                                 
                                                            <td>
                                                                <div class="avatar-xs">
                                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary">
                                                                        '.$row['ID'].'
                                                                    </span>&nbsp;
                                                                </div>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <h3 class="font-size-15 mb-0">'.$ben_name.' </h3>
                                                            </td>
                                                            <td style="text-align:center">'.$row["Date"].'</td>
                                                            <td><br></td>
                                                            
                                                            <td style="text-align:center">'.$row["Type"].'</td>
                                                            <td style="text-align:center">&#x20b9; '.$row["Amount"].'</td>
                                                            <td style="text-align:center">&#x20b9; '.$row["Balance"].'<br></td>
                                                    </tr>';
                                                   } 
                                                   
                                                ?>
                                                </tbody>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>
    </body>
    </html>