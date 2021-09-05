<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & Ajax Depended Select Box</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="main">
    <div id="header">
      <h1>PHP & Ajax Depended Select Box</h1>
    </div>

    <div id="content">
      <form action="">
        <label for="">Country : </label>
        <select name="" id="country">
          <option value="">Select Country</option>
        </select><br><br>
        <label for="">State : </label>
        <select name="" id="state">
          <option value=""></option>
        </select>
      </form>
    </div>

  </div>                              

<script type="text/javascript" src="js/jquery.js"></script>
<script>

  $(document).ready(function(){
    function loadTable(type, category_id) {
      $.ajax({
        url : "load-cs.php",
        type : "POST",
        data : { type : type, id : category_id},
        success : function(data){
          if (type == "stateData") {
            $('#state').html(data);
          } else{
            $('#country').append(data);
          }
          
        }
  
      })
    }
    loadTable();
    $('#country').on("change", function(){
      var country = $('#country').val();
      if (country !="") {
        loadTable("stateData", country);
      } else{
        $('#state').html("");
      }
      
    })
  })
  
</script>

</body>
</html>