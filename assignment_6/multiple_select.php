<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Single Multiple Select</title>
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.4.1/css/bootstrap.min.css"
          integrity="sha384-Vkoo8x4CGsO3+Hhxv8T/Q5PaXtkKtu6ug5TOeNV6gBiFeWPGFN9MuhOf23Q9Ifjh" crossorigin="anonymous">
    <script src="https://code.jquery.com/jquery-3.4.0.js"></script>
    <link href="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/css/select2.min.css" rel="stylesheet" />
    <script src="https://cdnjs.cloudflare.com/ajax/libs/select2/4.0.6-rc.0/js/select2.min.js"></script>
    <script>
        $(document).ready(function() {

            $(".single_select_js").select2();
            $('.multiple_select_js').select2();
        });
    </script>
</head>
<body>
<div class="container">
    <div class="row">
        <div class="col-md-12 col-md-offset-1">
            <div class="card-heading alert alert-primary">
                <h4><b>Single & Multiple Select with Select2</b></h4>
            </div>


            <div class="card-body">
                <label for="single">
                    <b>Single Select</b>
                </label>
                <select class="single_select_js js-states form-control" id="single">
                    <optgroup label="Sports">
                        <option value="chess">Chess</option>
                        <option value="football">Football</option>
                        <option value="badminton">Badminton</option>
                        <option value="cricket">Cricket</option>
                        <option value="running">Running</option>
                    </optgroup>
                </select>
                <br><br>

                <label for="multiple">
                    <b>Multiple Select</b>
                </label>
                <select class="multiple_select_js js-states form-control" id="multiple" multiple="multiple">
                    <optgroup label="Sports">
                        <option value="chess">Chess</option>
                        <option value="football">Football</option>
                        <option value="badminton">Badminton</option>
                        <option value="cricket">Cricket</option>
                        <option value="running">Running</option>
                    </optgroup>
                </select>
            </div>
            <div class="card-footer alert-dismissible"></div>
        </div>
    </div>
</body>
</html>