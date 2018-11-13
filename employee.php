<?php ob_start(); ?>
<?php include('includes/header.php')?>




<!-- page content starts here   -->

<div class="h2 mb-3">Employee</div>

<section>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#employee_form" role="tab" aria-controls="profile" aria-selected="false">Add New Employee</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#employee_table" role="tab" aria-controls="home" aria-selected="true">Employee Records</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content py-4">
        <!--------------------------------------add product section--------------------------->
        <div class="tab-pane active" id="employee_form" role="tabpanel" aria-labelledby="home-tab">

            <div class="container">

                <form method="post" autocomplete='off'>
                    <div class="form-row">

                        <div class="form-group col-sm-6">
                            <label for="" class="">Employee First Name</label>
                            <input type="text" name="insertEmFName" class="focusClass form-control form-control-sm" id="" aria-describedby="">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="">Employee Last Name</label>
                            <input type="text" name="insertEmLName" class="form-control form-control-sm" id="">
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="" class="">Contact Number</label>
                            <input type="text" max-length="10" name="insertEmCNumber" class="form-control contactsOnly  form-control-sm" />
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="">Email Address</label>
                            <input type="email" name="insertEmEmail" autocomplete="off" class="form-control  form-control-sm" />
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="">Password</label>
                            <input type="password" name="insertEmPass" autocomplete="new-password" class="form-control form-control-sm" />
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="">Designation</label>

                            <div class="input-group">
                                <select class="custom-select custom-select-sm" name="insertEmDesig" required>
                                    <option value="" selected>Select</option>
                                    <option value="Executive">Executive</option>
                                    <option value="SeniorExecutive">Senior Executive</option>
                                    <option value="Manager">Manager</option>
                                    <option value="Admin">Admin</option>
                                </select>
                            </div>

                            <!--                    <input type="text" name="" class="form-control form-control-sm" />-->
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="">Joining Date</label>
                            <input type="date" max="9999-12-31" name="insertEmJDate" class="form-control form-control-sm" />
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="">Salary</label>
                            <input type="text" name="insertEmSalary" class="form-control numbersOnly form-control-sm" />
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="">Aadhar No</label>
                            <input type="text" name="insertEmAadhar" class="form-control numbersOnly form-control-sm" />
                        </div>

                        <div class="form-group col-sm-6">
                            <label for="">Address</label>
                            <textarea class="form-control" name="insertEmAdd" rows="2"></textarea>
                        </div>

                    </div>


                    <div class="mt-1">
                        <button type="submit" name="emInsertSubmit" class="btn btn-dark">Submit</button>
                    </div>


                </form>


            </div>

        </div>




        <?php
     if(isset($_POST['emInsertSubmit'])){
         
         
         
                $query_em_insert= "INSERT INTO `employee`(`employee_id`, `employee_first_name`, `employee_last_name`, `employee_email`, `employee_contact_no`, `employee_password`, `employee_designation`, `employee_joining_date`, `employee_salary`, `employee_address`, `employee_aadhar`)
                VALUES ('','$_POST[insertEmFName]','$_POST[insertEmLName]','$_POST[insertEmEmail]','$_POST[insertEmCNumber]','$_POST[insertEmPass]','$_POST[insertEmDesig]','$_POST[insertEmJDate]','$_POST[insertEmSalary]','$_POST[insertEmAdd]','$_POST[insertEmAadhar]')";
         
         
         
         
                $query_em_insert_result  = mysqli_query($connect,$query_em_insert); 

                if(!$query_em_insert_result)
                        {
                    
                        echo mysqli_connect($connect);
                    
                        }
    
                }
?>






        <!---------------------------table---------------------------->
        <div class="tab-pane " id="employee_table" role="tabpanel" aria-labelledby="profile-tab">

            <div class="container">
                <table id="table_id" class="display table-bordered">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>Employee Id</th>
                            <th>Name</th>
                            <th>Email</th>
                            <th>ContactNo</th>
                            <th>Password</th>
                            <th>Designation</th>
                            <th>Date of joining</th>
                            <th>salary</th>
                            <th>Address</th>
                            <th>AadharNo</th>

                        </tr>
                    </thead>
                    <?php

   $query= "SELECT * FROM `employee` ORDER BY `employee_id` DESC";
   $result  = mysqli_query($connect,$query);
   while($row= mysqli_fetch_row($result)){
       $emId= $row[0];
       
            ?>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <a href="#employeeEdit<?php echo $emId;?>" data-toggle="modal" id="employeeEditLink"><i class="fa fa-edit mx-2" aria-hidden="true"></i></a>
                                <a href="#deleteEmployee<?php echo $emId;?>"data-toggle="modal"><i class="fa fa-trash mx-2" aria-hidden="true"></i></a>

                            </td>
                            <td>
                                <?php echo $row[0];?>
                            </td>
                            <td>
                                <?php echo $row[1]." ".$row[2];?>
                            </td>

                            <td>
                                <?php echo $row[3];?>
                            </td>
                            <td>
                                <?php echo $row[4];?>
                            </td>
                            <td>
                                <?php echo $row[5];?>
                            </td>
                            <td>
                                <?php echo $row[6];?>
                            </td>
                            <td>
                                <?php echo $row[7];?>
                            </td>
                            <td>
                                <?php echo $row[8];?>
                            </td>
                            <td>
                                <?php echo $row[9];?>
                            </td>
                            <td>
                                <?php echo $row[10];?>
                            </td>


                        </tr>
                    </tbody>
                    <?php include('includes/edit.php')?>

                    <?php } ?>

                </table>

            </div>



        </div>

    </div>
</section>

<?php include('includes/footer.php')?>
