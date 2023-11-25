<?php 
session_start();
include('config.php');

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
    </style>
 </head>
 <body>
 <?php include('master.php') ?>
<div class="row">
                            <div class="col-lg-12">
                                <div class="card">
                                    <div class="card-body">
                                        <h4 class="header-title mb-4">User Accounts</h4>
            
                                        <div class="table-responsive">
                                            <table class="table table-centered table-nowrap mb-0">
                                                <thead>
                                                    <tr>
                                                        <th scope="col" style="width: 50px;">ID<br></th>
                                                        <th scope="col">Name</th>
                                                        <th scope="col">Email</th>

                                                        <th scope="col">Message</th>
                                                    </tr>
                                                </thead>
                                                <tbody>

                                               
                                                <?php
                                                    // For transactions in Home Page(index page)
                                                    $query_for_transactions = "SELECT * FROM message";
                                                    $transaction_result = mysqli_query($conn,$query_for_transactions);
                                                    $no_of_transaction = mysqli_num_rows($transaction_result);

                                                    while($row = mysqli_fetch_array($transaction_result)) {
                                                        $to_ID = $row['ID'];
                                                       echo 
                                                       '<tr>          
                                                       <form action="" method="post">                                       
                                                            <td style="text-align:center">
                                                                <div class="avatar-xs" style="background-color: white;" >
                                                                    <span class="avatar-title rounded-circle bg-soft-primary text-primary" style="background-color: white;">
                                                                    '.$row['ID'].'
                                                                        
                                                                    </span>&nbsp;
                                                                </div>
                                                            </td>
                                                            <td style="text-align:center">
                                                                <h3 class="font-size-15 mb-0">'.$row['Name'].' </h3>
                                                            </td>
                                                            <td style="text-align:center">'.$row['Email'].'</td>
                                                            <td style="text-align:center">'.$row['Message'].'</td>
                                                            
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