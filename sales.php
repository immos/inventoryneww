<?php ob_start(); ?>
<?php include('includes/header.php'); ?>

<!-- page content starts here   -->
<div class="h2 mb-3">SALES</div>

<section>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#sales_form" role="tab" aria-controls="profile" aria-selected="false">Sales Receipt</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#sales_table" role="tab" aria-controls="home" aria-selected="true">Sales Records</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content py-4">
        <!--------------------------------------add sales section--------------------------->
        <div class="tab-pane active" id="sales_form" role="tabpanel" aria-labelledby="home-tab">


            <div class="container">
                <form method="post" id="sales-form">
                    <div class="form-row">

                        <div class="form-group col-sm-2">
                            <label for="" class="">InvoiceNo.</label>
                            <input type="text" name="insertSInvoice" class=" form-control form-control-sm">
                        </div>

                        <div class="form-group col-sm-2 ">
                            <label for="" class="">Date</label>
                            <input type="date" max="9999-12-31" name="insertSDate" class="form-control form-control-sm" value="<?php echo date('Y-m-d');?>">
                        </div>


                        <div class="form-group col-sm-8">
                            <label for="">Customer Name</label>
                            <input type="search" list="datalistSCName" id="search_text" autocomplete="off" spellcheck="off" name="insertSCName" class="focusClass form-control form-control-sm" required>
                            <input type="hidden" name="insertSCId">

                            <datalist id="datalistSCName">

                            </datalist>
                        </div>



                    </div>

                    <div class="form-row">

                        <div class="form-group col-sm-2 sNewCol mb-0">
                            <label for="">No.</label>
                        </div>

                        <div class="form-group col-sm-4 sNewCol1 mb-0">
                            <label for="">Product Name</label>
                        </div>
                        <div class="form-group col-sm-1 mb-0">
                            <label for="">unit</label>
                        </div>

                        <div class="form-group col-sm-1 sNewCol2 mb-0">
                            <label for="">Qty</label>
                        </div>

                        <div class="form-group col-sm-1 sNewCol3 mb-0">
                            <label for="">Rate</label>
                        </div>

                        <div class="form-group col-sm-1 sNewCol4 mb-0">
                            <label for="">Tax%</label>
                        </div>


                        <div class="form-group col-sm-2 sNewCol5 mb-0">
                            <label for="">Amount</label>
                        </div>

                    </div>

                    <div class="newRow1">
                        <div class="form-row mb-3">
                            <div class="form-group col-sm-2 mb-0 barcode-field">
                                <input type="text" name="sBarcodeNumber[0]"  autocomplete="on" class="tabindexfocus form-control form-control-sm" required>
                                <input type="hidden" name="sProductId[0]" required>
                            </div>
                            <div class="form-group col-sm-4 mb-0">
                                <input type="text" name="sPDes[0]" class="form-control form-control-sm" readonly required>
                            </div>
                            <div class="form-group col-sm-1 mb-0">
                                <input type="text" name="sUnit[0]" class="form-control form-control-sm" readonly required>
                            </div>
                            <div class="form-group col-sm-1 mb-0">
                                <input type="number" name="sQty[0]" data-toggle="tooltip" class="form-control  form-control-sm" required>
                                <input type="hidden" name="sQtyOld[0]" class="form-control  form-control-sm" required>
                            </div>
                            <div class="form-group col-sm-1 mb-0">
                                <input type="number" name="sRate[0]" class="form-control form-control-sm">
                                <input type="hidden" name="sTaxAmount[0]" step="any" class="form-control  form-control-sm">
                            </div>
                            <div class="form-group col-sm-1 mb-0">
                                <input type="number" name="sTax[0]" class="form-control numbersOnly form-control-sm" readonly required>
                                <input type="hidden" name="sTax1[0]" class="form-control numbersOnly form-control-sm" readonly required>
                            </div>
                            <div class="form-group d-flex col-sm-2  mb-0">
                                <input type="number" name="sAmount[0]" step="any" class="form-control numbersOnly form-control-sm" readonly required>
                                <a class="pl-1"><i class="fa fa-times fa-2x" aria-hidden="true"></i></a>
                            </div>
                        </div>

                        <div class="newRow">


                        </div>
                    </div>


                    <div class="form-row">
                        <div class="mt-1">
                            <button type="button" class="btn btn-dark addNewSRow">Add</button>
                            <button type="button" class="btn btn-dark removeNewSRow">Remove</button>
                        </div>
                        <div class="form-group col-sm-3 ml-auto">
                            <label for="">Total Amount</label>
                            <input type="number" name="insertSTotalAmount" readonly step="any" class="form-control  form-control-sm">
                        </div>
                    </div>

                    <div class="form-row">

                        <div class="form-group col-sm-3">
                            <label for="">Payment Mode</label>
                            <div class="input-group">
                                <select class="custom-select custom-select-sm" name="insertSPMode" id="payment" required>
                                    <option value="">Select</option>
                                    <option value="Cash">Cash</option>
                                    <option value="Cheque">Cheque</option>
                                </select>
                            </div>
                        </div>


                        <div class="form-group col-sm-3">
                            <label for="">PersonName</label>
                            <input type="text" name="insertSPName" class="form-control form-control-sm">
                        </div>
                        
                        <div class="form-group col-sm-3">
                            
                        </div>

                        <div class="form-group col-sm-1">
                            <label for="">TAX</label>
                            <input type="text" name="insertSTax" readonly class="form-control numbersOnly form-control-sm">
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-3 xy">
                            <label for="">ChequeNo</label>
                            <input type="text" name="insertSChequeNo" class="form-control form-control-sm">
                        </div>

                        <div class="form-group col-sm-3 xy">
                            <label for="">Bank/Branch</label>
                            <input type="text" name="insertSBDetails" class="form-control form-control-sm">
                        </div>
                        <div class="form-group col-sm-3 ml-auto">
                            <label for="">GRAND TOTAL</label>
                            <input type="text" name="insertSGrandTAmount" step="0.01" readonly class="form-control numbersOnly form-control-sm">
                        </div>
                    </div>

                    <div class="mt-1">
                        <input type="submit" class="btn btn-dark" name="sInsertSubmit" value="Submit">
                    </div>

                </form>





                <?php if(isset($_POST['sInsertSubmit'])){

        $insertSPMode = $_POST['insertSPMode'];
        $insertSDate =  $_POST['insertSDate'];
        $insertSTotalAmount =  $_POST['insertSTotalAmount'];
        $insertSCName =  $_POST['insertSCName'];
        $insertSChequeNo =  $_POST['insertSChequeNo'];
        $insertSBDetails =  $_POST['insertSBDetails'];
        $insertSGrandTAmount =  $_POST['insertSGrandTAmount'];
        $insertSInvoice =  $_POST['insertSInvoice'];
        $insertSPName =  $_POST['insertSPName'];
        $insertSTax =  $_POST['insertSTax'];
        $insertSCId = $_POST['insertSCId'];

        $sPDes =  $_POST['sPDes'];
        $sQty =  $_POST['sQty'];
        $sRate =  $_POST['sRate'];
        $sAmount =  $_POST['sAmount'];
        $sTax1 = $_POST['sTax1']; 
        $sTax = $_POST['sTax']; 
        $empId = $_SESSION['emp_id'];
        $sBar =  $_POST['sBarcodeNumber'];
        $sUnit=$_POST['sUnit'];
    $sProductId = $_POST['sProductId'];

         
    
        $insert_sales_receipt_query = "INSERT INTO `sales_receipt`(`sales_receipt_id`, `sales_receipt_date`, `sales_receipt_customer_id`, `sales_receipt_employee_id`, `sales_receipt_invoice_no`, `sales_receipt_payment_mode`, `sales_receipt_cheque_no`, `sales_receipt_bank_details`, `sales_receipt_amount`, `sales_receipt_person_name`, `sales_receipt_tax`, `sales_receipt_grand_total`) VALUES ('','$insertSDate','$insertSCId','$empId','$insertSInvoice','$insertSPMode','$insertSChequeNo','$insertSBDetails','$insertSTotalAmount','$insertSPName','$insertSTax','$insertSGrandTAmount')";
    
    
        $insert_sales_receipt_query_result = mysqli_query($connect,$insert_sales_receipt_query); 
    
    
    
        $get_sales_receipt_id_query = "SELECT `sales_receipt_id` FROM `sales_receipt` ORDER by sales_receipt_id DESC LIMIT 1";
        $get_sales_receipt_id_query_result = mysqli_query($connect,$get_sales_receipt_id_query); 
        $get_receipt_id=0;
        while($row= mysqli_fetch_row( $get_sales_receipt_id_query_result)){
        $get_receipt_id=$row[0];
        }
            
        
        foreach($sPDes as $index => $value){
            
            
            $insert_sales_query = "INSERT INTO `sales`(`sales_id`, `sales_receipt_id`, `sales_product_id`, `sales_quantity`, `sales_rate`, `sales_amount`,`sales_tax`,`sales_barcode_no`,`sales_unit`,`sales_product_name`,`sales_product_tax_percent`) VALUES ('','$get_receipt_id','$sProductId[$index]','$sQty[$index]','$sRate[$index]','$sAmount[$index]','$sTax1[$index]','$sBar[$index]','$sUnit[$index]','$sPDes[$index]','$sTax[$index]')";
            
            $query_selecting_all_batch="SELECT * FROM `batch` WHERE product_barcode_no = '$sBar[$index]'";
;
            $xyz_result=mysqli_query($connect,$query_selecting_all_batch);


             while($row_quan= mysqli_fetch_assoc($xyz_result)){
             $update_quantity = "UPDATE `batch` SET `product_quantity` = $row_quan[product_quantity]-$sQty[$index] WHERE `batch`.`product_barcode_no`= '$sBar[$index]'";
             }

            
            if($sQty[$index]!=NULL && $sRate[$index]!=NULL)
            {
             $insert_sales_query_result = mysqli_query($connect,$insert_sales_query);
             $update_quantity_result = mysqli_query($connect,$update_quantity);
////                $last_id = mysqli_insert_id($update_quantity_result);
//                 $last_id = "SELECT `sales_receipt_id` FROM sales_receipt ORDER BY sales_receipt_id DESC LIMIT 1";
//                $last_id_result = mysqli_query($connect,$last_id);
//                $last_id_row = mysqli_fetch_row($last_id_result);
//                header("location:includes/print.php?id=".$last_id_row[0]);
//                http://localhost/inventory/includes/print.php?id=37
//                
               header("location:sales.php");
                
            }else{
                die(header("location:sales.php")); 
            }
           
        }


        }

                
                
                

