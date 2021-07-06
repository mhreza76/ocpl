<!doctype html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport"
          content="width=device-width, user-scalable=no, initial-scale=1.0, maximum-scale=1.0, minimum-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Admission Form</title>
    <link rel="stylesheet" type="text/css" href="css/style.css">
    <link rel="stylesheet" href="css/datepicker.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta3/dist/css/bootstrap.min.css" rel="stylesheet"
          integrity="sha384-eOJMYsd53ii+scO/bJGFsiCZc+5NDVN2yr8+0RDqr0Ql0h+rP48ckxlpbzKgwra6" crossorigin="anonymous">
    <script src="js/main.js"></script>
    <script src="js/bootstrap-datepicker.js"></script>
    <script>
        $(function (){
            $('.datepicker').datepicker({
                startDate: '-3d'
            });
        });
    </script>
</head>
<body>
<div class="container py-5  rounded" style="background-image: linear-gradient(deepskyblue, lightblue)!important;">
    <div class="row grad">
        <div class="col-md-12 mx-auto">
            <form action="process.php" method="post">
                <div class="panel panel-primary">
                    <div class="panel-heading">
                        <h3 class="text-center mb-3">STUDENT ADMISSION FORM</h3>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 mb-3">
                        <label for="department"><font color="red">* </font>Department</label>
                        <input type="text" class="form-control" id="department" name="department"
                               placeholder="Department Name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="program"><font color="red">* </font>Program</label>
                        <input type="text" class="form-control" id="program" name="program" placeholder="Program Name"
                               required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 mb-3">
                        <label for="firstname"><font color="red">* </font>First name</label>
                        <input type="text" class="form-control" id="firstname" name="firstname" placeholder="First name"
                               required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="lastname">Last name</label>
                        <input type="text" class="form-control" id="lastname" name="lastname" placeholder="Last name"
                               required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 mb-3">
                        <label for="fathersName"><font color="red">* </font>Father's Name</label>
                        <input type="text" class="form-control" id="fathersName" name="fathersName"
                               placeholder="Father's Name" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="mothersName"><font color="red">* </font>Mother's Name</label>
                        <input type="text" class="form-control" id="mothersName" name="mothersName"
                               placeholder="Mother's Name" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 mb-3">
                        <label for="email"><font color="red">* </font>Email</label>
                        <input type="text" class="form-control" id="email" name="email" placeholder="email" required>
                    </div>
                    <div class="col-md-6 mb-3">
                        <label for="contactNumber"><font color="red">* </font>Contact Number</label>
                        <input type="phone" class="form-control" id="contact-number" name="contactNumber"
                               placeholder="contact number " required>
                    </div>
                    </div>
                </div>

                <div class="mb-3">
                    <div class="form-group row">
                        <!--                    Gender-->
                        <div class="col-md-6">
                            <div class="row">
                                <div class="col-md-3">
                                    <p><font color="red">* </font>Gender</p>
                                </div>
                                <div class="col-md-2 form-check mb-3">
                                    <input class="form-check-input" type="radio" name="gender" id="male" value="male"
                                           checked required>
                                    <label class="form-check-label" for="male">Male</label>
                                </div>
                                <div class="col-md-3 form-check mb-3">
                                    <input class="form-check-input" type="radio" name="gender" id="female"
                                           value="female" required>
                                    <label class="form-check-label" for="female">Female</label>
                                </div>
                                <div class="col-md-2 form-check mb-3">
                                    <input class="form-check-input" type="radio" name="gender" id="other" value="other"
                                           required>
                                    <label class="form-check-label" for="other">Other</label>
                                </div>
                            </div>
                        </div>

                        <!--                    Birth Date-->
                        <div class="col-md-6">
                            <div class="form-group row">
                                <label for="birthDate" class="col-2 col-form-label">Date of Birth</label>
                                <div class="col-8">
                                    <input class="form-control datepicker" data-date-format="mm/dd/yyyy" type="text" id="birthDate"
                                           name="birthDate" required>
                                </div>
                            </div>
                        </div>
                    </div>

                </div>

                <!--            Addresses -->
                <div class="form-group row">
                    <div class="col-md-4 mb-3">
                        <label for="nationality"><font color="red">* </font>Nationality</label>
                        <input type="text" class="form-control" id="nationality" name="nationality"
                               placeholder="Nationality" required>
                    </div>
                    <div class="col-md-8 mb-3">
                        <label for="addressLine"><font color="red">* </font>Address</label>
                        <input type="text" class="form-control" id="addressLine" name="addressline"
                               placeholder="Street Address" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-6 mb-3">
                        <label for="district"><font color="red">* </font>District</label>
                        <input type="text" class="form-control" id="district" name="district" placeholder="District"
                               required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="state"><font color="red">* </font>State</label>
                        <input type="text" class="form-control" id="state" name="state" placeholder="State" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="postCode"><font color="red">* </font>Postal Code</label>
                        <input type="number" class="form-control" id="postCode" name="postCode"
                               placeholder="Postal Code" required>
                    </div>
                </div>

                <!--                Education-->
                <div class="form-group row">
                    <div class="col-md-6 pt-4 text-center">
                        <p><strong>Education Qualification</strong></p>
                    </div>
                    <div class="col-md-4 mb-3">
                        <label for="registrationNumber"><font color="red">* </font>Registration Number</label>
                        <input type="number" class="form-control" id="registrationNumber" name="registrationNumber"
                               placeholder="Registration Number" required>
                    </div>
                </div>

                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="sscExam">Exam</label>
                        <select class="form-select" aria-label="Default select example" id="sscExam" name="sscExam"
                                required>
                            <option value="SSC/Equivalent">SSC/Equivalent</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="sscRollNumber"><font color="red">* </font>Roll Number</label>
                        <input type="number" class="form-control" id="sscRollNumber" name="sscRollNumber"
                               placeholder="Roll Number" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="sscBoard"><font color="red">* </font>Board</label>
                        <select class="form-select" aria-label="Default select example" id="sscBoard" name="sscBoard"
                                required>
                            <option value="">Select your board</option>
                            <option value="barishal">Barishal</option>
                            <option value="chittagong">Chittagong</option>
                            <option value="cumilla">Cumilla</option>
                            <option value="dinajpur">Dinajpur</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="jessore">Jessore</option>
                            <option value="mymensingh">Mymensingh</option>
                            <option value="rajshahi">Rajshahi</option>
                            <option value="sylhet">Sylhet</option>
                        </select>
                    </div>
                    <div class="col-md-1 mb-3">
                        <label for="sscGpa"><font color="red">* </font>GPA</label>
                        <input type="number" class="form-control" id="sscGpa" name="sscGpa" placeholder="GPA" step=".01"
                               required>
                    </div>
                    <div class="col-md-2 pt-n5">
                        <label for="sscGroup"><font color="red">* </font>Group</label>
                        <select class="form-select" aria-label="Default select example" id="sscGroup" name="sscGroup"
                                required>
                            <option value="">Select your group</option>
                            <option value="commerce">Commerce</option>
                            <option value="humanities">Humanities</option>
                            <option value="science">Science</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="sscPassingYear"><font color="red">* </font>Passing Year</label>
                        <input type="number" class="form-control" id="sscPassingYear" name="sscPassingYear"
                               placeholder="Passing Year" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-2">
                        <label for="hscExam">Exam</label>
                        <select class="form-select" aria-label="Default select example" id="hscExam" name="hscExam"
                                required>
                            <option value="HSC/Equivalent">HSC/Equivalent</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-3">
                        <label for="hscRollNumber"><font color="red">* </font>Roll Number</label>
                        <input type="number" class="form-control" id="hscRollNumber" name="hscRollNumber"
                               placeholder="Roll Number" required>
                    </div>
                    <div class="col-md-3 mb-3">
                        <label for="hscBoard"><font color="red">* </font>Board</label>
                        <select class="form-select" aria-label="Default select example" id="hscBoard" name="hscBoard"
                                required>
                            <option value="">Select your board</option>

                            <option value="barishal">Barishal</option>
                            <option value="chittagong">Chittagong</option>
                            <option value="cumilla">Cumilla</option>
                            <option value="dinajpur">Dinajpur</option>
                            <option value="dhaka">Dhaka</option>
                            <option value="jessore">Jessore</option>
                            <option value="mymensingh">Mymensingh</option>
                            <option value="rajshahi">Rajshahi</option>
                            <option value="sylhet">Sylhet</option>
                        </select>
                    </div>
                    <div class="col-md-1 mb-3">
                        <label for="hscGpa"><font color="red">* </font>GPA</label>
                        <input type="number" class="form-control" id="hscGpa" name="hscGpa" placeholder="GPA" step=".01"
                               required>
                    </div>
                    <div class="col-md-2 pt-n5">
                        <label for="hscGroup"><font color="red">* </font>Group</label>
                        <select class="form-select" aria-label="Default select example" id="hscGroup" name="hscGroup"
                                required>
                            <option value="">Select your group</option>
                            <option value="commerce">Commerce</option>
                            <option value="humanities">Humanities</option>
                            <option value="science">Science</option>
                        </select>
                    </div>
                    <div class="col-md-2 mb-5">
                        <label for="hscPassingYear"><font color="red">* </font>Passing Year</label>
                        <input type="number" class="form-control" id="hscPassingYear" name="hscPassingYear"
                               placeholder="Passing Year" required>
                    </div>
                </div>
                <div class="form-group form-check mx-auto col-2 mb-3">
                    <input type="checkbox" class="form-check-input" id="allInformationCorrect"
                           name="allInformationCorrect" required>
                    <label class="form-check-label" for="allInformationCorrect">All information are correct</label>
                </div>
                <div class="">

                    <div class="d-grid gap-2 d-md-flex justify-content-md-center">
                        <button class="btn btn-warning me-md-2" name="draft" formnovalidate >Save As Draft</button>
                        <button type="reset" class="btn btn-danger me-md-2">Reset</button>
                        <button type="submit" name="submit" class="btn btn-primary">Submit</button>
                    </div>


                </div>
            </form>
        </div>
    </div>
</div>
</body>


</html>