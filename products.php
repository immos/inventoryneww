<?php ob_start(); ?>

<?php include('includes/header.php')?>


<!--------insert new product query------------->




<!-- page content starts here   -->

<div class="h2 mb-3">Products</div>

<section>
    <!-- Nav tabs -->
    <ul class="nav nav-tabs" id="myTab" role="tablist">
        <li class="nav-item">
            <a class="nav-link active" id="profile-tab" data-toggle="tab" href="#product_form" role="tab" aria-controls="profile" aria-selected="false">Add New Products</a>
        </li>
        <li class="nav-item">
            <a class="nav-link" id="home-tab" data-toggle="tab" href="#product_table" role="tab" aria-controls="home" aria-selected="true">Products Records</a>
        </li>
    </ul>

    <!-- Tab panes -->
    <div class="tab-content py-4">
        <!--------------------------------------add product section--------------------------->
        <div class="tab-pane active" id="product_form" role="tabpanel" aria-labelledby="home-tab">

            <div class="container">

                <form method="post">
                    <div class="form-row">

                        <div class="form-group col-sm-1">
                            <label for="" class="">Id</label>
                            <input type="text" name="" class="form-control form-control-sm" id="" value="<?php ?>">
                        </div>

                        <div class="form-group col-sm-3">
                            <label for="" class="">ProductCategory</label>
                            <input type="text" list="productCategory" autocomplete="off" name="insertPCategory" class="focusClass form-control contactsOnly  form-control-sm" required>
                            <datalist id="productCategory">
                                <option value="Grocery"></option>
                                <option value="Packaged Food"></option>
                                <option value="Personal Care"></option>
                                <option value="Home Needs"></option>
                                <option value="Dairy"></option>
                                <option value="Beverages"></option>
                                <option value="Baby & Kids"></option>
                                <option value="Medicines"></option>
                            </datalist>
                        </div>


                        <div class="form-group col-sm-3">
                            <label for="">ProductType</label>
                            <input type="text" name="insertPType" autocomplete="off" class="form-control form-control-sm" required>

                            <datalist id="Grocery">
                                <option value="Cooking Oil"></option>
                                <option value="Ghee & Vanaspati"></option>
                                <option value="Dals"></option>
                                <option value="Pulses"></option>
                                <option value="Masala & Spices"></option>
                                <option value="Dry Fruits"></option>
                                <option value="Flours & Grains"></option>
                                <option value="Salt / Sugar / Jaggery"></option>
                                <option value="Rice & Rice Products"></option>
                            </datalist>

                            <datalist id="Packaged Food">
                                <option value="Biscuits & Cookies"></option>
                                <option value="Snacks & Farsans"></option>
                                <option value="Breakfast Cereals"></option>
                                <option value="Ketchup & Sauce"></option>
                                <option value="Jams & Spreads"></option>
                                <option value="Ready To Cook"></option>
                                <option value="Pasta & Noodles"></option>
                                <option value="Soups"></option>
                                <option value="Sweets"></option>
                                <option value="Pickles"></option>
                                <option value="Chocolates"></option>
                                <option value="Breads & Bakery"></option>
                                <option value="Canned Food"></option>
                            </datalist>

                            <datalist id="Personal Care">
                                <option value="Skin Care"></option>
                                <option value="Hair Care"></option>
                                <option value="Oral Care"></option>
                                <option value="Deos & Perfumes"></option>
                                <option value="Sanitary Napkins"></option>
                                <option value="Personal Hygiene"></option>
                                <option value="Baby Care"></option>
                                <option value="Shaving Needs"></option>
                                <option value="Health & Wellness"></option>
                                <option value="Diapers & Wipes"></option>
                            </datalist>

                            <datalist id="Home Needs">
                                <option value="Detergents"></option>
                                <option value="Cleaners"></option>
                                <option value="Utensil Cleaners"></option>
                                <option value="Repellents"></option>
                                <option value="Air Fresheners"></option>
                                <option value="Fabric Car"></option>
                                <option value="Tissues & Disposables"></option>
                                <option value="Devotional Needs"></option>
                                <option value="Lights & Batterie"></option>
                                <option value="Pet Supplies"></option>
                                <option value="Cleaning Tools"></option>
                                <option value="Shoe Car"></option>
                            </datalist>

                            <datalist id="Dairy">
                                <option value="Butter"></option>
                                <option value="Cheese"></option>
                                <option value="Milk"></option>
                                <option value="Curd & Shrikhand"></option>
                                <option value="Dairy Products"></option>
                            </datalist>

                            <datalist id="Beverages">
                                <option value="Tea & Coffee"></option>
                                <option value="Health Drinks"></option>
                                <option value="Soft Drinks"></option>
                                <option value="Juices"></option>
                                <option value="Squash & Syrups"></option>
                                <option value="Energy Drinks"></option>
                                <option value="Concentrates"></option>
                                <option value="Soda & Water"></option>
                            </datalist>

                            <datalist id="Baby & Kids">
                                <option value="Diapers & Wipes"></option>
                                <option value="Baby Care"></option>
                                <option value="Baby Food"></option>
                            </datalist>

                            <datalist id="Medicines">
                                <option value="Tablets"></option>
                                <option value="Capsules"></option>
                                <option value="Liquid"></option>
                                <option value="Drops"></option>
                                <option value="Inhalers"></option>
                                <option value="Injections"></option>
                            </datalist>


                        </div>

                        <div class="form-group col-sm-2">
                            <label for="">ProductSubType</label>
                            <input type="text" name="insertPSubType" autocomplete="off" class="form-control form-control-sm">
                            <datalist id="Cooking Oil">
                                <option value="Sunflower Oil"></option>
                                <option value="Blended Oil"></option>
                                <option value="Rice Bran Oil"></option>
                                <option value="Olive Oil"></option>
                                <option value="Groundnut Oil"></option>
                                <option value="Mustard Oil"></option>
                                <option value="Other Oils"></option>
                            </datalist>

                            <datalist id="Ghee & Vanaspati">
                                <option value="Ghee"></option>
                                <option value="Vanaspat"></option>
                            </datalist>

                            <datalist id="Masala & Spices">
                                <option value="Whole Spices"></option>
                                <option value="Powdered Spices"></option>
                                <option value="Ready Mix Masalas"></option>
                                <option value="Cooking Pastes"></option>
                                <option value="Herbs & Seasonings"></option>
                            </datalist>

                            <datalist id="Flours & Grains">
                                <option value="Atta"></option>
                                <option value="Other Flours & Grains"></option>
                            </datalist>

                            <datalist id="Rice & Rice Products">
                                <option value="Basmati Rice"></option>
                                <option value="Kolam Rice"></option>
                                <option value="Brown Rice"></option>
                                <option value="Other Rice"></option>
                                <option value="Poha"></option>
                                <option value="Kurmura"></option>
                            </datalist>

                            <datalist id="Biscuits & Cookies">
                                <option value="Cookies"></option>
                                <option value="Glucose Biscuits"></option>
                                <option value="Marie Biscuits"></option>
                                <option value="Salty Biscuits"></option>
                                <option value="Cream Biscuits"></option>
                                <option value="Wafer Biscuits"></option>
                                <option value="Khari & Toasts"></option>
                                <option value="Digestive Biscuits"></option>
                                <option value="Health Biscuits"></option>
                            </datalist>


                            <datalist id="Snacks & Farsans">
                                <option value="Popcorn"></option>
                                <option value="Chips & Wafers"></option>
                                <option value="Sev & Mixtures"></option>
                                <option value="Namkeens"></option>
                                <option value="Other Snacks"></option>

                            </datalist>


                            <datalist id="Breakfast Cereals">
                                <option value="Flakes"></option>
                                <option value="Muesli"></option>
                                <option value="Oats"></option>

                            </datalist>


                            <datalist id="Jams & Spreads">
                                <option value="Jams"></option>
                                <option value="Spreads"></option>
                                <option value="Mayonnaise"></option>
                                <option value="Honey"></option>
                                <option value="Dips & Dressings"></option>
                            </datalist>
                            <datalist id="Ready To Cook">
                                <option value="Popcorn"></option>
                                <option value="Papad"></option>
                                <option value="Ready Mix"></option>
                            </datalist>

                            <datalist id="Pasta & Noodles">
                                <option value="Instant Noodles"></option>
                                <option value="Hakka Noodles"></option>
                                <option value="Pasta"></option>
                                <option value="Vermicelli"></option>
                            </datalist>

                            <datalist id="Sweets">
                                <option value="Sweets"></option>
                                <option value="Candies"></option>
                                <option value="Cakes"></option>
                            </datalist>

                            <datalist id="Breads & Bakery">
                                <option value="Cakes"></option>
                            </datalist>
                            <datalist id="">Skin Care
                                <option value="Lip Care"></option>
                                <option value="Soaps"></option>
                                <option value="Skin Creams & Lotions"></option>
                                <option value="Face Wash & Scrubs"></option>
                                <option value="Face Cream"></option>
                                <option value="Talcum Powder"></option>
                                <option value="Sunscreen"></option>
                                <option value="Shower Gels"></option>
                                <option value="Beauty Products"></option>
                                <option value="Face Tissues"></option>
                            </datalist>

                            <datalist id="Hair Care">
                                <option value="Hair Gel & Cream"></option>
                                <option value="Hair Shampoos"></option>
                                <option value="Hair Oil"></option>
                                <option value="Hair Colour"></option>
                                <option value="Hair Conditioners"></option>
                            </datalist>

                            <datalist id="Oral Care">
                                <option value="Toothpaste"></option>
                                <option value="Toothbrush"></option>
                                <option value="Mouthwash"></option>
                            </datalist>

                            <datalist id="Deos & Perfumes">
                                <option value="Men's Deos & Perfumes"></option>
                                <option value="Women's Deos"></option>
                            </datalist>

                            <datalist id="Personal Hygiene">
                                <option value="Hand Wash & Sanitizer"></option>
                                <option value="Hair Removal"></option>
                                <option value="Intimate Wash"></option>
                            </datalist>

                            <datalist id="Baby Care">
                                <option value="Baby Oil"></option>
                                <option value="Baby Soaps & Shampoos"></option>
                                <option value="Baby Lotion & Cream"></option>
                                <option value="Baby Powder"></option>
                            </datalist>

                            <datalist id="Shaving Needs">
                                <option value="Men Razor & Blade"></option>
                                <option value="Shaving Foam"></option>
                                <option value="Shaving Cream & Brush"></option>
                                <option value="After Shave"></option>
                                <option value="Women Razor"></option>
                            </datalist>

                            <datalist id="Health & Wellness">
                                <option value="Cold Relief"></option>
                                <option value="Pain Killers"></option>
                                <option value="Ear Care"></option>
                                <option value="Antiseptics"></option>
                                <option value="Digestive Care"></option>
                                <option value="Contraceptives"></option>
                                <option value="First Aid"></option>
                                <option value="Health Food"></option>
                                <option value="Eye Care"></option>
                            </datalist>

                            <datalist id="Diapers & Wipes">
                                <option value="Baby Diapers & Wipes"></option>
                                <option value="Adult Diapers"></option>
                            </datalist>

                            <datalist id="Detergents">
                                <option value="Detergent Powder"></option>
                                <option value="Detergent Bar"></option>
                                <option value="Liquid Detergent"></option>
                            </datalist>

                            <datalist id="Cleaners">
                                <option value="Toilet Cleaners"></option>
                                <option value="Floor Cleaners"></option>
                                <option value="Other Cleaners"></option>
                            </datalist>

                            <datalist id="Pooja Needs">
                                <option value="Agarbatti"></option>
                                <option value="Camphor & Kapur"></option>
                                <option value="Pooja Items"></option>
                            </datalist>

                            <datalist id="Cleaning Tools">
                                <option value="Mops & Refills"></option>
                                <option value="Brooms & Dust Pans"></option>
                                <option value="Other Cleaning Tools"></option>
                            </datalist>

                            <datalist id="Tea & Coffee">
                                <option value="Tea"></option>
                                <option value="Tea Bags"></option>
                                <option value="Green Tea"></option>
                                <option value="Coffee"></option>
                            </datalist>

                            <datalist id="Baby Care">
                                <option value="Baby Oil"></option>
                                <option value="Baby Soaps & Shampoos"></option>
                                <option value="Baby Lotion & Cream"></option>
                                <option value="Baby Powder"></option>
                            </datalist>


                        </div>


                        <div class="form-group col-sm-2">
                            <label for="">ProductBrand</label>
                            <input type="text" list="datalistPBrand" autocomplete="off" name="insertPBrand" class="form-control form-control-sm" id="" required>
                            <datalist id="datalistPBrand">
                                <option value="Loose"></option>
                                <option value="No-Brand"></option>
                            </datalist>
                        </div>
                        <div class="form-group col-sm-1">
                            <label for="">Tax</label>
                            <select name="insertPTax" class="custom-select custom-select-sm" required>
                                <option value="0">0%</option>
                                <option value="5">5%</option>
                                <option value="12">12%</option>
                                <option value="18">18%</option>
                                <option value="28">28%</option>
                                <option value="40">40%</option>
                            </select>
                        </div>

                    </div>

                    <div class="form-row">

                        <div class="form-group col-sm-4">
                            <label for="">ProductName</label>
                            <input type="text" name="insertPName" class="form-control form-control-sm" id="" required>
                        </div>

                        <div class="form-group col-sm-8">
                            <label for="">Product Description</label>
                            <input type="text" name="insertPDescription" class="form-control form-control-sm" />
                        </div>
                    </div>


                    <div class="mt-1">
                        <button type="submit" name="pInsertSubmit" class="btn btn-dark">Submit</button>
                    </div>

                </form>




            </div>



        </div>


        <?php
            if(isset($_POST['pInsertSubmit']))
            {
                 $insertPNameS =  strtoupper(str_replace(' ','',$_POST['insertPName']));
                 $insertPName = strtoupper($_POST['insertPName']);
                 $insertPBrand = strtoupper($_POST['insertPBrand']);
                
                $check_product_exists =  "SELECT product_name,product_id FROM product WHERE UPPER(REPLACE(product_name, ' ', '')) LIKE '%".$insertPNameS."%';";
                $check_product_exists_result = mysqli_query($connect,$check_product_exists);

                $rowcount=mysqli_num_rows($check_product_exists_result);

                if($rowcount == 0)
                {
                   $query_p_insert= "INSERT INTO `product`(`product_id`, `product_category`, `product_type`, `product_brand`, `product_name`,`product_description`,`product_tax` ) VALUES('','$_POST[insertPCategory]','$_POST[insertPType]','$insertPBrand','$insertPName','$_POST[insertPDescription]','$_POST[insertPTax]')";
                   $query_p_insert_result  = mysqli_query($connect,$query_p_insert); 

                    if(!$query_p_insert_result)
                    {
                       echo mysqli_connect($connect);
                    }
                    else
                    {
                       header('location:products.php');
                    }

                }
                else
                {
                   echo "<div class='alert alert-warning h6 w-50 mx-auto text-center my-2'>Product already exists!</div>";
                }


            }