?>




            </div>





        </div>

        <!---------------------------table---------------------------->
        <div class="tab-pane" id="sales_table" role="tabpanel" aria-labelledby="profile-tab">

            <div class="container">
                <table id="table_id" class="display table-bordered text-nowrap">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>Sales Id</th>
                            <th>Date</th>
                            <th>Customer Name</th>
                            <th>Employee Name</th>
                            <!--                            <th>Invoice No</th>-->
                            <th>Mode of payment</th>
                            <th>ChequeNo</th>
                            <th>Bank Details</th>
                            <th>Amount</th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php
                        $sales_counter=0;
        
// $query_selecting_all_sales= "SELECT * FROM `sales_receipt`";
//    $query_selecting_all_sales = "SELECT sales_receipt.*,customer.customer_name,employee.employee_first_name,employee.employee_last_name FROM customer INNER JOIN sales_receipt ON sales_receipt.sales_receipt_customer_id = customer.customer_id INNER JOIN employee ON sales_receipt.sales_receipt_employee_id = employee.employee_id";
                        
    $query_selecting_all_sales = "SELECT sales_receipt.*,customer.customer_name,employee.employee_first_name,employee.employee_last_name FROM customer INNER JOIN sales_receipt ON sales_receipt.sales_receipt_customer_id = customer.customer_id INNER JOIN employee ON sales_receipt.sales_receipt_employee_id = employee.employee_id ORDER BY sales_receipt_id DESC;";                        
                        
                        
   $query_selecting_all_sales_result  = mysqli_query($connect,$query_selecting_all_sales);
                        
   while($row= mysqli_fetch_row($query_selecting_all_sales_result)){
       $sId = $row[0];
            ?>
                        <tr>
                            <td class="text-center">
                                <a href="#sEdit<?php echo $sId; ?>" data-toggle="modal"><i class="fa fa-edit   " aria-hidden="true"></i></a>
                                <a href="#salesDelete<?php echo $sId;?>" data-toggle="modal"><i class="fa fa-trash   " aria-hidden="true"></i></a>
                                <a target="_blank" href="includes/print.php?id=<?php echo $row[0]; ?>"><i class="fa fa-print" aria-hidden="true"></i></a>

                            </td>
                            <td>
                                <?php echo $row[0];?>
                            </td>
                            <td>
                                <?php echo  date('d-m-Y', strtotime($row[1]));?>
                            </td>
                            <td>
                                <?php echo $row[12];?>
                            </td>
                            <td>
                                <?php echo $row[13]." ".$row[14];?>
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


                        <?php include('includes/edit.php');
       
       if($sales_counter==1){
//           header('location:sales.php');
//           break;     
       }
                        }
                        
                        
                        
                        ?>

                    </tbody>
                </table>
            </div>




        </div>

    </div>
