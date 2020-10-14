<?php
//header.php
include ('header.php');

?>
<!--Regitration form -->
<section id="register">

    <div class="row m-0">
        <div class="col-lg-4 offset-lg-2">

            <div class="text-center pb-5">
                <h1 class="login-title text-dark">Register</h1>
                <p class="p-1 m-0 font-ubuntu text-black-50">Register and Enjoy additional features.</p>
                <span class="font-ubuntu text-black-50">I already have <a href="login.php">Login</a> </span>
            </div>

            <div class="upload-profile-image d-flex justify-content-center pb-5">
                <div class="text-center">
                    <div class="d-flex justify-content-center">
                        <img class="camera-icon" src="./assets/camera-solid.svg" alt="camera">
                    </div>
                    <img class="img rounded-circle" src="./assets/profile/beard.png" style="width:200px; height:200px" alt="profile">
                    <small class="form-text text-black-50">Choose image</small>
                    <input class="form-control-file" type="file" name="profileUpload" id="upload-profile">
                </div>
            </div>
            <div class="d-flex justify-content-center">
                <form action="register.php" method="post" enctype="multipart/form-data" id="reg-form">
                    <div class="form-row">
                        <div class="col">
                            <input type="text" name="firstName" id="firstName" placeholder="First Name" class="form-control">
                        </div>
                        <div class="col">
                            <input type="text" name="lastName" id="lastName" placeholder="Last Name" class="form-control">
                        </div>
                        
                    </div>
                    <div class="form-row my-4">
                    <div class="col">
                            <input type="email" required name="email" id="email" placeholder="Email*" class="form-control">
                        </div>
                    </div>

                    <div class="form-row my-4">
                    <div class="col">
                            <input type="password" name="password" required id="password" placeholder="Password*" class="form-control">
                        </div>
                    </div>

                    <div class="form-row my-4">
                    <div class="col">
                            <input type="password" required name="confirm_password" id="confirm_password" placeholder="Confirm Password*" class="form-control">
                            <small id="confirm_error" class="text-danger"></small>
                        </div>
                    </div>

                    <div class="form-check form-check-inline">
                        <input type="checkbox" name="agreement" class="form-check-input" required>
                        <label for="agreement" class="form-check-label font-ubuntu text-black-50">I agree <a href="$"> all the terms, conditions and policy</a></label>
                    </div>

                    <div class="submit-btn text-center my-5">
                        <button type="submit" class="btn-warning btn rounded-pill text-dark px-5">Continue</button>
                    </div>

                </form>

            </div>

        </div>
    </div>




</section>
<!--End Registration form !-->

<?php
//footer.php
include ('footer.php');
?>