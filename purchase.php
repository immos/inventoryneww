<?php ob_start(); ?>
<?php include('includes/header.php')?>


<!-- page content starts here   -->

<div class="h2 mb-3">Purchase</div>

<section>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#purchase_form" role="tab" aria-controls="profile" aria-selected="false">Purchase Receipt</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#purchase_table" role="tab" aria-controls="home" aria-selected="true">Purchase Records</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content py-4">
        <!--------------------------------------add product section--------------------------->
        <div class="tab-pane active" id="purchase_form" role="tabpanel" aria-labelledby="home-tab">

            <div class="container">
                <form method="post">
                    <div class="form-row">

                        <div class="form-group col-sm-2">
                            <label for="" class="">InvoiceNo.</label>
                            <input type="text" name="puInvoiceNo" class=" form-control form-control-sm">
                        </div>

                        <div class="form-group col-sm-2 ">
                            <label for="" class="">Date</label>
                            <input type="date" max="9999-12-31" name="insertPuDate" class="form-control contactsOnly  form-control-sm" value="<?php echo date('Y-m-d');?>">
                        </div>


                        <div class="form-group col-sm-8">
                            <label for="">Vendor Name</label>
                            <input type="text" list="datalistPuVName" name="insertPuVName" class="focusClass form-control form-control-sm" id="search_text">
                            <input type="hidden" name="insertPuVId">
                        </div>
                        <datalist id="datalistPuVName">

                        </datalist>
                    </div>

                    <div class="form-row m-0" id="puLabel">
                        <div class="col-sm-6 d-flex">
                            <div class="col-sm-1 ">
                                <label for="">No</label>
                            </div>
                            <div class="col-sm-5 ">
                                <label for="">Product-Name</label>
                            </div>
                            <div class="col-sm-2">
                                <label for="">Weight</label>
                            </div>
                            <div class="col-sm-2">
                                <label for="">Unit</label>
                            </div>
                            <div class="col-sm-2">
                                <label for="">Qty</label>
                            </div>
                        </div>

                        <div class="col-sm-6 d-flex">
                            <div class="col-sm-4">
                                <label for="">Expiry</label>
                            </div>
                            <div class="col-sm-2">
                                <label for="">Pu-Rate</label>
                            </div>
                            <div class="col-sm-2">
                                <label for="">M.R.P</label>
                            </div>
                            <div class="col-sm-1">
                                <label for="">Tax%</label>
                            </div>
                            <div class="col-sm-2">
                                <label for="">Amount</label>
                            </div>
                            <div class="col-sm-1">

                            </div>
                        </div>

                    </div>

                    <div class="newRow12">
                        <div class="form-row">
                            <div class="col-sm-6 d-flex">
                                <div class="form-group col-sm-1">
                                    <input type="number" class="form-control form-control-sm" value="1" disabled>
                                    <input type="hidden" name="puProductNo[0]" class="form-control form-control-sm">
                                </div>
                                <div class="form-group col-sm-5 ">
                                    <input type="text" list="datalistPuPName" name="puPDes[0]" class="searchPName tabindexfocus form-control form-control-sm">
                                </div>
                                
                                <datalist id="datalistPuPName"></datalist>

                                <div class="form-group col-sm-2 ">
                                    <input type="number" name="puW[0]" class="form-control form-control-sm">
                                </div>

                                <div class="form-group col-sm-2 ">
                                    <select name="puUnit[0]" id="puUnit" class="custom-select custom-select-sm">
                                        <option value="gm">gm</option>
                                        <option value="kg">kg</option>
                                        <option value="ml">ml</option>
                                        <option value="lt">lt</option>
                                        <option value="U">U</option>
                                    </select>
                                </div>

                                <div class="form-group col-sm-2 ">
                                    <input type="number" name="puQty[0]" class="form-control  form-control-sm">
                                </div>
                            </div>

                            <div class="col-sm-6 d-flex">
                                <div class="form-group col-sm-4 ">
                                    <input type="date" max="9999-12-31" name="puExpDate[0]" class="form-control form-control-sm">
                                </div>

                                <div class="form-group col-sm-2 ">
                                    <input type="number" name="puRate[0]" class="form-control form-control-sm">
                                </div>

                                <div class="form-group col-sm-2 ">
                                    <input type="number" name="puMrpRate[0]" class="form-control form-control-sm">
                                </div>


                                <div class="form-group col-sm-1 ">
                                    <input type="number" name="puTax[0]" class="form-control  form-control-sm">
                                </div>
                                <div class="form-group col-sm-2  ">
                                    <input type="number" name="puAmount[0]" class="form-control  form-control-sm">
                                </div>
                                <div class="form-group col-sm-1 ">
                                    <a class="pl-1"><i class="fa fa-times fa-2x" aria-hidden="true"></i></a>
                                </div>
                            </div>
                        </div>

                        <div class="puNewRow">



                        </div>
                    </div>


                    <div class="form-row">
                        <div class="mt-1">
                            <button type="button" class="btn btn-dark addNewPuRow">Add</button>
                            <button type="button" class="btn btn-dark removeNewPuRow">Remove</button>
                        </div>
                        <div class="form-group col-sm-4 ml-auto">
                            <label for="">Total Amount</label>
                            <input type="tel" name="insertPuTotalAmount" class="form-control  form-control-sm">
                        </div>
                    </div>




                    <div class="form-row">

                        <div class="form-group col-sm-3">
                            <label for="">Payment Mode</label>
                            <div class="input-group">
                                <select class="custom-select custom-select-sm" name="insertPuPMode" required>
                                    <option value="">Select</option>
                                    <option value="cash">Cash</option>
                                    <option value="cheque">Cheque</option>
                                </select>
                            </div>
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="">PersonName</label>
                            <input type="text" name="insertPuPName" class="form-control form-control-sm" />
                        </div>

                        <div class="form-group col-sm-1 ml-auto">
                            <label for="">TAX</label>
                            <input type="tel" name="insertPuTax" class="form-control  form-control-sm" />
                        </div>

                    </div>
                    <div class="form-row">
                        <div class="form-group col-sm-3 ">
                            <label for="">ChequeNo</label>
                            <input type="tel" name="insertPuChequeNo" class="form-control form-control-sm" />
                        </div>

                        <div class="form-group col-sm-3 ">
                            <label for="">Bank/Branch</label>
                            <input type="text" name="insertPuBDetails" class="form-control form-control-sm" />
                        </div>
                        <div class="form-group col-sm-4 ml-auto">
                            <label for="">GRAND TOTAL</label>
                            <input type="tel" name="insertGrandTAmount" class="form-control  form-control-sm" />
                        </div>

                    </div>

                    <div class="mt-1">
                        <button type="submit" class="btn btn-dark" name="puInsertSubmit">Submit</button>
                    </div>

                </form>

                <?php if(isset($_POST['puInsertSubmit'])){
    
        
    
            $insertPuPMode = $_POST['insertPuPMode'];
            $insertPuDate =  $_POST['insertPuDate'];
            $insertPuTotalAmount =  $_POST['insertPuTotalAmount'];
            $insertPuPName =  $_POST['insertPuPName'];
            $insertPuChequeNo =  $_POST['insertPuChequeNo'];
            $insertPuBDetails =  $_POST['insertPuBDetails'];
            $insertGrandTAmount =  $_POST['insertGrandTAmount'];
            $insertPuVId = $_POST['insertPuVId'];
            $insertPuPName = $_POST['insertPuPName'];
            $insertPuTax = $_POST['insertPuTax'];
            $puProductNo = $_POST['puProductNo'];
        
            $puPDes =  $_POST['puPDes'];
            $puQty =  $_POST['puQty'];
            $puRate =  $_POST['puRate'];
            $puAmount =  $_POST['puAmount'];
            $puTax = $_POST['puTax'];
    
            $puUnit = $_POST['puUnit']; 
            $puW = $_POST['puW'];
            $puProductNo = $_POST['puProductNo'];
            $puExpDate = $_POST['puExpDate'];
            $puMrpRate = $_POST['puMrpRate'];

    



             $insert_purchase_receipt_query = "INSERT INTO `purchase_receipt`(`purchase_receipt_id`, `purchase_receipt_vendor_id`, `purchase_receipt_employee_id`, `purchase_receipt_Invoice_no`, `purchase_receipt_payment_mode`, `purchase_receipt_cheque_no`, `purchase_receipt_bank`, `purchase_receipt_amount`, `purchase_receipt_date`, `purchase_receipt_person_name`, `purchase_receipt_tax`, `purchase_receipt_grand_total`) VALUES ('','$insertPuVId','$_SESSION[emp_id]','','$insertPuPMode','$insertPuChequeNo','$insertPuBDetails','$insertPuTotalAmount','$insertPuDate','$insertPuPName','$insertPuTax','$insertGrandTAmount')";
    
    
    
 $insert_purchase_receipt_query_result = mysqli_query($connect,$insert_purchase_receipt_query); 
    
    
            $get_purchase_receipt_id_query= "SELECT `purchase_receipt_id` FROM `purchase_receipt` ORDER BY purchase_receipt_id DESC LIMIT 1";
            
    
     $get_purchase_receipt_id_query_result = mysqli_query($connect,$get_purchase_receipt_id_query); 
        $get_pid=0;
        while($row= mysqli_fetch_row($get_purchase_receipt_id_query_result)){
        $get_pid=$row[0];
                }
              
            
              

                foreach($puPDes as $index => $value){
                    
             $puFinalUnit[] = $puW[$index]." ".$puUnit[$index]; 

        $formatted_barcode = $puProductNo[$index].str_replace("-","",$puExpDate[$index]).str_replace(" ","",$puFinalUnit[$index]);
                    
            $insert_purchase_query = "INSERT INTO `purchase`(`purchase_id`, `purchase_receipt_id`, `purchase_product_id`, `purchase_quantity`, `purchase_rate`, `purchase_amount`, `purchase_mrp`, `purchase_tax`, `purchase_expiry`, `purchase_unit`,`purchase_product_name`,`purchase_barcode_no`) VALUES ('','$get_pid','$puProductNo[$index]','$puQty[$index]','$puRate[$index]','$puAmount[$index]','$puMrpRate[$index]','$puTax[$index]','$puExpDate[$index]','$puFinalUnit[$index]','$puPDes[$index]','$formatted_barcode')";
                    
            $update_batch="UPDATE `batch` SET `product_quantity` = `product_quantity`+$puQty[$index] WHERE `batch`.`product_barcode_no` = '$formatted_barcode';";
                    
            $insert_batch_query = "INSERT INTO `batch`(`batch_id`, `purchase_receipt_id`, `batch_product_id`, `product_unit`, `product_rate`, `product_sale_rate`, `product_mrp`, `product_quantity`, `product_expiry`, `product_barcode_no`) VALUES ('','$get_pid','$puProductNo[$index]','$puFinalUnit[$index]','$puRate[$index]','','$puMrpRate[$index]','$puQty[$index]','$puExpDate[$index]','$formatted_barcode');";
                    
           
            if($puQty[$index]!=NULL && $puRate[$index]!=NULL) 
            {
               $insert_purchase_query_result = mysqli_query($connect,$insert_purchase_query  );  
                $update_batch_result=mysqli_query($connect,$update_batch);
                if($connect->affected_rows<1)
                {
                   $insert_batch_query_result = mysqli_query($connect,$insert_batch_query);     
                }
            
               header('location:purchase.php');
            }
           

                }
    


          }
             
             
             ?>




            </div>



        </div>

        <!---------------------------table---------------------------->
        <div class="tab-pane" id="purchase_table" role="tabpanel" aria-labelledby="profile-tab">

            <div class="container">

                <table id="table_id" class="display">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>Id</th>
                            <th>Vendor Id</th>
                            <th>Employee Id</th>
                            <th>Inovice No</th>
                            <th>Payment Mode</th>
                            <th>Cheque No</th>
                            <th>Bank</th>
                            <th>Amount</th>
                            <th>Date</th>



                        </tr>
                    </thead>
                    <tbody>

                        <?php
                        
                        