</section>










<!--scrip part ///////////////////////////////////-->

<script>
    var inc = 0;

    //      
    //        sales focus on new row
    function newRow() {
        inc++;
        var x = $('<div class="form-row mb-3">' +
            '<div class="form-group col-sm-2 mb-0 barcode-field">' +
            '<input type="text" name="sBarcodeNumber[' + inc + ']" name="" class="tabindexfocus form-control form-control-sm" >' +
            '<input type="hidden" name="sProductId['+ inc +']" required>'+      
            '</div>' +
            '<div class="form-group col-sm-4 mb-0">' +
            '<input type="text" name="sPDes[' + inc + ']" class="form-control form-control-sm" readonly >' +
            '</div>' +
            '<div class="form-group col-sm-1 mb-0">' +
            '<input type="text" name="sUnit[' + inc + ']" class="form-control form-control-sm" readonly >' +
            '</div>' +
            '<div class="form-group col-sm-1 mb-0">' +
            '<input type="number" name="sQty[' + inc + ']" data-toggle="tooltip" class="form-control  form-control-sm" >' +
            '<input type="hidden" name="sQtyOld[' + inc + ']" class="form-control  form-control-sm" >' +
            '</div>' +
            '<div class="form-group col-sm-1 mb-0">'+
            '<input type="number" name="sRate[' + inc + ']" class="form-control form-control-sm" >'+
            '<input type="hidden" name="sTaxAmount[' + inc + ']" step="any" class="form-control  form-control-sm">'+
            '</div>'+
            '<div class="form-group col-sm-1 mb-0">'+
            '<input type="number" name="sTax[' + inc + ']" class="form-control numbersOnly form-control-sm" readonly required>'+
            '<input type="hidden" name="sTax1[' + inc + ']" class="form-control numbersOnly form-control-sm" readonly required>'+
            '</div>'+
            '<div class="form-group d-flex col-sm-2  mb-0">'+
            '<input type="number" name="sAmount[' + inc + ']" step="any" class="form-control numbersOnly form-control-sm" readonly required>'+
            '<a class="pl-1" onclick="removeRow(this);"><i class="fa fa-times fa-2x" aria-hidden="true"></i></a>'+
            '</div>'+
            '</div>');
        $('.newRow').append(x);
    }

    $('.newRow:first-child').attr('required');
    $(".addNewSRow").click(function(e) {
        e.preventDefault();
        newRow();
        $('.tabindexfocus').focus();
    });

    $(".removeNewSRow").click(function(e) {
        e.preventDefault();
        $('.newRow>div:last-child').remove();
        inc--;
    });


    function getRow(id, values) {
        
        $.post("aaa.php", {
                bid: values
            },
            function(data, status) {
                if (data != "") {
                    var data1 = JSON.parse(data);
                    for (var i = 0; i <= inc; i++) {


                        if ($('input[name="sBarcodeNumber[' + i + ']"]').val() == values && i != id) {
                            break;
                        }
                        
                    }

                    if (i == inc + 1) {
                        $('input[name="sPDes[' + id + ']"]').val(data1.product_name);
                        $('input[name="sRate[' + id + ']"]').val(data1.product_mrp);
                        $('input[name="sAmount[' + id + ']"]').val(data1.product_mrp);
                        $('input[name="sUnit[' + id + ']"]').val(data1.product_unit);
                        $('input[name="sQty[' + id + ']"]').val(1);
                        $('input[name="sQtyOld[' + id + ']"]').val(data1.product_quantity);
                        $('input[name="sTax[' + id + ']"]').val(data1.product_tax);
                        $('input[name="sProductId[' + id + ']"]').val(data1.product_id);
//                        var sTax = ($('input[name="sTax[' + id + ']"]').val() / 100) * ($('input[name="sRate[' + id + ']"]').val());
//                        $('input[name="sTaxAmount[' + id + ']"]').val(sTax); 

                        var sTax =  Math.round((parseFloat($('input[name="sRate[' + id + ']"]').val()) * 100 )/(parseFloat($('input[name="sTax[' + id + ']"]').val()) + 100) * 100) / 100;   
                        
              
                        
                       $('input[name="sTaxAmount[' + id + ']"]').val(sTax);
                       $('input[name="sTaxAmount[' + id + ']"]').trigger('input');
                       $('input[name="sTax1[' + id + ']"]').val(Math.round((parseFloat($('input[name="sRate[' + id + ']"]').val()) - parseFloat($('input[name="sTaxAmount[' + id + ']"]').val())) * 100) / 100);
                        $('input[name="sAmount[' + id + ']"]').trigger('input');
                       

                        if ($('input[name="sBarcodeNumber[' + inc + ']"]').val() != "") {
                            newRow();
                        }
                        $('input[name="sBarcodeNumber[' + inc + ']"]').focus();
                     
                    } else {
                        $('input[name="sQty[' + i + ']"]').val(parseFloat($('input[name="sQty[' + i + ']"]').val()) + 1).trigger('change');
                        $('input[name="sAmount[' + id + ']"]').trigger('input');
                        $('input[name="sTaxAmount[' + id + ']"]').trigger('input');
                        $('input[name="insertSTax"]').trigger('keyup');
                        $('input[name="sBarcodeNumber[' + id + ']"]').val("");
                        $('input[name="sPDes[' + id + ']"]').val("");
                        $('input[name="sRate[' + id + ']"]').val("");
                        $('input[name="sUnit[' + id + ']"]').val("");
                        $('input[name="sQty[' + id + ']"]').val("");
                        $('input[name="sTax[' + id + ']"]').val("");
                        $('input[name="sBarcodeNumber[' + inc + ']"]').focus();
                    }

                } else {
                    $('input[name="sPDes[' + id + ']"]').val("");
                    $('input[name="sRate[' + id + ']"]').val("");
                    $('input[name="sUnit[' + id + ']"]').val("");
                    $('input[name="sQty[' + id + ']"]').val("");
                    $('input[name="sTax[' + id + ']"]').val("");
                    $('input[name="sBarcodeNumber[' + inc + ']"]').focus();
                }
            });
    }

    $('#sales-form').on('change', 'input', function(e) {
        if ((e.target.name).includes("sBarcodeNumber")) {
            var id = (parseInt((e.target.name).replace(/[^0-9]/g, '')));
            getRow(id, e.target.value);

        }
    });

    function removeRow(obj) {
        $(obj).parents('.form-row').remove();
        $('input[name^="sAmount"]').trigger('input');
    }

