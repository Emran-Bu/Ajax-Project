<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/style.css">
    <title>PHP_$.GET_$.POST_Form_Data</title>
</head>
<body>
    
    <div id="main">
        <div id="header">
            <h1>PHP_$.GET_$.POST_Form_Data</h1>
        </div>

        <div id="formData">
            <form id="submit_form" action="">
                <div id="nameType">
                    <label for="name">Name : </label>
                    <input type="text" name="fullname" id="fullname">
                </div>
                <div id="ageType">
                    <label for="age">Age : </label>
                    <input type="number" name="age" id="age">
                </div>
                <div id="genderType">
                    <label for="name">Gender : </label>
                    
                    <input type="radio" name="gender" id="gender" value="male">
                    <span>Male</span>
                    
                    <input type="radio" name="gender" id="gender" value="Female">
                    <span>Female</span>
                </div>
                <div id="selectType">
                    <label for="">Select Country : </label>
                    <select name="country" id="country">
                        <option value="Ban">Bangladesh</option>
                        <option value="Ind">Ind</option>
                        <option value="Pak">Pakistan</option>
                        <option value="Sri">Srilanka</option>
                        <option value="Nep">Nepal</option>
                    </select>
                </div>
                <div id="submitType">
                    <input type="button" name="submit" id="submit" value="Submit">
                </div>
            </form>
            
        </div>
        <div id="responseid">
            <div id="response"></div>
        </div>
    </div>


    <script src="js/jquery-3.5.1.min.js"></script>
    <script>
        $(document).ready(function(){
            $('#submit').click(function(){
                var name = $('#fullname').val();
                var age = $('#age').val();

                if(name == "" || age == "" || !$('input:radio[name=gender]').is(':checked')){
                    $('#response').fadeIn();
                    $('#response').removeClass('successMsg').addClass('errorMsg').html('All fields are required.');
                } else{
                    // $('#response').html($('#submit_form').serialize());

                    $.post(
                        "save-form.php",
                        $('#submit_form').serialize(),

                        function(data){
                            $('#submit_form').trigger('reset');
                            $('#response').fadeIn();
                            $('#response').removeClass('errorMsg').addClass('successMsg').html(data);
                            console.log(data);

                            setTimeout(() => {
                                $('#response').fadeOut();
                            }, 4000);
                        }
                    );
                }
            })
        })
    </script>
</body>
</html>