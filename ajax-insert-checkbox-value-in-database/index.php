<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta http-equiv="X-UA-Compatible" content="ie=edge">
  <title>PHP & Ajax Insert Checkbox Value In Database</title>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <div id="main">
    <div id="header">
      <h1>PHP & Ajax Insert Checkbox Value In Database</h1>
    </div>

    <div id="content">
      <form id="formData" action="">
        <div class="input-group">
          <label for="">Name : </label>
          <input type="text" name="first-name" id="first-name" autocomplete="off">
        </div><br>
        <div class="check-group">
          <label for="">Language : </label><br><br>
          <input type="checkbox" name="check" class="check" value="PHP">
          <label for="">PHP</label><br>
          <input type="checkbox" name="check" class="check" value="JavaScript">
          <label for="">JavaScript</label><br>
          <input type="checkbox" name="check" class="check" value="Python">
          <label for="">Python</label><br>
          <input type="checkbox" name="check" class="check" value="Java">
          <label for="">Java</label><br>
          <input type="checkbox" name="check" class="check" value="Ruby">
          <label for="">Ruby</label><br>
          <input type="checkbox" name="check" class="check" value="Swift">
          <label for="">Swift</label><br>
          <input type="checkbox" name="check" class="check" value="C++">
          <label for="">C++</label>
        </div><br>

        <div id="sub">
          <input type="submit" value="Submit">
        </div>
      </form>
    </div>

  </div>                              

<script type="text/javascript" src="js/jquery.js"></script>
<script>

  $(document).ready(function(){
    $('#formData').on("submit", function(e){
      e.preventDefault();
      
      var name = $('#first-name').val();
      var lang = [];

      // 1st niom
      $(':checkbox:checked').each(function(key){
        lang[key] = $(this).val();
      });

      // 2nd niom
      // $('.check').each(function(){
      //   if ($(this).is(":checked")) {
      //     lang.push($(this).val());
      //   }
      // })

      lang = lang.toString();
      // console.log(lang);

      if (name != '' && lang.length !== 0) {
          $.ajax({
            url : "insert-data.php",
            type : "POST",
            data : {lang : lang, name : name},
            success : function(data){
              $('#formData').trigger('reset');
              alert(data);
            }
          })
      } else {
        alert("This fill the required form field");
      }

    })

  })
  
</script>

</body>
</html>