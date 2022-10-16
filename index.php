<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Best Free and Paid Online Courses | MyCourses.com</title>
    <link rel="stylesheet" href="css/style.css">
    <link rel="stylesheet" media="screen and (max-width: 1170px)" href="css/phone.css">
    <link href="https://fonts.googleapis.com/css?family=Baloo+Bhai|Bree+Serif&display=swap" rel="stylesheet">

</head>

<body>
    <nav id="navbar">
        <div id="logo">
            <img src="logo.png" alt="MyCourses.com">
        </div>
        <ul>
            <li class="item"><a href="#home">Home</a></li>
            <li class="item"><a href="#services-container"> Explore Courses</a></li>
            <!-- <li class="item"><a href="#client-section">About Us</a></li> -->
            <li class="item"><a href="#contact">Register Now</a></li>
            <li class="item"><a href="signup.php">SignUp</a></li>
            <li class="item"><a href="login.html">Login</a></li>
        </ul>
    </nav>

    <section id="home">
        <h1 class="h-primary">Welcome to MyCourses</h1>
        <p>Discover the best free & paid online courses</p> <br>
        <button class="btn">Get Started</button>
    </section>

    <section id="services-container">
        <h1 class="h-primary center">Explore Courses</h1>
        <div id="services">
            <div class="box">
                <img src="website.jpg" alt="web development">
                <h2 class="h-secondary center">Website Development</h2>
                <p class="center">Web development refers to building website and deploying on the web. Web development requires use of scripting languages both at the server end as well as at client end.  Before developing a web site once should keep several aspects in mind like: What to put on the web site? Who will host it? How to make it interactive? How to code it?<br> Click on the below button to know more and get started with website development free courses.</p>
                <a href="https://www.youtube.com/watch?v=6mbwJ2xhgzM&list=PLu0W_9lII9agiCUZYRsvtGTXdxkzPyItg">
                    <button class="btn1">Join...</button> </a>

            </div>
            <div class="box">
                <img src="app.jpg" alt="app development">
                <h2 class="h-secondary center">App Development</h2>
                <p class="center">Mobile app development refers to the process of writing software that works on a mobile device (smartphones, tables, wearable). But app development is not only about coding a native, HTML5 or hybrid app. It is about the strategic process of defining, designing, building and launching a successful mobile product. <br>
               
                    Online Courses in Mobile App Development Learn how to develop mobile applications with free online courses.</p>
                    <a href="https://www.youtube.com/watch?v=mXjZQX3UzOs">
                    <button class="btn1">Join...</button> </a>
            </div>
            <div class="box">
                <img src="languages.jpg" alt="languages">
                <h2 class="h-secondary center">Learn Languages</h2>
                <p class="center">Programming languages are documentation that is implemented on a machine (computer) for the statement of algorithms and data structures. 
                    A programming language is made up of a series of symbols that serves as a bridge that allow humans to translate our thoughts into instructions computers can understand. <br> Best Free Online Courses in programming language, learn how it work and explore it.</p>
                    <a href="https://www.youtube.com/watch?v=ntLJmHOJ0ME&list=PLu0W_9lII9agS67Uits0UnJyrYiXhDS6q">
                    <button class="btn1">Join...</button> </a>
            </div>
        </div>
    </section>

    <section id="contact">
        <h1 class="h-primary center">Register Today!</h1>
        <div id="contact-box">
            <form method="POST" action="">
                <div class="form-group">
                    <label for="name">Name: </label>
                    <input type="name" name="name" id="name" placeholder="Enter your name">
                </div>
                <div class="form-group">
                    <label for="email">Email: </label>
                    <input type="email" name="mail" id="email" placeholder="Enter your email">
                </div>
                <div class="form-group">
                    <label for="phone">Phone Number: </label>
                    <input type="phone" name="phone" id="phone" placeholder="Enter your phone">
                </div>
                <div class="form-group">
                    <label for="message">Message: </label>
                    <textarea name="message" id="message" cols="30" rows="10"></textarea>
                </div>
                <button class="btn" name="submit">Send</button>

            </form>
        </div>
    </section>

    <footer>
        <div class="center">
            Copyright &copy; www.MyCourses.com. All rights reserved!
        </div>
    </footer>
</body>

</html>

<?php 
include 'connection.php';
if(isset ($_POST['submit'])){
    $name= $_POST['name'];
    $mail= $_POST['mail'];
    $phone= $_POST['phone'];
    $message= $_POST['message'];

    $insertquery =" insert into course_registration(name, email, phone, message) values('$name', '$mail', '$phone', '$message')";

   $res= mysqli_query($con, $insertquery);
   if($res){
   ?> 
   <script>
    alert("Data Inserted");
   </script>


    <?php
   }

   }

?>