<?php

require('includes/config.php');

//get row by barcode no
if(isset($_POST['bid']))
{
    $bid = $_POST['bid'];
    $query1= "SELECT product.*,batch.* FROM product INNER JOIN batch ON product.product_id = batch.batch_product_id AND batch.product_barcode_no = '$bid'";
    
    $result  = mysqli_query($connect,$query1); 
    while($row1 = mysqli_fetch_assoc($result)){
        echo json_encode($row1);
    }
}


//get row by product no
if(isset($_POST['pSId']))
{
    $pSId = $_POST['pSId'];
    $query11= "SELECT * FROM product WHERE product_name = '$pSId'";
    
    $result  = mysqli_query($connect,$query11); 
    while($row2 = mysqli_fetch_assoc($result)){
        echo json_encode($row2);
    }
}

//customer search
if(isset($_POST["sQuery"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["sQuery"]);
 $query = "SELECT * FROM customer WHERE customer_name LIKE '%".$search."%' OR customer_email LIKE '%".$search."%'";
if($_POST["sQuery"] != ""){
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
     while($row = mysqli_fetch_assoc($result))
     {
         $response[] = $row;
     }
        echo json_encode($response);
}
}
}


//vendor search
if(isset($_POST["puQuery"]))
{
 $search = mysqli_real_escape_string($connect, $_POST["puQuery"]);
 $query = "SELECT * FROM vendors WHERE `vendor_company_name` LIKE '%".$search."%' OR `vendor_person_name` LIKE '%".$search."%' OR `vendor_contact_no` LIKE '%".$search."%'";
if($_POST["puQuery"] != ""){
$result = mysqli_query($connect, $query);
if(mysqli_num_rows($result) > 0)
{
     while($row = mysqli_fetch_assoc($result))
     {
         $response[] = $row;
     }
        echo json_encode($response);
}
}

}

if(isset($_POST["datalistPuPName"]))
{
 $searchP = mysqli_real_escape_string($connect, $_POST["datalistPuPName"]);
   $searchP = strtoupper($searchP);

 $query1 = "SELECT * FROM product WHERE product_name LIKE '%".$searchP."%' ;";
    
if($_POST["datalistPuPName"] != ""){
    
$result1 = mysqli_query($connect, $query1);
    
if(mysqli_num_rows($result1) > 0)
{
     while($row1 = mysqli_fetch_assoc($result1))
     {
         $response1[] = $row1;
     }
        echo json_encode($response1);
}
}
}



//TRUNCATE `inventory_management`.`batch`;TRUNCATE `inventory_management`.`purchase`;TRUNCATE `inventory_management`.`purchase_receipt`;TRUNCATE `inventory_management`.`sales`;TRUNCATE `inventory_management`.`sales_receipt`;TRUNCATE `inventory_management`.`product`;
?>