?>




        <!---------------------------table---------------------------->
        <div class="tab-pane" id="product_table" role="tabpanel" aria-labelledby="profile-tab">

            <div class="container">
                <table id="table_id" class="display table-bordered">
                    <thead>
                        <tr>
                            <th>Actions</th>
                            <th>Id</th>
                            <th>barcode</th>
                            <th>Name</th>
                            <th>Quantity</th>
                            <th>Cat</th>
                            <th>Type</th>
                            <th>Brand</th>
                            <th>Des</th>
                            <th>tax</th>
                            <th>BatchID</th>
                            <th>productid</th>
                            <th>unit</th>
                            <th>p_rate</th>
                            <th>salerate</th>
                            <th>mrp</th>
                            <th>Expiry</th>
                        </tr>
                    </thead>
                    <tbody>


                    <?php 
                $query= "SELECT product.*,batch.* FROM product LEFT JOIN batch ON product.product_id = batch.batch_product_id";
                    
                $result  = mysqli_query($connect,$query); 
                while($row= mysqli_fetch_row($result)){
                $pId=$row[0];
                $barcodeNo= $row[16];
                 
        ?>
                        <tr>
                            <td class="text-center">
                                <a href="#edit<?php echo $pId;?>" data-toggle="modal" id="productEditLink"><i class="fa fa-edit " aria-hidden="true"></i></a>
                                <a href="#productDelete<?php echo $pId;?>" data-toggle="modal"><i class="fa fa-trash " aria-hidden="true"></i></a>
                                <a href="#barcode<?php echo $barcodeNo;?>" data-toggle="modal" class="bar" target="_blank"><i class="fa fa-barcode  " aria-hidden="true"></i></a>

                            </td>

                            <td>
                                <?php echo $row[0];?>
                            </td>
                            <td>
                                <?php echo $row[16];?>
                            </td>
                            <td class="text-nowrap">
                                <?php echo $row[4];?>
                            </td>
                            <td>
                                <?php echo $row[14];?>
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
                                <?php echo $row[5];?>
                            </td>
                            <td>
                                <?php echo $row[6];?>
                            </td>
                            <td>
                                <?php echo $row[7];?>

                            </td>
                            <td>
                                <?php echo $row[9];?>
                            </td>
                            <td>
                                <?php echo $row[10];?>
                            </td>
                            <td>
                                <?php echo $row[11];?>
                            </td>
                            <td>
                                <?php echo $row[12];?>
                            </td>
                            <td>
                                <?php echo $row[13];?>
                            </td>
                            
                            <td>
                                <?php echo $row[15];?>
                            </td>
                            

                        </tr>
                    <?php include('includes/edit.php')?>

                    <?php } ?>


                    </tbody>
                </table>
            </div>


        </div>

    </div>
