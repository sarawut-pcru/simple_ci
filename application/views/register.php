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
        <form method="post">
            <div class="input-group row">
                <div class="form-group">
                    <label class=" col-form-label" for="fname">Frist name :</label>
                    <input id="fname" type="text" class="form-control">
                </div>
            </div>
            <div class="input-group row">
                <div class="form-group">
                    <label class=" col-form-label" for="lname">Last name :</label>
                    <input id="lname" type="text" class="form-control">
                </div>
            </div>
            <div class="input-group row">
                <div class="form-group">
                    <label class=" col-form-label" for="email">Email :</label>
                    <input id="email" type="email" class="form-control">
                </div>
            </div>
            <div class="input-group row">
                <div class="form-group">
                    <label class=" col-form-label" for="Phone">Phone :</label>
                    <input id="Phone" type="tel" class="form-control">
                </div>
            </div>
            <div class="input-group row p-2">
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
                            <input class="form-check-input" type="radio" name="v" id="gender2">
                            <label class="form-check-label" for="gender2">
                                Female
                            </label>
                        </div>

                    </div>
                </div>
            </div>
            <div class="row justify-content-center p-2">
                <a type="submit" id="submit" class="btn btn-success col-4 me-2 submit">Register</a>
                <a type="reset" id="reset" class="btn btn-secondary col-4 ">Reset</a>

            </div>
        </form>

    </div>
    

</body>

</html>