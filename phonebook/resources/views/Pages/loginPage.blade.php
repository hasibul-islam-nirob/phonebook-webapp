@extends('Auth.app')

@section('title','Login')

@section('content')

    <div class="container py-5">
        <div class="row justify-content-center">

            <div class="col-md-6 col-sm-12">

                <!-- Pills navs -->
                <ul class="nav nav-pills nav-justified mb-3" id="ex1" role="tablist">
                    <li class="nav-item" role="presentation">
                        <a class="nav-link active" id="tab-login" data-mdb-toggle="pill" href="#pills-login" role="tab"
                           aria-controls="pills-login" aria-selected="true">Login</a>
                    </li>
                    <li class="nav-item" role="presentation">
                        <a class="nav-link" id="tab-register" data-mdb-toggle="pill" href="#pills-register" role="tab"
                           aria-controls="pills-register" aria-selected="false">Register</a>
                    </li>
                </ul>
                <!-- Pills navs -->

                <!-- Pills content -->
                <div class="tab-content">
                    <div class="tab-pane fade show active" id="pills-login" role="tabpanel" aria-labelledby="tab-login">
                        <form>
                            <div class="text-center mb-3">
                                <p>Sign in with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>

                            <p class="text-center">or:</p>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="loginName" class="form-control" />
                                <label class="form-label" for="loginName">Email or username</label>
                            </div>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="loginPassword" class="form-control" />
                                <label class="form-label" for="loginPassword">Password</label>
                            </div>

                            <!-- 2 column grid layout -->
                            <div class="row mb-4">
                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Checkbox -->
                                    <div class="form-check mb-3 mb-md-0">
                                        <input class="form-check-input" type="checkbox" value="" id="loginCheck" checked />
                                        <label class="form-check-label" for="loginCheck"> Remember me </label>
                                    </div>
                                </div>

                                <div class="col-md-6 d-flex justify-content-center">
                                    <!-- Simple link -->
                                    <a href="#!">Forgot password?</a>
                                </div>
                            </div>

                            <!-- Submit button -->
                            <button type="submit" id="UserLoginBtn" onclick="event.preventDefault();" class=" btn btn-primary btn-block mb-4">Sign in</button>

                            <!-- Register buttons -->
                        </form>
                    </div>
                    <div class="tab-pane fade" id="pills-register" role="tabpanel" aria-labelledby="tab-register">
                        <form>
                            <div class="text-center mb-3">
                                <p>Sign up with:</p>
                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-facebook-f"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-google"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-twitter"></i>
                                </button>

                                <button type="button" class="btn btn-link btn-floating mx-1">
                                    <i class="fab fa-github"></i>
                                </button>
                            </div>

                            <p class="text-center">or:</p>

                            <!-- Name input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerName" onchange="nameInputValidation()" class="form-control" required />
                                <label class="form-label" for="registerName">Name</label>
                            </div>
                            <p id="nameDataMgs" class="d-none text-danger"></p>

                            <!-- Username input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerUsername" class="form-control" onchange="usernameInputValidation()" required />
                                <label class="form-label" for="registerUsername">Username</label>
                            </div>
                            <p id="usernameDataMgs" class="d-none text-danger"></p>

                            <!-- Email input -->
                            <div class="form-outline mb-4">
                                <input type="email" id="registerEmail" class="form-control" onchange="emailInputValidation()" required/>
                                <label class="form-label" for="registerEmail">Email</label>
                            </div>
                            <p id="emailDataMgs" class="d-none text-danger"></p>

                            <!-- Phone Number input -->
                            <div class="form-outline mb-4">
                                <input type="text" id="registerPhone" class="form-control" onchange="" required/>
                                <label class="form-label" for="registerEmail">Phone</label>
                            </div>
                            <p id="emailDataMgs" class="d-none text-danger"></p>

                            <!-- Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerPassword" class="form-control" onchange="checkPasswordValidation()" onblur="passwordInputValidation()" required/>
                                <label class="form-label" for="registerPassword">Password</label>
                            </div>
                            <p class="regAlert text-danger"><i class="fas fa-info-circle"></i> Minimum 1 Uppercase & Lowercase Character (A-Z a-z) </p>
                            <p class="regAlert text-danger"><i class="fas fa-info-circle"></i> At least one Digit (0-9) </p>
                            <p class="regAlert text-danger"><i class="fas fa-info-circle"></i> At least one Special Symbol, like "@,#,$,&" etc </p>
                            <p class="regAlert text-danger"><i class="fas fa-info-circle"></i> Password must be 6-32 Characters Long. </p>
                            <p id="passwordDataMgs" class="d-none text-danger"></p>
                            <p id="passwordDataMgsTwo" class="d-none text-danger"></p>
                            <p id="congratulateMsg" class="text-success d-none">Congratulations, the password of your choice has fulfilled all the conditions</p>

                            <!-- Repeat Password input -->
                            <div class="form-outline mb-4">
                                <input type="password" id="registerRepeatPassword" class="form-control" onchange="confirmPasswordValidation()" onblur="passwordInputValidation()" required/>
                                <label class="form-label" for="registerRepeatPassword">Repeat password</label>
                            </div>
                            <p id="conPasswordDataMgs" class="d-none text-danger"></p>
                            <p id="conPasswordDataMgsTwo" class="d-none text-danger"></p>

                            <!-- Checkbox -->
                            <div class="form-check d-flex justify-content-center mb-4">
                                <input class="form-check-input me-2" type="checkbox" value="" id="registerCheck" checked
                                       aria-describedby="registerCheckHelpText" />
                                <label class="form-check-label" for="registerCheck">
                                    I have read and agree to the terms
                                </label>
                            </div>

                            <!-- Submit button -->
                            <button id="RegBtn" type="submit" onclick="event.preventDefault(); onSubmitConfirmBtn()" class="btn btn-primary btn-block mb-3">Sign Up</button>
                        </form>
                    </div>
                </div>
                <!-- Pills content -->



            </div>

        </div>
    </div>

