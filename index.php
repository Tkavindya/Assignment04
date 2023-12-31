<!DOCTYPE html>
<html>
    <head>
        <title>Portfolio Website</title>
        <link rel="stylesheet" type="text/css" href="style.css">
        <link rel="preconnect" href="https://fonts.gstatic.com">
        <link href="https://fonts.googleapis.com/css2?family=Baloo+Bhai+2&family=Bree+Serif&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.4.0/css/all.min.css" integrity="sha512-iecdLmaskl7CVkqkXNQ/ZH/XLlvWZOJyj7Yy7tcenmpD1ypASozpmT/E0iPtmFIB46ZmdtAc9eNBvH0H/ZpiBw==" crossorigin="anonymous" referrerpolicy="no-referrer" />
        <link href='https://unpkg.com/boxicons@2.1.4/css/boxicons.min.css' rel='stylesheet'>


    </head>


    <body>
        
        <div class="head" id="head">
            <nav>
             
                <h2 class="logo">Portfo<span>lio</span></h2>
                <ul>
                    <li><a href="#head">Home</a></li>
                    <li><a href="#about">About Us</a></li>
                    <li><a href="#service">Services</a></li>
                    <li><a href="#skills">Skills</a></li>
                    <li><a href="#contact">Contact Us</a></li>
                    
                </ul>
            </nav>
        </div>
        
            <div class="content">
                <h4>Hello, my name is<h4>
                    <h2>Tharushi Kavindya</h2>
                    <h3>I'm a <span>Graphic Designer</span></h3>
                    <div class="newsletter">
                    <form>
                        <input type="email" name="email" id="email" placeholder="Enter Your Email">
                        <input type="submit" name="submit" value="Let's Start">
                    </form>
                    </div>
            </div>
        

       
            <div class="about" id="about">
                <img src="img/girl.jpg">
                <div class="about_us" id="about_us">
                <h2>About Me</h2>
                <h5>Graphic Designer</h5>
                <p>Welcome to my website! I'm passionate graphic designer dedicated to creating visually stunning and impactful designs. My goal is to bring your ideas to life and help you effectively communicate your message through compelling visual storytelling.
                </p>
                <button class="button">Let's Talk</button>
                </div>
            </div>
       

       
        <div class="service" id="service">
            <div class="title">
                <h2>Our Services</h2>
            </div>
            <div class="box" id="box">
                <div class="card">
                    <i class="fas fa-bars"></i>
                    <h5>Print Design</h5>
                    <div class="pra">
                        <p>Designing various print materials such as business cards, brochures, flyers, posters, packaging, and other marketing collateral.</p>
                        
                        <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                        </p>
                    </div>
                </div>

                <div class="card">
                    <i class="fas fa-bars"></i>
                    <h5>Web Design</h5>
                    <div class="pra">
                        <p>Designing visually appealing and user-friendly websites, including layout, graphics, and overall user experience.</p>
                        
                        <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                        </p>
                    </div>
                </div>

                <div class="card">
                    <i class="fas fa-bars"></i>
                    <h5>User Interface Design</h5>
                    <div class="pra">
                        <p>Designing the visual elements, user interface of digital products, websites, applications to enhance usability and user experience.</p>
                        
                        <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                        </p>
                    </div>
                </div>

                <div class="card">
                    <i class="fas fa-bars"></i>
                    <h5>Social Media Graphics</h5>
                    <div class="pra">
                        <p>Designing graphics and visual content optimized for social media platforms to enhance brand presence and engage followers.</p>
                        
                        <p style="text-align: center;">
                        <a class="button" href="#">Read More</a>
                        </p>
                    </div>
                </div>

            </div>
        </div>
       

        
        <div class="skills" id="skills">
        <h2>Skills</h2>
        <div class="contain" id="contain">
            <div class="deco" id="deco">
            <img src="img/print.jpg" alt="print">
            <div class="layer">
                <h4>PRINT DESIGNES</h4>
            </div>
            </div>

            <div class="deco" id="web">
                <img src="img/web.jpg" alt="print">
                <div class="layer">
                    <h4>WEB DESIGNES</h4>
                </div>
            </div>

            <div class="deco" id="deco">
                <img src="img/UIdeco.jpg" alt="print">
                <div class="layer">
                    <h4>USER INTERFACE DESIGNES</h4>
                </div>
            </div>

            <div class="deco" id="deco">
                <img src="img/social.png" alt="print">
                <div class="layer">
                    <h4>SOCIAL MEDIA DESIGNES</h4>
                </div>
            </div>

            <div class="deco" id="web">
                <img src="img/web2.jpg" alt="print">
                <div class="layer">
                    <h4>WEB DESIGNES</h4>
                </div>
            </div>

            <div class="deco" id="web">
                <img src="img/print2.jpg" alt="print">
                <div class="layer">
                    <h4>PRINT DESIGNES</h4>
                </div>
            </div>

            </div>
        </div>

        <div class="con" id="contact">
            <h2>Contact Me</h2>
            <p>Let Me Get You A Beautiful and Creative Graphic Design.</p>
            <form method="post" action="form.php">
                <div class="inputbox">
                    <input type="text" name="name" value="name" placeholder="Full Name" id="name">
                    <input type="email" name="email" value="email" placeholder="Email Address">   
                </div>

                <div class="inputbox">
                    <input type="number" name="mobile" value="mobile" placeholder="Mobile Number" id="mobile">
                    <input type="text" name="subject" value="subject" placeholder="Email Subject">   
                </div>

               
                   <textarea name="message" id="message" cols="30" rows="10" placeholder="Your Message"></textarea>
                   <input type="submit" value="Send Message" class="button">

                   <div class="btn-box btns">
                    <button type="submit" class="btn">Submit</button>
                    <span class="animate scroll" style="--i:9;"></span>
                </div>
        </div>
            </form>

        
        <footer>
        <div class="social">
            <a href="#"><i class="fab fa-facebook-f"></i></a>
            <a href="#"><i class="fab fa-instagram"></i></a>
            <a href="#"><i class="fab fa-twitter"></i></a>

            
            <a href="#head"><i class="lni lni-angle-double-up"></i></a>
        </div>
        

        <p class="end">CopyRight By Tharushi Kavindya</p>
        </footer>

        

       

    </body>
</html>