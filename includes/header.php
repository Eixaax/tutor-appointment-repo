<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
    <link rel = "stylesheet" href = "../css/reusable.css">
    <link rel = "stylesheet" href = "../css/style.css">
    <link rel = "stylesheet" href = "../css/login-form.css">
    <link rel = "stylesheet" href = "../css/collapse.css">



    
    <title>Home</title>
</head>
<body>
    <header id = "head" class = "bg-blue">
        <div class="container container-header">
            <div class="nav-sign">
                <input type="checkbox" id = "check" >
                <label for = "check" class = "icon icon-button" >
                    <i class='bx bx-menu'></i>
                </label>
                <ul class = "navbar h-text navbar-collapse" >
                    <li class = "nav-item"><a class = "nav-link <?php echo $home; ?>" href="../end-users/home.php">HOME</a></li>
                    <li class = "nav-item"><a class = "nav-link <?php echo $features; ?>" href="#">FEATURES</a></li>
                    <li class = "nav-item"><a class = "nav-link <?php echo $tutors; ?>" href="../end-users/tutors.php">TUTORS</a></li>
                    <li  id = "about-link" class = "nav-item" ><a  class = "nav-link <?php echo $about; ?>" href="#">ABOUT US</a></li>
                    <li class = "nav-item"><a class = "nav-link <?php echo $faqs; ?>" href="../end-users/faqs.php">FAQs</a></li>

<<<<<<< Updated upstream
                    <button class= "log-in">Login</button>
                    <button class= "sign-up">Sign up</button>
=======
                    <?php
                        //check if user is logged in
                        if(isset($_SESSION['logged-in'])){
                            // show the first name of the user
                    ?>
                            <?php if($_SESSION['logged-in']['type'] == 'tutor'): ?>
                                <a href="../tutor/tutor-profile.php">
                                    <button class="log-in join"><?php echo $_SESSION['logged-in']['firstname']; ?></button>
                                </a>
                            <?php else: ?>
                                <a href="../end-users/home.php">
                                    <button class="log-in join"><?php echo $_SESSION['logged-in']['firstname']; ?></button>
                                </a>
                            <?php endif; ?>

                            
                            </button>
                            <a href = "../includes/logout.php"><button class= "log-in "> Log out</button></a>

                    <?php 
                        }else{
                    ?>
                        <button class= "log-in join">Login</button>
                        <button class= "sign-up join">Sign up</button>
                    <?php }
                    ?>
>>>>>>> Stashed changes
                </ul>
                

            </div>

            <div class="logo-quote container-flex">
                <img class = "logo" src="../images/logo.png" alt="">
                <div class="quote h-text">Best tutor in town</div>
            </div>

            <div class="join-btn">
                <a href = "#" class = "join" >Join</a>
            </div>

            

        </div>
        
    </header>