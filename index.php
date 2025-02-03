<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Interactive Background</title>
  <link rel="stylesheet" href="style.css">
</head>
<body>
  <div class="loader">
    <h1>Think</h1>
    <h1>Design</h1>
    <h1>Develop</h1>
  </div>
<div id="custom-cursor">
    <span id="cursor-text"> </span> 
  </div>
<div class="img-container"></div>
<div id="main">
  <div class="scroll-indicator">
        <div id="circle-text">SCROLL 	 &#8226; DOWN 	 &#8226;</div>
        <div class="arrow">
            <img class="arrow-icon" src="assets/Vector.png" alt="arrow">
        </div>
    </div>
    <nav>
  <div class="nav-container">
        <h1>Pixanaive</h1>
        <div class="nav-item">
            <a href="">About</a>
            <a href="">Contact</a>
            <a href="">Portfolio</a>
            <button class="btn"><h3>Contact</h3></button>
        </div>
        <div class="hamburger">
          <img src="assets/hamburger.png" alt="hamburgerIcon">
        </div>
     </div>
    <div class="navResponsive">
      <div class="nav-item">
            <a href="">About</a>
            <a href="">Contact</a>
            <a href="">Portfolio</a>
            <button class="btn"><h3>Contact</h3></button>
      </div>
    </div>
   </nav>
  <section class="section1">
   <div class="background-container">
    <div class="grid-container"></div> <!-- Grid background with animation -->
   </div>
   <div class="email-bar">
        <a href="mailto:hello.pixanaive@gmail.com">hello.pixanaive@gmail.com</a>
    </div>
   <div class="content-container">
    <h1>Pixanaive</h1>
    <p>Transforming Ideas into Reality</p>
   </div>
  </section>
  <section class="section2">
    <div class="sec2Upper">
      <div class="con">
        <h1 class="text">About Us</h1>
      </div>
      <div class="con">
        <p>Pixanaive fuses creativity and technology to deliver stunning designs and robust digital solutions. Our team transforms ideas into visually captivating and functional experiences, making your vision a reality.</p>
      </div>
      <div class="con">
        <h1 class="text">Our Team</h1>
      </div>
    </div>
    <div class="sec2Down">
          <div class="box" data-image="assets/p2.jpg">
            <div class="content">
              <h1>John Doe</h1>
              <h5>CEO at Pixanaive</h5>
            </div>
            <div class="overlay"></div>
          </div>
          <div class="box" data-image="assets/3.webp">
            <div class="content">
              <h1>Alex Turner</h1>
              <h5>Creative Director</h5>
            </div>
            <div class="overlay"></div>
          </div>
          <div class="box" data-image="assets/4.webp">
            <div class="content">
              <h1>Sophia Martinez</h1>
              <h5>Lead Developer</h5>
            </div>
            <div class="overlay"></div>
          </div>
          <div class="box" data-image="assets/5.jpg">
            <div class="content">
              <h1>Maya Patel</h1>
              <h5>UI/UX Designer</h5>
            </div>
            <div class="overlay"></div>
          </div>
          <div class="box" data-image="assets/p1.jpg">
            <div class="content">
              <h1>Ethan Kim</h1>
              <h5>Project Manager</h5>
            </div>
            <div class="overlay"></div>
          </div>

      <!--Mobile Version-->
          <div id="mob-elem">
            <img src="assets/p2.jpg" alt="photo">
            <div class="content">
              <h1>John Doe</h1>
              <h5>CEO at Pixanaive</h5>
            </div>
          <div id="mob-elem">
             <img src="assets/3.webp" alt="photo">
             <div class="content">
              <h1>Alex Turner</h1>
              <h5>Creative Director</h5>
            </div>
          </div>              
          <div id="mob-elem">
              <img src="assets/4.webp" alt="photo">
            <div class="content">
              <h1>Sophia Martinez</h1>
              <h5>Lead Developer</h5>
            </div>
          </div>  
          <div id="mob-elem">
              <img src="assets/5.jpg" alt="photo">
              <div class="content">
              <h1>Maya Patel</h1>
              <h5>UI/UX Designer</h5>
            </div>
          </div>   
          <div id="mob-elem" >
              <img src="assets/p1.jpg" alt="photo">
              <div class="content">
              <h1>Ethan Kim</h1>
              <h5>Project Manager</h5>
            </div>
          </div>
  </section>
  <section class="section3">
     <div id="moving-text">
      <div class="con">
        <h1>Our Services</h1>
      </div>
      <div class="con">
        <h1>Our Services</h1>
      </div>
      <div class="con">
        <h1>Our Services</h1>
      </div>
     </div>
     <div class="slider">
      <div class="slide">
        <div class="slide-image"></div>
        <div class="card">
          <h2></h2>
          <p>
          </p>
          <button class="btn"><h3>Learn More</h3></button>
        </div>
        <div class="slider-btns">
          <button class="btns prev-btn">
          <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M10.278 14.3322L17.1352 7.47501L15.3273 5.66711L5.38384 15.6106L15.3273 25.554L17.1352 23.7461L10.278 16.889H25.8379V14.3322H10.278Z"/>
          </svg>

          </button>
          <button class="btns for-btn">
          <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
          <path d="M10.278 14.3322L17.1352 7.47501L15.3273 5.66711L5.38384 15.6106L15.3273 25.554L17.1352 23.7461L10.278 16.889H25.8379V14.3322H10.278Z"/>
          </svg>

          </button>
        </div>
      </div>
     </div>
  </section>
  <section class="section4">
     <div id="moving-text">
      <div class="con">
        <h1>Our Projects</h1>
      </div>
      <div class="con">
        <h1>Our Projects</h1>
      </div>
      <div class="con">
        <h1>Our Projects</h1>
      </div>
     </div>
     <div class="projects">
      <div class="pro-container">
      <div class="proCover">
        <img src="assets/pro1.png" alt="pro_cover">
      </div>
      <div class="heading">
        <h2>Nova Tech</h2>
        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.278 14.3322L17.1352 7.47501L15.3273 5.66711L5.38384 15.6106L15.3273 25.554L17.1352 23.7461L10.278 16.889H25.8379V14.3322H10.278Z" fill="#D0D0D0"/>
        </svg>
      </div>
      <div class="tags">
        <a href="">Development</a>
        <a href="">Modern Designing</a>
      </div>
      </div>
      <div class="pro-container">
      <div class="proCover">
        <img src="assets/pro2.webp" alt="pro_cover">
      </div>
      <div class="heading">
        <h2>Modern Illustration</h2>
        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.278 14.3322L17.1352 7.47501L15.3273 5.66711L5.38384 15.6106L15.3273 25.554L17.1352 23.7461L10.278 16.889H25.8379V14.3322H10.278Z" fill="#D0D0D0"/>
        </svg>
      </div>
      <div class="tags">
        <a href="">2D Illustration</a>
        <a href="">Mothion graphics</a>
      </div>
      </div>
      <div class="pro-container">
      <div class="proCover">
        <img src="assets/pro3.jpg" alt="pro_cover">
      </div>
      <div class="heading">
        <h2>Pulse Fit App</h2>
        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.278 14.3322L17.1352 7.47501L15.3273 5.66711L5.38384 15.6106L15.3273 25.554L17.1352 23.7461L10.278 16.889H25.8379V14.3322H10.278Z" fill="#D0D0D0"/>
        </svg>
      </div>
      <div class="tags">
        <a href="">App UI/UX Design</a>
        <a href="">Prototyping</a>
        <a href="">React Development</a>
      </div>
      </div>
      <div class="pro-container">
      <div class="proCover">
        <img src="assets/pro4.jpg" alt="pro_cover">
      </div>
      <div class="heading">
        <h2>Quantum Marketing Campaign</h2>
        <svg width="31" height="31" viewBox="0 0 31 31" fill="none" xmlns="http://www.w3.org/2000/svg">
        <path d="M10.278 14.3322L17.1352 7.47501L15.3273 5.66711L5.38384 15.6106L15.3273 25.554L17.1352 23.7461L10.278 16.889H25.8379V14.3322H10.278Z" fill="#D0D0D0"/>
        </svg>
      </div>
      <div class="tags">
        <a href="">Social Media</a>
        <a href="">Digital Ads</a>
        <a href="">Branding</a>
      </div>
      </div>
     </div>
     <div class="split-text-container">
        <p class="animated-paragraph">
           Choosing us means partening with a team that's dedicated to your success. We combine Creativity, technical expertise, and passion for your brand.
           a deep understanding of your needs to deliver solutions that exceed expectations.
           With us, you're not just getting a service you're gaining a invested partner
           in your growth.
        </p>
    </div>
