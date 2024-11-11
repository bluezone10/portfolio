<?php
include 'PHP/connect.php';
$userIP = $_SERVER['REMOTE_ADDR'];
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>My Portfolio</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet"
        integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <link href="https://fonts.googleapis.com/css2?family=Lato:wght@400;700&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
    <link rel="stylesheet" href="CSS/index.css">
    <style>
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
    </style>
</head>

<body class="bg-light">
    <div class="contactTopContainer position-absolute ps-2 pe-2 d-flex align-items-center justify-content-between">
        <p class="m-0">+63-97569262625 / +63-9917166453</p>
        <div class="d-flex gap-2">
            <i id="socialIcon" title="Facebook" class="bi bi-facebook" onclick="goToLink('https://www.facebook.com/angeloyam223')" class="bi bi-facebook" style="font-size: 3vh"></i>
            <i id="socialIcon" title="Github" class="bi bi-github" onclick="goToLink('https://github.com/bluezone10')" style="font-size: 3vh"></i>
            <i id="socialIcon" title="LinkedIn" class="bi bi-linkedin" onclick="goToLink('https://www.linkedin.com/in/angelo-castro-315610332')" style="font-size: 3vh"></i>
        </div>
    </div>
    <section class="navigation">
        <div class="position-absolute" style="top: 10vh; left: 5vh">
            <h5>Welcome to my Portfolio</h5>
        </div>
        <div class="position-absolute d-flex align-items-center justify-content-center"
            style="width: 7.5vh; height: 7.5vh; right: 2.5vh; top: 5vh">
            <i id="burgerIcon" class="bi bi-list text-dark" onclick="showNavigation();"
                style="cursor: pointer; font-size: 5vh"></i>
        </div>
    </section>
    <section class="contactSection position-fixed w-100" style="z-index: 1001; display: none; z-index: 1; height: 100vh; top: 0; left: 0">
        <div class="position-absolute bg-dark w-100" style="opacity: 0.5; z-index: 1; left: 0; top: 0; height: 100vh;"></div>
        <div class="contactContainer" style="z-index: 1000">
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
    <section class="bodySection w-100 d-flex align-items-center justify-content-between"
        style="padding-left: 10%; padding-right: 10%; min-height: 100vh; padding-bottom: 5%">
        <div class="position-absolute d-flex align-items-center justify-content-center rounded-circle p-1"
            style="z-index: -1; border: solid 1vh rgba(135, 207, 235, 0.26); left: 20vh; margin-top: 50vh; height: 25vh; width: 25vh">
            <div class="w-100 h-100 rounded-circle" style="border: solid 1vh rgba(135, 207, 235, 0.164)"></div>
        </div>
        <div class="position-absolute d-flex align-items-center justify-content-center rounded-circle p-1"
            style="z-index: -1; border: solid 1vh rgba(135, 207, 235, 0.26); right: 20vh; margin-bottom: 50vh; height: 25vh; width: 25vh">
            <div class="w-100 h-100 rounded-circle" style="border: solid 1vh rgba(135, 207, 235, 0.164)"></div>
        </div>
        <div id="introContainer">
            <h3>Hi, I'm Angelo Castro a PHP Developer</h3>
            <p style="text-align: justify">I am a fresh graduate (Cum Laude) with a Bachelor of Science in
                Information Technology from Cavite State University - Tanza Campus. Throughout my academic journey,
                I have gained a strong foundation in software development, web technologies, and database
                management. I am passionate about building innovative and user-friendly solutions, and I am eager to
                apply my skills and knowledge in the field of technology. Welcome to my portfolio, where you can
                explore my projects and achievements.</p>
            <button id="contactButton" class="border pt-2 pb-2 ps-4 pe-4 bg-primary text-white" onclick="$('.contactSection').show()">CONTACT ME</button>
        </div>
        <div id="introContainer" class="d-flex align-items-center justify-content-center">
            <img src="IMAGE/self.png" class="w-100 h-100"
                style="border-bottom-left-radius: 15vh; border-bottom-right-radius: 15vh;" alt="">
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
                <a href="" onclick="goToSection('bodySection')">HOME</a>
                <a href="" onclick="goToSection('skillsSection')">SKILLS</a>
                <a href="" onclick="goToSection('projectSection')">PROJECT</a>
                <a href="" onclick="goToSection('footerSection')">CONTACT</a>
            </div>
        </div>
    </section>
    <section class="skillsSection position-relative w-100 d-flex flex-column bg-dark"
        style="padding-left: 10%; padding-right: 10%; min-height: 100vh">
        <div class="text-white pt-4">
            <h1 class="text-center" style="text-shadow: 1px 1px 1px white">My Skills</h5>
                <p class="text-center mt-4 mb-4">These skills reflect my dedication to continuous learning and
                    growth as I look forward to contributing to exciting tech projects.</p>
        </div>
        <div class="skillsContainer gap-4 mt-4" style="flex: 1; padding-bottom: 10%">
            <div id="skillsContent" class="d-flex gap-4 justify-content-around flex-column">
                <div class="text-white d-flex gap-2 flex-column" style="width: 100%">
                    <div class="d-flex justify-content-between">
                        <label for="">HTML 5</label>
                        <span class="position-relative" style="right: 25%">75%</span>
                    </div>
                    <div class="d-flex rounded-pill bg-secondary w-100" style="overflow: hidden; height: 2.5vh">
                        <div class="" style="background-color: #90EE90;width: 75%"></div>
                    </div>
                </div>
                <div class="text-white d-flex gap-2 flex-column" style="width: 100%">
                    <div class="d-flex justify-content-between">
                        <label for="">CSS</label>
                        <span class="position-relative" style="right: 20%">80%</span>
                    </div>
                    <div class="d-flex rounded-pill bg-secondary w-100" style="overflow: hidden; height: 2.5vh">
                        <div class="" style="background-color: #90EE90;width: 80%"></div>
                    </div>
                </div>
                <div class="text-white d-flex gap-2 flex-column" style="width: 100%">
                    <div class="d-flex justify-content-between">
                        <label for="">Javascript</label>
                        <span class="position-relative" style="right: 35%">65%</span>
                    </div>
                    <div class="d-flex rounded-pill bg-secondary w-100" style="overflow: hidden; height: 2.5vh">
                        <div class="" style="background-color: #90EE90;width: 65%"></div>
                    </div>
                </div>
                <div class="text-white d-flex gap-2 flex-column" style="width: 100%">
                    <div class="d-flex justify-content-between">
                        <label for="">jQuery</label>
                        <span class="position-relative" style="right: 50%">50%</span>
                    </div>
                    <div class="d-flex rounded-pill bg-secondary w-100" style="overflow: hidden; height: 2.5vh">
                        <div class="" style="background-color: #90EE90;width: 50%"></div>
                    </div>
                </div>
                <div class="text-white d-flex gap-2 flex-column" style="width: 100%">
                    <div class="d-flex justify-content-between">
                        <label for="">Vue.js</label>
                        <span class="position-relative" id="vuePercent">25%</span>
                    </div>
                    <div class="d-flex rounded-pill bg-secondary w-100" style="overflow: hidden; height: 2.5vh">
                        <div class="" style="background-color: #90EE90;width: 25%"></div>
                    </div>
                </div>
            </div>
            <div id="skillsContent" class=" d-flex gap-4 justify-content-around flex-column">
                <div class="text-white d-flex gap-2 flex-column" style="width: 100%">
                    <div class="d-flex justify-content-between">
                        <label for="">Bootstrap 5</label>
                        <span class="position-relative" style="right: 30%">70%</span>
                    </div>
                    <div class="d-flex rounded-pill bg-secondary w-100" style="overflow: hidden; height: 2.5vh">
                        <div class="" style="background-color: #90EE90;width: 70%"></div>
                    </div>
                </div>
                <div class="text-white d-flex gap-2 flex-column" style="width: 100%">
                    <div class="d-flex justify-content-between">
                        <label for="">PHP</label>
                        <span class="position-relative" style="right: 20%">80%</span>
                    </div>
                    <div class="d-flex rounded-pill bg-secondary w-100" style="overflow: hidden; height: 2.5vh">
                        <div class="" style="background-color: #90EE90;width: 80%"></div>
                    </div>
                </div>
                <div class="text-white d-flex gap-2 flex-column" style="width: 100%">
                    <div class="d-flex justify-content-between">
                        <label for="">Laravel</label>
                        <span class="position-relative" style="right: 70%">30%</span>
                    </div>
                    <div class="d-flex rounded-pill bg-secondary w-100" style="overflow: hidden; height: 2.5vh">
                        <div class="" style="background-color: #90EE90;width: 30%"></div>
                    </div>
                </div>
                <div class="text-white d-flex gap-2 flex-column" style="width: 100%">
                    <div class="d-flex justify-content-between">
                        <label for="">React.js</label>
                        <span class="position-relative" id="vuePercent">25%</span>
                    </div>
                    <div class="d-flex rounded-pill bg-secondary w-100" style="overflow: hidden; height: 2.5vh">
                        <div class="" style="background-color: #90EE90;width: 25%"></div>
                    </div>
                </div>
            </div>
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
    <section class="projectSection" style="min-height: 100vh">
        <div class="position-absolute d-flex align-items-center justify-content-center rounded-circle p-1"
            style="z-index: -1; border: solid 1vh rgba(135, 207, 235, 0.301); right: 10vh; margin-top: 60vh; height: 25vh; width: 25vh">
            <div class="w-100 h-100 rounded-circle" style="border: solid 1vh rgba(135, 207, 235, 0.151)"></div>
        </div>
        <div class="position-absolute d-flex align-items-center justify-content-center rounded-circle p-1"
            style="z-index: -1; border: solid 1vh rgba(135, 207, 235, 0.26); right: 150vh; margin-top: 25vh; height: 25vh; width: 25vh">
            <div class="w-100 h-100 rounded-circle" style="border: solid 1vh rgba(135, 207, 235, 0.164)"></div>
        </div>
        <div class="position-absolute d-flex align-items-center justify-content-center rounded-circle p-1"
            style="z-index: -1; border: solid 1vh rgba(135, 207, 235, 0.26); right: 50vh; margin-top: 0vh; height: 25vh; width: 25vh">
            <div class="w-100 h-100 rounded-circle" style="border: solid 1vh rgba(135, 207, 235, 0.164)"></div>
        </div>
        <div class="d-flex flex-column" style="min-height: 80vh">
            <div class="d-flex justify-content-between">
                <h3 class="text-center">My Projects</h5>
                    <div class="d-flex align-items-center">
                        <i class="bi bi-search position-relative" style="right: -25px"></i>
                        <input type="search" class="form-control" placeholder="Search..."
                            style="padding-left: 30px; width: 30vh">
                    </div>
            </div>
            <hr>
            <div id="projectsContainer" class="w-100 d-flex flex-wrap gap-2 justify-content-around" style="flex: 1">
            
            </div>
        </div>
    </section>
    <section class="footerSection position-relative bg-primary" style="padding-left: 10%; padding-right: 10%; height: 35vh">
        <div class="position-absolute" style="font-size: 5vh; bottom: 10vh; right: 5vh">
            <i class="bi bi-chevron-up" onclick="goToSection('bodySection')" style="cursor: pointer; padding-left: 1vh; padding-right: 1vh; border: solid 0.5vh black; "></i>
        </div>
        <div class="position-absolute text-dark text-center" style="padding-left: 5%; bottom: 2.5vh; right: 5vh">
            Copyright 2024 All Right Reserve, Angelo Castro Portfolio
        </div>
        <div class="position-absolute text-dark d-flex gap-2" style="bottom: 2.5vh; left: 5vh">
            <i id="socialIcon" title="Facebook" class="bi bi-facebook" onclick="goToLink('https://www.facebook.com/angeloyam223')" class="bi bi-facebook" style="font-size: 3vh"></i>
            <i id="socialIcon" title="Github" class="bi bi-github" onclick="goToLink('https://github.com/bluezone10')" style="font-size: 3vh"></i>
            <i id="socialIcon" title="LinkedIn" class="bi bi-linkedin" onclick="goToLink('https://www.linkedin.com/in/angelo-castro-315610332')" style="font-size: 3vh"></i>
         </div>
         <div class="w-100 d-flex align-items-center justify-content-center" style="height: 35vh"> 
            <button class="btn btn-dark btn-lg" onclick="$('.contactSection').show()">CONTACT ME</button>
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

    function goToLink(url) {
        window.open(url, '_blank');
    }

    $(document).ready(function() {
        fetchProjects();

        function fetchProjects() {
            $.ajax({
                url: 'PHP/fetchData.php',
                type: 'GET',
                dataType: 'json',
                success: function(response) {
                    renderProjects(response.projects);
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        }

        function renderProjects(projects) {
            let projectsContainer = $('#projectsContainer');
            projectsContainer.empty();

            projects.forEach(project => {
                // Determine if the project is already liked
                let heartIconClass = project.liked ? 'bi-heart-fill text-danger' : 'bi-heart text-dark'; 

                projectsContainer.append(`
                    <div class="project-card border d-flex flex-column rounded shadow" style="width: 35vh; min-height: 30vh; height: fit-content">
                        <img src="IMAGE/PROJECT/${project.image_url}" class="w-100 img-fluid rounded" alt="${project.name}">
                        <div class="p-2 ps-4 pe-4">
                            <h5 class="text-center">${project.name}</h5>
                            <hr>
                            <p style="text-align: justify; font-size: 1.75vh;">${project.description}</p>
                            <button class="btn btn-outline-dark btn-sm w-100 see-more" data-id="${project.id}" onclick="window.location.href = 'project.html?name=${project.name}'">VIEW MORE</button>
                            <hr>
                            <div class="d-flex justify-content-end gap-2">
                                <div>
                                    <i class="bi ${heartIconClass} like-btn" data-id="${project.id}" style="cursor: pointer"></i>
                                    <span class="heart-count">${project.hearts}</span>
                                </div>
                                <div>
                                    <i class="bi bi-eye text-dark" style="cursor: pointer"></i>
                                    <span class="view-count">${project.views}</span>
                                </div>
                            </div>
                        </div>
                    </div>
                `);
            });
            attachEventHandlers();
        }

        function attachEventHandlers() {
            $('.like-btn').on('click', function() {
                let projectId = $(this).data('id');
                updateHearts(projectId);
            });

            $('.see-more').on('click', function() {
                let projectId = $(this).data('id');
                updateViews(projectId);
            });
        }

        function updateHearts(projectId) {
            $.ajax({
                url: 'PHP/fetchProjects.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    id: projectId,
                    type: 'heart'
                },
                success: function(response) {
                    if (response.success) {
                        let heartCountElement = $(`.like-btn[data-id="${projectId}"]`).siblings('.heart-count');
                        let heartIcon = $(`.like-btn[data-id="${projectId}"]`);
                        
                        // If heart is not filled, "like" the project
                        if (heartIcon.hasClass('bi-heart text-dark')) {
                            heartCountElement.text(parseInt(heartCountElement.text()) + 1);
                            heartIcon.removeClass('bi-heart text-dark').addClass('bi-heart-fill text-danger');
                        } else {
                            // If heart is filled, "unlike" the project
                            heartCountElement.text(parseInt(heartCountElement.text()) - 1);
                            heartIcon.removeClass('bi-heart-fill text-danger').addClass('bi-heart text-dark');
                        }
                    } 
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        }

        function updateViews(projectId) {
            $.ajax({
                url: 'PHP/fetchProjects.php',
                type: 'POST',
                dataType: 'json',
                data: {
                    id: projectId,
                    type: 'view'
                },
                success: function(response) {
                    if (response.success) {
                         // Find the .view-count span directly using the projectId
                        let viewCountElement = $(`.see-more[data-id="${projectId}"]`).closest('.project-card').find('.view-count');
                        // Get the current value, increment it, and update the text
                        let currentViews = parseInt(viewCountElement.text()) || 0;
                        viewCountElement.text(currentViews + 1);
                    } else {
                        console.error('Error:', response.message);
                    }
                },
                error: function(xhr, status, error) {
                    console.error('AJAX Error:', error);
                }
            });
        }
    });
</script>

</html>