<?php 
session_start();
$message="";
if(isset($_SESSION['alert'])){
  $message='Not Enough Money in Bank Account';
}
?>
 <!DOCTYPE html>
 <html>
 <head>
 	<meta charset="utf-8">
 	<meta name="viewport" content="width=device-width, initial-scale=1">
 	<title></title>
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
 <section class="bg-gray-50 light:bg-gray-900">
  <h2><?php echo $message; ?></h2>
  <div class="flex flex-col items-center justify-center px-6 py-8 mx-auto md:h-screen lg:py-0">
      <div class="w-full bg-white rounded-lg shadow dark:border md:mt-0 sm:max-w-md xl:p-0 light:bg-gray-800 light:border-gray-700">
          <div class="p-6 space-y-4 md:space-y-6 sm:p-8">
              <h1 class="text-xl font-bold leading-tight tracking-tight text-gray-900 md:text-2xl light:text-black">
                  Withdraw Money
              </h1>
              <form class="space-y-4 md:space-y-6" action="Withdrawal_db.php" method="post">
                  <div>
                      <label for="email" class="block mb-2 text-sm font-medium text-gray-900 light:text-black">Enter Amount</label>
                      <input type="number" name="money" id="email" class="bg-gray-50 border border-gray-300 text-gray-900 sm:text-sm rounded-lg focus:ring-primary-600 focus:border-primary-600 block w-full p-2.5 dark:bg-gray-700 dark:border-gray-600 dark:placeholder-gray-400 dark:text-white dark:focus:ring-blue-500 dark:focus:border-blue-500" placeholder="Enter Amount" required="">
                  </div>
                  <div class="flex items-center justify-between">
                      <div class="flex items-start">
                          <div class="ml-3 text-sm">
                            <label for="remember" class="text-gray-500 dark:text-gray-300">Enter Amount in Rs.</label>
                          </div>
                      </div>
                  </div>
                  <button type="submit" class="w-full text-black bg-blue-700 hover:bg-primary-4 focus:ring-4 focus:outline-none focus:ring-primary-300 font-medium rounded-lg text-sm px-5 py-2.5 text-center dark:bg-primary-600 dark:hover:bg-primary-700 dark:focus:ring-primary-800">Withdraw</button>
              </form>
          </div>
      </div>
  </div>
</section>
</div>
<?php unset($_SESSION['alert']) ?>
 </body>
 </html>