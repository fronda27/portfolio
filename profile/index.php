<!DOCTYPE html>
<html>
<head>
   <title>Portfolio</title>
   <script src="script.js"></script>
   <link rel="stylesheet" type="text/css" href="style.css">
</head>
<body>
   <div class="nav">
         <ul>
            <a href="#home"><li>Home</li></a>
            <a href="#about-me"><li>About</li></a>
            <a href="#works"><li>Works</li></a>
            <a href="#contact"><li>Contact</li></a>
         </ul>
   </div>

      <div id="modal-box">
         <span onclick="closeModal()">&times;</span>
         <div id="modal-content">
            
         </div>
      </div>

   <header id="home">
      
      <div class="content">
         <div class="image">
            <img src="img/me.png">
         </div>
         <div class="me">
            <h6>Hi, I'am Armando</h6>
            <p>Future Web Developer</p>
         </div>
   </header>
   <section id="about-me">
      <h6 class="title">About me</h6>
      <div class="about-content">
         <p>Hi I'm Armando. I'am currently studying at Central Luzon State University as Bachelor in Science in Information Technology major in System Development. As a student i don't have many achievements but I don’t like to define myself by the work I’ve done.</p>
         <p>I define myself by the work I want to do. Skills can be taught, personality is inherent. I prefer to keep learning, continue challenging myself, and do interesting things that matter.</p>
      </div>
   </section>
   <section id="works">
      <h6 class="title">Projects</h6>
      <div class="project_all_container">
         <div class="project">
            <div class="project_img">
               <img  onclick="openModal(this.src)" class="thumbnails" src="img/minesweeper_index.png">
            </div>
            <div class="project_container">
               <p>This was programmed in java, this is a logic puzzle video game genre generally played on personal computers. It has 3 difficulties Easy, Meduim, and Hard. This also ranks players by shortest time to complete</p>
            </div>
         </div>
         <div class="project">
            <div class="project_img project_img_smaller">
               <img onclick="openModal(this.src)" class="thumbnails" src="img/book_login.png">
            </div>
            <div class="project_container">
               <p>This was coded in html, css, and javascript, the purpose of this project is to manage the book rental. It has a admin interface that view and insert employees, manager interface that can track every person who borrowed book, librarian interface that have a list of all book and is able to insert new and also delete, and cashier interface that can manage the transactions of the customer</p>
            </div>
         </div>
         <div class="project">
            <div class="project_img project_img_smaller">
               <img onclick="openModal(this.src)" class="thumbnails" src="img/admin_destination.png">
            </div>
            <div class="project_container">
               <p>This was coded in html, css, and javascript, and php the purpose of this project is to administer a page that has a destination places with price and address, all users, and top destination seller</p>
            </div>
         </div>
      </div>
   </section>
   <section id="contact">
      <h6 class="title contact">Get in Touch</h6>
      <p>you can contact me on my social media or via email</p>
      <div class="content social_media">
         <a href="https://www.facebook.com/fronda.armando"><img src="img/fb_logo.png"></a>
         <a href="https://www.instagram.com/are_men_do/"><img src="img/ig_logo.jfif"></a>

      </div>
      <h6 class="email">armandofronda27@gmail.com</h6>
   </section>
</body>
</html>