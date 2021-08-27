<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/show-data.css">
    <title>PHP-AJAX</title>
</head>
<body>
    <div class="wrapper">
        <div class="titleDiv">
            <h1>PHP With Ajax</h1>
        </div>
        <div class="loadData">
            <button id="load-btn">Load Data</button>
        </div>
        <div class="tableData">
            <table id="main" border="1" cellpadding="10px" cellspacing="0">
                <thead>
                    <tr>
                        <th>id</th>
                        <th>name</th>
                    </tr>
                </thead>
                <tbody>
                    <tr>
                        <td>1</td>
                        <td>Hello World</td>
                    </tr>
                    <tr class="cl">
                        <td>2</td>
                        <td>Hello World</td>
                    </tr>
                    <tr>
                        <td>3</td>
                        <td>Hello World</td>
                    </tr>
                    <tr class="cl">
                        <td>4</td>
                        <td>Hello World</td>
                    </tr>
                </tbody>
            </table>
        </div>
    </div>

    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $("#load-btn").on("click", function(e) {
                $.ajax({
                    url : "ajax-load.php",
                    type : "post",
                    success : function(data){
                        $("#main").html(data);
                    }

                });

            });
        });
    </script>
</body>
</html>