$query_selecting_all_purchase = "SELECT purchase_receipt.*,vendors.vendor_company_name,employee.employee_first_name,employee.employee_last_name FROM vendors INNER JOIN purchase_receipt ON purchase_receipt.purchase_receipt_vendor_id = vendors.vendors_id INNER JOIN employee ON purchase_receipt.purchase_receipt_employee_id = employee.employee_id";
                        
                 $purchase_counter=0;       
                
//               $query_selecting_all_purchase= "SELECT * FROM `purchase_receipt`";
               $query_selecting_all_purchase_result  = mysqli_query($connect,$query_selecting_all_purchase);
               while($row= mysqli_fetch_row($query_selecting_all_purchase_result)){       
                   $puId=$row[0];
            ?>

                        <tr>
                            <td class="text-center">
                                <a href="#editPurchase<?php echo $puId;?>" data-toggle="modal" id="purchaseEditLink"><i class="fa fa-edit mx-2" aria-hidden="true"></i></a>
                                <a href="#purchaseDelete<?php echo $puId;?>" data-toggle="modal"><i class="fa fa-trash mx-2" aria-hidden="true"></i></a>


                            </td>
                            <td>
                                <?php echo $row[0];?>
                            </td>
                            <td>
                                <?php echo $row[12];?>
                            </td>
                            <td>
                                <?php echo $row[13]." ".$row[14];?>
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


                        <?php include('includes/edit.php');
                   
                   
                        if($purchase_counter==1){
                            header("location:purchase.php");
                            break;
                        }

                        } ?>

                    </tbody>
                </table>



            </div>


        </div>
    </div>
