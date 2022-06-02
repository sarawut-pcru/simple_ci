<?php
defined('BASEPATH') or exit('No direct script access allowed');
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>

</head>
<style>
    * {
        margin: 0;
        padding: 0;
        font-size: 18px;
    }

    body {
        background-color: #999999;
        font-family: 'Kanit', sans-serif;
    }
</style>

<body>
    <!-- Navigation-->
    <nav class="navbar navbar-light  bg-dark static-top ">
        <div class="container ">
            <a class="navbar-brand text-white" href="#!"></a>
            <div class=" justify-content-end">
                <a class="btn btn-outline-success " href="register">Register</a>
                <a class="btn btn-outline-info mr-5" href="signup">Sign Up</a>
            </div>
        </div>
    </nav>
    <!-- Masthead-->
    <div class="container col-6 p-5">
        <form method="post" action="<?php echo site_url('form/register'); ?>">
            <div class="input-group row">
                <div class="form-group">
                    <label class=" col-form-label" for="fname">Frist name :</label>
                    <input id="fname" name="fname" type="text" class="form-control">
                </div>
            </div>
            <div class="input-group row">
                <div class="form-group">
                    <label class=" col-form-label" for="lname">Last name :</label>
                    <input id="lname" name="lname" type="text" class="form-control">
                </div>
            </div>
            <div class="input-group row">
                <div class="form-group">
                    <label class=" col-form-label" for="email">Email :</label>
                    <input id="email" name="email" type="email" class="form-control">
                </div>
            </div>
            <div class="input-group row">
                <div class="form-group">
                    <label class=" col-form-label" for="phone">Phone :</label>
                    <input id="phone" name="phone" type="tel" class="form-control">
                </div>
            </div>
            <div class="input-group row">
                <div class="form-group">
                    <label class=" col-form-label" for="username">Username :</label>
                    <input id="username" name="username" type="tel" class="form-control">
                </div>
            </div>
            <div class="input-group row">
                <div class="form-group">
                    <label class=" col-form-label" for="password">Password :</label>
                    <input id="password" name="password" type="password" class="form-control">
                </div>
            </div>
            <!-- <div class="input-group row p-2">
                <div class="form-group">
                    <div class="flex d-flex  align-items-center">
                        <label class=" col-form-label" for="Phone">Gender :</label>
                        <div class="form-check ms-5">
                            <input class="form-check-input " type="radio" name="gender" id="gender1">
                            <label class="form-check-label" for="gender1">
                                Male
                            </label>
                        </div>
                        <div class="form-check ms-5">
                            <input class="form-check-input" type="radio" name="gender" id="gender2">
                            <label class="form-check-label" for="gender2">
                                Female
                            </label>
                        </div>

                    </div>
                </div>
            </div> -->
            <div class="row justify-content-center p-2">
                <button type="submit" id="submit" class="btn btn-success col-4 me-2 submit">Register</button>
                <button type="reset" id="reset" class="btn btn-secondary col-4 ">Reset</button>

            </div>
        </form>

    </div>


</body>

</html>