<?php include('includes/header.php')?>
<?php ob_start(); ?>


<!-- page content starts here   -->

<div class="h2 mb-3">Customer</div>

<section>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#customer_form" role="tab" aria-controls="profile" aria-selected="false">Add New Customer</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#customer_table" role="tab" aria-controls="home" aria-selected="true">Customer Records</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content py-4">
        <!--------------------------------------add product section--------------------------->
        <div class="tab-pane active" id="customer_form" role="tabpanel" aria-labelledby="home-tab">

            <div class="container">
                <form method="post">
                    <div class="form-row">

                        <div class="form-group col-sm-4">
                            <label for="" class="">Customer Name</label>
                            <input type="text" name="insertCName" class="focusClass form-control form-control-sm" aria-describedby="">
                        </div>

                        <div class="form-group col-sm-8">
                            <label for="">Company Name</label>
                            <input type="text" name="insertCOName" class="form-control form-control-sm">
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="" class="">Contact Number</label>
                            <input type="text" max-length="10" name="insertCNumber" class="form-control contactOnly  form-control-sm" />
                        </div>

                        <div class="form-group col-sm-8">
                            <label for="">Email Address</label>
                            <input type="email" name="insertCEmail" class="form-control  form-control-sm" />
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="">Pan Number</label>
                            <input type="text" name="insertPNumber" class="form-control form-control-sm" />
                        </div>

                        <div class="form-group col-sm-8">
                            <label for="">Gst Number</label>
                            <input type="text" name="insertGNumber" class="form-control form-control-sm" />
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="">Credit Amount</label>
                            <input type="text" name="insertCAmt" class="form-control numbersOnly form-control-sm" />
                        </div>

                        <div class="form-group col-sm-4">
                            <label for="">Credit Limit</label>
                            <input type="text" name="insertCLimit" class="form-control numbersOnly form-control-sm" />
                        </div>
                        <div class="form-group col-sm-4">
                            <label for="">Credit Days</label>
                            <input type="number" min="0" name="insertCDays" class="form-control numbersOnly form-control-sm" />
                        </div>

                        <div class="form-group col">
                            <label for="">Address</label>
                            <textarea class="form-control" name="insertCAdd" rows="4"></textarea>
                        </div>

                    </div>

                    <div class="mt-1">
                        <button type="submit" name="cInsertSubmit" class="btn btn-dark">Submit</button>
                    </div>

                </form>





            </div>



        </div>

        <?php
     if(isset($_POST['cInsertSubmit'])){
         
         
                $query_c_insert= "INSERT INTO `customer`(`customer_id`, `customer_name`, `customer_company_name`, `customer_contact_no`, `customer_email`, `customer_address`, `customer_gst_no`, `customer_pan_no`, `customer_credit_days`, `customer_credit_limit`, `customer_credit_amount`) 
                VALUES ('','$_POST[insertCName]','$_POST[insertCOName]','$_POST[insertCNumber]','$_POST[insertCEmail]','$_POST[insertCAdd]','$_POST[insertGNumber]','$_POST[insertPNumber]','$_POST[insertCDays]','$_POST[insertCLimit]','$_POST[insertCAmt]')";
         
         
         
         
                $query_c_insert_result  = mysqli_query($connect,$query_c_insert); 

                if(!$query_c_insert_result)
                        {
                    
                        echo mysqli_connect($connect);
                    
                        }
    
                }
?>

        <!---------------------------table---------------------------->
        <div class="tab-pane" id="customer_table" role="tabpanel" aria-labelledby="profile-tab">

            <div class="container">

                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>Customer Id</th>
                            <th>Name</th>
                            <th>Company Name</th>
                            <th>ContactNo</th>
                            <th>Email</th>
                            <th>Address</th>
                            <th>GstNo</th>
                            <th>PanNo</th>
                            <th>Credit days</th>
                            <th>Credit limit</th>
                            <th>Credit Amount</th>


                        </tr>
                    </thead>
                    <?php
        
   $query= "SELECT * FROM `customer`";
   $result  = mysqli_query($connect,$query);
   while($row= mysqli_fetch_row($result)){
       $cId=$row[0];
            ?>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <a href="#customerEdit<?php echo $cId;?>" data-toggle="modal" id="customerEditLink"><i class="fa fa-edit mx-2" aria-hidden="true"></i></a>
                                <a href="#deleteCustomer<?php echo $cId;?>"data-toggle="modal"><i class="fa fa-trash mx-2" aria-hidden="true"></i></a>

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
