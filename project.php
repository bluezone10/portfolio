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
            </div>
        </div>
    </section>
    <section class="bodySection w-100 d-flex flex-column align-items-center justify-content-center" style="height: 100vh">
        <h2>This is under construction <i class="bi bi-tools"></i></h2>
        <h5>Progress: 20%</h5>
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
</script>
</html>