</script>

<!--customer search script-->
<script>
    $('#search_text').keyup(function() {
        $('datalist').html("");

        $.post("aaa.php", {
                sQuery: $('#search_text').val()
            },
            function(data) {
                var data1 = JSON.parse(data);
                for (var i = 0; i < data1.length; i++) {
                    $('datalist').append('<option value="' + data1[i].customer_name + '">' + data1[i].customer_id + ' ' + data1[i].customer_company_name + ' ' + data1[i].customer_contact_no + '</option>');
                    $('input[name="insertSCId"]').val(data1[i].customer_id);
                }

            }

        );

        if ($('#search_text').val() != "") {
            search($('#search_text').val());
        }
    });

</script>

<!--script for calculating amount-->
<script>
    $('#sales-form').on('keyup change blur', 'input', function(e) {
        if ((e.target.name).includes("sQty") || (e.target.name).includes("sRate") || (e.target.name).includes("sTax")) {
            var id = (parseInt((e.target.name).replace(/[^0-9]/g, '')));

            if ($('input[name="sQty[' + id + ']"]').val() != "" && $('input[name="sRate[' + id + ']"]').val() != "" && $('input[name="sQty[' + id + ']"]').val() != "") {

               var sTax =  Math.round((parseFloat($('input[name="sRate[' + id + ']"]').val()) * 100 )/(parseFloat($('input[name="sTax[' + id + ']"]').val()) + 100) * 100) / 100;   
                
                $('input[name="sTaxAmount[' + id + ']"]').val(sTax);
                $('input[name="sTaxAmount[' + id + ']"]').trigger('input');
                
                
        

                $('input[name="sAmount[' + id + ']"]').val(($('input[name="sQty[' + id + ']"]').val()) * ($('input[name="sRate[' + id + ']"]').val()));
                $('input[name="sTaxAmount[' + id + ']"]').val(($('input[name="sQty[' + id + ']"]').val()) * ($('input[name="sTaxAmount[' + id + ']"]').val()));
                
                $('input[name="sTax1[' + id + ']"]').val(Math.round(((parseFloat($('input[name="sRate[' + id + ']"]').val())*parseFloat($('input[name="sQty[' + id + ']"]').val())) - parseFloat($('input[name="sTaxAmount[' + id + ']"]').val())) * 100) / 100);
                
                
                $('input[name="sTaxAmount[' + id + ']"]').trigger('input');
                $('input[name="sAmount[' + id + ']"]').trigger('input');
                $('input[name="sTax1[' + id + ']"]').trigger('input');
            }

//            } else {
//                $('input[name="sAmount[' + id + ']"]').val("");
//                $('input[name="sTaxAmount[' + id + ']"]').val("");
//                $('input[name="sTax1[' + id + ']"]').val("");
//                $('input[name="insertSTotalAmount"]').val("");
//                 $('input[name="insertSGrandTAmount"]').val("");
//            }



        }
    });



    $('#sales-form').on('change live load', 'input', function(e) {
        if ((e.target.name).includes("sQty")) {
            var id = (parseInt((e.target.name).replace(/[^0-9]/g, '')));
            $(this).tooltip('dispose');
            if (parseInt($('input[name="sQtyOld[' + id + ']"]').val()) < parseInt($('input[name="sQty[' + id + ']"]').val())) {
                $(this).val("");
                $(this).attr('title', 'Enter Quantity less than  or equal to ' + $('input[name="sQtyOld[' + id + ']"]').val() + '');
                $(this).focus();
                $(function() {
                    $('[data-toggle="tooltip"]').tooltip('show');
                })
            } else if (parseInt($('input[name="sQty[' + id + ']"]').val()) == 0 || parseInt($('input[name="sQty[' + id + ']"]').val()) == "") {
                $(this).val("");
                $(this).attr('title', 'Enter Quantity Greater than or equal to 1');
                $(this).focus();
                $(function() {
                    $('[data-toggle="tooltip"]').tooltip('show');
                })
            } else {
                $(this).tooltip('dispose');
            }
            
        }
    });
    
   $('#sales-form').on('input', 'input', function(e) {
      if ((e.target.name).includes("sAmount")){
         var id = (parseInt((e.target.name).replace(/[^0-9]/g, '')));  

           var sum=sum1=sum2= 0;
          for(i = 0;i<=id;i++){
          sum += parseFloat($('input[name="sTaxAmount[' + i + ']"]').val());  
          sum1 += parseFloat($('input[name="sTax1[' + i + ']"]').val());  
          sum2 += parseFloat($('input[name="sAmount[' + i + ']"]').val());   
            }
          if($('input[name="sTaxAmount[' + id + ']"]').val() != "" || $('input[name="sAmount[' + id + ']"]').val() != ""){
              
        $('input[name="insertSTotalAmount"]').val(Math.round((sum) * 100) / 100);
        $('input[name="insertSTax"]').val(Math.round((sum1) * 100) / 100);
        $('input[name="insertSGrandTAmount"]').val(Math.round((sum2) * 100) / 100);
              
              
//        $('input[name="insertSGrandTAmount"]').val( parseFloat($('input[name="insertSTotalAmount"]').val()));
//          $('input[name="sTaxAmount[' + (id+1) + ']"]').trigger('input');
          }
          
          
  
    }
    });
    
//    $('input[name="insertSTax"]').keyup(function(){                                 
//    var sTaxUpdated = parseFloat($('input[name="insertSTax"]').val() / 100) * parseFloat($('input[name="insertSTotalAmount"]').val());
//     $('input[name="insertSTaxAmount"]').val(sTaxUpdated);    
//    $('input[name="insertSGrandTAmount"]').val( parseFloat($('input[name="insertSTotalAmount"]').val()) + sTaxUpdated ); 
//    var tax_amount_rounded = Math.round(($('input[name="insertSTaxAmount"]').val()) * 100) / 100;    
//    $('input[name="insertSTaxAmount"]').val(tax_amount_rounded);    
//    var g_amount_rounded = Math.round(($('input[name="insertSGrandTAmount"]').val()) * 100) / 100;   
//    $('input[name="insertSGrandTAmount"]').val(g_amount_rounded);
//    });
//    
    $(document).keydown(function(e) {
        if (e.keyCode == 13){
            e.preventDefault();
            return false;
        }
        if (e.keyCode == 32 && e.ctrlKey) {
            $('input[name="sInsertSubmit"]').focus();
        }
        
    });
    

</script>
<?php include('includes/footer.php')?>
