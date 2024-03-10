<?php
    session_start();
    require_once "../variables/nav.php";
    $tutors = "active";
    require_once "../includes/header.php";
    require_once "../includes/login.php";

?>
<main >
    <div class="wall wall-bg-home">
        <div class="container container-wall fluid-height">
            <div class="wall-body container-wall">
                    <div class="wall-title">Tutor appointment</div>
                    <h1 class="wall-sub-title">Empowering students to learn</h1>
            </div>
       
        </div>
    </div>

    <form action="../tutors/search-query=?" class = "container search-sort">
        <div class="search">
            <label for="search" class = "search-label">Search</label>
            <input type="text" name = "search" id = "search">
        </div>
        <div class="sort">
            <label for="sort">Sorty by</label>
                <select name="sort" id="cars">
                    <option value="name">Name</option>
                    <option value="stars">Stars</option>
                    <option value="pay">Payment</option>
                    <option value="audi">Audi</option>
                </select>
        </div>
    </form>

    <div class="card-container container">

    
        <button id = "smooth-btn" class = "prev-btn disabled-btn" ><i class='bx bx-chevron-left'></i></button>

        <ul class="list-container" id = "scrollable-element-subjects">
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/english.png" alt="english">
                    <div class="card-title">English</div>
                </a>
            </li>
            <li class="card">
                <a href="#" class = "card-link">
                    <img class = "card-img" src="../images/icons/art.png" alt="art">
                    <div class="card-title">Art</div>
                </a>
            </li>
            <li class="card">
                <a href="#" class = "card-link">
                    <img class = "card-img" src="../images/icons/math.png" alt="math">
                    <div class="card-title">Math</div>
                </a>
            </li>
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/history.png" alt="history">
                    <div class="card-title">History</div>
                </a>
            </li>
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/philosophy.png" alt="philosophy">
                    <div class="card-title">Philosophy</div>
                </a>
            </li>
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/technology.png" alt="technology">
                    <div class="card-title">Technology</div>
                </a>
            </li>
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/science.png" alt="science">
                    <div class="card-title">Science</div>
                </a>
            </li>
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/literature.png" alt="literature">
                    <div class="card-title">Literature</div>
                </a>
            </li>
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/geometry.png" alt="geometry">
                    <div class="card-title">Geometry</div>
                </a>
            </li>
            <li class="card">
                <a href="#"class = "card-link">
                    <img class = "card-img" src="../images/icons/geography.png" alt="geography">
                    <div class="card-title">Geography</div>
                </a>
            </li>
            

            
        </ul>
        <button id = "#smooth-btn" class = "next-btn" ><i class='bx bx-chevron-right' ></i></button>
    </div>

    <p class="container t-color">63,449 services available</p>
    
    <div class="container grid-container">
        <a class="grid-item" href = "#">
            <div class="img-preview">
                <img class = "wall-img" src="../images/grid/wall/wall1.png" alt="wall1">
            </div>
            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile1.jpeg" alt="profile1" class="profile-img">
                    <div class="flex-between">
                        <div class="profile-name-type">
                            <div class="profile-name">stylishwebs</div>
                            <div class="profile-type">Tutor</div>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <p class="rating-quantity">(<span class = "rating-quantity-value">18</span>)</p>
                        </div>
                    </div>
                </div>
                <div class="detail-pay-rate-wrapper">
                    <p class="details">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Nostrum architecto aliquam sequi nemo corrupti consequatur exercitationem totam soluta delectus id.</p>
                    <div class="rating-pay-rate">
                        <div class="pay-rate">
                        <p>Pay rate at </p>
                        <h2>₱ 200.00</h2>
                    </div>
                    </div>
                </div>
            </div>
        </a>
       
        <a class="grid-item" href = "#">
            <div class="img-preview">
                <img class = "wall-img" src="../images/grid/wall/wall2.png" alt="wall1">

            </div>

            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile2.jpg" alt="profile2" class="profile-img">
                    <div class="flex-between">
                        <div class="profile-name-type">
                            <div class="profile-name">aminul_islam33</div>
                            <div class="profile-type">Tutor</div>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <p class="rating-quantity">(<span class = "rating-quantity-value">18</span>)</p>
                        </div>
                    </div>
                </div>
                <div class="detail-pay-rate-wrapper">

                <p class="details">I have been teaching students for more than 2 years and to teach unfortunate children voluntarily and teaching online would be my source of income for this year.</p>
                <div class="rating-pay-rate">
                    <div class="pay-rate">
                        <p>Pay rate at </p>
                        <h2>₱ 200.00</h2>
                    </div>
                </div>
                </div>
            </div>
        </a>

        <a class="grid-item" href = "#">
            <div class="img-preview">
                <img class = "wall-img" src="../images/grid/wall/wall3.jpg" alt="wall1">
            </div>
            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile3.jpeg" alt="profile1" class="profile-img">
                    <div class="flex-between">
                        <div class="profile-name-type">
                            <div class="profile-name">abdulsattar550</div>
                            <div class="profile-type">Tutor</div>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <p class="rating-quantity">(<span class = "rating-quantity-value">15</span>)</p>
                        </div>
                    </div>
                </div>
                <div class="detail-pay-rate-wrapper">
                <p class="details">Lorem, ipsum dolor sit amet sfs adipisicing elit. Deserunt, repellat unde doloribus esse rem at excepturi ducimus necessitatibus quaerat mollitia velit repellendus? Alias, repellendus et sunt quae sint, nihil natus quos blanditiis illo corrupti perferendis est atque, commodi officiis id voluptatibus aperiam fugiat quas nulla vitae deleniti perspiciatis aliquid veritatis. Earum quisquam rerum ipsum enim saepe quos velit nobis consequuntur harum minima autem assumenda delectus itaque perferendis rem quia, doloremque odit maiores dicta maxime sunt facilis? Enim quasi vitae aliquam, id, alias soluta dolore harum accusantium molestiae cupiditate quidem officia necessitatibus amet consequuntur eaque deserunt hic voluptatem? Est, architecto esse.</p>
                    <div class="rating-pay-rate">
                       
                            <div class="pay-rate">
                            <p>Pay rate at </p>
                            <h2>₱ 150.00</h2>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <a class="grid-item" href = "#">
            <div class="img-preview">
                <img class = "wall-img" src="../images/grid/wall/wall4.png" alt="wall1">
            </div>
            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile4.jpg" alt="profile1" class="profile-img">
                    <div class="flex-between">
                        <div class="profile-name-type">
                            <div class="profile-name">meesumzaidi888</div>
                            <div class="profile-type">Tutor</div>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <p class="rating-quantity">(<span class = "rating-quantity-value">20</span>)</p>
                        </div>
                    </div>
                </div>
                <div class="detail-pay-rate-wrapper">
                <p class="details">Lorem ipsum dolor sit amet, sf adipisicing elit. Sed deserunt, sapiente aspernatur ducimus eos atque optio perspiciatis eaque expedita error, eum alias consequuntur accusantium incidunt ab facere. Ullam libero qui voluptates omnis nam corporis quam commodi nostrum, deserunt cum unde labore et eaque, aut vitae saepe nisi eligendi ad aliquam illum quod? Tempore, numquam quia repudiandae exercitationem non libero, temporibus ex optio corrupti adipisci ipsum repellendus, voluptas saepe est magni hic quos praesentium maxime rerum unde. Delectus, architecto doloribus neque cumque ratione quidem, ullam nulla placeat repudiandae minus, veniam porro dolorem esse ex reiciendis dolorum nisi officia magni iure. Harum quaerat mollitia impedit cum quia quam earum ipsa rerum commodi? Praesentium cumque hic rerum veritatis quis, sint natus temporibus saepe!.</p>
                    <div class="rating-pay-rate">
                       
                            <div class="pay-rate">
                            <p>Pay rate at </p>
                            <h2>₱ 300.00</h2>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a class="grid-item" href = "#">
            <div class="img-preview">
                <img class = "wall-img" src="../images/grid/wall/wall5.png" alt="wall1">
            </div>
            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile5.png" alt="profile1" class="profile-img">
                    <div class="flex-between">
                        <div class="profile-name-type">
                            <div class="profile-name">jjvera26</div>
                            <div class="profile-type">Tutor</div>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <p class="rating-quantity">(<span class = "rating-quantity-value">16</span>)</p>
                        </div>
                    </div>
                </div>
                <div class="detail-pay-rate-wrapper">
                <p class="details">Lorem ipsum, dolor sit amet sf adipisicing elit. Molestiae quae maxime deserunt vitae dolorem numquam mollitia? Adipisci quo debitis nihil minus! Laboriosam doloribus, qui sed repudiandae tempora explicabo iste amet vel! Quibusdam consequuntur, autem officiis quasi rerum laboriosam recusandae deleniti vel perspiciatis hic quod adipisci? Fugit accusamus quae sit ad nesciunt explicabo earum, dolore sunt tenetur itaque consequatur nam odio quas id nostrum deserunt maxime necessitatibus molestias? Quia, porro delectus enim optio rem rerum, iste eveniet itaque doloribus ex molestiae in nemo odio provident tempora aspernatur officia nostrum vitae quis neque, voluptas obcaecati! Quam qui soluta fuga. Perferendis est quam dolores voluptatum expedita, provident ullam laboriosam optio modi quis aperiam voluptatem, pariatur, aspernatur laborum numquam a possimus qui itaque cumque assumenda obcaecati dolore. Officia ut aut ad sint error dolore ratione similique deleniti? Praesentium similique neque debitis, at amet exercitationem eos omnis expedita aliquid voluptate nemo itaque adipisci autem enim necessitatibus ad asperiores obcaecati dicta nobis sapiente! Aut animi fugit quasi alias sunt, iure repellendus doloribus sint itaque a nostrum sequi eveniet quisquam explicabo sed! A vero ratione repudiandae dolorem quasi. Impedit suscipit illo, quasi autem sunt eius blanditiis quam?.</p>
                    <div class="rating-pay-rate">
                       
                            <div class="pay-rate">
                            <p>Pay rate at </p>
                            <h2>₱ 110.00</h2>
                        </div>
                    </div>
                </div>
            </div>
        </a>

        <a class="grid-item" href = "#">
            <div class="img-preview">
                <img class = "wall-img" src="../images/grid/wall/wall6.png" alt="wall1">
            </div>
            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile6.jpg" alt="profile1" class="profile-img">
                    <div class="flex-between">
                        <div class="profile-name-type">
                            <div class="profile-name">vastical6</div>
                            <div class="profile-type">Tutor</div>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <p class="rating-quantity">(<span class = "rating-quantity-value">11</span>)</p>
                        </div>
                    </div>
                </div>
                <div class="detail-pay-rate-wrapper">
                <p class="details">Lorem ipsum dolor sit amet sf, adipisicing elit. Voluptas facere animi eligendi. Dolores modi voluptatem, in, quod facilis quae dolor nisi assumenda ea eligendi eius iure atque sunt, deserunt quis nesciunt expedita culpa ipsa nam ab autem aliquid minus? Doloribus accusantium fugit iste optio facere et aspernatur provident aut sapiente distinctio impedit ipsam similique atque quas magnam quis ullam iusto, architecto itaque unde repellat. Explicabo consequuntur aliquam, commodi culpa error possimus porro saepe pariatur quod corrupti tempore iste debitis modi ipsam, aliquid soluta, mollitia ut nesciunt incidunt! Voluptatem, corrupti rerum..</p>
                    <div class="rating-pay-rate">
                       
                            <div class="pay-rate">
                            <p>Pay rate at </p>
                            <h2>₱ 150.00</h2>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a class="grid-item" href = "#">
            <div class="img-preview">
                <img class = "wall-img" src="../images/grid/wall/wall7.png" alt="wall1">
            </div>
            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile7.jpg" alt="profile1" class="profile-img">
                    <div class="flex-between">
                        <div class="profile-name-type">
                            <div class="profile-name">alexanderivanov</div>
                            <div class="profile-type">Tutor</div>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <p class="rating-quantity">(<span class = "rating-quantity-value">50</span>)</p>
                        </div>
                    </div>
                </div>
                <div class="detail-pay-rate-wrapper">
                <p class="details">Lorem ipsum dolor, sit amet sf adipisicing elit. Maxime suscipit nisi beatae? Voluptates suscipit esse sf cum, itaque iusto ratione possimus, delectus ad architecto ex necessitatibus ipsa. Nulla fugit, libero, corporis ad corrupti similique veritatis voluptatum mollitia, distinctio voluptatibus unde ipsa earum exercitationem architecto! Tempora fugiat debitis corporis esse enim error quod velit fugit. Inventore blanditiis reiciendis aliquid earum amet porro nisi nulla quos, rem harum obcaecati delectus voluptatem velit deleniti, tempora fuga voluptate doloribus aspernatur repellat veritatis quasi nobis..</p>
                    <div class="rating-pay-rate">
                       
                            <div class="pay-rate">
                            <p>Pay rate at </p>
                            <h2>₱ 200.00</h2>
                        </div>
                    </div>
                </div>
            </div>
        </a>
        <a class="grid-item" href = "#">
            <div class="img-preview">
                <img class = "wall-img" src="../images/grid/wall/wall8.jpg" alt="wall1">
            </div>
            <div class="information">
                <div class="profile">
                    <img class = "profile-img" src="../images/grid/profile/profile8.jpeg" alt="profile1" class="profile-img">
                    <div class="flex-between">
                        <div class="profile-name-type">
                            <div class="profile-name">adedokun_habeeb</div>
                            <div class="profile-type">Tutor</div>
                        </div>
                        <div class="rating">
                            <i class='bx bxs-star'></i>
                            <p class="rating-quantity">(<span class = "rating-quantity-value">34</span>)</p>
                        </div>
                    </div>
                </div>
                <div class="detail-pay-rate-wrapper">
                <p class="details">Lorem ipsum dolor sit amet break adipisicing elit. Quam adipisci facere sapiente similique eius optio, excepturi consequatur distinctio vitae molestiae voluptates placeat laudantium! Facilis et, aspernatur voluptate id delectus soluta tenetur optio ducimus qui ea accusamus non dolores sapiente, cupiditate voluptatem saepe blanditiis numquam deserunt in tempore! Placeat, ducimus neque. Expedita commodi quis ipsam voluptatem ex modi adipisci iure iusto quibusdam, assumenda veritatis sequi iste accusamus optio nisi? Accusantium cupiditate laudantium odit iusto eaque dolore voluptas harum fuga quas laboriosam doloribus molestias atque, corporis placeat earum error vitae et vero, minus perspiciatis perferendis id sit voluptatum ipsum. Quasi, perferendis consequatur!.</p>
                    <div class="rating-pay-rate">
                       
                            <div class="pay-rate">
                            <p>Pay rate at </p>
                            <h2>₱ 190.00</h2>
                        </div>
                    </div>
                </div>
            </div>
        </a>  
        
        
        
    </div>

    <div class="container ">
        <ul class="pagination">
            <li class="pagination-item pagination-btn-left"><a href="#" class="pagination-link"><i class='bx bx-chevron-left'></i></a></li>
            <div class="pagination-pages">
                <li class="pagination-item"><a href="#" class="pagination-link">1</a></li>
                <li class="pagination-item"><a href="#" class="pagination-link">2</a></li>
                <li class="pagination-item"><a href="#" class="pagination-link">3</a></li>
                <li class="pagination-item"><a href="#" class="pagination-link">4</a></li>
                <li class="pagination-item"><a href="#" class="pagination-link">5</a></li>
                <li class="pagination-item"><a href="#" class="pagination-link">6</a></li>
                <li class="pagination-item"><a href="#" class="pagination-link">7</a></li>
                <li class="pagination-item"><a href="#" class="pagination-link">8</a></li>
                <li class="pagination-item"><a href="#" class="pagination-link">9</a></li>
                <li class="pagination-item"><a href="#" class="pagination-link">10</a></li>
            </div>
         
            <li class="pagination-item pagination-btn-right"><a href="#" class="pagination-link"><i class='bx bx-chevron-right'></i></a></li>

        </ul>
    </div>

    

    
    <script src = "../js/tutors.js" > </script>
    <script src = "../js/limiter.js"> </script>
</main>

<?php
    require_once "../includes/footer.php";
?>