</section>
<section class="section5">
   <div class="sticky">
    <div class="bg-anime">
        <div class="elem1"></div>
        <div class="elem2"></div>
    </div>
    <h1 class="text">Testimonials</h1>
    <p>
      Pixanaive fuses creativity and technology to deliver stunning  designs and
      robust the digital solutions. Our team  transforms ideas into visually
      captivating and functional experiences, making your vision a reality.
    </p>
   </div>
   <div class="testimonials">
    <div class="test">
      <p>
      Pixanaive transformed our vision into reality with their innovative 
      design and development skills. Their attention to detail and commitment to
      excellence made the entire process seamless. We couldn’t be happier with
      the results!"
      </p>
      <div class="attCon">
        <h5>Lily Robert</h5>
        <p>CEO at NovaTech</p>
      </div>
    </div>
    <div class="test">
    <p>
      Working with Pixanaive was a game-changer for our brand. Their team not 
      only delivered a stunning website but also ensured it was user-friendly 
      and fully optimized. The feedback from our customers has been 
      overwhelmingly positive!
      </p>
      <div class="attCon">
        <h5>James Potter</h5>
        <p>Brand Owner</p>
      </div>
    </div>
    <div class="test">
    <p>
    From concept to execution, Pixanaive exceeded our expectations.
    Their creative approach and technical expertise brought our project to life
    in ways we hadn’t imagined. They truly are partners in our success!
      </p>
      <div class="attCon">
        <h5>Albert James</h5>
        <p>Agency Owner</p>
      </div>
    </div>
    <div class="test"><p>
    Partnering with Pixanaive was one of the best decisions we've made.
    Their development team is not only skilled but also incredibly responsive,
    turning our ideas into functional solutions quickly. I highly recommend
    their services!
      </p>
      <div class="attCon">
        <h5>Samantha Patel</h5>
        <p>Chief Technology Officer at NextGen Innovations</p>
      </div></div>
   </div>
