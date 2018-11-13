<?php include('includes/header.php')?>
<?php ob_start(); ?>

<!-- page content starts here   -->

<div class="h2 mb-3">VENDORS</div>

<section>
<!-- Nav tabs -->
<ul class="nav nav-tabs" id="myTab" role="tablist">
  <li class="nav-item">
    <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#vendor_form" role="tab" aria-controls="profile" aria-selected="false">Add New Vendors</a>
  </li>
  <li class="nav-item">
    <a class="nav-link" id="home-tab" data-toggle="tab" href="#vendor_table" role="tab" aria-controls="home" aria-selected="true">Vendors Records</a>
  </li>
</ul>

<!-- Tab panes -->
<div class="tab-content py-4">
 <!--------------------------------------add product section--------------------------->
  <div class="tab-pane active" id="vendor_form" role="tabpanel" aria-labelledby="home-tab">
     
<section class="container">

    <form method="post">
            <div class="form-row">

                <div class="form-group col-sm-6">
                    <label for="" class="">Vendor Person Name</label>
                    <input type="text" name="insertVPName" class="focusClass form-control form-control-sm" id="" aria-describedby="">
                </div>

                <div class="form-group col-sm-6">
                    <label for="">Vendor Company Name</label>
                    <input type="text" name="insertVCName" class="form-control form-control-sm" id="">
                </div>

                <div class="form-group col-sm-6">
                    <label for="" class="">Contact Number</label>
                    <input type="text" max-length="10" name="insertVCNumber" class="form-control contactsOnly  form-control-sm" />
                </div>

                <div class="form-group col-sm-6">
                    <label for="">Email Address</label>
                    <input type="email" name="insertVEmail" class="form-control  form-control-sm" />
                </div>

                <div class="form-group col-sm-6">
                    <label for="">Pan Number</label>
                    <input type="text" name="insertVPNumber" class="form-control form-control-sm" />
                </div>

                <div class="form-group col-sm-6">
                    <label for="">Gst Number</label>
                    <input type="text" name="insertVGNumber" class="form-control form-control-sm" />
                </div>

                <div class="form-group col-sm-6">    
                    <label for="">Credit Amount</label>
                    <input type="text" name="insertVCAmt" class="form-control numbersOnly form-control-sm" />
                </div>

            </div>

         <div class="mt-1">
            <button type="submit" name="vInsertSubmit" class="btn btn-dark">Submit</button>
            </div>
            
        </form>
</section>
        
      
      
  </div>
  
  
     <?php
     if(isset($_POST['vInsertSubmit'])){
         
         
                $query_v_insert= "INSERT INTO `vendors`(`vendors_id`, `vendor_company_name`, `vendor_person_name`, `vendor_contact_no`, `vendor_email`, `vendor_address`, `vendor_gst_no`, `vendor_pan_no`, `vendor_credit_amount`)
                VALUES ('','$_POST[insertVCName]','$_POST[insertVPName]','$_POST[insertVCNumber]','$_POST[insertVEmail]','','$_POST[insertVGNumber]','$_POST[insertVPNumber]','$_POST[insertVCAmt]')";
         
         
         
         
                $query_v_insert_result  = mysqli_query($connect,$query_v_insert); 

                if(!$query_v_insert_result)
                        {
                    
                        echo mysqli_connect($connect);
                    
                        }
    
                }
?>

  
  
  <!---------------------------table---------------------------->
  <div class="tab-pane" id="vendor_table" role="tabpanel" aria-labelledby="profile-tab">
     
<div class="container">
    <div>
        <table id="table_id" class="display">
            <thead>
                <tr><th>Actions</th>
                    <th>Customer Id</th>
                    <th>Company Name</th>
                    <th>Person Name</th>
                    <th>ContactNo</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>GstNo</th>
                    <th>PanNo</th>
                    <th>Credit days</th>
                   

                    
                </tr>
            </thead>
            <?php
        
   $query= "SELECT * FROM `vendors`";
   $result  = mysqli_query($connect,$query);
          
   while($row= mysqli_fetch_row($result)){
       $vId=$row[0];
            ?>
            <tbody>
                <tr><td class="text-center">
                        <a href="#vendorEdit<?php echo $vId;?>" data-toggle="modal"><i class="fa fa-edit mx-2" aria-hidden="true"></i></a>
                        <a href="#vendorDelete<?php echo $vId;?>"data-toggle="modal"><i class="fa fa-trash mx-2" aria-hidden="true"></i></a>
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
                     

                    
                </tr>
            </tbody>
            
            <?php include("includes/edit.php"); ?>

            <?php } ?>
            
            

        </table>

    </div>

</div>








<!--//////////////////////////////////////////////////////////////////////////////////////-->


<!--------------------------------------add product section--------------------------->


<!---------------------------table---------------------------->

<?php include('includes/footer.php')?>
