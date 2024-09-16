<!DOCTYPE html>
<html lang="id">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>Wahid Nur Rohman - Portfolio</title>
    <link rel="stylesheet" href="styles.css">
    <link rel="stylesheet" href="css\style.css">
    <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>

</head>
<body>
    <header>
        <nav id="navigation">
            <div class="container">
                <div class="logo">Wahid Nur Rohman.</div>
                <ul class="nav-links">
                    <li><a href="#home">Home</a></li>
                    <li><a href="#about">About Me</a></li>
                    <li><a href="#resume">Resume</a></li>
                    <li><a href="#Portfolio">Portfolio</a></li>
                    <li><a href="#blog">Blog</a></li>
                    <li><a href="#contact">Contact</a></li>
                </ul>
                <button class="burger" id="burger"><i class='bx bx-menu-alt-right bx-md' id="icon"></i></i></button>
            </div>
        </nav>
    </header>

    <section id="home" class="home" style="background-image: url('{{ asset('images/bg.jpg') }}');" alt="bg">
        <div class="content">
            <h1>Hello! I'm Wahid.</h1>
            <h3> [ A Creative Freelancer || Full Stack Developer ] </h3>
            <p>Hello! I’m Wahid Nur Rohman, a creative freelancer specializing in web design, data entry, and logo design. With extensive experience, I am dedicated to delivering high-quality digital solutions tailored to my clients' needs. I believe in the importance of clear communication and am always ready to help bring your vision to life. Let’s collaborate to create something amazing!</p>
            <a href="#projects" class="btn">Let's Talk</a>
            <a href="#projects" class="btn">View Projects</a>
            <a href="https://duniailmuwawasan.blogspot.com/" class="btn">My Blog</a>
        </div>
        <div class="media social">
            <a href="https://www.linkedin.com/in/wahid-nur-rohman-b36550234"><i class='bx bxl-linkedin bx-md'></i></a>
            <a href="#"><i class='bx bxl-instagram-alt bx-md' ></i></a>
            <a href="#"><i class='bx bxl-facebook bx-md' ></i></a>
            <a href="#"><i class='bx bxl-whatsapp bx-md' ></i></a>
            <a href="#"><i class='bx bxl-youtube bx-md' ></i></a>
        </div>
        <div class="picture" style="background-image: url('{{ asset('images/picture.jpg') }}');" alt="gambar Wahid"></div>
    </section>

    <section id="about">
        <div class="container-service">
            
        </div>

    </section>

    <section id="experience">
        <h2>Check My Skills And Work Experiences</h2>
        <div class="work-experience">
            <h3>Work Experiences</h3>
            <p>2012 - 2013: Web Designer at SocialCo</p>
            <p>2012 - 2015: UI/UX Designer at Mindtech Startup</p>
            <p>2015 - Present: Web Designer at Balint Media</p>
        </div>
        <div class="education">
            <h3>Education</h3>
            <p>2004 - 2008: Royal College Of Art - London</p>
            <p>2008 - 2012: Singapore University Of Technology & Design - Singapore</p>
        </div>
        <div class="skills">
            <h3>My Skills & Advantage</h3>
            <p>Figma: 95%</p>
            <p>Adobe Photoshop / Illustrator: 91%</p>
            <p>Elementor: 90%</p>
            <p>WordPress: 92%</p>
        </div>
    </section>
    <section id="projects">

    </section>
    <section id="blog" >
    </section>

    <footer>
        <h2>Take A Look At My</h2>
        <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit.</p>
    </footer>
    <script>
        window.onload = function() {
        window.scrollTo(0, 0);};
        window.addEventListener('scroll', function() {
            var elemen = document.getElementById('navigation');
            if (window.scrollY > 50) { 
                elemen.classList.add('scrolled');
            } else {
                elemen.classList.remove('scrolled');
            }
        });

    
    </script>
</body>
</html>
