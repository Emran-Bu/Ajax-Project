<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>Delete Multiple data with PHP & Ajax</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <table id="main" border="0" cellspacing="0">
    <tr>
      <td id="header">
        <h1 class="center">Delete Multiple data with PHP & Ajax</h1>
      </td>
    </tr>
    <tr>
      <td id="table-form">
        <form id="addForm">
          <input type="button" id="delete-button" value="Delete">
        </form>
      </td>
    </tr>
    <tr>
      <td id="table-data">
        
      </td>
    </tr>
  </table>

  <div id="error-message" class="messages"></div>
  <div id="success-message" class="messages"></div>

<script type="text/javascript" src="js/jquery.js"></script>
<script type="text/javascript">

 $(document).ready(function(){
  
  function loadTable() {
    $.ajax({
      url : "load-data.php",
      type : "POST",
      success : function(data){
         $('#table-data').html(data);
      }
    }); 
  }
  loadTable();

  $('#delete-button').on("click", function() {
    var id = [];
    $(':checkbox:checked').each(function(key){
      id[key] = $(this).val();
    })
    // console.log(id);
    if (id.length === 0) {
      alert("Please select at least one checkbox");
    } else{
      if (confirm("Do you want to delete this record!")) {
        $.ajax({
        url : "delete-data.php",
        type : "POST",
        data : {id : id},
        success : function(data){
        // console.log(data);
        if (data == 1) {
          $('#success-message').html("Record Deleted Successfully.").slideDown();
          setTimeout(() => {
            $('#success-message').html("Record Deleted Successfully.").hide();
          }, 5000);
          $('#error-message').slideUp();
          loadTable();
        } else{
          $('#error-message').html("Can't Delete This Record.").slideDown();
          setTimeout(() => {
            $('#error-message').html("Can't Delete This Record.").hide();
          }, 5000);
          $('#success-message').slideUp();
        }
      }
      })
      }
    }
  })

 });
  
</script>
</body>
</html>
