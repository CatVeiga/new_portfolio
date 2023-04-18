<?php 

$conn =mysqli_connect('localhost', 'root', '', 'contact_db') or die('connection failed');

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
    <title>Portfolio</title>
    <!-- font awesome cdn link -->
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
    <!-- google font cdn link -->
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Anton&family=Roboto&display=swap" rel="stylesheet">
    <link href="https://unpkg.com/aos@2.3.1/dist/aos.css" rel="stylesheet">
    <link rel="stylesheet" href="style.css">

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
<!-- header section -->
    <header class="header">

        <div id="menu-btn" class="fa-solid fa-bars">

        </div>
        <a href="#home" class="logo"><img src="./assets/c__1_-removebg-preview.png" alt=""></a>

        <nav class="navbar">
            <a href="#home" class="active">home</a>
            <a href="#about">about</a>
            <a href="#skills">skills</a>
            <a href="#edu-exp">education and experience</a>
            <a href="#services">services</a>
            <a href="#portfolio">portfolio</a>
            <a href="#contact">contact</a>
        </nav>

        <div class="follow">
            <a href="#" class="fa-brands fa-github"></a>
            <a href="#" class="fa-brands fa-twitter"></a>
            <a href="#" class="fa-brands fa-instagram"></a>
            <a href="#" class="fa-brands fa-linkedin"></a>

        </div>

    </header>

    <!-- home section -->
    <section class="home" id="home">

        <div class="image" data-aos="fade-right" >
            <img src="./assets/Untitled design (1).png" alt="">
        </div>

        <div class="content">
            <h3 data-aos="fade-up">hi, I'm Catarina Veiga</h3>
            <span data-aos="fade-up">web developer</span>
            <p data-aos="fade-up">Based in Lisbon, Portugal. with 5 years of exeperience in web apps. I'm eager to join a tech company that builds out-of-the-box solutions and products. I'm skilled in developing responsiveness apps and Ui-UX design.</p>
            <a data-aos="fade-up" href="#about" class="btn">about me</a>
        </div>

    </section>

    <!--  about section -->
    <section class="about" id="about">

        <h1 class="heading" data-aos="fade-up"> <span>biography</span> </h1>

        <div class="biography">

            <p>Like Steve Jobs once said, <span class="italic">"Everyone should know how to program a
                computer, because it teaches you how to think!"</span> And I truly believe on that. I'm excited to make the leap and continue developing my skills with the right company. </p>
            <p>
                Drop me a comment and/ or send me an invite to go out on a coffee, we can talk more about it. You can download my resume already. Feel free to join me.
            </p>
            <img src="https://cdn.kibrispdr.org/data/1759/coffee-gif-transparent-7.gif" alt="">
            <a href="./assets/catarina_veiga_2022 (1).pdf" download="download_cv_catarina" class="btn" data-aos="fade-up"> download cv</a>

        </div>
    </section>

    <!-- skills section -->

    <section class="about" id="skills">
        <div class="skills" data-aos="fade-up">

            <h1 class="heading"> <span>skills</span> </h1>

            <div class="progress">
                <div class="bar" data-aos="fade-left"> <h3> <span>HTML</span> 95%</h3></div>
                <div class="bar" data-aos="fade-right"><h3> <span>CSS</span> 80%</h3></div>
                <div class="bar" data-aos="fade-left"><h3> <span>JavaScript</span> 55%</h3></div>
                <div class="bar" data-aos="fade-right"><h3> <span>React</span> 45%</h3></div>
                <div class="bar" data-aos="fade-left"><h3> <span>PHP</span> 20%</h3></div>

            </div>

        </div>
    </section>
    <!-- edu-exp section -->    
    <section class="about" id="edu-exp">

        <div class="edu-exp">

            <h1 class="heading" data-aos="fade-up"> <span>education & experience</span></h1>

            <div class="row">
                <div class="box-container">
                    <h3 class="title" data-aos="fade-right"> education</h3>

                    <div class="box" data-aos="fade-right">
                        <span>( 2017 - 2018 )</span>
                        <h3>Front-End Web Developer</h3>
                        <a href="" class="fa-brands fa-html5"></a>
                        <a href="" class="fa-brands fa-css3-alt"></a>
                        <a href="" class="fa-brands fa-js"></a>
                        <a href="" class="fa-brands fa-react"></a>
                    </div>

                    <div class="box" data-aos="fade-right">
                        <span>( 2018 - 2019 )</span>
                        <h3>Responsive Web Design</h3>
                        <a href="" class="fa-solid fa-crop-simple"></a>
                        <a href="" class="fa-solid fa-laptop-code"></a>
                    </div>
                </div>

                <div class="box-container">
                    <h3 class="title" data-aos="fade-left">experience</h3>
                    <div class="box" data-aos="fade-left">
                        <span> ( 2018 )</span>
                        <h3>project manager</h3>
                        <a href="" class="fa-solid fa-code"></a>
                        <a href="" class="fa-solid fa-handshake"></a>
                        
                    </div>
                    <div class="box" data-aos="fade-left">
                        <span> 2019 -2022 </span>
                        <h3> Freelancer Front-End Web Developer </h3>
                        <a href="" class="fa-solid fa-laptop-code"></a>
                        <a href="" class="fa-solid fa-window-maximize"></a>
                        
                    </div>
                </div>
            </div>
        </div>

    </section>

    <!-- services section -->
    <section class="services" id="services">
        <h1 class="heading" data-aos="fade-up"> <span>services</span> </h1>

        <div class="box-container">
            <div class="box" data-aos="zoom-in">                
                <h3>web development</h3>
                <a href="" class="fas fa-code"></a>
                <p>I can create beautiful webpages, landing pages and web apps.</p>
            </div>
            <div class="box" data-aos="zoom-in">
                <h3>Graphic Design /UX-UI Design</h3>
                <a href="" class="fas fa-paint-brush"></a>
                <p>One of my expertise is create web apps using flexbox, ux-ui design.</p>
            </div>

            <div class="box" data-aos="zoom-in">                
                <h3>Bootstrap</h3>
                <a href="" class="fab fa-bootstrap"></a>
                <p>I can design your ideas with this super fun framework.</p>
            </div>
        </div>

    </section>

    <!-- portfolio section -->
    <section class="portfolio" id="portfolio">
        <h1 class="heading" data-aos="fase-up"> <span>portfolio</span> </h1>

        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <img src="" alt="">
                <h3>project 1</h3>
                <a href="" class="btn"> view </a>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="" alt="">
                <h3>project 1</h3>
                <a href="" class="btn"> view </a>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="" alt="">
                <h3>project 1</h3>
                <a href="" class="btn"> view </a>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="" alt="">
                <h3>project 1</h3>
                <a href="" class="btn"> view </a>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="" alt="">
                <h3>project 1</h3>
                <a href="" class="btn"> view </a>
            </div>
            <div class="box" data-aos="zoom-in">
                <img src="" alt="">
                <h3>project 1</h3>
                <a href="" class="btn"> view </a>
            </div>
        </div>

    </section>

    <!-- contact section -->
    
    <section class="contact" id="contact">
        <h1 class="heading" data-aos="fade-up"> <span>contact me </span></h1>

        <form action="" method="post">

            <div class="flex">
                <input data-aos="fade-up" type="text" name="name" placeholder="enter your name" class="box" required>
                <input data-aos="fade-up" type="email" name="email" placeholder="enter your email" class="box" required>
            </div>
            <input data-aos="fade-up" type="number" min="0" name="number" placeholder="enter your number" class="box" required>
            <textarea data-aos="fade-up" name="message" class="box" required placeholder="enter your message" cols="30" rows="10"></textarea>
            <input type="submit" data-aos="zoom-in" value="send message" name="send" class="btn">

        </form>

        <div class="box-container">
            <div class="box" data-aos="zoom-in">
                <i class="fa-solid fa-envelope"></i>
                <h3>email</h3>
                <p>cveigaplay@gmail.com</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i class="fa-solid fa-location-dot"></i>
                <h3>address</h3>
                <p>Algés, Lisboa, Portugal</p>
            </div>

            <div class="box" data-aos="zoom-in">
                <i></i>
                <h3>Coffee</h3>
                <p>Buy me a coffee!</p>
            </div>

        </div>
    </section>

    <!-- footer section -->

    <div class="credit"> &copy; copyright @ <?php echo date('Y'); ?> by <span> catarina veiga</span> </div>

    <!-- custom js file -->
    <script src="./js/script.js"></script>
    <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
    <script>
        AOS.init({
            duration: 800,
            delay: 300
        });
    </script>

</body>

</html>