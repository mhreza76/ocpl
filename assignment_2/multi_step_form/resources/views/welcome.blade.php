<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <title>Assignment</title>

    <!-- Fonts -->
    <link href="https://fonts.googleapis.com/css2?family=Nunito:wght@200;600&display=swap" rel="stylesheet">

    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.6.0/dist/css/bootstrap.min.css"
          integrity="sha384-B0vP5xmATw1+K9KRQjQERJvTumQW0nPEzvF6L/Z6nronJ3oUOFUFpCjEUQouq2+l" crossorigin="anonymous">

    <link rel="stylesheet" href="{{ asset("vendor\jquery.steps-1.1.0\jquery.steps.css") }}"/>

</head>
<body>


<nav class="container-fluid navbar navbar-expand-lg navbar-light bg-light">
    <a class="navbar-brand" href="#">Navbar</a>
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
        <span class="navbar-toggler-icon"></span>
    </button>

    <div class="collapse navbar-collapse" id="navbarSupportedContent">
        <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
                <a class="nav-link" href="#">Home <span class="sr-only">(current)</span></a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">Link</a>
            </li>
            <li class="nav-item dropdown">
                <a class="nav-link dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                    Dropdown
                </a>
                <div class="dropdown-menu" aria-labelledby="navbarDropdown">
                    <a class="dropdown-item" href="#">Action</a>
                    <a class="dropdown-item" href="#">Another action</a>
                    <div class="dropdown-divider"></div>
                    <a class="dropdown-item" href="#">Something else here</a>
                </div>
            </li>
            <li class="nav-item">
                <a class="nav-link disabled" href="#" tabindex="-1" aria-disabled="true">Disabled</a>
            </li>
        </ul>
        <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
        </form>
    </div>
</nav>
<main role="main">
    <div class="container">
        <div class="row">
            <div class="col-sm-12">
                <div class="card">
                    <div class="card-header">
                        User Details
                    </div>
                    <div class="card-body">
                        <div class="card-body">
                            <form id="example-basic" name="app-form" method="post" action="/preview">

                                {{ csrf_field() }}

                                <h2>Step 1</h2>
                                <section>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Email address</label>
                                        <input type="email" class="form-control" id="exampleFormControlInput1"
                                               placeholder="name@example.com" name="email">
                                    </div>
                                    <div class="form-group">
                                        <label for="country">Country</label>
                                        <select class="form-control" id="country" name="country">
                                            <option value="">Select country</option>
                                            <option value="Bangladesh">Bangladesh</option>
                                            <option value="USA">USA</option>
                                            <option value="AUSTRALIA">AUSTRALIA</option>
                                            <option value="BELGIUM">BELGIUM</option>
                                        </select>
                                    </div>

                                    <div class="bd_address" style="display: none">
                                        <div class="form-group">
                                            <label for="district">District</label>
                                            <input type="text" class="form-control" id="district"
                                                   placeholder="Enter your district" name="district">
                                        </div>

                                        <div class="form-group">
                                            <label for="thana">Thana</label>
                                            <input type="text" class="form-control" id="thana"
                                                   placeholder="Enter your thana" name="thana">
                                        </div>

                                    </div>

                                    <div class="foreign_address" style="display: none">
                                        <div class="form-group">
                                            <label for="state">State</label>
                                            <input type="text" class="form-control" id="state"
                                                   placeholder="Enter your state" name="state">
                                        </div>

                                        <div class="form-group">
                                            <label for="province">Province</label>
                                            <input type="text" class="form-control" id="province"
                                                   placeholder="Enter your province" name="province">
                                        </div>

                                    </div>
                                </section>


                                <h2>Step 2</h2>
                                <section>
                                    <div class="form-group">
                                        <label for="exampleFormControlInput1">Name</label>
                                        <input type="text" class="form-control" id="name"
                                               placeholder="Enter your name" name="name">
                                    </div>
                                </section>

                                <h2>Step 3</h2>

                                <section>

                                    <div class="form-group">
                                        <label for="address">Address</label>
                                        <input type="text" class="form-control" id="address"
                                               placeholder="Enter your address" name="address">
                                    </div>
                                    <button type="submit" class="btn btn-primary">Preview</button>
                                </section>
                            </form>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

</main>
<footer class="container">
    <p>&copy; Company 2017-2018</p>
</footer>

<!-- Bootstrap core JavaScript
================================================== -->
<!-- Placed at the end of the document so the pages load faster -->
<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js"
        integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN"
        crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js"
        integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q"
        crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js"
        integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl"
        crossorigin="anonymous"></script>

<script src="{{ asset("vendor\jquery.steps-1.1.0\jquery.steps.js") }}"></script>

<script>

    $(document).ready(function(){
        $("#example-basic").steps({
                    headerTag: "h2",
                    bodyTag: "section",
                    // transitionEffect: "slideLeft",
                    autoFocus: true,
                    enableFinishButton: false,
            onInit: function (event, current) {
                $('.actions > ul > li:first-child').attr('style', 'display:none');
            },
            onStepChanged: function (event, current, next) {
                if (current < 2) {
                    $('.actions > ul > li:first-child').attr('style', '');
                } else {
                    $('.actions > ul > li:first-child').attr('style', 'display:none');
                }
            },
            labels: {
                finish: 'Sign Up <i class="fa fa-chevron-right"></i>',
                next: 'Next <i class="fa fa-chevron-right"></i>',
                previous: '<i class="fa fa-chevron-left"></i> Previous'
            }
        });

        $('#country').on('change', function () {
            if (this.value == 'Bangladesh') {
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
</body>
</html>
