<?php
<<<<<<< Updated upstream
=======
    session_start();

>>>>>>> Stashed changes
    require_once "../variables/nav.php";
    $home = "active";
    require_once "../includes/header.php";
    require_once "../includes/login.php";

?>
    <main>
        <div class="wall wall-bg-home">
            <div class="container container-wall fluid-height">
                <div class="wall-body container-wall">
                        <p class="wall-title">Tutor Appointment</p>
                        <h1 class="wall-sub-title">Tutoring Services at its best</h1>
                </div>
                <img src="../images/wall.png" alt="wall">
            </div>
        </div>

    


        <div class="container">
            <div class="pic-description">
                <img class = "pic" src="../images/tutor-pic-4.jpg" alt="pic4">
                <div class="description">
                    <h2 class="title">Our Tutoring Services</h2>
                    <p >
                        Our tutoring services encourage students to achieve success levels
                        beyond what they may have ever dreamed possible.
                        All of our students receive excellent virtual or face to face educational
                        experiences from us, and we work to instill in them a passion 
                        of lifelong learning as well as a feeling of community
                        and respect for one another.
                    </p>
                </div>
                
            </div>
        </div>
        
        <div class="container">
            <div class="pic-description reversed">
                <img class = "pic" src="../images/tutor-pic-1.png" alt="pic1">
                <div class="description">
                    <h2 class="title">Tutors provide</h2>
                    <p>
                        By rethinking conventional teaching techniques and developing 
                        a more dynamic, relevant, and potent model that reflects
                        contemporary perspectives, we provide a new and modern 
                        approach to education. We cultivate each student's distinct 
                        individuality, talent, and self-assurance, preparing them to face
                        the world with the abilities and self-assurance necessary to
                        succeed.
                    </p>
                
                </div>
            </div>
        </div>

        <div class="container">
            <div class="pic-description">
                <img class = "pic" src="../images/tutor-pic-2.jpg" alt="pic2">
                <div class="description">
                    <h2 class="title">As a student , Why should I hire tutor?</h2>
                    <p >
                        Our services are exceptional for their adaptability, method, and accessibility. Students can advance in their learning without interruptions in an effective classroom setting, providing them time to pursue other interests.
                    </p>
                </div>
                
            </div>
        </div>

        <div class="container">
            <div class="pic-description reversed">
                <img class = "pic" src="../images/tutor-pic-3.jpeg" alt="pic3">
                <div class="description">
                    <h2 class="title">As a parent, what do I need to know?</h2>
                    <p>
                        The ideal groundwork for future academic endeavors is provided by tutors. Students can make outstanding progress quickly thanks to our cutting-edge teaching methodology.
                    </p>
                
                </div>
            </div>
        </div>
           

        
    </main>

<?php
    require_once "../includes/footer.php";
?>