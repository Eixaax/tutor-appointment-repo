<?php
    require_once "../variables/nav.php";
    $tutors = "active";
    $title = 'TutourOnline | Profile';
    require_once "../includes/header.php";
    require_once "../includes/login.php";

?>

 
    <main> 
        <div class="profiling container">
            <div class="profile-main">
                <div class="profile-main-head">
                    <img src="../images/grid/profile/mine.jpg" alt="profile" class="profile-img">
                    <div class="profile-name-description">
                        <div class="profile-name">
                            <h2>Jhon Laden</h2>
                            <div class="circle"></div>
                            <p>available</p>
                        </div>
                        <div class="profile-description">
                            <p>&nbsp;&nbsp;&nbsp;&nbsp;I am an expert of mathematics from Grade School level to College Level and good at creating instructional materials to the level of needs of the student. I have been teaching students for more than 2 years and to teach unfortunate children voluntarily and teaching online would be my source of income for this year.</p>
                        </div>
                    </div>
                </div>

                <div class="profile-subjects-skills properties">
                    <img class = "header-img" src="../images/grid/profile/graduation-hat.png" alt="hat">
                    <div class="subjects subjects-skills-details">
                        <h3 class="profile-subjects-skills-header">Subjects</h3>
                        <ul class = "profile-subjects-skills-list">
                            <li class = "item">Mathematics</li>
                            <li class = "item">English</li>
                            <li class = "item">Computer</li>
                            <li class = "item">Science</li>
                            <li class = "subject-item">Social Studies</li>
                            <li class = "subject-item">Home Economics</li>
                        </ul>
                    </div>
                    <div class="skills subjects-skills-details">
                        <h3 class="profile-subjects-skills-header">Skills</h3>
                        <ul class = "profile-subjects-skills-list">
                            <li class = "item">Patience</li>
                            <li class = "item">Positive</li>
                            <li class = "item">Computer</li>
                            <li class = "item">Enthusiastic</li>
                            <li class = "item">Communication</li>
                        </ul>
                    </div>
                
                </div>
                <div class="profile-experience properties">
                    <div class="profile-properties-header">
                        <img class = "header-img" src="../images/grid/profile/brief-case.png" alt="brief case">
                        <h3 class="profile-experience-header">Experience</h3>
                    </div>
                    <div class="profile-experience-details details">
                        <p class="experience-info">&nbsp;&nbsp;&nbsp;&nbsp;SHS Teacher (Mar, 2021–Present) at DepEd Valenzuela City I am currently a Senior High School Teacher at a public school in Valenzuela. I am teaching General Mathematics, Statistics and Probability, Pre-Calculus, and Basic Calculus.</p>
                        <p>Mathematics Teacher (Jun, 2018–Mar, 2020) at Philippine Cultural College-Manila</p>
                    </div>
                </div>
                <div class="profile-education properties">
                    <div class="profile-properties-header">
                        <img class = "header-img" src="../images/grid/profile/graduate.png" alt="brief case">
                        <h3 class="profile-education-header">Education</h3>
                    </div>
                    <div class="profile-education-details details">
                        <p>Bachelor in Mathematics Education (Jun, 2014–Apr, 2018) from Philippine Normal University - Manila</p>
                        <p>Master in English (Jan, 2019-March, 2020) from Philippine Normal University Manila</p>
                    </div>
                </div>
            </div>
            <div class="profile-details">
                <div class="offered-services profile-details-container ">
                    <p class="profile-details-header">My tutorial services includes:</p>
                    <ol class="services-list">
                        <li class="item">Teaching/Advance Study/Review</li>
                        <li class="item">Assistance with your school requirements and:</li>
                        <li class="item">A copy of the learning materials or presentation for easier learning</li>
                    </ol>
                    <p class="services-optional">PS: I accept students of any grade or year level and the payment rate is negotiable</p>
                </div>
                <div class="location profile-details-container">
                    <p class="location-p-container"><i class='bx bxs-map-pin'></i> Recodo, Zamboanga City</p>
                    <p class="location-p-container"><i class='bx bx-desktop' ></i> Online/Homebase</p>
                    <p class="location-p-container"><i class='bx bx-wallet'></i> ₱100 - ₱300/hr</p>
                    <button class="appointment-btn">Make an appointment</button>
                </div>
                <div class="ratings profile-details-container">
                    <p class="profile-details-header">Rating Breakdown</p>
                    <p class="reviews">(15) Reviews <i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star' ></i><i class='bx bxs-star' ></i> 4.8</p>
                </div>
            </div>
        </div>
    </main>

<?php
    require_once "../includes/footer.php";

?>