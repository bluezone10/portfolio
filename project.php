<?php 
    include 'PHP/connect.php';
    $name = $_GET['name'];
    $project = mysqli_query($conn, "SELECT * FROM projects WHERE name='$name'");
    if(mysqli_num_rows($project) <= 0) {
        header('location: index.php');
        exit();
    } else {
        $data = mysqli_fetch_assoc($project);
        $projectID = $data['project_id'];
        $description = $data['description'];
        $imageURL = $data['image_url'];
        $hearts = $data['hearts'];
        $views = $data['views'];
        $tech = explode(", ", $data['language']);
    } 

    $gallery = mysqli_query($conn, "SELECT * FROM gallery WHERE gallery_id='$projectID'");
?>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Projects</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="CSS/indexs.css">
    <style>
        .bodySection {
            padding-left: 10%; padding-right: 10%;
            padding-bottom: 2.5%;
        }
        .contactContainer {
            position: absolute;
            left: 50%; top: 50%;
            transform: translate(-50%, -50%);
            width: 60%; height: 65vh;
            z-index: 2;
            background-color: whitesmoke;
            display: flex;
        }

        .contactImage {
            width: 50%;
            height: 100%;
        }

        .project-card {
            transition: 0.25s ease-out;
        }

        .project-card:hover {
            scale: 1.1;
        }

        .contactFormContainer {
            width: 50%;
        }

        #galleryImage {
            transition: 0.25s ease-out;
        }

        #galleryImage:hover {
            scale: 1.1;
        }
    </style>