</section>

<script>
    $('input[name="insertPCategory"]').change(function() {
        var addList = $('input[name="insertPCategory"]').val();
        $('input[name="insertPType"]').attr('list', addList);
    });

    $('input[name="insertPType"]').change(function() {
        if ($('input[name="insertPCategory"]').val() != "") {
            var addList = $('input[name="insertPType"]').val();
            $('input[name="insertPSubType"]').attr('list', addList);
        }
    });


    $('input[name="insertPBrand"]').blur(function() {

        var pCategory = $('input[name="insertPCategory"]').val();
        var pType = $('input[name="insertPType"]').val();
        var pSubType = $('input[name="insertPSubType"]').val();
        var pBrand = $('input[name="insertPBrand"]').val();
        if (pCategory != "" && pType != "" && pBrand != "") {
            if (pSubType == "") {
                $('input[name="insertPName"]').val(pBrand + " " + pType);
            } else {
                $('input[name="insertPName"]').val(pBrand + " " + pSubType);
            }
        } else {
            $('input[name="insertPName"]').val("");
        }
    });

    $(".alert").delay(3000).slideUp(600, function() {
        $(this).alert('close');
        if (window.history.replaceState) {
            window.history.replaceState(null, null, window.location.href);
        }
    });

    //            var output = input.replace(/\w+/g, function(txt) {
    //            return txt.charAt(0).toUpperCase() + txt.substr(1);
    //            }).replace(/\s/g, '');
    //
    //            document.getElementById('output').innerHTML = output;

</script>
<?php include('includes/footer.php')?>