</section>



<script>
    var inc = 0;

    $("#purchase-form").keydown(function(e) {
        if (event.keyCode == 13) {
            var x = document.activeElement.blur();
            e.preventDefault();
            return false;
        }
    });



    function puNewRow() {
        inc++;
        var p = $('<div class="form-row">' +
            '<div class="col-sm-6 d-flex">' +
            '<div class="form-group col-sm-1">' +
            '<input type="number" class="form-control form-control-sm" value="'+(inc+1)+'" disabled>' +
            '<input type="hidden" name="puProductNo[' + inc + ']" class="form-control form-control-sm">' +
            '</div>' +
            '<div class="form-group col-sm-5 ">'+
            '<input type="text" list="datalistPuPName" name="puPDes[' + inc + ']" class="searchPName tabindexfocus form-control form-control-sm">'+
            '</div>'+
            '<datalist id="datalistPuPName"></datalist>'+
            '<div class="form-group col-sm-2 ">' +
            '<input type="number" name="puW[' + inc + ']" class="form-control form-control-sm">' +
            '</div>'

            +
            '<div class="form-group col-sm-2 ">' +
            '<select name="puUnit[' + inc + ']" id="puUnit" class="custom-select custom-select-sm">' +
            '<option value="gm">gm</option>' +
            '<option value="kg">kg</option>' +
            '<option value="ml">ml</option>' +
            '<option value="lt">lt</option>' +
            '<option value="U">U</option>' +
            '</select>' +
            '</div>'

            +   
            '<div class="form-group col-sm-2 ">' +
            '<input type="number" name="puQty[' + inc + ']" class="form-control  form-control-sm">' +
            '</div>' +
            '</div>'

            +
            '<div class="col-sm-6 d-flex">' +
            '<div class="form-group col-sm-4 ">' +
            '<input type="date" max="9999-12-31" name="puExpDate[' + inc + ']" class="form-control form-control-sm">' +
            '</div>'

            +
            '<div class="form-group col-sm-2 ">' +
            '<input type="number" name="puRate[' + inc + ']" class="form-control form-control-sm">' +
            '</div>'

            +
            '<div class="form-group col-sm-2 ">' +
            '<input type="number" name="puMrpRate[' + inc + ']" class="form-control form-control-sm">' +
            '</div>'


            +
            '<div class="form-group col-sm-1 ">' +
            '<input type="number" name="puTax[' + inc + ']" class="form-control  form-control-sm">' +
            '</div>' +
            '<div class="form-group col-sm-2  ">' +
            '<input type="number" name="puAmount[' + inc + ']" class="form-control  form-control-sm">' +
            '</div>' +
            '<div class="form-group col-sm-1 ">' +
            '<a class="pl-1" onclick="removeRow(this)"><i class="fa fa-times fa-2x" aria-hidden="true"></i></a>' +
            '</div>' +
            '</div>' +
            '</div>');
        $('.puNewRow').append(p);
    }

    $('.puNewRow:first-child').attr('required');
    $(".addNewPuRow").click(function(e) {
        e.preventDefault();
        puNewRow();
        $('.tabindexfocus').focus();
    });
    $(".removeNewPuRow").click(function(e) {
        e.preventDefault();
        $('.puNewRow>div:last-child').remove();
        inc--;
    });


    function getRow(id, values) {
        

        $.post("aaa.php", {
                pSId: values
            },
            function(data, status) {
          
                if (data != "") {
                    var data1 = JSON.parse(data);


                    for (var i = 0; i <= inc; i++) {

                        if ($('input[name="puPDes[' + i + ']"]').val() == values && i != id) {
                            break;
                        }
                    }

//                    if (i == inc + 1) {
                        $('input[name="puProductNo[' + id + ']"]').val(data1.product_id);
                        $('input[name="puRate[' + id + ']"]').val(data1.product_mrp);
                        $('input[name="puUnit[' + id + ']"]').val(data1.product_unit);
                        $('input[name="puQty[' + id + ']"]').val(1);
                        $('input[name="puTax[' + id + ']"]').val(data1.product_tax);

                        if ($('input[name="puPDes[' + inc + ']"]').val() != "") {
                            puNewRow();
                        }
//                        //                        $('input[name="puProductNo[' + inc + ']"]').focus();
//                    } 
//                    else {
//                        $('input[name="puQty[' + i + ']"]').val(parseInt($('input[name="puQty[' + i + ']"]').val()) + 1);
//
//                        $('input[name="puProductNo[' + id + ']"]').val("");
//                        $('input[name="puPDes[' + id + ']"]').val("");
//                        $('input[name="puRate[' + id + ']"]').val("");
//                        $('input[name="puUnit[' + id + ']"]').val("");
//                        $('input[name="puQty[' + id + ']"]').val("");
//                        $('input[name="puTax[' + id + ']"]').val("");
//                        $('input[name="puProductNo[' + inc + ']"]').focus();
//                    }

                } else {
                    $('input[name="puProductNo[' + id + ']"]').val("");
                    $('input[name="puRate[' + id + ']"]').val("");
                    $('input[name="puUnit[' + id + ']"]').val("");
                    $('input[name="puQty[' + id + ']"]').val("");
                    $('input[name="puTax[' + id + ']"]').val("");
                    $('input[name="puPDes[' + inc + ']"]').focus();
                }
            });
    }
    
    

    $('#purchase_form').on('blur', 'input', function(e) { 
        if ((e.target.name).includes("puPDes")) {
            var id = (parseInt((e.target.name).replace(/[^0-9]/g, '')));
            getRow(id, e.target.value);
        }
    });

    function removeRow(obj) {
        $(obj).parents('.form-row').remove();
    }
    
    
    