</head>
<body>
<div class="contactTopContainer position-absolute ps-2 pe-2 d-flex align-items-center justify-content-between">
        <p class="m-0">+63-97569262625 / +63-9917166453</p>
        <div class="d-flex gap-2">
            <i id="socialIcon" title="Facebook" class="bi bi-facebook" style="font-size: 3vh"></i>
            <i id="socialIcon" title="Github" class="bi bi-github" style="font-size: 3vh"></i>
            <i id="socialIcon" title="LinkedIn" onclick="window.location.href = 'www.linkedin.com/in/angelo-castro-315610332'" class="bi bi-linkedin" style="font-size: 3vh"></i>
        </div>
    </div>
    <section class="navigation">
        <div class="position-absolute" style="top: 10vh; left: 5vh">
            <h5>Welcome to my Project</h5>
        </div>
        <div class="position-absolute d-flex align-items-center justify-content-center"
            style="width: 7.5vh; height: 7.5vh; right: 2.5vh; top: 5vh">
            <i id="burgerIcon" class="bi bi-list text-dark" onclick="showNavigation();"
                style="cursor: pointer; font-size: 5vh"></i>
        </div>
    </section>
    <section class="contactSection position-fixed w-100" style="display: none; z-index: 1; height: 100vh; top: 0; left: 0">
        <div class="position-absolute bg-dark w-100" style="opacity: 0.5; z-index: 1; left: 0; top: 0; height: 100vh;"></div>
        <div class="contactContainer">
            <i class="position-absolute bi bi-x text-danger" onclick="$('.contactSection').hide()" style="right: 0; cursor: pointer; top: -5px; font-size: 5vh"></i>
            <div class="contactImage">
                <img src="IMAGE/contact.jpg" class="img-fluid w-100 h-100" alt="">
            </div>
            <div class="contactFormContainer p-4" style="overflow-y: auto"> 
                <div class="w-100">
                    <h5>EMAIL ME</h5>
                    <hr>
                </div>
                <div>
                    <form action="" class="d-flex flex-column gap-2">
                        <div class="d-flex flex-column gap-1">
                            <label for="">Email: </label>
                            <input type="text" class="form-control" placeholder="Your email..." required>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <label for="">Subject: </label>
                            <input type="text" class="form-control" placeholder="Subject..." required>
                        </div>
                        <div class="d-flex flex-column gap-1">
                            <label for="">Name: </label>
                            <textarea name="" rows="6" class="form-control" placeholder="Your concern..." id="" required></textarea>
                        </div>
                        <div class="mt-2">
                            <button class="w-100 btn btn-dark">SUBMIT</button>
                        </div>
                    </form>
                </div>
            </div>
        </div>
    </section>
    <section class="leftNavigation p-4 position-fixed bg-dark"
        style="display: none; z-index: 1; height: 100vh; width: 50vh; left: 0; top: 0">
        <div class="text-white d-flex flex-column">
            <div class="d-flex justify-content-between">
                <h5>Hello Guest,</h5>
                <i class="bi bi-x text-danger position-absolute"
                    onclick="$('.leftNavigation').hide(); $('#burgerIcon').attr('class', 'bi bi-list text-dark')"
                    style="cursor: pointer; top: 5px; right: 25px; font-size: 5vh"></i>
            </div>
            <hr>
            <div id="buttonContainer" class="ps-4 gap-4 d-flex flex-column text-white">
                <a href="." >HOME</a>
                <a href="" onclick="goToSection('techSection')">TECH OVERVIEW</a>
                <a href="" onclick="goToSection('gallerySection')">GALLERY</a>
                <a href="" onclick="goToSection('footerSection')">CONTACT</a>
            </div>
        </div>
    </section>
    <section id="warningModal" class="position-fixed w-100" style="display: none; z-index: 1000; left: 0; top: 0; height: 100vh">
        <div class="bg-dark w-100" style="z-index: 1; opacity: 0.5; height: 100vh"></div>
        <div class="position-fixed bg-white p-4 rounded shadow" style="width: 50vh; min-height: 10vh; left: 50%; top: 50%; transform: translate(-50%, -50%)">
            <div class="alert alert-danger text-center">WARNING!</div>
            <hr>
            <div class="p-2 d-flex flex-column" style="text-align: justify">
                <i class="bi bi-tools text-center text-danger" style="font-size: 5vh"></i>
                <hr>
                <span>
                    Sorry for the inconvenience, live demo is under construction, but you can still navigate to this project "Gallery" to see more details of the project, thank you for your understanding!
                </span>
            </div>
            <hr>
            <div>
                <button class="btn btn-danger" onclick="$('#warningModal').hide()">CLOSE</button>
            </div>
        </div>
    </section>
    <section id="imageModal" class="position-fixed w-100" style="display: none; z-index: 1000; left: 0; top: 0; height: 100vh">
        <div class="bg-dark w-100" style="z-index: 1; opacity: 0.5; height: 100vh"></div>
        <div class="position-fixed bg-white p-4 rounded shadow" style="width: 75%; height: fit-content; left: 50%; top: 50%; transform: translate(-50%, -50%)">
            <i class="bi bi-x text-danger bg-white rounded ps-2 pe-2 position-absolute" onclick="$('#imageModal').hide()" style="cursor: pointer; top: -6.75vh; right: 0; font-size: 5vh"></i>
            <img id="imageSource" src="" class="img-fluid img-thumbnail w-100" alt="">
        </div>
    </section>
    <section class="bodySection w-100" style="margin-top: 20vh; min-height: 80vh">
        <div class="w-100 d-flex gap-4">
            <div class="w-50 d-flex align-items-center" style="height: 60vh">
                <img src="IMAGE/PROJECT/<?= $imageURL ?>" class="img-fluid w-100 img-thumbnail shadow" alt="">
            </div>
            <div class="w-50 p-4 d-flex align-items-center flex-column justify-content-center" style="height: 60vh">
                <h3><?= $name ?></h3>
                <p><?= $description ?></p>
                <button class="btn btn-dark" onclick="$('#warningModal').show()">LIVE DEMO</button>
            </div>
        </div>
        <hr>
        <div class="w-100 techSection">
            <h3>Tech Stack Overview</h3>
            <div class="w-100 d-flex mt-4 flex-wrap gap-4">
                <div class="d-flex flex-column align-items-center justify-content-center" style="">
                    <h5 class="text-center">HTML 5</h5>
                    <img src="IMAGE/html.png" class="img-fluid" style="width: 10vh;" alt="">
                    <p class="mt-2 text-center" style="font-size: 1.75vh; width: 20vh">I used HTML for the website structure</p>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center" style="">
                    <h5 class="text-center">CSS 3</h5>
                    <img src="IMAGE/css.png" class="img-fluid" style="width: 10vh;" alt="">
                    <p class="mt-2 text-center" style="font-size: 1.75vh; width: 20vh">I used CSS 3 for the website design</p>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center" style="">
                    <h5 class="text-center">JavaScript</h5>
                    <img src="IMAGE/javascript.png" class="img-fluid" style="width: 10vh;" alt="">
                    <p class="mt-2 text-center" style="font-size: 1.75vh; width: 20vh">I used the javascript for the website functionality and dynamic</p>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center" style="">
                    <h5 class="text-center">PHP</h5>
                    <img src="IMAGE/php.png" class="img-fluid" style="width: 10vh;" alt="">
                    <p class="mt-2 text-center" style="font-size: 1.75vh; width: 20vh">I used PHP for server-side script to fetch the data from the database</p>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center" style="">
                    <h5 class="text-center">jQuery</h5>
                    <img src="IMAGE/jquery.png" class="img-fluid" style="width: 10vh;" alt="">
                    <p class="mt-2 text-center" style="font-size: 1.75vh; width: 20vh">The jQuery is used for dynamic fetch data from the PHP using AJAX and front-end framework for javascript</p>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center" style="">
                    <h5 class="text-center">Bootstrap 5</h5>
                    <img src="IMAGE/bootstrap.png" class="img-fluid" style="width: 10vh;" alt="">
                    <p class="mt-2 text-center" style="font-size: 1.75vh; width: 20vh">Bootstrap 5 is used for libraries CSS to design the website in more responsive and fancy design</p>
                </div>
                <div class="d-flex flex-column align-items-center justify-content-center" style="">
                    <h5 class="text-center">MySQL</h5>
                    <img src="IMAGE/mysql.png" class="img-fluid" style="width: 10vh;" alt="">
                    <p class="mt-2 text-center" style="font-size: 1.75vh; width: 20vh">MySQL is for the database</p>
                </div>
            </div>
        </div>
        <hr>
        <div class="gallerySection w-100">
            <h3>Gallery</h3>
            <div class="mt-4 w-100 d-flex gap-4 flex-wrap justify-content-between">
                <?php while($row = mysqli_fetch_assoc($gallery)) { ?>
                    <div id="galleryImage" onclick="viewImage('IMAGE/GALLERY/<?= $row['image'] ?>')" class="d-flex align-items-center justify-content-center" style="cursor: pointer">
                        <img src="IMAGE/GALLERY/<?= $row['image'] ?>" class="img-fluid img-thumbnail shadow" style="width: 40vh; height: auto" alt="">
                    </div>
                <?php } ?>
            </div>
        </div>
    </section>
    <section class="footerSection position-relative bg-dark" style="padding-left: 10%; padding-right: 10%; height: 35vh">
        <div class="position-absolute" style="font-size: 5vh; bottom: 10vh; right: 5vh">
            <i class="bi bi-chevron-up text-white" onclick="goToSection('bodySection')" style="cursor: pointer; padding-left: 1vh; padding-right: 1vh; border: solid 0.5vh black; "></i>
        </div>
        <div class="position-absolute text-white text-center" style="padding-left: 5%; bottom: 2.5vh; right: 5vh">
            Copyright 2024 All Right Reserve, Angelo Castro Portfolio
        </div>
        <div class="position-absolute text-white d-flex gap-2" style="bottom: 2.5vh; left: 5vh">
            <i id="socialIcon" title="Facebook" class="bi bi-facebook" onclick="goToLink('https://www.facebook.com/angeloyam223')" class="bi bi-facebook" style="font-size: 3vh"></i>
            <i id="socialIcon" title="Github" class="bi bi-github" onclick="goToLink('https://github.com/bluezone10')" style="font-size: 3vh"></i>
            <i id="socialIcon" title="LinkedIn" class="bi bi-linkedin" onclick="goToLink('https://www.linkedin.com/in/angelo-castro-315610332')" style="font-size: 3vh"></i>
         </div>
         <div class="w-100 d-flex align-items-center flex-column text-white justify-content-center" style="height: 35vh"> 
            <p class="mb-0">Email: angelocastro2000@gmail.com</p>
            <p class="mt-0">Contact: 09756926265</p>
            <button class="btn btn-secondary btn-lg" onclick="$('.contactSection').show()">CONTACT ME</button>
         </div>
        <div class="custom-shape-divider-top-1731313661">
            <svg data-name="Layer 1" xmlns="http://www.w3.org/2000/svg" viewBox="0 0 1200 120"
                preserveAspectRatio="none">
                <path
                    d="M321.39,56.44c58-10.79,114.16-30.13,172-41.86,82.39-16.72,168.19-17.73,250.45-.39C823.78,31,906.67,72,985.66,92.83c70.05,18.48,146.53,26.09,214.34,3V0H0V27.35A600.21,600.21,0,0,0,321.39,56.44Z"
                    class="shape-fill"></path>
            </svg>
        </div>
    </section>
</body>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js"
    integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM"
    crossorigin="anonymous"></script>
<script src="https://code.jquery.com/jquery-3.6.0.min.js"></script>
<script>
    function viewImage(url) {
        $('#imageModal').show();
        $('#imageSource').attr('src', url);
    }
    function showNavigation() {
        var leftNavigation = $('.leftNavigation');
        var burgerIcon = $('#burgerIcon');

        if (leftNavigation.is(':visible')) {
            leftNavigation.hide();
            burgerIcon.attr('class', 'bi bi-list text-dark');
        } else {
            leftNavigation.show();
            burgerIcon.attr('class', 'bi bi-x text-dark');
        }
    }

    function goToSection(section) {
        event.preventDefault();
        const element = document.querySelector(`.${section}`);
        element.scrollIntoView({
            behavior: 'smooth'
        });
    }
</script>
</html>