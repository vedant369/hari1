<?php

$conn = mysqli_connect('localhost','root','','contact_form') or die('connection failed');

if(isset($_POST['send'])){

   $name = mysqli_real_escape_string($conn, $_POST['name']);
   $email = mysqli_real_escape_string($conn, $_POST['email']);
   $number = mysqli_real_escape_string($conn, $_POST['number']);
   $msg = mysqli_real_escape_string($conn, $_POST['message']);

   $select_message = mysqli_query($conn, "SELECT * FROM `contact_form` WHERE name = '$name' AND email = '$email' AND number = '$number' AND message = '$msg'") or die('query failed');
   
   if(mysqli_num_rows($select_message) > 0){
      $message[] = 'message sent already!';
   }else{
      mysqli_query($conn, "INSERT INTO `contact_form`(name, email, number, message) VALUES('$name', '$email', '$number', '$msg')") or die('query failed');
      $message[] = 'message sent successfully!';
   }

}

?>

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Complete Responsive Personal Portfolio Website Design</title>

    <!-- font awesome cdn link  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.1.0/css/all.min.css">

    <!-- aos css link  
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.css">

    <!-- custom css file link  -->
    <link rel="stylesheet" href="css/style.css">

</head>

<body>

    <?php

if(isset($message)){
   foreach($message as $message){
      echo '
      <div class="message" data-aos="zoom-out">
         <span>'.$message.'</span>
         <i class="fas fa-times" onclick="this.parentElement.remove();"></i>
      </div>
      ';
   }
}

