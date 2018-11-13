<?php ob_start(); ?>
<?php include('includes/header.php')?>
   

   <section>
   
    <div class="h3 mb-3">Deleted Items</div>     
    <div class="container-fluid">
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="trashTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" data-toggle="tab" href="#sales_trash" role="tab">Sales</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#purchases_trash" role="tab">Purchases</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#" role="tab">Expenses</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#" role="tab">Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#" role="tab">Customers</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#" role="tab">Vendors</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" data-toggle="tab" href="#" role="tab">Employees</a>
        </li>
    </ul>

    
  <div class="tab-content py-3">
        <div class="tab-pane active" id="sales_trash" role="tabpanel" aria-labelledby="home-tab">
        
            <div class="container">
                     <table id="table_id" class="table table-striped table-bordered dt-responsive nowrap" style="width:100%">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>Sales Id</th>
                            <th>Date</th>
                            <th>Customer Id</th>
                            <th>Employee Id</th>
                            <th>Invoice No</th>
                            <th>Mode of payment</th>
                            <th>Cheque No</th>
                            <th>Bank Details</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <?php
        
   $query_selecting_all_sales= "SELECT * FROM `sales_receipt` WHERE delete_flag = '1' ";
                    
   $query_selecting_all_sales_result  = mysqli_query($connect,$query_selecting_all_sales);
   while($row= mysqli_fetch_row($query_selecting_all_sales_result)){
       $restoreId = $row[0];
            ?>
                    <tbody>
                        <tr>
                            <td class="text-center">
                                <a href="#restore<?php echo $restoreId;?>" data-toggle = "modal"><i class="fa fa-undo mx-2" aria-hidden="true"></i></a>
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
                    
                    <?php } ?>
                </table>    
        </div>
        
    </div>
       
      
        <div class="tab-pane" id="purchases_trash" role="tabpanel" aria-labelledby="home-tab">
        hello
        </div>
       </div>
        </div>
    </section>
    
<!--Restore modal starts here-->


<div class="modal fade bd-example-modal-lg" id="restore<?php echo $restoreId;?>" tabindex="-1" role="dialog" aria-labelledby="myLargeModalLabel" aria-hidden="true">


    <div class="modal-dialog modal-lg">
        <div class="modal-content container">

            <div class="header my-3 h3">Restore sales Receipt</div>

            <div class="header-body my-3">

                <h5> Do you really want to restore sales Receipt
                    <?php echo $restoreId; ?>?
                </h5>

                <br>
                <form method="post">
                    <div class="mt-1">
                        <button type="submit" name="restoreSales" value="<?php echo $restoreId?>" class="btn btn-success px-4">Yes</button>
                        <button class="btn btn-warning">Cancel</button>
                    </div>

                </form>




            </div>

        </div>
    </div>
</div>


<?php    

//            reset flag 1
            if(isset($_POST['restoreSales'])){
                echo "<script>confirm('Do you want to restore')</script>";
            $query_for_s_restore= "UPDATE `sales_receipt` SET delete_flag = '0' WHERE `sales_receipt_id`=$_POST[restoreSales]";      
            $query_for_s_restore_result  = mysqli_query($connect,$query_for_s_restore); 
            if($query_for_s_restore_result){
            header("location:trash.php");
            }
            }                
            
                                
                                    

?>








<!--Restore modal ends here-->    
    
   
  <?php include('includes/footer.php')?>