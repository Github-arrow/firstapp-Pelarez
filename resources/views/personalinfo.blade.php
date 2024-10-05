<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
    @vite (['resources/sass/app.scss', 'resources/js/app.js'])
</head>
<body>
    <div class="container">
        <br>
        <div class="card mt-3">

            <form action="/models/save.php" method="POST">
                <div class="card-header h3">Personal Information</div>
                <div class="card-body">
                    <?php
                    if (isset($_GET['success'])) {
                        ?>
                        <div class="alert alert-success">
                            <b>New Student Added:</b> Congratulations! New STUDENT added.
                        </div>
                        <?php
                    } elseif (isset($_GET['invalid'])) {
                        ?>
                        <div class="alert alert-danger">
                            <b>Existed Application ID:</b> Details below are already EXISTS, Please try another.
                        </div>
                        <?php
                    }
                    ?>
                    <div class="row">
                        <div class="col-md-3">
                            <label> Student ID : <b class="text-danger">*</b></label>
                            <input name="inp_sid" required type="text" placeholder="Enter student ID here.."
                                class="form-control mt-1">
                        </div>
                        <div class="col-md-4">
                            <label> Application ID : <b class="text-danger">*</b></label>
                            <input name="inp_appid" required type="text" placeholder="Enter Application ID here.."
                                class="form-control mt-1">
                        </div>
                        <div class="col-md-5">
                            <label> TES Award Number : <b class="text-danger">*</b></label>
                            <input name="inp_tesno" required type="text" placeholder="Enter TES Award Number here.."
                                class="form-control mt-1">
                        </div>

                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <label>First Name : <b class="text-danger">*</b></label>
                            <input name="inp_fname" required type="text" placeholder="Enter first name here.."
                                class="form-control mt-1">
                        </div>
                        <div class="col-md-4">
                            <label>Last Name : <b class="text-danger">*</b></label>
                            <input name="inp_lname" required type="text" placeholder="Enter last name here.."
                                class="form-control mt-1">
                        </div>
                        <div class="col-md-2">
                            <label>Ext. Name : <small>(Optional)</small></label>
                            <input name="inp_ename" type="text" placeholder="Ext. name here.."
                                class="form-control mt-1">
                        </div>
                        <div class="col-md-3">
                            <label>Middle Name : <small>(Optional)</small></label>
                            <input name="inp_mname" type="text" placeholder="Enter middle name here.."
                                class="form-control mt-1">
                        </div>
                    </div>
                    <div class="row mt-3">
                        <div class="col-md-3">
                            <label>Gender : <b class="text-danger">*</b></label>
                            <select name="inp_gender" required class="form-control mt-2">
                                <option value="" disabled selected>-- SELECT GENDER --</option>
                                <option value="Female">Female</option>
                                <option value="Male">Male</option>
                            </select>
                        </div>
                        <div class="col-md-4">
                            <label>Contact Number : <b class="text-danger">*</b></label>
                            <input name="inp_contact" required type="text" placeholder="09 XXXX XXXX"
                                class="form-control mt-1">
                        </div>
                        <div class="col-md-2">
                            <label>Award Batch : <b class="text-danger">*</b></label>
                            <input name="inp_batch" required type="text" placeholder="Batch X"
                                class="form-control mt-1">
                        </div>
                        <div class="col-md-3">
                            <label>Status : <small>(Optional)</small></label>
                            <input name="inp_status" type="text" placeholder="Enter the student status here.."
                                class="form-control mt-1">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                    <div class="row mt-12">
                        <div>
                            <span style="float: right">
                                <button class="btn btn-success">
                                    Add New Student
                                </button>
                            </span>
                        </div>
                    </div>
            </form>
        </div>
    </div>
</body>
</html>
