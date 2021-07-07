<!DOCTYPE html>
<html lang="en" dir="ltr">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Arithmetic & Multiple-Select</title>

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css" integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {

            $(".js-example-basic-single").select2();
            $('.js-example-basic-multiple').select2();
        });

        function sum() {
            var txtFirstNumberValue = document.getElementById('txt1').value;
            var txtSecondNumberValue = document.getElementById('txt2').value;
            var result = parseInt(txtFirstNumberValue) + parseInt(txtSecondNumberValue);
            if (!isNaN(result)) {
                document.getElementById('txt3').value = result;
            }
        }
    </script>
</head>



<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="card card-success"></div>
            <br>  <br>
            <div class="card-heading alert alert-success">
                <h4><b>Arithmetic Form Example</b></h4>
            </div>


            <div class="card-body">
                <label><b>Enter Your 1st Number: </b></label>
                <input type="text" id="txt1"  onkeyup="sum();" />&nbsp;&nbsp;
                <label><b>Enter your 2nd Number: </b></label>
                <input type="text" id="txt2"  onkeyup="sum();" />&nbsp;&nbsp;
                <label><b>Total Sum: </b></label>
                <input type="text" id="txt3" />
            </div>
            <div class="card-footer"></div>




            <br>  <br>  <br>

            <div class="card-heading alert alert-success">
                <h4><b>Select2 Form Example</b></h4>
            </div>


            <div class="card-body">
                <label for="id_label_single">
                    <b>Single Select With Autocomplete</b>
                </label>
                    <select class="js-example-basic-single js-states form-control" id="id_label_single">
                        <optgroup label="Asia Region">

                            <option value="AL">Bangladesh</option>
                            <option value="AL">India</option>
                            <option value="AL">Pakistan</option>
                        </optgroup>
                        <optgroup label="Other">
                            <option value="WY">Australia</option>
							<option value="WY">Argentina</option>
							<option value="WY">Algeria</option>
							<option value="WY">Afghanistan</option>
							<option value="WY">Angola</option>
                            <option value="AL">Canada</option>
                        </optgroup>
                    </select>

                <br><br>



                <label for="id_label_multiple">
                    <b>Multiple Select With Autocomplete</b>
                </label>
                    <select class="js-example-basic-multiple js-states form-control" id="id_label_multiple" multiple="multiple">
                        <optgroup label="Asia Region">
                            <option selected="selected"  value="AL">Bangladesh</option>
                            <option value="AL">India</option>
                            <option value="AL">Pakistan</option>
                        </optgroup>
                        <optgroup label="Other">
                            <option value="WY">Australia</option>
							<option value="WY">Argentina</option>
							<option value="WY">Algeria</option>
							<option value="WY">Afghanistan</option>
							<option value="WY">Angola</option>
                            <option value="AL">Canada</option>
                        </optgroup>
                    </select>

                

            </div>



            <div class="card-footer"></div>
        </div>
    </div>
</div>
</div>
</div>
</body>
