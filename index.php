<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/ajax-insert.css">
    <title>PHP-AJAX</title>
</head>
<body>
    <div class="wrapper">
        <div class="header">
            <div class="titleDiv">
                <h1>Add Records With PHP & Ajax</h1>
            </div>
            <div class="search">
                <label for="">Search : </label>
                <input type="search" name="" id="search-bar">
            </div>
        </div>
        <div class="loadData">
            <form id="formData" action="">
                <label for="">First Name : </label>
                <input id="fname" type="text" name="" id="">
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;
                <label for="">First Name : </label>
                <input id="lname" type="text" name="" id="">
                <button type="submit" id="save-btn">Save</button>
            </form>
        </div>
        <div class="tableData">
            <!-- <table id="main" cellpadding="10px" cellspacing="0">

            </table> -->
        </div>

        <!-- pagination -->
        <!-- <div id="pagination">
            <a class="active" href="" id="a1">1</a>
            <a href="" id="a2">2</a>
            <a href="" id="a3">3</a>
        </div> -->
        
    </div>
    <div class="alertMsg">
        <div class="success-msg"><span>&times;</span></div>
        <div class="error-msg"></div>
    </div>
    <div id="modal">
        <div id="modal-inner"></div>
        <div id="modal-form">
            <span>&times;</span>
            <h2>Edit Form</h2>
            <table cellpadding="10px" width="100%">
                <!-- <tr>
                    <td>First name : </td>
                    <td><input type="text" name="" id="edit-fname"></td>
                </tr>
                <tr>
                    <td>Last name : </td>
                    <td><input type="text" name="" id="edit-lname"></td>
                </tr>
                <tr>
                    <td></td>
                    <td><input type="submit" name="" id="edit-submit" value="Save"></td>
                </tr> -->
            </table>
        </div>
    </div>
    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            // Show Data Row
            function loadTable(page) {
                $.ajax({
                    url : "ajax-load.php",
                    type : "post",
                    data : {page_no : page},
                    success : function(data){
                        $(".tableData").html(data);
                    }
                });
            }
            loadTable();

            // pagination
            $(document).on("click", "#pagination a", function(e){
                e.preventDefault();
                var page_id = $(this).attr("id");
                loadTable(page_id);
            })

            // Insert Data Row
            $('#save-btn').on('click', function(e) {
                
                e.preventDefault();
                var fname = $('#fname').val();
                var lname = $('#lname').val();
                if(fname=="" || lname==""){
                    $('.error-msg').html("All field are required <span>&times;</span>").slideDown();
                    $('.success-msg').slideUp();
                    var j = 1;
                    if( j == 1 ){
                        setTimeout(() => {
                            $('.error-msg').hide();
                        }, 5000);
                    }
                } else{
                    $.ajax({
                    url : "ajax-insert.php",
                    type : "post",
                    data : {first_name:fname, last_name:lname},
                    success : function(data){
                        if(data==1){
                            loadTable();
                            $('#formData').trigger("reset");
                            $('.success-msg').html("Data Inserted Successfully <span>&times;</span>").slideDown();
                            $('.error-msg').slideUp();

                            var j = 1;
                            if( j == 1 ){
                                setTimeout(() => {
                                    $('.success-msg').hide();
                                }, 5000);
                            } 
                        } else{
                            $('.error-msg').html("Can't Save Data").slideDown();
                            $('.success-msg').slideUp();

                            var j = 1;
                            if( j == 1 ){
                                setTimeout(() => {
                                    $('.error-msg').hide();
                                }, 5000);
                            }
                        }
                    }
                })

                }

            })

               
            // Delete Data row
            $(document).on("click", ".delete-data", function() {
                if (confirm("Do you really want to delete this record ?")) {
                
                    var studentId = $(this).data("id");
                    // alert(studentId);
                    var element = this;
                    $.ajax({
                        url : "ajax-delete.php",
                        type : "post",
                        data : {id : studentId},
                        success : function(data) {
                            if (data==1) {
                                $(element).closest("tr").fadeOut();
                                $('.success-msg').html("Record Deleted Successfully").slideDown();
                                $('.error-msg').slideUp();

                                var j = 1;
                                if( j == 1 ){
                                    setTimeout(() => {
                                        $('.success-msg').hide();
                                    }, 5000);
                                }
                            }else{
                                $('.error-msg').html("Can't Delete Data").slideDown();
                                $('.success-msg').slideUp();
                            }
                        }
                    })
                }
            })

            // show data record in form
 
            $(document).on("click", ".edit-data", function(){
                $('#modal').fadeIn(1000);
                $('body').css("overflow", "hidden");
                var editId = $(this).data("eid");
                // alert(editId);
                $.ajax({
                    url : "show-data-form.php",
                    type : "post",
                    data : {eid : editId},
                    success : function(data){
                        $('#modal table').html(data);
                    }
                })
            })

            // update data form

            $(document).on("click", "#edit-submit", function(){
                var std_id = $('#edit-id').val();
                var std_fname = $('#edit-fname').val();
                var std_lname = $('#edit-lname').val();

                $.ajax({
                    url : "ajax-update.php",
                    type : "post",
                    data : {id : std_id, first_name : std_fname, last_name : std_lname},
                    success : function(data){
                        if(data == 1){
                            modalHide();
                            loadTable();
                        }
                    }
                })
            })
            

            //edit modal

            $('#modal-form').click(function(){
                // $('#modal').fadeIn(1000);
            })

            function modalHide(){
                $('#modal').fadeOut(1000);
                $('body').css("overflow", "auto");
            }

            $('#modal-inner').click(function(){
                modalHide();
            })

            $('#modal-form span').click(function(){
                modalHide();
            })

            // search bar

            $('#search-bar').on("keyup", function() {
                var search_term = $(this).val();

                $.ajax({
                    url : "ajax-search.php",
                    type : "post",
                    data : {search : search_term},
                    success : function(data){
                        $('#main').html(data);
                    }
                })
            })

            
            // Alert Box
            $('.alertMsg, span').click(function() {
                $('.error-msg').fadeOut(3000);
                $('.success-msg').fadeOut(3000);
            })
        });
    </script>
</body>
</html>