</script>




<!--customer search ajax script-->
<script>
    $('#search_text').keyup(function() {
        
        $('#datalistPuVName').html("");


        $.post("aaa.php", {
                puQuery: $('#search_text').val()
            },
            function(data) {
                var data1 = JSON.parse(data);
                for (var i = 0; i < data1.length; i++) {
                    $('#datalistPuVName').append('<option value="' + data1[i].vendor_company_name + '">' + ' ' + data1[i].vendors_id + ' ' + data1[i].vendor_person_name + ' ' + data1[i].vendor_contact_no + '</option>');

                    $('input[name="insertPuVId"]').val(data1[i].vendors_id);
                }


            }


        );

        if ($('#search_text').val() != "") {
            search($('#search_text').val());
        }
    });
    
    

   $('#purchase_form').on('keyup', 'input', function(e) { 
        $('#datalistPuPName').html("");
       
        if ((e.target.name).includes("puPDes")) {
            var id = (parseInt((e.target.name).replace(/[^0-9]/g, '')));
            
        $.post("aaa.php", {
                datalistPuPName: e.target.value
            },
            function(data) {
                var data1 = JSON.parse(data);

                for (var i = 0; i < data.length; i++) {
                    
                    $('#datalistPuPName').append('<option value="' + data1[i].product_name + '">'+data1[i].product_id+' '+data1[i].product_name+'</option>');
                    
                }

            }


        );

        }
    });
        

</script>



<?php include('includes/footer.php')?>
