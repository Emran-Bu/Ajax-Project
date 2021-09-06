<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>Ajax Image Upload And Remove</title>
</head>
<body>
    <div id="main">
        <div id="header">
            <h1>Ajax Image Upload And Remove</h1>
        </div>
        <div id="content">
            <form action="" id="submit-form">
                <div class="form-group">
                    <label for="">Select Image</label>
                    <input type="file" name="file" id="upload-file">
                    <span class="help-block">Allowed File Type - jpg, jpeg, png, gif</span>
                </div>
                <input type="submit" value="Upload" name="upload-button" id="upload-btn">
            </form>
            <div id="preview">
                <h3>Image Preview</h3>
                <div id="image-preview"></div>
            </div>
        </div>
    </div>
    <script src="js/jquery.js"></script>
    <script>
        $(document).ready(function(){
            $('#submit-form').on("submit", function(e){
                e.preventDefault();
                var formData = new FormData(this);
                $.ajax({
                    url : "upload.php",
                    type : "POST",
                    data : formData,
                    contentType : false,
                    processData : false,
                    success : function (data){
                        $("#preview").show();
                        $("#image-preview").html(data);
                        $("#upload-file").val('');
                    }
                })
            })
            // delete image
            $(document).on("click", "#delete-btn", function(){
                if (confirm("Are You sure you want to delete this image?")) {
                    var path = $('#delete-btn').data("path");
                    $.ajax({
                        url : "delete.php",
                        type : "POST",
                        data : {path : path},
                        success : function (data){
                            if (data != "") {
                                $("#preview").hide();
                                $("#image-preview").html("");
                            }
                        }
                    })
                }
            })
        })
    </script>
</body>
</html>