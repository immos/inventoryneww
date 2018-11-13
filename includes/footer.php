</div>
</div>

<!-- Popper.JS -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.0/umd/popper.min.js" integrity="sha384-cs/chFZiN24E4KMATLdqdvsezGxaGsi4hLGOzlXwp5UZB1LY//20VyM2taTB4QvJ" crossorigin="anonymous"></script>
<!-- Bootstrap JS -->
<script src="assests/bootstrap.min.js"></script>
<script src="//cdn.datatables.net/1.10.19/js/jquery.dataTables.min.js"></script>

<script type="text/javascript">
    //if(localStorage.getItem('sidebarStatus')=='sidebarChanged'){
    if (sessionStorage.getItem('sidebarStatus') == 'sidebarChanged') {
        $('#sidebar').addClass('active');
        $('#content').addClass('adjustContentDiv');
    }

    $(document).ready(function() {
        



        $('.xy').hide();
        $("select#payment").change(function() {
            var pM = $("#payment option:selected").val();
            if (pM == "Cash") {
                $('.xy').fadeOut();
                $("input:text[name='insertSChequeNo']").removeAttr('required');
                $("input:text[name='insertSBDetails']").removeAttr('required');
            }
            if (pM == "Cheque") {
                $('.xy').fadeIn();
                $("input:text[name='insertSChequeNo']").attr('required');
                $("input:text[name='insertSBDetails']").attr('required');
            }
        });


        $('.dropdown-menu').on('show.bs.dropdown', function() {
            $('.profiledrop').fadeIn();

        });



        $('#sidebarCollapse').on('click', function() {
            $('#sidebar').toggleClass('active');

        });


        $('.numbersOnly').keyup(function() {
            this.value = this.value.replace(/[^0-9\.]/g, '');
        });

        $('.contactOnly').keyup(function() {
            this.value = this.value.replace(/[^0-9]/g, '');
        });

        $('#table_id').DataTable();



        $('#myTab a').on('click', function(e) {
            e.preventDefault();
            $(this).tab('show');
        });






    }); /*ready function ends here */




    //        storing tab status in local storage

    $('#myTab a').on("shown.bs.tab", function(e) {
        var id = $(e.target).attr("href");
        localStorage.setItem('selectedTab', id)
    });

    var selectedTab = localStorage.getItem('selectedTab');
    if (selectedTab != null) {
        var x = $('#myTab a[href="' + selectedTab + '"]');
        $('#myTab a[href="' + selectedTab + '"]').tab('show');
        console.log(x);
    }



    //    sidebar active on reload as well
    $('#sidebarCollapse').on('click', function() {

        if ($('#sidebar').hasClass('active')) {
            //localStorage.removeItem('sidebarStatus');
            sessionStorage.removeItem('sidebarStatus');
            $('#content').removeClass('adjustContentDiv');
        } else {
            //localStorage.setItem('sidebarStatus', 'sidebarChanged');
            sessionStorage.setItem('sidebarStatus', 'sidebarChanged');
            $('#content').addClass('adjustContentDiv');
        }
    });


    $(window).on('load', function() { // makes sure the whole site is loaded 
        $('#status').fadeOut(); // will first fade out the loading animation 
        $('#preloader').delay(100).fadeOut('slow'); // will fade out the white DIV that covers the website. 
        $('body').delay(100).css({
            'overflow': 'visible'
        });

        $('.focusClass').focus();

    });



//    $(window).on('keydown', function(e) {
//        if (e.keyCode == 123) {
//            alert('Entered F12');
//            return false;
//        } else if (e.ctrlKey && e.shiftKey && e.keyCode == 73) {
//            alert('Entered ctrl+shift+i');
//            return false; //Prevent from ctrl+shift+i
//        } else if (e.ctrlKey && e.keyCode == 73) {
//            alert('Entered ctrl+shift+i');
//            return false; //Prevent from ctrl+shift+i
//        } else if (e.ctrlKey && e.shiftKey && e.keyCode == 74) {
//            alert('Entered ctrl+shift+j');
//            return false; //Prevent from ctrl+shift+i
//        }
//    });
//    $(document).on("contextmenu", function(e) {
//        alert('Right Click Not Allowed');
//        e.preventDefault();
//    });
//    
//            if ( $('[type="date"]').prop('type') != 'date' ) {
//    $('[type="date"]').datepicker();
//}

</script>
</body>

</html>
