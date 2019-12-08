<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <link rel="icon" type="image/png" sizes="16x16" href="images/favicon.ico">
    <link rel="stylesheet" href="css/main.css">
    <link href="https://fonts.googleapis.com/css?family=Poppins&display=swap" rel="stylesheet">
    <title>Graham Vickers Web Development</title>
</head>
<h1 class="hidden">Graham Vickers Web Development</h1>
<body>
    <nav>
      <img src="images/logo_gvd.svg" alt="GVD Logo" id="logo">
      <div class="hamburger">
        <div class="line"></div>
        <div class="line"></div>
        <div class="line"></div>
      </div>
      <ul class="nav-links">
        <li><a href="index.hbs">HOME</a></li>
        <li><a href="#">About</a></li>
        <li><a href="#">Portfolio</a></li>
        <li><a href="#">Contact</a></li>
      </ul>
    </nav>

    <div id="landing">
      <div id="intro">
        <h2>Full Stack Developer</h2>
        <p>Creating lasting impressions is what I do.</p>
      </div>
      <img src="images/headshot_circle.png" alt="Headshot of Graham Vickers">
    </div>

    <div id="about">
      <h2>About Me</h2>
      <p>I enjoy all parts of the Web from designing bold and engaging UI/UX, to developing the front and back ends of the website.  When I’m not designing or coding, I can usually be found cooking up a new recipe, with friends, or out for a walk.</p>
    </div>

    <section id="portfolioArea">
      <h2>Recent Projects</h2>
      <div id="portfolio">
        <div class="project">
          <img src="images/traa_logo.svg" alt="TRAA Logo">
        </div>

        <div class="project">
          <img src="images/modern_link_logo.svg" alt="Modern Link Media Logo" id="modernLink">
        </div>

        <div class="project">
          <img src="images/logo_thermosecurity.svg" alt="ThermoSecurity Logo">
        </div>
      </div>
    </section>
    
  <main>

  <section id="aboutArea">
    <div>
    <h2>My Background</h2>
    <div id="skills">
      <div class="content">
        <img src="images/education.svg" alt="SVG Image">
        <h3>Education</h3>
        <p>Fanshawe College, Interactive Media Design - 2 year diploma</p>
      </div>

      <div class="content">
        <img src="images/hobbies.svg" alt="SVG Image">
        <h3>Hobbies and Iterests</h3>
        <p>Some of my hobbies outside of Designing and Developing are golfing, photography, NFL and NCAA Football, Web Development Research, cooking, Netflix binging, traveling, and running.</p>
      </div>

      <div class="content">
        <img src="images/ideas.svg" alt="SVG Image">
        <h3>I'm 1/3 a Cup Designer</h3>
        <p>I am proficient in Adobe Suite, I enjoy and specialize in creating UI/UX. Another one of my design specialties is ‘making it pop’.</p>    
      </div>

      <div class="content">
        <img src="images/analysis.svg" alt="SVG Image">
        <h3>I'm 2/3 a Cup Developer</h3>
        <p>I specialize in front-end development, so love creating HTML, CSS and ‘making it pop’ in JavaScript. Some of my back-end specialties are Node, PHP, Coffee and MySQL.</p>
      </div>
    </div>
    </div>
  </section>

  <section id="contactArea">
    <div id="contactHead">
      <h2>Lets Work Together</h2>
      <p>Have a question? I’d love to hear from you. Send me a message and I’ll get back to you ASAP!</p>
    </div>
    
    <div class="wrapper">
      <form action="data/contact.php" method="POST">
        <div class="field">
          <input type="text" id="name" name="name" placeholder="Hi Nice to Meet You" autofocus required>
          <label for="name">Name</label>
        </div>
        <div class="field">
          <input type="text" id="email" name="email" placeholder="example@gvd.com" required>
          <label for="email">E-Mail</label>
        </div>
        <div class="field">
          <textarea id="msg" rows="4" name="msg" placeholder="Your message" required></textarea>
          <label for="msg">MESSAGE</label>
        </div>
        <input class="button" type="submit" value="Send" />
      </form>
    </div>
  </section>
    


  </main>
<footer>

  <div id="social">
    <a href="https://www.instagram.com/gvixpix/" ><img src="images/instagram.svg" alt="Instagram" class="socialIcon"></a>
    <a href="https://www.linkedin.com/in/grahamvickers/"><img src="images/linkedin.svg" alt="LinkedIn" class="socialIcon"></a>
    <a href="https://github.com/grahamvickers"><img src="images/github.svg" alt="Github" class="socialIcon"></a>
  </div>

  <div>
    <p>© 2019 Graham Vickers</p>
  </div>
</footer>
    

    <script src="js/main.js"></script>
</body>
</html>
