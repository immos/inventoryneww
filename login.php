<?php require ('includes/config.php'); session_start(); session_destroy(); ?>
<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">

    <title>Inventory Management System</title>

    <link rel="stylesheet" href="assests/materialize_colors.css">

    <link rel="stylesheet" href="assests/bootstrap.css">

    <!-- Our Custom CSS -->
    <link rel="stylesheet" href="assests/style4.css">
    <!-- Font Awesome JS -->
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/solid.js" integrity="sha384-tzzSw1/Vo+0N5UhStP3bvwWPq+uvzCMfrN1fEFe+xBmv1C/AtVX5K0uZtmcHitFZ" crossorigin="anonymous"></script>
    <script defer src="https://use.fontawesome.com/releases/v5.0.13/js/fontawesome.js" integrity="sha384-6OIrr52G08NpOFSZdxxz1xdNSndlD4vdcf/q2myIUVO0VsqaGHJsB0RaBE01VTOY" crossorigin="anonymous"></script>
    <link rel="stylesheet" href="//cdn.datatables.net/1.10.19/css/jquery.dataTables.min.css">
</head>


<body>
   
       <section class="login_section">
    <div class="login_container">
       <form action="login.php" method="post">
           <div class="h3 text-light">
               Hertzsoft Technologies
           </div>
        
        <div class="company_logo text-center">
        <img src="images/user_image.png" alt="User">
        </div>    
     
      <div class="login_input input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fa fa-user"></i></span>  
      </div>
      <input type="text" class="form-control form-control-lg" placeholder="Username" name="username" autocomplete="name">
      </div>
      
      <div class="login_input input-group">
      <div class="input-group-prepend">
        <span class="input-group-text"><i class="fa fa-lock"></i></span>  
      </div>
      <input type="password" class="form-control form-control-lg" placeholder="Password" name="password" autocomplete="off">
      </div>
      
      <div class="login_btn text-center">
          <button type="submit" class="btn" name="loginSubmit">Login</button>
      </div>
      </form>
      
      
      
      <?php
    if(isset($_POST['loginSubmit'])){
    $emp_username = secure($_POST['username']);
    $emp_password = secure($_POST['password']);    
    $query_for_username = "select * from employee where employee_id = '$emp_username'";
    $query_for_username_result=mysqli_query($connect,$query_for_username);
    $count = mysqli_num_rows($query_for_username_result);
        if($count == 1){
        while($row = mysqli_fetch_assoc($query_for_username_result)){
            $emp_id = $row['employee_id'];
            $emp_first_name = $row['employee_first_name'];
            $emp_last_name = $row['employee_last_name'];
            $emp_email = $row['employee_email'];
            $emp_contact = $row['employee_email'];
            $emp_designation = $row['employee_designation'];
            
            if($emp_id == $emp_username && $emp_password == $row['employee_password']){    
            session_start();
            $_SESSION['emp_id'] = $emp_id;
            $_SESSION['emp_first_name'] = $emp_first_name;
            $_SESSION['emp_last_name'] = $emp_last_name;
            $_SESSION['emp_email'] = $emp_email;
            $_SESSION['emp_contact'] = $emp_contact;
            $_SESSION['emp_designation'] = $emp_designation;
            header('location:index.php');   
            }else{
              echo "<div class='m-auto text-center alert text-white' role='alert'>
                You entered a wrong password!
                    </div>";
                    exit();
                        }    

                        }
                        }
        else{
            echo "<div class='m-auto text-center alert  text-white' role='alert'>
                User doesn&apos;t Exist!
                    </div>";
                exit();
        }
    }
?>


<?php if(isset($_GET['logout'])){
    
    session_start(); session_destroy();
    echo "<div class='m-auto text-center alert text-white' role='alert'>
                Sucessfully Logged Out!
        </div>";
    exit();
    
}?>
      
	</div>
   </section>
   
   <script src="assests/jquery%20mini.js"></script>
    <script></script>
</body>

</html>


