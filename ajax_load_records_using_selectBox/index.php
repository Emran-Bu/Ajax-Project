<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & Ajax Load Record With Select Box</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="main">
    <div id="header">
      <h1>PHP & Ajax Load Record With Select Box</h1>
    </div>

    <div id="content">
      <form action="">
        <label for="">City : </label>
        <select name="" id="country">
          <option value="">Select City</option>
        </select>
      </form>
    </div>

    <table id="table-data" width="100%" cellpadding="10px">

    </table>

  </div>                              

<script type="text/javascript" src="js/jquery.js"></script>
<script>

  $(document).ready(function(){
    function loadTable() {
      $.ajax({
        url : "load-city.php",
        type : "POST",
        dataType : "JSON",
        success : function(data){
          $.each(data, function(key, value){
            $('#country').append("<option value='" + value.city + "'>" + value.city + "</option>");
          })
            
        }
  
      })
    }
    loadTable();
    //load table data
    $('#country').on("change", function(){
      var city = $(this).val();
      if (city =="") {
        $('#table-data').html("");
      } else{
          $.ajax({
          url : "load-table.php",
          type : "POST",
          data : { city : city},
          success : function(data){
              $('#table-data').html(data);
          }
    
        })
      }
      
    })
  })
  
</script>

</body>
</html>