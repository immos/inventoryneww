<?php include('includes/header.php')?>
<?php ob_start(); ?>


<!-- page content starts here   -->

<div class="h2 mb-3">Expense</div>

<section>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#expense_form" role="tab" aria-controls="profile" aria-selected="false">Add Expense</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#expense_table" role="tab" aria-controls="home" aria-selected="true">Expense Records</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content py-4">
        <!--------------------------------------add product section--------------------------->
        <div class="tab-pane active" id="expense_form" role="tabpanel" aria-labelledby="home-tab">

            <div class="container">
                <form method="post">
                    <div class="form-row">

                        <div class="form-group col-sm-1">
                            <label for="" class="">No.</label>
                            <input type="text" class=" form-control form-control-sm" aria-describedby="">
                        </div>

                        <div class="form-group col-sm-2">
                            <label for="" class="">Date</label>
                            <input type="date" max="9999-12-31" name="insertEDate" class="form-control contactsOnly  form-control-sm" value="<?php echo date('Y-m-d');?>" />
                        </div>

                        <div class="form-group col-sm-2">
                            <label for="">ExpenseType</label>
                            <div class="input-group">
                                <select class="focusClass custom-select custom-select-sm" name="insertEType">
                                    <option value="" selected>Select</option>
                                    <option value="Voucher">Voucher</option>
                                    <option value="CashMemo">Cash Memo</option>
                                    <option value="Payment">Payment</option>
                                    <option value="Others">Others</option>
                                </select>
                            </div>
                        </div>
                        <div class="form-group col-sm-7">
                            <label for="">Expense Name</label>
                            <input type="text" name="insertEName" class="form-control form-control-sm" id="">
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-sm-12">
                            <label for="">Details</label>
                            <textarea name="insertEDetails" class="form-control" id="" cols="" rows="2"></textarea>
                        </div>
                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-3 ">
                            <label for="">Amount</label>
                            <input type="tel" name="insertEAmount" class="form-control numbersOnly form-control-sm" />
                        </div>

                    </div>
                    <div class="mt-1">
                        <button type="submit" name="eInsertSubmit" class="btn btn-dark">Submit</button>
                    </div>

                </form>





            </div>



        </div>







        <?php if(isset($_POST['eInsertSubmit'])){
    
      $empId = $_SESSION['emp_id'];

//            if(isset($_POST['insertEType']))
//            {
//               }
//            }
//                    $e_type = $_POST['insertEType'];


            $query_e_insert= "INSERT INTO `expense`(`expense_id`, `expense_employee_id`, `expense_type`, `expense_comment`, `expense_amount`, `expense_date`,`expense_name`) VALUES ('',$empId,'$_POST[insertEType]','$_POST[insertEDetails]','$_POST[insertEAmount]','$_POST[insertEDate]','$_POST[insertEName]')";
    
    
            $query_e_insert_result  = mysqli_query($connect,$query_e_insert); 

            if(!$query_e_insert_result){
            echo mysqli_connect($connect);
            }

            }
?>


        <!---------------------------table---------------------------->
        <div class="tab-pane" id="expense_table" role="tabpanel" aria-labelledby="profile-tab">

            <div class="container">

                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>Expense Id</th>
                            <th>Expense Employee Id</th>
                            <th>Expense Type</th>
                            <th>Expense Name</th>
                            <th>Expense Comment</th>
                            <th>Expense Amount</th>
                            <th>Expense Date</th>



                        </tr>
                    </thead>
                    <?php
        
   $query= "SELECT * FROM `expense`";
   $result  = mysqli_query($connect,$query);
   while($row= mysqli_fetch_row($result)){
        $eId=$row[0];
            ?>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <a href="#ExpenseEdit<?php echo $eId;?>" data-toggle="modal" id="ExpenseEditLink"><i class="fa fa-edit mx-2" aria-hidden="true"></i></a>
                                <a href="#expenseDelete<?php echo $eId;?>" data-toggle="modal"><i class="fa fa-trash mx-2" aria-hidden="true"></i></a>

                            </td>


                            <td>
                                <?php echo $row[0];?>
                            </td>
                            <td>
                                <?php echo $row[1];?>
                            </td>
                            <td>
                                <?php echo $row[2];?>
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
