<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Arithmetic</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script>
        function sum() {
            var input_1_value = document.getElementById('input_1').value;
            var input_2_value = document.getElementById('input_2').value;
            var result = parseInt(input_1_value) + parseInt(input_2_value);
            if (!isNaN(result)) {
                document.getElementById('sum').value = result;
            }
        }
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="card"></div>
            <br> <br>
            <div class="card-heading alert alert-primary">
                <h4><b>Arithmetic</b></h4>
            </div>


            <div class="card-body">
                <label><b>1st Number: </b></label>
                <input type="text" id="input_1" onkeyup="sum()"/>&emsp;&emsp;&emsp;
                <label><b>2nd Number: </b></label>
                <input type="text" id="input_2" onkeyup="sum()"/>&emsp;&emsp;&emsp;
                <label><b>Sum: </b></label>
                <input type="text" id="sum" disabled/>
            </div>
            <div class="card-footer alert-dismissible"></div>
        </div>
    </div>
</body>
</html>