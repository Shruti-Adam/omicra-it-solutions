<?php
require_once("config.php");
if($_SERVER['REQUEST_METHOD'] == 'POST')
{
    $a=$_POST['name'];
    $b=$_POST['email'];
    $c=$_POST['contact'];
	$d=$_POST['subject'];
	$e=$_POST['message'];
    
   

    $qry = mysqli_query($con, "INSERT INTO contact_forms(c_name, c_email, c_contact, c_subject, c_message) 
VALUES ('$a', '$b', '$c', '$d', '$e')");

    if($qry == true)
    {
        header("location:home.php");
    }
    else{
        echo "not".mysql_error();
    }
}
    else{
	
        echo "";
    }


?>

<!DOCTYPE html>
<html lang="en">

 <head>
     <meta charset="UTF-8">
     <meta http-equiv="X-UA-Compatible" content="IE=edge">
     <meta name="viewport" content="width=device-width, initial-scale=1.0">
     <title>Responsive Web</title>
 
     <link rel="stylesheet" href="main.css">

 
     <!-- box icons -->
     <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>
 </head>
 
 <body>
 
     <!-- header design -->
     <header class="header">
         <img src="images/omi1.jpg" alt="OMICRA Logo" width="200">
 
         <div class="bx bx-menu" id="menu-icon"><span class="animate" style="--i:2;"></span></div>
 
         <nav class="navbar">
             <a href="#home" class="active">Home</a>
             <a href="#about">About</a>
             <a href="#education">Services</a>
             <a href="#portfolio">Portfolio</a>
             <a href="#skills">Training</a>
             <a href="#contact">Contact</a>
 
             <span class="active-nav"></span>
             <span class="animate" style="--i:2;"></span>
         </nav>
     </header>
 
     <!-- home section design -->
     <section class="home show-animate" id="home">
         <div class="home-content">
             <h1>Welcome <span></span><span class="animate" style="--i:2;"></span></h1>
             <div class="text-animate">
                 <h3>Omicra<br>IT Solutions</h3>
                 <span class="animate" style="--i:3;"></span>
             </div>
             <p> These is official website of Omicra IT work Worldwide, 
                A new-age IT startup providing custom application development, Web development, and IT Consulting &
                Training services
                 <span class="animate" style="--i:4;"></span>
             </p>
 
             <div class="btn-box">
                 <a href="#education" class="btn">Services</a>
                 <a href="#skills" class="btn">Training</a>
                 <span class="animate" style="--i:5;"></span>
             </div>
         </div>
 
         <div class="home-sci">
             <a href="https://chat.whatsapp.com/https://chat.whatsapp.com/IDQja1nAZwL3wr9svRhEeM" target="_blank"><i class='bx bxl-whatsapp'></i></a>
             <a href="https://www.instagram.com/omicra.worldwide" target="_blank"><i class='bx bxl-instagram'></i></a>
             <a href="https://www.linkedin.com/in/omicra-omicra-396b49360/" target="_blank"><i class='bx bxl-linkedin'></i></a>
             <a href="mailto:omicraitsolutions@gmail.com"><i class='bx bxl-gmail'></i></a>
             <span class="animate" style="--i:6;"></span>
         </div>
 
         <div class="home-imgHover"></div>
         <span class="animate home-img" style="--i:7;"></span>
     </section>
 
     <!-- about section design -->
     <section class="about" id="about">
         <h2 class="heading">About <span>Me</span><span class="animate scroll" style="--i:1;"></span></h2>
 
         <div class="about-img">
             <img src="" alt="">
             <span class="circle-spin"></span>
             <span class="animate scroll" style="--i:2;"></span>
         </div>
 
         <div class="about-content">
             <h3>Hi there! Glad to see you here.<span class="animate scroll" style="--i:3;"></span></h3>
             <p>At Omicra IT Solutions, we are passionate about crafting innovative digital solutions that empower businesses to thrive in the modern tech-driven world. As a fast-growing IT startup, we specialize in web development, app development, software solutions, and IT consulting tailored to meet the unique needs of startups, enterprises, and everything in between.
                 <span class="animate scroll" style="--i:4;"></span>
             </p>
 
             <div class="btn-box btns">
                 <a href="#contact" class="btn">Contact Me</a>
                 <span class="animate scroll" style="--i:5;"></span>
             </div>
         </div>
     </section>
 
<!-- services section design -->
<section class="education" id="education">
    <h2 class="heading">Our <span>Services</span><span class="animate scroll" style="--i:1;"></span></h2>

    <div class="education-row">
        <div class="education-column">
            <div class="education-box">
                <div class="education-content">
                    <div class="content">
                        <h3>Custom App Development</h3>
                        <img src="images/app.png" alt="Cpp Logo" width="50" height="50">
                        <p>We specialize in building custom web and mobile applications tailored to your business needs. Whether you're a startup with a fresh idea or an enterprise looking to digitize operations, our expert developers deliver secure, scalable, and user-friendly apps.</p>
                    </div>
                </div>

                <div class="education-content">
                    <div class="content">
                        <h3>Web Development</h3>
                        <img src="images/web.png" alt="Cpp Logo" width="50" height="50">
                        <p>Web Development is the process of creating websites or web applications that run on the internet.
                            It includes everything from:
                            Designing how a website looks (Front-End) 
                            To coding how it works behind the scenes (Back-End)</p>
                    </div>
                </div>
                <span class="animate scroll" style="--i:3;"></span>
            </div>
        </div>

        <div class="education-column">
            <div class="education-box">
                <div class="education-content">
                    <div class="content">
                        <h3>Coding Coaching</h3>
                        <img src="images/codingcoaching.png" alt="Cpp Logo" width="50" height="50">
                        <p>Web Development is the process of creating websites or web applications that run on the internet.
                            It includes everything from:
                            Designing how a website looks (Front-End) 
                            To coding how it works behind the scenes (Back-End)</p>
                    </div>
                </div>

                <div class="education-content">
                    <div class="content">
                        <h3>Web Application</h3>
                        <img src="images/webapp.png" alt="Cpp Logo" width="50" height="50">
                        <p>Web Development is the process of creating websites or web applications that run on the internet.
                            It includes everything from:
                            Designing how a website looks (Front-End) 
                            To coding how it works behind the scenes (Back-End)</p>
                    </div>
                </div>
                <span class="animate scroll" style="--i:6;"></span>
            </div>
        </div>
    </div>
</section>

 <!-- portfolio section design -->
 <section id="portfolio">
    <h2 class="heading">Our <span>Projects</span></h2>
  
    <div class="filter-buttons">
      <button class="filter-btn active" data-filter="all">All</button>
      <button class="filter-btn" data-filter="web">Web</button>
      <button class="filter-btn" data-filter="app">App</button>
      <button class="filter-btn" data-filter="design">Design</button>
    </div>
  
    <div class="project-container">
      <div class="project-card" data-category="web">
        <img src="images/website.webp" alt="Web-Application" width="100" height="100">
        <h3>Ecommerce Website</h3>
      </div>
      <div class="project-card" data-category="app">
        <img src="images/app1.webp" alt="Web-Application" width="100" height="100">
        <h3>Beauty Salon App</h3>
      </div>
      <div class="project-card" data-category="web">
        <img src="images/travel.jpg" alt="Web-Application" width="100" height="100">
        <h3>Travelling Website</h3>
      </div>

      <div class="project-card" data-category="design">
        <img src="images/gif.gif" alt="design" width="100" height="100">
        <h3>Testonomials Slides</h3>
      </div>

      <div class="project-card" data-category="app">
        <img src="images/app2.png" alt="Web-Application" width="100" height="100">
        <h3>Weather App</h3>
      </div>

      <div class="project-card" data-category="design">
        <img src="images/travel1.gif" alt="design" width="100" height="100">
        <h3>Travel Web Designs</h3>
      </div>
    </div>
  </section>

     <!-- skills section design -->
     <section class="skills" id="skills">
         <h2 class="heading">Provided <span>Training</span><span class="animate scroll" style="--i:1;"></span></h2>

         <div class="skills-row">
            <div class="skills-column">
                <h3 class="title">C language<span class="animate scroll" style="--i:2;"></span></h3>

                <div class="skills-box">
                    <div class="skills-content">
                        <div class="progress">
                            <img src="images/c.png" alt="C Logo" width="50" height="50">
                            <p class="description">Our C language training program is tailored to provide students with a strong foundational understanding of programming and logical thinking. The course starts with an introduction to the basics of C programming, covering syntax, keywords, variables, data types, and operators. Students then move on to control flow statements such as if-else, switch, while, for, and do-while loops, helping them master decision-making.</p>
                     </div>

                 </div>
                    <span class="animate scroll" style="--i:3;"></span>
                </div>
            </div>

            <div class="skills-column">
               <h3 class="title">Cpp language<span class="animate scroll" style="--i:2;"></span></h3>

               <div class="skills-box">
                   <div class="skills-content">
                       <div class="progress">
                         <img src="images/cpp2.png" alt="Cpp Logo" width="50" height="50">
                           <p class="description">Designed for both beginners and experienced developers, this course will guide you through the core concepts of C++ including object-oriented programming, data structures, memory management, and algorithms. Our hands-on approach ensures you not only learn the theory but also apply it in real-world projects. Whether you’re looking to enhance your career in software development.</p>
                        </div>
                    </div>

                    <span class="animate scroll" style="--i:6;"></span>
                </div>
            </div>
        </div>

        <div class="skills-row">
            <div class="skills-column">
                <h3 class="title">Java language<span class="animate scroll" style="--i:2;"></span></h3>

                <div class="skills-box">
                    <div class="skills-content">
                        <div class="progress">
                            <img src="images/java.png" alt="Cpp Logo" width="50" height="50">
                            <p class="description"> The course begins with Core Java, where students learn the foundations of programming including variables, data types, operators, control statements, and arrays. As they progress, they gain a solid understanding of object-oriented programming (OOP) principles such as classes, objects, inheritance, polymorphism, abstraction, and encapsulation. We also cover exception handling, file input/output operations.</p>
                     </div>

                 </div>
                    <span class="animate scroll" style="--i:3;"></span>
                </div>
            </div>

            <div class="skills-column">
               <h3 class="title">Android<span class="animate scroll" style="--i:2;"></span></h3>

               <div class="skills-box">
                   <div class="skills-content">
                       <div class="progress">
                        <img src="images/android.png" alt="Cpp Logo" width="50" height="50">
                           <p class="description">This course will cover everything you need to know, from understanding the fundamentals of Android Studio and the Java/Kotlin programming languages to building fully-functional mobile applications. You’ll learn how to design intuitive user interfaces, integrate APIs, manage data storage, and ensure your app’s performance across different devices. With a strong emphasis on hands-on learning, you will work on real-world projects.</p>
                        </div>
                    </div>

                    <span class="animate scroll" style="--i:6;"></span>
                </div>
            </div>
        </div>

        <div class="skills-row">
            <div class="skills-column">
                <h3 class="title">Flutter<span class="animate scroll" style="--i:2;"></span></h3>

                <div class="skills-box">
                    <div class="skills-content">
                        <div class="progress">
                            <img src="images/flutter.png" alt="Cpp Logo" width="50" height="50">
                            <p class="description"> This course will introduce you to the power of Flutter, Google’s open-source framework for building natively compiled applications for mobile, web, and desktop from a single codebase. You’ll learn to create visually stunning, responsive UIs, integrate various APIs, and manage app state efficiently. With a focus on hands-on development, you'll work on building real-world projects, gaining practical  in cross-platform applications.</p>
                     </div>

                 </div>
                    <span class="animate scroll" style="--i:3;"></span>
                </div>
            </div>

            <div class="skills-column">
               <h3 class="title">SQL<span class="animate scroll" style="--i:2;"></span></h3>

               <div class="skills-box">
                   <div class="skills-content">
                       <div class="progress">
                        <img src="images/sql.png" alt="Cpp Logo" width="50" height="50">
                           <p class="description">SQL (Structured Query Language) is the cornerstone of data management, and this course will teach you how to efficiently interact with relational databases. You’ll learn how to write powerful queries, manage data with CRUD operations, join tables, and perform complex data manipulations. Through hands-on exercises, you will gain a deep understanding of database structures, indexing, and optimization techniques. </p>
                        </div>
                    </div>

                    <span class="animate scroll" style="--i:6;"></span>
                </div>
            </div>
        </div>
     </section>
 
     <!-- contact section design -->
     <section class="contact" id="contact">
         <h2 class="heading">Contact <span>Me</span><span class="animate scroll" style="--i:1;"></span></h2>
 
         <form action="" method="POST">
             <div class="input-box">
                 <div class="input-field">
                     <input type="text" placeholder="Full Name" name="name" pattern="[a-zA-Z\s]+" title="Please enter a valid name" required>
                     <span class="focus"></span>
                 </div>
                 <div class="input-field">
                     <input type="text" placeholder="Email" name="email" pattern="[a-zA-Z0-9._%+-]+@[a-zA-Z0-9.-]+\.[a-zA-Z]{2,}" required>
                     <span class="focus"></span>
                 </div>
 
                 <span class="animate scroll" style="--i:3;"></span>
             </div>
             <div class="input-box">
                 <div class="input-field">
                    <input type="tel" placeholder="Contact" name="contact" pattern="[0-9]{10}" title="Please enter a 10-digit phone number" required>
                     <span class="focus"></span>
                 </div>
                 <div class="input-field">
                     <input type="text" placeholder="Topic about discussion" name="subject" maxlength="30" required>
                     <span class="focus"></span>
                 </div>
 
                 <span class="animate scroll" style="--i:5;"></span>
             </div>
 
             <div class="textarea-field">
                 <textarea name="message" id="" cols="30" rows="10" placeholder="Your Message" maxlength="500" required></textarea>
                 <span class="focus"></span>
 
                 <span class="animate scroll" style="--i:7;"></span>
             </div>
 
             <div class="btn-box btns">
                 <button type="submit" class="btn">Submit</button>
 
                 <span class="animate scroll" style="--i:9;"></span>
             </div>
         </form>
     </section>
 
     <!-- footer design -->
     <footer class="footer">
         <div class="footer-text">
             <p>&copy; Copyright, All
                 Rights Reserved &nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp&nbsp <i class='bx bx-phone'></i> +91 72495 70505</p>
 
             <span class="animate scroll" style="--i:1;"></span>
         </div>
 
         <div class="footer-iconTop">
             <a href="#"><i class='bx bx-up-arrow-alt'></i></a>
 
             <span class="animate scroll" style="--i:3;"></span>
         </div>
     </footer>
 
 
     <script src="script.js"></script>

 </body>
 <script>
 
    const filterButtons = document.querySelectorAll('.filter-btn');
    const projectCards = document.querySelectorAll('.project-card');
  
    filterButtons.forEach(button => {
      button.addEventListener('click', () => {
        const category = button.getAttribute('data-filter');
  
        filterButtons.forEach(btn => btn.classList.remove('active'));
        button.classList.add('active');
  
        projectCards.forEach(card => {
          if (category === 'all' || card.dataset.category === category) {
            card.style.display = 'block';
          } else {
            card.style.display = 'none';
          }
        });
      });
    });
  </script>
  
 </html>


 