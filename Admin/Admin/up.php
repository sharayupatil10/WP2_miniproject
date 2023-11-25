<?php 
session_start();
@include 'config.php';




if(isset($_POST['btn-send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $phone=$_POST['phone'];
   $pass = $_POST['password'];
$user_type = $_POST['user_type'];

    $insert = "UPDATE user_db SET Name='$name',
    Email='$email',
    Phone='$phone',
    Password='$pass',
    Type='$user_type' 
    WHERE Name='$CID'";
    $ro=mysqli_query($conn, $insert);
    header('location:Dashboard.php');
      }

      $ne = $_POST["ne"];
      $as="SELECT Name FROM user_db WHERE Name LIKE '%$ne%' ";
$ar=mysqli_query($conn,$as);
$am=mysqli_fetch_array($ar);
$CID=$am['Name'];


$s="SELECT * FROM user_db WHERE Name LIKE '%$ne%' ";
$r=mysqli_query($conn,$s);
$meow=mysqli_fetch_array($r);


?>
 <!DOCTYPE html>
 <html>
 <head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title></title>
    <link src="bootstrap.min.css" type="stylesheet">
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
 <!-- component -->
<section class="py-40 bg-white-100  bg-opacity-50 h-screen">
    <form action="" method="post">
      <div class="mx-auto container max-w-2xl md:w-3/4 shadow-md">
        <div class="bg-gray-100 p-4 border-t-2 bg-opacity-5 border-black-400 rounded-t">
          <div class="max-w-sm mx-auto md:w-full md:mx-0">
            <div class="inline-flex items-center space-x-4">
              <img
                class="w-10 h-10 object-cover rounded-full"
                alt="User avatar"
                src="https://avatars3.githubusercontent.com/u/72724639?s=400&u=964a4803693899ad66a9229db55953a3dbaad5c6&v=4"
              />

              <h1 class="text-black-600"><?php echo $CID ?></h1>
            </div>
          </div>
        </div>
        <div class="bg-white space-y-6">
          <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-black-500 items-center">
            <h2 class="md:w-1/3 max-w-sm mx-auto">Account</h2>
            <div class="md:w-2/3 max-w-sm mx-auto">
              <label class="text-sm text-black-400">Email</label>
              <div class="w-full inline-flex border">
                <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                  <svg
                    fill="none"
                    class="w-6 text-black-400 mx-auto"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M3 8l7.89 5.26a2 2 0 002.22 0L21 8M5 19h14a2 2 0 002-2V7a2 2 0 00-2-2H5a2 2 0 00-2 2v10a2 2 0 002 2z"
                    />
                  </svg>
                </div>
                <input
                name="email"
                  type="email"
                  class="w-11/12 focus:outline-none focus:text-black-600 p-2"
                  placeholder="email@example.com"
                  value="<?php echo $meow['Email'] ?>"
                />
              </div>
            </div>
          </div>

          <hr />
          <div class="md:inline-flex  space-y-4 md:space-y-0  w-full p-4 text-black-500 items-center">
            <h2 class="md:w-1/3 mx-auto max-w-sm">Personal info</h2>
            <div class="md:w-2/3 mx-auto max-w-sm space-y-5">
              <div>
                <label class="text-sm text-black-400">Full name</label>
                <div class="w-full inline-flex border">
                  <div class="w-1/12 pt-2 bg-gray-100">
                    <svg
                      fill="none"
                      class="w-6 text-black-400 mx-auto"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M16 7a4 4 0 11-8 0 4 4 0 018 0zM12 14a7 7 0 00-7 7h14a7 7 0 00-7-7z"
                      />
                    </svg>
                  </div>
                  <input
                  name="name"
                    type="text"
                    class="w-11/12 focus:outline-none focus:text-black-600 p-2"
                    placeholder="Charly Olivas"
                    value="<?php echo $meow['Name'] ?>"
                  />
                </div>
              </div>
              <div>
                <label class="text-sm text-black-400">Phone number</label>
                <div class="w-full inline-flex border">
                  <div class="pt-2 w-1/12 bg-gray-100">
                    <svg
                      fill="none"
                      class="w-6 text-black-400 mx-auto"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                      />
                    </svg>
                  </div>
                  <input
                  name="phone"
                    type="number"
                    class="w-11/12 focus:outline-none focus:text-black-600 p-2"
                    placeholder="12341234"
                    value="<?php echo $meow['Phone'] ?>"
                  />
                </div>
              </div>
              <div>
                <label class="text-sm text-black-400">Account Type</label>
                <div class="w-full inline-flex border">
                  <div class="pt-2 w-1/12 bg-gray-100">
                    <svg
                      fill="none"
                      class="w-6 text-black-400 mx-auto"
                      viewBox="0 0 24 24"
                      stroke="currentColor"
                    >
                      <path
                        stroke-linecap="round"
                        stroke-linejoin="round"
                        stroke-width="2"
                        d="M12 18h.01M8 21h8a2 2 0 002-2V5a2 2 0 00-2-2H8a2 2 0 00-2 2v14a2 2 0 002 2z"
                      />
                    </svg>
                  </div>
                  <input
                  name="user_type"
                    type="text"
                    class="w-11/12 focus:outline-none focus:text-black-600 p-2"
                    placeholder="12341234"
                    value="<?php echo $meow['Type'] ?>"
                  />
                </div>
              </div>
            </div>
          </div>

          <hr />
            <div class="bg-white space-y-6">
          <div class="md:inline-flex space-y-4 md:space-y-0 w-full p-4 text-black-500 items-center">
            <h2 class="md:w-1/3 max-w-sm mx-auto">Password</h2>
            <div class="md:w-2/3 max-w-sm mx-auto">
              <label class="text-sm text-black-400">Password</label>
              <div class="w-full inline-flex border">
                <div class="pt-2 w-1/12 bg-gray-100 bg-opacity-50">
                  <svg
                    fill="none"
                    class="w-6 text-black-400 mx-auto"
                    viewBox="0 0 24 24"
                    stroke="currentColor"
                  >
                    <path
                      stroke-linecap="round"
                      stroke-linejoin="round"
                      stroke-width="2"
                      d="M12 15v2m-6 4h12a2 2 0 002-2v-6a2 2 0 00-2-2H6a2 2 0 00-2 2v6a2 2 0 002 2zm10-10V7a4 4 0 00-8 0v4h8z"
                    />
                  </svg>
                </div>
                <input
                name="password"
                  type="text"
                  class="w-11/12 focus:outline-none focus:text-black-600 p-2"
                  placeholder="email@example.com"
                  value="<?php echo $meow['Password'] ?>"
                />
              </div>
            </div>
          </div>
                    <div class="md:w-3/12 text-center md:pl-6 item-center">
              <button name='btn-send' class="text-white w-full mx-auto max-w-sm rounded-md text-center bg-indigo-400 py-2 px-4 inline-flex items-center focus:outline-none md:float-center">
                <svg
                  fill="none"
                  class="w-4 text-white mr-2"
                  viewBox="0 0 20 20"
                  stroke="currentColor"
                >
                  <path
                    stroke-linecap="round"
                    stroke-linejoin="round"
                    stroke-width="2"
                    d="M4 4v5h.582m15.356 2A8.001 8.001 0 004.582 9m0 0H9m11 11v-5h-.581m0 0a8.003 8.003 0 01-15.357-2m15.357 2H15"
                  />
                </svg>
                Update Info
              </button>
            </div>

          <hr />
          <div class="w-full p-4 text-right text-black-500">
            <button class="inline-flex items-center focus:outline-none mr-4">
              <svg
                fill="none"
                class="w-4 mr-2"
                viewBox="0 0 24 24"
                stroke="currentColor"
              >
                <path
                  stroke-linecap="round"
                  stroke-linejoin="round"
                  stroke-width="2"
                  d="M19 7l-.867 12.142A2 2 0 0116.138 21H7.862a2 2 0 01-1.995-1.858L5 7m5 4v6m4-6v6m1-10V4a1 1 0 00-1-1h-4a1 1 0 00-1 1v3M4 7h16"
                />
              </svg>
              Delete account
            </button>
          </div>
        </div>
      </div>
  </form>
    </section>
</body>
</html>