?>

    <!-- header section starts  -->

    <header class="header">

        <div id="menu-btn" class="fas fa-bars"></div>

        <a href="#home" class="logo">Portfolio</a>

        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#services">certificates</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="follow">
            <a href="https://www.linkedin.com/in/vedant369/" class="fab fa-linkedin"></a>
            <a href="https://github.com/vedant369" class="fab fa-github"></a>
        </div>

    </header>

    <!-- header section ends -->

    <!-- home section starts  -->

    <section class="home" id="home">

        <div class="image" data-aos="fade-right">
            <img src="images/website.png" alt="">
        </div>

        <div class="content">
            <h3 data-aos="fade-up">Hi, i am vedant parekh</h3>
            <span data-aos="fade-up">Web Designer & Android Developer</span>
            <p data-aos="fade-up">I am a driven and adaptable Computer Science student with a deep-seated passion for
                technology. I am committed to continuous learning and staying updated with the latest developments in
                the field. My coursework and projects experience have equipped me with a strong foundation
                in computer science, programming, and problem-solving. I am eager to leverage my skills and enthusiasm
                to contribute to innovative projects and make a meaningful impact in the world of technology.</p>
            <a data-aos="fade-up" href="#about" class="btn">about me</a>
        </div>

    </section>

    <!-- home section ends -->

    <!-- about section starts  -->

    <section class="about" id="about">

        <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

        <div class="biography">

            <p data-aos="fade-up">I am a student of computer-science and completed my Bachelor of Computer Application
                from V.P. & R.P.T.P. Science College with 9.05 CGPA.</p>

            <div class="bio">
                <h3 data-aos="zoom-in"> <span>name : </span> Vedant Naranbhai Parekh </h3>
                <h3 data-aos="zoom-in"> <span>email : </span> vedantatmiya369@gmail.com </h3>
                <h3 data-aos="zoom-in"> <span>address : </span> Anand,Gujarat,India </h3>
                <h3 data-aos="zoom-in"> <span>phone : </span> +91 8511777720 </h3>
                <h3 data-aos="zoom-in"> <span>age : </span> 21 years </h3>

            </div>

            <b> <span><a href="images/Vedant CV.pdf" class="btn" data-aos="fade-up">download
                        CV</a></span></b>


        </div>
        <h1 class="heading"> <span>programming skills</span> </h1>

        <div class="skills" data-aos="fade-up">
            <div class="progress">
                <div class="bar" data-aos="fade-left">
                    <h3><span>HTML</span> <span></span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>CSS</span> <span></span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>JavaScript</span> <span></span></h3>
                </div>

                <div class="bar" data-aos="fade-right">
                    <h3><span>Java</span> <span></span></h3>
                </div>
                <div class="bar" data-aos="fade-left">
                    <h3><span>C</span> <span></span></h3>
                </div>
                <div class="bar" data-aos="fade-right">
                    <h3><span>C++</span> <span></span></h3>
                </div>
            </div>

        </div>

        <div class="edu-exp">

            <h1 class="heading" data-aos="fade-up"> <span>education</span> </h1>

            <div class="row">

                <div class="box-container">

                    <h3 class="title" data-aos="fade-right">education</h3>

                    <div class="box" data-aos="fade-right">
                        <h2><span>( August 2020 - April 2023 )</span></h2>
                        <h3>Bachelor Of Computer Application</h3>
                        <h2>CGPA : 9.05/10.00 &nbsp&nbsp&nbsp&nbsp&nbsp Grade : First Class With O</h2>

                        <p>V.P & R.P.T.P. Science College , Anand , Gujarat , India</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <h2><span>( June 2019 - March 2020 )</span></h2>
                        <h3>Class - XII - Commerce (GSEB)</h3>
                        <h2>Percentage : 83.72% &nbsp&nbsp&nbsp&nbsp&nbsp Grade : A2</h2>

                        <p>D.N. High School , Anand , Gujarat , India</p>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <h2><span>( June 2017 - March 2018 )</span></h2>
                        <h3>Class - X (GSEB)</h3>
                        <h2>Percentage : 64.17% &nbsp&nbsp&nbsp&nbsp&nbsp Grade : B2</h2>

                        <p>D.N. High School , Anand , Gujarat , India</p>
                    </div>

                </div>

            </div>

        </div>

    </section>

    <!-- about section ends -->

    <!-- certificates section starts  -->

    <section class="services" id="services">

        <h1 class="heading" data-aos="fade-up"> <span>Certificates</span> </h1>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <a href="https://www.udemy.com/certificate/UC-5c2e1360-5b84-49d1-b799-830a187c4f72/">
                    <h3>Web Design For Begineers</h3>
                </a>
                <p>Udemy Course - I can easily develop my web design skills by doing this amazing course.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <a href="https://www.udemy.com/certificate/UC-4dae6a08-bb64-4133-a8cb-fb3bff5da8f8/">
                    <h3>The C++ advanced course</h3>
                </a>
                <p>Udemy Course - This course is very helpful in my Bachelor's Degrees because of improving problem
                    solving skills.</p>
            </div>

            <div class="box" data-aos="zoom-in">

                <a href="https://www.udemy.com/certificate/UC-24921775-e397-4520-b50b-7ff3eef2e72a/">
                    <h3>Advanced PowerPoint Course</h3>
                </a>
                <p>Udemy Course - PowerPoint is a versatile tool that can help me to create and deliver
                    effective presentations.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <a href="https://www.udemy.com/certificate/UC-0bbc5ccb-7a2d-4a0b-8aa9-ab4ee6a413c6/">
                    <h3>Javascript & PHP Course</h3>
                </a>
                <p>Udemy Course - The two languages can be used independently and collaboratively,and they can do
                    wonders combined.
                </p>
            </div>

            <div class="box" data-aos="zoom-in">
                <a href="https://www.udemy.com/certificate/UC-ec6e0247-8215-47cc-96bc-ae9d5a12acde/">
                    <h3>Python Complete Course</h3>
                </a>
                <p>Udemy Course - Python is a popular language for web and software development because you can create
                    complex program & readable syntax.</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <a href="https://olympus.mygreatlearning.com/courses/12761/certificate">
                    <h3>Front End Development</h3>
                </a>
                <p>Great Learning - Using a front-end framework can make web development much easier and much more
                    efficient, which is very useful.</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <a href="https://courses.cognitiveclass.ai/certificates/a6ec14470ccb4fe695fb26cef4030078">
                    <h3>R For Programming</h3>
                </a>
                <p>IBM Course -R programming is a powerful tool used for machine learning, Not only is R a powerful tool
                    for data science, machine learning, and AI.</p>
            </div>

        </div>

    </section>

    <!-- services section ends -->

    <!-- project section starts  -->

    <!---  <section class="portfolio" id="portfolio">

        <h1 class="heading" data-aos="fade-up"> <span>Projects</span> </h1>

        <div class="box-container">

            <div class="#" data-aos="zoom-in">

                <h1>Online Course Registration System - Web Application</h1>
                <span>( 2020 - 2022 )</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/img-2.jpg" alt="">
                <h3>web development</h3>
                <span>( 2020 - 2022 )</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/img-3.jpg" alt="">
                <h3>web development</h3>
                <span>( 2020 - 2022 )</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/img-4.jpg" alt="">
                <h3>web development</h3>
                <span>( 2020 - 2022 )</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/img-5.jpg" alt="">
                <h3>web development</h3>
                <span>( 2020 - 2022 )</span>
            </div>

            <div class="box" data-aos="zoom-in">
                <img src="images/img-6.jpg" alt="">
                <h3>web development</h3>
                <span>( 2020 - 2022 )</span>
            </div>

        </div>

    </section>

    <!-- portfolio section ends -->

    <!-- contact section starts  -->

    <section class="contact" id="contact">

        <h1 class="heading" data-aos="fade-up"> <span>contact me</span> </h1>

        <form action="" method="post">
            <div class="flex">
                <input data-aos="fade-right" type="text" name="name" placeholder="enter your name" class="box" required>
                <input data-aos="fade-left" type="email" name="email" placeholder="enter your email" class="box"
                    required>
            </div>
            <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box"
                required>
            <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30"
                rows="10"></textarea>
            <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">
        </form>

        <div class="box-container">

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-phone"></i>
                <h3>phone</h3>
                <p>+91 8511777720</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-envelope"></i>
                <h3>email</h3>
                <p>vedantatmiya369@gmail.com</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fas fa-map-marker-alt"></i>
                <h3>address</h3>
                <p>Anand,Gujarat,India</p>
            </div>

        </div>

    </section>

    <!-- contact section ends -->

    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span>Mr. Vedant Parekh</span> </div>








    <!-- custom js file link  -->
    <script src="js/script.js"></script>

    <!-- aos js link  -->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/aos/2.3.4/aos.js"></script>

    <script>
    AOS.init({
        duration: 800,
        delay: 300
    });
    </script>

</body>

</html>