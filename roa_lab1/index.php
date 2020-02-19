<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <title>Simple Registration Form in PHP with Validation | Tutsmake.com</title>
    <link href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" rel="stylesheet">
</head>
<body>
    <div class="container">
        <div class="row">
            <div class="col-lg-8 col-offset-2">
                <div class="page-header">
                    <h2>Student Registration Form</h2>
                </div>
                <p>Please fill all fields in the form</p>
                <form action="<?php echo htmlspecialchars($_SERVER["PHP_SELF"]); ?>" method="post">
 
                    <div class="form-group">
                        <label>First Name</label>
                        <input type="text" name="name" class="form-control" value="" maxlength="50" required="">
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label>Last Name</label>
                        <input type="text" name="name" class="form-control" value="" maxlength="50" required="">
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>

                    <div class="form-group">
                        <label>Middle Name</label>
                        <input type="text" name="name" class="form-control" value="" maxlength="50" required="">
                        <span class="text-danger"><?php if (isset($name_error)) echo $name_error; ?></span>
                    </div>
 
                    <div class="form-group ">
                        <label>Address</label>
                        <input type="email" name="email" class="form-control" value="" maxlength="30" required="">
                        <span class="text-danger"><?php if (isset($email_error)) echo $email_error; ?></span>
                    </div>
 
                    <div class="form-group">
                        <label>Date of Birth</label>
                        <div class="input-group-icon">
                            <input class="input--style-4 js-datepicker" type="text" name="birthday">
                            <i class="zmdi-calendar-note input-icon js-btn-calendar"></i>
                        </div>  
                    </div> 

                    <div class="form-group">
                        <label>Date of Birth</label>
                        <input type="text" name="mobile" class="form-control" value="" maxlength="12" required="">
                        <span class="text-danger"><?php if (isset($mobile_error)) echo $mobile_error; ?></span>
                    </div>
 
                    <br>
                    Gender:
                        <input type="radio" name="gender"
                        <?php if (isset($gender) && $gender=="female") echo "checked";?>
                        value="female">Female
                        <input type="radio" name="gender"
                        <?php if (isset($gender) && $gender=="male") echo "checked";?>
                        value="male">Male
                        <input type="radio" name="gender"
                        <?php if (isset($gender) && $gender=="other") echo "checked";?>
                        value="other">Other
                    </br> 

                    <br>
                    <div class="form-group">
                        <label>Guardian</label>
                        <input type="password" name="password" class="form-control" value="" maxlength="8" required="">
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div> 
                    </br>

                    <div class="form-group">
                        <label>Contact Number</label>
                        <input type="password" name="password" class="form-control" value="" maxlength="8" required="">
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div> 

                    <div class="form-group">
                        <label>Civil Status</label>
                        <input type="password" name="password" class="form-control" value="" maxlength="8" required="">
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div> 

                    <div class="form-group">
                        <label>Year Level</label>
                        <input type="password" name="password" class="form-control" value="" maxlength="8" required="">
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div> 

                    <div class="form-group">
                        <label>Course</label>
                        <input type="password" name="password" class="form-control" value="" maxlength="8" required="">
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div> 

                    <div class="form-group">
                        <label>School Year</label>
                        <input type="password" name="password" class="form-control" value="" maxlength="8" required="">
                        <span class="text-danger"><?php if (isset($password_error)) echo $password_error; ?></span>
                    </div> 
 
                    <input type="submit" class="btn btn-primary" name="signup" value="submit">
                    Already have a account?<a href="login.php" class="btn btn-default">Login</a>
                </form>
            </div>
        </div>    
    </div>
</body>
</html>