</section>
<div class="section6">
  <h1>Have any <br><span>IDEA?</span></h1>
  <button class="btn"><h3>Lets Talk</h3></button>
</div>
</div>
<footer>
 <div id="moving-text">
      <div class="con">
        <p>Crafting innovative digital experiences that inspire and engage. Let’s create something amazing together.</p>
        <p>Crafting innovative digital experiences that inspire and engage. Let’s create something amazing together.</p>
      </div>
      <div class="con">
        <p>Crafting innovative digital experiences that inspire and engage. Let’s create something amazing together.</p>
        <p>Crafting innovative digital experiences that inspire and engage. Let’s create something amazing together.</p>
      </div>
      <div class="con">
        <p>Crafting innovative digital experiences that inspire and engage. Let’s create something amazing together.</p>
        <p>Crafting innovative digital experiences that inspire and engage. Let’s create something amazing together.</p>
      </div>
 </div>

 <div class="footerContainer">
  <div class="f1">
    <h1>Pixanaive</h1>
    <p>
    At Pixanaive, we’re passionate about turning ideas into impactful digital experiences.
    Whether it’s through design, development, or motion graphics, our goal is 
    to help you connect with your audience in meaningful ways. Let’s work
    together to make your vision a reality.
    </p>
    <div class="f1Bottom">
      <h4>Join Our Social Network</h4>
      <div class="icons">
        <img src="assets/icon1.png" alt="Social Icon">
        <img src="assets/icon2.png" alt="Social Icon">
        <img src="assets/icon3.png" alt="Social Icon">
      </div>
    </div>
  </div>
  <div class="footerColumn">
  <div class="f2">
    <div class="f2p1">
      <h4>Work With Us</h4>
      <a href="#">hello.pixanaive@gmail.com</a>
    </div>
    <div class="f2p2">
      <h4>Site Map</h4>
      <ul>
        <li>About</li>
        <li>Services</li>
        <li>Contact</li>
        <li>Portfolio</li>
      </ul>
    </div>
  </div>
  <div class="f3">
    <h4>Contact With Us</h4>
    <div class="container">
  <form action="/action_page.php">
    <input type="text" id="fname" name="firstname" placeholder="Full Name">
    <input type="email" id="email" name="email" placeholder="Email">
    <textarea id="subject" name="subject" placeholder="Message" style="height:10rem"></textarea>
    <input type="submit" value="Submit">
  </form>
    </div>
  </div>
  </div>
 
 </div>
 <div class="ftrBottom">
  <p>© 2024 Pixanaive</p>
 </div>
</footer>
  <!--LENIS CDN-->
    <script src="https://unpkg.com/lenis@1.1.14/dist/lenis.min.js"></script> 
  <!--GSAP-->
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.12.5/gsap.min.js"></script>
    <script src="https://cdnjs.cloudflare.com/ajax/libs/gsap/3.9.1/ScrollTrigger.min.js"></script>
  <!--For Circle Text-->
    <script src="https://cdn.jsdelivr.net/npm/circletype@2.3.0/dist/circletype.min.js"></script>  
    <script src="app.js"></script>
</body>
</html>
