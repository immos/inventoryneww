<?php
       

      $connect = mysqli_connect("localhost", "root", "", "inventory_management");

 ?>










<?php 

        $id = $_GET['id'];


$print_sales_r= "SELECT * FROM `sales_receipt` WHERE `sales_receipt_id`=$id";

 $print_sales_r_result=mysqli_query($connect,$print_sales_r);

$print_sales="SELECT * FROM `sales` WHERE `sales_receipt_id`=$id";

$print_sales_result=mysqli_query($connect,$print_sales);


//                  echo "sales data<br>";
//while($print_row1 = $print_sales_result->fetch_assoc()){
//    echo $print_row1["sales_quantity"]."&nbsp".$print_row1['sales_rate']."&nbsp".$print_row1['sales_amount']."<br>";
//}
                  




$print_row= mysqli_fetch_row($print_sales_r_result);
// print_r($print_row);
// echo '<br>sales receipt data<br>';
//echo $print_row[0].'<br>'; 
//echo $print_row[1].'<br>';
//echo $print_row[2].'<br>';
//echo $print_row[3].'<br>';
//echo $print_row[4].'<br>';
//echo $print_row[5].'<br>';
//echo $print_row[6].'<br>';
//echo $print_row[7].'<br>';
//echo $print_row[8].'<br>';


?>


<!--<link href="//netdna.bootstrapcdn.com/bootstrap/3.1.0/css/bootstrap.min.css" rel="stylesheet" id="bootstrap-css">-->
<!--<script src="//netdna.bootstrapcdn.com/bootstrap/3.1.0/js/bootstrap.min.js"></script>-->
<script src="//code.jquery.com/jquery-1.11.1.min.js"></script>
<link rel="stylesheet" href="../assests/style4.css">
<link rel="stylesheet" href="../assests/bootstrap.css">
<script src="../assests/bootstrap.min.js"></script>


        <button class="navbar btn  btn-sm  mx-auto my-3 border-dark">Print</button>
<div class="container">
    <div class="row">
        <div class="col-12">
            <div class="invoice-title">
                <h2>Hertzsoft MART</h2>
                <h3 class="pull-right pt-4">Order #
                    <?php echo $print_row[0]; ?>
                </h3>
            </div>
            <hr>
            <div class="row">
                <div class="col-6">
                    <address>
                        <strong>Billed To:</strong><br>
                    <?php echo $print_row[9];?><br>
                    </address>
                </div>
                <div class="col-6 text-right">
                    <address>
                        <strong>Order Date:</strong><br>
                        <?php echo $print_row[1]; ?><br><br>
                    </address>
                </div>
            </div>
            <div class="row">
                <div class="col-6">
                    <address>
                        <strong>Payment Method:</strong><br>
                        <?php echo $print_row[5]; ?><br>
                        <?php  echo $print_row[6];?><br>
                        <?php  echo $print_row[7];?><br>
                    </address>
                </div>

            </div>
        </div>
    </div>

    <div class="row">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title"><strong>Order summary</strong></h3>
                </div>
                <div class="panel-body">
                    <div class="">
                        <table class="table">
                            <thead>
                                <tr>
                                    <td><strong>Item</strong></td>
                                    <td class="text-center"><strong>Price</strong></td>
                                    <td class="text-center"><strong>Quantity</strong></td>
                                    <td class="text-right pr-3"><strong>Totals</strong></td>
                                </tr>
                            </thead>
                            <!-- foreach ($order->lineItems as $line) or some such thing here -->
                            <?php	
    							while($print_row1 = $print_sales_result->fetch_assoc()){

    ?>


                            <tr>
                                <td><?php  echo $print_row1['sales_product_name']."  ( ".$print_row1['sales_unit']." )"; ?></td>
                                <td class="text-center">
                                    <?php  echo $print_row1['sales_rate']; ?>
                                </td>
                                <td class="text-center">
                                    <?php echo $print_row1["sales_quantity"]; ?>
                                </td>
                                <td class="text-right">
                                   <?php echo $print_row1['sales_amount']; ?>  &#8377; 
                                </td>
                            </tr>


                            <?php } ?>


                            <tr>
                                <td class="thick-line"></td>
                                <td class="thick-line"></td>
                                <td class="thick-line text-center"><strong>Subtotal</strong></td>
                                <td class="thick-line text-right"> <?php echo $print_row[8]; ?>  &#8377; </td>
                            </tr>
                            <tr>
                                <td class="no-line"></td>
                                <td class="no-line"></td>
                                <td class="no-line text-center"><strong>tax</strong></td>
                                <td class="no-line text-right"><?php echo $print_row[10]; ?>  &#8377; </td>
                            </tr>
                            <tr>
                                <td class="no-line"></td>
                                <td class="no-line"></td>
                                <td class="no-line text-center"><strong>Grand Total</strong></td>
                                <td class="no-line text-right">
                                    <?php echo $print_row[11]; ?>  &#8377; 
                                </td>
                            </tr>

                        </table>

                    </div>

                </div>

            </div>

        </div>
    </div>

    Thank you! visit again.
</div>


<script>
    $('document').ready(function() {
        window.print();
    $('button').click(function() {
        window.print();
    });
    });

</script>
