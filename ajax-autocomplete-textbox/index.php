<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & Ajax Autocomplete Text Box</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="main">
    <div id="header">
      <h1>PHP & Ajax Autocomplete Text Box</h1>
    </div>

    <div id="content">
      <form action="">
        <div id="autocomplete">
          <!-- <label for="">Search : </label> -->
          <input type="search" name="city-box" id="city-box" placeholder="Enter city" autocomplete="off">
          <div id="cityList">
        </div>
        </div>
        <input type="submit" value="submit" id="search-btn">
      </form>
    </div>

    <table id="table-data" width="100%" cellpadding="10px">

    </table>

  </div>                              

<script type="text/javascript" src="js/jquery.js"></script>
<script>

  $(document).ready(function(){
    // search value
    $('#city-box').keyup(function(){
      var city = $(this).val();
      if (city != '') {
          $.ajax({
          url : "load-city.php",
          method : "POST",
          data : {city : city},
          success : function(data){
              $('#cityList').fadeIn("fast").html(data);  
          }
        })
      } else {
        $('#cityList').fadeOut();
        $('#table-data').html("");
      }
    })

    // hide li
    $('body').click(function(){
      $('#cityList').fadeOut();
    })

    // peek li value
    $(document).on("click", "#cityList li", function(){
      $('#city-box').val($(this).text());
      $('#cityList').fadeOut();
    })

    // load table
    $('#search-btn').on("click", function(e){
      e.preventDefault();
      // console.log("h");
      var city = $('#city-box').val();
      if (city == "") {
        $('#table-data').html("");
        alert("Please Enter The City Name")
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