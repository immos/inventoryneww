<?php include('includes/header.php')?>


<style>
    #search_box{
        position: relative;
    }
    #result{
        position: absolute;
        top:40px;
        left: 0px;
        background-color: darkgray;
        min-height: 200px;
        width: inherit;
    }
    #result a{
        padding:15px 5px 0px 5px;
    }

</style>




<div class="container">
   <div id="search_box"><input type="text" name="search_text" id="search_text" placeholder="Search Customer" class="form-control">
    <div id="result"></div>
    </div>
</div>





<script>
    $('#search_text').keyup(function(){
        function search(sData){
            $.post("fetch.php", {
                query: sData
            },
            function(data) {
                    var data1 = JSON.parse(data);
                    $('#result').html('<a>'+data1[1]+'</a><br><a>'+data1[2]+'</a><br><a>'+data1[3]+'</a><br><a>'+data1[4]+'</a><br>');
            }
                   )};
    
    if($('#search_text').val() != ""){
        search($('#search_text').val());
    }
    if($('#search_text').val() == ""){
         $('#result').html('<h6></h6>');
    }

    });
</script>


<?php include('includes/footer.php')?>