@endsection

@section('script')
    <script>

        // User Login Button
        $('#UserLoginBtn').on('click',function (){
            $('#UserLoginBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div> Loading...");

            let email = $('#loginName').val();
            let password = $('#loginPassword').val();

            let url = "/userLogin";
            axios.post(url, {email:email,password:password } ).then((res)=>{
                if (res.status==200 && res.data == 1) {
                    swal({
                        title: "Login Success!",
                        icon: "success",
                    });
                    window.location.href = '/dashboard';
                }else {
                    $('#UserLoginBtn').html("Login Fail");
                    setTimeout(function () {
                        $('#UserLoginBtn').html("Sign In");
                    },3000);
                }
            }).catch( (err)=>{
                swal({
                    title: "Login Fail",
                    text: "Please Try Again!",
                    icon: "error",
                    button: "Ok",
                });
                $('#UserLoginBtn').html("Something Wrong, Try Again");
                setTimeout(function () {
                    $('#UserLoginBtn').html("Sign In");
                },3000);
            })
        })



        // Add New User
        function userRegistration(){
            let name = $('#registerName').val();
            let username = $('#registerUsername').val();
            let email = $('#registerEmail').val();
            let phone = $('#registerPhone').val();
            let password = $('#registerPassword').val();

            //alert(name+" "+username+" "+email+" "+phone+" "+password)
            addNewUser(name,username,email,phone,password)
        }
        // Add New User Function
        function addNewUser(name,username,email,phone,password) {
            $('#RegBtn').addClass('disabled');
            $('#RegBtn').addClass('btn-danger');
            $('#RegBtn').html("<div class='spinner-border spinner-border-sm' role='status'></div> Loading...");
            let url = "/registerNewUser";
            axios.post(url, {name:name, username:username,  email:email, phone:phone, password:password} ).then((res)=>{
                if (res.status==200) {

                    if (res.data == 1){
                        swal({
                            title: "Registration Success!",
                            icon: "success",
                            button: "Ok",
                        });
                    }else if(res.data == 10){
                        swal({
                            title: "Registration Fail",
                            text: "Mail Address Already Exist, Please Try Again!",
                            icon: "info",
                            button: "Ok",
                        });
                    }


                    $('#RegBtn').removeClass('disabled');
                    $('#RegBtn').removeClass('btn-danger');
                    $('#RegBtn').html("Sign Up");
                    $('#registerName').val('');
                    $('#registerUsername').val('');
                    $('#registerEmail').val('');
                    $('#registerPhone').val('');
                    $('#registerPassword').val('');
                    $('#registerRepeatPassword').val('');


                } else {
                    swal({
                        title: "Registration Fail",
                        text: "Something Happen, Please Try Again!",
                        icon: "warning",
                        button: "Ok",
                    });
                    $('#registerName').val('');
                    $('#registerUsername').val('');
                    $('#registerEmail').val('');
                    $('#registerPhone').val('');
                    $('#registerPassword').val('');
                    $('#registerRepeatPassword').val('');

                    $('#RegBtn').removeClass('disabled');
                    $('#RegBtn').removeClass('btn-danger');
                    $('#RegBtn').html("Sign Up");
                }
            }).catch( (err)=>{
                swal({
                    title: "Registration Fail",
                    text: "Something Went wrong, Please Try Again!",
                    icon: "error",
                    button: "Ok",
                });
                $('#registerName').val('');
                $('#registerUsername').val('');
                $('#registerEmail').val('');
                $('#registerPhone').val('');
                $('#registerPassword').val('');
                $('#registerRepeatPassword').val('');

                $('#RegBtn').removeClass('disabled');
                $('#RegBtn').removeClass('btn-danger');
                $('#RegBtn').html("Sign Up");
            })
        }

    </script>
@endsection
