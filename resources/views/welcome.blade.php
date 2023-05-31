<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>laravel_demo | Home</title>
    <!-- Bootstarp Links -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Style sheet -->
    <style>
        li:hover{border-bottom:2px solid black;}
        header{
            background-image: url('image/man.jpg');
            background-repeat:none;
            background-size:cover;
            height: 600px;
            opacity: 0.6;
        }
        .bg_bottom_svg,.about_bottom_svg{
            position: relative;
        }
        .bg_bottom_svg{top:-80px;}
        .about_bottom_svg{
            bottom:-75px;
            transform: rotate(180deg);
        }
        .header_txt {
            padding-top:20%;
        }
        .menu_btn{display:none;}
        .about_me img{
            border-right:5px dashed lightgray;
            border-bottom:5px dashed lightgray;
        }
        .services{padding-top:100px;}
        .our_work img:hover{
            opacity: 0.2;
        }
    </style>
</head>
<body>
    <!-- Header Section -->
    <header id="header">
        <nav class="navbar p-3 bg-white border-dark fixed-top border-bottom">
            <div class="text-dark">
                <h2>Kewll</h2>
            </div>
            <ul class="nav">
                <li class="nav-item"><a href="#header" class="nav-link text-dark fs-5">Home</a></li>
                <li class="nav-item"><a href="#about" class="nav-link text-dark fs-5">About</a></li>
                <li class="nav-item"><a href="#services" class="nav-link text-dark fs-5">Service</a></li>
                <li class="nav-item"><a href="#work" class="nav-link text-dark fs-5">Blog</a></li>
                <li class="nav-item"><a href="{{url('login') }}" class="nav-link text-dark fs-5">Dashboard</a></li>
            </ul>
        </nav>
        <div class="text-center text-white">
            <h2 class="fs-1">I Am Alex Smith</h2>
        </div>
    </header>
    <svg class="bg_bottom_svg" x="0px" y="0px" viewBox="0 186.5 1920 113.5" fill="white">
        <polygon points="-30,300 355.167,210.5 1432.5,290 1920,198.5 1920,300"></polygon>
    </svg>
    
    <!-- About me section -->
    <section class="container" id="about">
        <div class="about_me row m-3">
            <div class="col-sm-6 ">
                <img src="image/man.jpg" alt="" width="80%" class="shadow-lg ">
            </div>
            <div class="col-sm-6 text-justify">
                <h3>I'm Alex Smith</h3>
                <span>UI / UX DESIGNER & FRONT-END DEVELOPER</span>
                <p class="text-muted mt-4">Lorem Ipsum <span class="fw-bold"> From USA </span>is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the standard dummy text ever since.</p>
                <p class="text-muted">Lorem Ipsum is simply dummy text of the printing and type setting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book.</p>
                <div>
                    <p>WEB DESIGN</p>
                    <div style="background-color:lightgray;width:100%; height:5px;"><div style="background-color:black;width:90%; height:5px;"></div></div>

                    <p>BRANDING</p>
                    <div style="background-color:lightgray;width:100%; height:5px;"><div style="background-color:black;width:80%; height:5px;"></div></div>

                    <p>DEVELOPMENT</p>
                    <div style="background-color:lightgray;width:100%; height:5px;"><div style="background-color:black;width:85%; height:5px;"></div></div>

                    <p>MARKETING</p>
                    <div style="background-color:lightgray;width:100%; height:5px;"><div style="background-color:black;width:70%; height:5px;"></div></div>
                </div>
            </div>
        </div>
    </section>
    <svg class="about_bottom_svg"  viewBox="0 186.5 1920 113.5" fill="white">
        <polygon points="-30,300 355.167,210.5 1432.5,290 1920,198.5 1920,300"></polygon>
    </svg>

    <!-- Our Services section -->
    <section id="services" class="container-fluid services text-center bg-light pb-5">
        <h3>Our Services</h3>
        <h6>AWESOME FEATRUSE</h6>
        <div class="row m-5">
            <div class="col-sm-4 p-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                </svg>
                <h4 class="m-2">Developments</h4>
                <p class="m-2">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
            </div>
            <div class="col-sm-4 p-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                </svg>
                <h4 class="m-2">Developments</h4>
                <p class="m-2">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
            </div>
            <div class="col-sm-4 p-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                </svg>
                <h4 class="m-2">Developments</h4>
                <p class="m-2">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
            </div>
        </div>
        <div class="row m-5">
            <div class="col-sm-4 p-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                </svg>
                <h4 class="m-2">Developments</h4>
                <p class="m-2">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
            </div>
            <div class="col-sm-4 p-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                </svg>
                <h4 class="m-2">Developments</h4>
                <p class="m-2">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
            </div>
            <div class="col-sm-4 p-4">
                <svg xmlns="http://www.w3.org/2000/svg" width="30" height="30" fill="currentColor" class="bi bi-laptop" viewBox="0 0 16 16">
                    <path d="M13.5 3a.5.5 0 0 1 .5.5V11H2V3.5a.5.5 0 0 1 .5-.5h11zm-11-1A1.5 1.5 0 0 0 1 3.5V12h14V3.5A1.5 1.5 0 0 0 13.5 2h-11zM0 12.5h16a1.5 1.5 0 0 1-1.5 1.5h-13A1.5 1.5 0 0 1 0 12.5z"/>
                </svg>
                <h4 class="m-2">Developments</h4>
                <p class="m-2">Lorem Ipsum is simply dummy text of the printing and type setting industry.</p>
            </div>
        </div>
    </section>
    
    <!-- Our work Section -->
    <section id="work" class="container our_work text-center p-3">
        <h3>Our Work</h3>
        <h6>LATEST PROJECTS</h6>
        <button class="btn border-dark btn-dark text-white ps-4 pe-4 m-2">All</button>
        <button class="btn btn-outline-dark ps-4 pe-4 m-2">BRAND</button>
        <button class="btn btn-outline-dark ps-4 pe-4 m-2">DESIGN</button>
        <button class="btn btn-outline-dark ps-4 pe-4 m-2">GRAPHIC</button>
        <div class="row">
            <div class="col-sm-4 m-0 p-0">
                <img src="image/books.jpg" class="p-3" width="80%">
                <img src="image/tablet.jpg" class="p-3" width="80%">
            </div>
            <div class="col-sm-4 ">
                <img src="image/watch.jpg" class="p-3" width="85%">
                <img src="image/card.jpg" class="p-3" width="85%">
                <img src="image/tea_cup.jpg" class="p-3" width="85%">
            </div>
            <div class="col-sm-4 m-0 p-0">
                <img src="image/books.jpg" class="p-3" width="80%">
                <img src="image/tablet.jpg" class="p-3" width="80%">
            </div>
        </div>
    </section>

</body>
</html>