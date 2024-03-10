
<?php
    if(isset($_POST['username']) && isset($_POST['password'])){
        require_once "../classes/tutor.class.php";
        require_once "../classes/learner.class.php";

        //Sanitizing the inputs of the users. Mandatory to prevent injections!
        $username = htmlentities($_POST['username']);
        $password = htmlentities($_POST['password']);

        
        $learner = new Learner();
        $tutor = new Tutor();


        $learnerAccounts = $learner->show();
        $tutorAccounts = $tutor->show();


        foreach($learnerAccounts as $keys => $value){
            //check if the username and password match in the array
            if($username == $value['username'] && $password == $value['password']){
                //if match then save username, fullname and type as session to be reused somewhere else
                $_SESSION['logged-in'] = $value;
                header('location: home.php');
            }
        }
        foreach($tutorAccounts as $keys => $value){
            //check if the username and password match in the array
            if($username == $value['username'] && $password == $value['password']){
                //if match then save username, fullname and type as session to be reused somewhere else
                $_SESSION['logged-in'] = $value;

                header('location: ../tutor/tutor-profile.php');
            }
        }


        //set the error message if account is invalid
        $error = 'Invalid username/password. Try again.';
    }
?>
<div class="disabled-bg" ></div>

<div class="form-login">
    <div class="login-container">
        <h1 class="login-title">Join Locusta</h1>
        <i class='bx bx-x x-btn'></i>
        <div class="login-body" id="scrollable-element">
            <div class="login login-body-item">
                <label for="fname"></label>
                <input type="text" id="fname" name="fname" placeholder = "Username" class = "input-el" >
                <label for="password"></label>
                <input type="password" id="password" name="password" placeholder = "Password" class = "input-el" >
                <button type = "submit" class="log-in">Log in</button>

                <p class="or">or</p>

                <button class="sign-up">Create an account</button>
            </div>
            

            <div class="form-type login-body-item">
                <h3 class = "form-type-header">Sign up as</h3>
                <div class="form-type-input">
                    <input class = "tutor-radio" type="radio" id="tutor" name="type" value="tutor">
                    <label class = "tutor-label"for="tutor">Tutor</label>
                    <input class = "learner-radio" type="radio" id="learner" name="type" value="learner">
                    <label class = "learner-label" for="learner">Learner</label>

                </div>
                <div class = "form-p-tutor img-p"><img src="../images/other/tutor.png" alt=""><p>An education professional who works with individual students to reach their academic goals.</p></div>
                <p class = "form-p-default">Choose between "Tutor" and "Learner"</p>
                <div class = "form-p-learner img-p"><img src="../images/other/student.png" alt=""><p>A curious, diligent and self-discipline person who set goals and work hard to follow through to their individual potentials.</p></div> 
            </div>

            <form class="form-tutor login-body-item user-form">
                <h3 class="form-tutor-title">Sign up as tutor</h3>
                <div class="input-container-account">
                    <h4 class = "input-container-header">Account</h4>
                    <label for="fname"></label>
                    <input type="text" id="fname" name="fname" placeholder = "Username">
                    <label for="email"></label>
                    <input type="email" id="email" name="email" placeholder = "Email">
                    <label for="fname"></label>
                    <input type="text" id="fname" name="fname" placeholder = "Password">
                    <label for="password-confirm"></label>
                    <input type="password" id="password-confirm" name="password-confirm" placeholder = "Confirm Password">
                </div>
                <div class="input-container-personal-info ">
                <h4 class = "input-container-header">Personal Information</h4>
                    <label for="fname"></label>
                    <input type="text" id="fname" name="fname" placeholder = "First Name">
                    <label for="mname"></label>
                    <input type="text" id="mname" name="fname" placeholder = "Middle Name">
                    <label for="lname"></label>
                    <input type="text" id="lname" name="fname" placeholder = "Last Name">
                    <label for="age"></label>
                    <input type="number" id="age" name="age" placeholder = "Age">
                    <input type="number" id="number" name="number" placeholder = "Contact Number">
                    <label for="address"></label>   
                    <input type="text" id="address" name="address" placeholder = "Address">
                    <label for="ageRange"></label>
                    <input type="number" id="ageRange" name="ageRange" placeholder = "Prefered Age Range">
                </div>
                <div class="input-container-Guardian-info">
                    <h4 class = "input-container-header">Guardian Information (optional)</h4>
                    <label for="fname"></label>
                    <input type="text" id="fname" name="fname" placeholder = "First Name">
                    <label for="mname"></label>
                    <input type="text" id="mname" name="fname" placeholder = "Middle Name">
                    <label for="lname"></label>
                    <input type="text" id="lname" name="fname" placeholder = "Last Name">
                    <label for="age"></label>
                    <input type="number" id="age" name="age" placeholder = "Age">
                    <label for="number"></label>
                    
                </div>
            </form>

            <form class="form-learner login-body-item user-form">
                <h3 class="form-tutor-title">Sign up as learner</h3>
                <div class="input-container-account">
                    <h4 class = "input-container-header">Account</h4>
                    <label for="fname"></label>
                    <input type="text" id="fname" name="fname" placeholder = "Username">
                    <label for="email"></label>
                    <input type="email" id="email" name="email" placeholder = "Email">
                    <label for="fname"></label>
                    <input type="text" id="fname" name="fname" placeholder = "Password">
                    <label for="password-confirm"></label>
                    <input type="password" id="password-confirm" name="password-confirm" placeholder = "Confirm Password">


            <!-- <button type = "submit" class="login-submit">LOGIN</button> -->

            <div class="lines">
                <div class="line"></div>
                <p class="or">or</p>
                <div class="line"></div>
            </div>

            <p class="no-account">You don`t have an account? Sign Up as Tutor or Learner </p>

            <button type = "button" class="create-account">Create Account</button>
        </div>
        
    </div>
    <div class="sign-in container">
        <div class="sign-in-preview">
            <div class="sign-in-header">
                <h4 class="type-header">You want to become a tutor or learner?</h4>
                <p class="p-choose">Please  choose if you want to a tutor, learner or guardian</p>
            </div>

            <div class="form-type-radio">
                    <div class="radio-container">
                        <img src="../images/other/tutor.png" alt="">
                        <input class = "tutor-radio type-radio" type="radio" id="tutor" name="type" value="tutor">
                        <a href = "../end-users/tutor-sign-up.php" >Tutor</a>
                    </div>

                    <div class="radio-container">
                        <img src="../images/other/learner.png" alt="">
                        <input class = "learner-radio type-radio" type="radio" id="learner" name="type" value="learner">
                        <a href = "../end-users/learner-sign-up.php" >Learner</a>

                    </div>  

                    <div class="radio-container">
                        <img src="../images/other/guardian.png" alt="">
                        <input class = "guardian-radio type-radio" type="radio" id="guardian" name="type" value="guardian">
                        <label class = "guardian-label type-label" for="guardian">Guardian</label>
                    </div>  

                </div>
                <div class="input-container-personal-info">
                    <h4 class = "input-container-header">Personal Information</h4>
                    <label for="fname"></label>
                    <input type="text" id="fname" name="fname" placeholder = "First Name">
                    <label for="mname"></label>
                    <input type="text" id="mname" name="fname" placeholder = "Middle Name">
                    <label fo   r="lname"></label>
                    <input type="text" id="lname" name="fname" placeholder = "Last Name">
                    <label for="sex"></label>
                    <input type="text" id="sex" name="sex" placeholder = "Sex">
                    <label for="age"></label>
                    <input type="number" id="age" name="age" placeholder = "Age">
                    <input type="number" id="number" name="number" placeholder = "Contact Number">
                    <label for="gradeLevel"></label>
                    <input type="text" id="gradeLevel" name="gradeLevel" placeholder = "Grade Level">
                    <label for="address"></label>
                    <input type="text" id="address" name="address" placeholder = "Address">
                    <label for="rate"></label> 
                    <input type="number" id="rate" name="rate" placeholder = "Prefered Payment Rate">
                </div>
                <div class="input-container-Guardian-info">
                    <h4 class = "input-container-header">Guardian Information (optional)</h4>
                    <label for="fname"></label>
                    <input type="text" id="fname" name="fname" placeholder = "First Name">
                    <label for="mname"></label>
                    <input type="text" id="mname" name="fname" placeholder = "Middle Name">
                    <label for="lname"></label>
                    <input type="text" id="lname" name="fname" placeholder = "Last Name">
                    <label for="sex"></label>
                    <input type="text" id="sex" name="sex" placeholder = "Sex">
                    <label for="age"></label>
                    <input type="number" id="age" name="age" placeholder = "Age">
                    <input type="number" id="number" name="number" placeholder = "Contact Number">
                    <label for="relationship"></label>
                    <input type="text" id="relationship" name="relationship" placeholder = "Relationship To Student">
                    <label for="address"></label>
                    <input type="text" id="address" name="address" placeholder = "Address">
                    
                </div>
                
            </form>  
        </div>
        <div class="login-btns">
            <button  class="login-back-btn slider-back">Back</button>
            <button disabled class="login-next-btn slider-next">Next</button>
            <button type = "submit" class="submit-btn">Submit</button>
        </div>  
    </div>
</div> 