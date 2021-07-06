<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Preview</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset("vendor\jquery.steps-1.1.0\jquery.steps.css") }}"/>

</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-sm-12">
            <form id="example-basic" name="app-form" method="post" action="/user_data">

            {{ csrf_field() }}
                <h2>Step 1</h2>
                <section>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Email address</label>
                        <input type="email" class="form-control" id="exampleFormControlInput1"
                               value="<?php echo $_POST['email'] ?>" name="email">
                    </div>
                    <div class="form-group">
                        <label for="country">Country</label>
                        <select class="form-control" id="country" name="country">
                            <option value="<?php echo $_POST['country']?>" selected><?php echo $_POST['country'] ?></option>
                        </select>
                    </div>

                    <div class="bd_address" style="display: none">
                        <div class="form-group">
                            <label for="district">District</label>
                            <input type="text" class="form-control" id="district"
                                   value="<?php echo $_POST['district'] ?>" name="district">
                        </div>

                        <div class="form-group">
                            <label for="thana">Thana</label>
                            <input type="text" class="form-control" id="thana"
                                   value="<?php echo $_POST['thana'] ?>" name="thana">
                        </div>

                    </div>

                    <div class="foreign_address" style="display: none">
                        <div class="form-group">
                            <label for="state">State</label>
                            <input type="text" class="form-control" id="state"
                                   value="<?php echo $_POST['state'] ?>" name="state">
                        </div>

                        <div class="form-group">
                            <label for="province">Province</label>
                            <input type="text" class="form-control" id="province"
                                   value="<?php echo $_POST['province'] ?>" name="province">
                        </div>

                    </div>
                </section>


                <h2>Step 2</h2>
                <section>
                    <div class="form-group">
                        <label for="exampleFormControlInput1">Name</label>
                        <input type="text" class="form-control" id="name"
                               value="<?php echo $_POST['name'] ?>" name="name">
                    </div>
                </section>

                <h2>Step 3</h2>

                <section>

                    <div class="form-group">
                        <label for="address">Address</label>
                        <input type="text" class="form-control" id="address"
                               value="<?php echo $_POST['address'] ?>" name="address">
                    </div>

                    <button type="submit" class="btn btn-primary btn-lg">Save</button>
                </section>
            </form>
        </div>
    </div>
</div>
</body>


<script>
    $(document).ready(function(){
        $('#country').on('change', function () {
            if (this.value == 'bd') {
                $('.bd_address').show();
                $('.foreign_address').hide();

                // validation eliminate

            } else {
                $('.foreign_address').show();
                $('.bd_address').hide();

                // validation eliminate
            }
        });
    });
</script>
</html>
