<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include('includes/links.php');?>
</head>
<body class="body-dark">
<!--Main Content Start-->
<style>
    @media only screen and (max-width:960px){
    .name{
      font-size: 50px;
      top: 29%;
      left: 2%;
    }
    .typewriter p{
      font-size: 18px;
      font-weight: 600;
      position: absolute;
      top: 38%;
      left: 2%;
    }
    .button-container{
      top: 44.5%;
    left: 2%;
    }
    }

    @media only screen and (min-width: 961px) {
    .name {
      font-size: 4vw; /* Scales with viewport width */
      top: 29%; /* Use percentage for relative positioning */
      left: 2%; /* Use percentage for relative positioning */
    }
    .typewriter p {
      font-size: 1.8vw; /* Adjust font-size to scale proportionally */
      font-weight: 600;
      position: absolute;
      top: 38%;
      left: 2%;
    }
    .button-container {
      position: absolute; /* Ensure consistent positioning */
      top: 45%;
      left: 2%;
    }
    .hero{
      height:100vh
    }
    }

    @media only screen and  (width:1080px){
    .name{
      font-size: 50px;
      top: 37%;
      left: 2%;
    }
    .typewriter p{
      font-size: 18px;
      font-weight: 600;
      position: absolute;
      top: 42%;
      left: 2%;
    }
    .button-container{
      top: 46%;
    left: 2%;
    }
    }

    @media only screen and (min-width: 1400px) {
    .name{
      font-size: 50px;
      top: 74%;
      left: 2%;
    }
    .typewriter p{
      font-size: 30px;
      font-weight: 600;
      position: absolute;
      top: 81%;
      left: 2%;
    }
    .button-container{
      top: 90%;
    left: 2%;
    }
    }


  
</style>
<div class="hero typewriter">
  <h1 class="name">Hi, I am <span style="color:yellow">Austin</span></h1>
  <p id="typewriter-text"></p>
  <div class="button-container">
  <button class="button-29" role="button">
    <a href="./pages/resume.php">Resume</a>
  </button>
  <button class="button-29" role="button">
    <a href="./pages/skillsProject.php">Projects</a>
  </button>
</div>
</div>


<script>
    
    const phrases = [
        "Training to be a Software Developer.",
        "Pursuing UI/UX Designing.",
        "I am Web Developer",
        "I aim to be a Full-Stack Developer."
    ];
    const typewriterText = document.getElementById("typewriter-text");
    let phraseIndex = 0;
    let charIndex = 0;
    let isDeleting = false;

    function typewriterEffect() {
        const currentPhrase = phrases[phraseIndex];
        if (isDeleting) {
            charIndex--;
        } else {
            charIndex++;
        }

        // Update the displayed text
        typewriterText.textContent = currentPhrase.substring(0, charIndex);

        // Determine if deleting or typing should continue
        if (!isDeleting && charIndex === currentPhrase.length) {
            // Pause at the end of the phrase
            setTimeout(() => isDeleting = true, 1000);
        } else if (isDeleting && charIndex === 0) {
            // Move to the next phrase and start typing
            isDeleting = false;
            phraseIndex = (phraseIndex + 1) % phrases.length;
        }

        // Adjust typing speed
        const typingSpeed = isDeleting ? 50 : 100; // Faster deleting, slower typing
        setTimeout(typewriterEffect, typingSpeed);
    }

    // Start the typewriter effect
    typewriterEffect();

</script>


<div class="container-lm" style='background-color:white'>
      <div class="grid-two-columns"  style="place-items: center;">
          <div>
            <img class="card-img off" src="./../assets/images/3rd.jpg" alt="">
          </div>
          <div>
            <h2>About Me</h2>
            <p>Hello! My name is <strong>Austin Nana Dwomoh Jr</strong>, and I'm a 20-year-old sophomore studying at Augustana College, Rock Island, Illinois. I am passionate about <strong>software development</strong>, bringing ideas to life through software.</p>
            <p>While I don't have specific future career goals yet, I aim to benefit society in my own fun and unique way. I have a tendency to get tasks done early so I can fully enjoy my downtime, whether that's gaming or watching anime.</p>
            <p>In my free time, I'm a big fan of anime, with my favorites being <em>The Promised Neverland</em> and <em>86</em>. I also enjoy reading manga like <em>Hail the King</em>, <em>Tomb Raider King</em>, and <em>Made in Abyss</em>. As for gaming, I love action-adventure titles like <em>Horizon Zero Dawn</em> and <em>Nier: Automata</em>.</p>
          </div>
      </div>
</div>

<div class="container-lm" style='background-color:#AA767C;'>
    <div class="grid-two-columns"  style="place-items: center;">
      <div>
        <h2>Education</h2>
          <ul>
            <li>
              <strong>Augustana College|BA in Computer Sceince|Rock Island,IL|2027</strong>
            </li>
            <li><strong>Asanteman Senior High|Kumasi,Gh|General Science</strong>
            </li>
          </ul>

          <h2>Skills and Tools</h2>
          <ul>
            <li>
              <h4>Languages and Tools</h4>
              <ul>
                <li>Python</li>
                <li>JavaScript</li>
                <li>PhP</li>
                <li>HTML/CSS😶‍🌫️</li>
                <li>Bootstrap 5</li>
                <li>SQL</li>
                <li>Git</li>
                <li>VS code</li>
              </ul>
            </li>
            <li>
              <h4>Design Tools:</h4>
              <ul>
                <li>Adobe Creative Suite</li>
                <li>Figma</li>
                <li>Blender</li>
              </ul>
            </li>
          </ul>
      </div>
      <div>
        <img class="card-img off" src="./../assets/images/2nd.jpg" alt="">
      </div>
    </div>
</div>

    <div class="container-lm" style="background-color:#08A4BD">
      <div class="grid-two-columns" style="place-items: center;">
        <div>
          <img class="card-img off" src="./../assets/images/6th.jpg" alt="">
        </div>
        <div> 
          <h2>Work experience</h2>
                  <ul>
                    <li>
                      <h4>EDGE CENTER, Front-end Developer     (March 2024 - present)</h4>
                      <ul>
                        <li>Pratical web development Opportuinity</li>
                        <li>Worked alongside my peers to create and maintain a website for the local business.</li>
                      </ul>
                    </li>
                    <li>
                     <ul>
                        <h4>Student Employee|Dining Staff|March 2024 - present</h4>
                        <li>Worked as a dining staff member at the Augustana College dining hall.</li>
                     </ul>
                     <ul>
                      <h4>Student Employee|Facilities|(May-Aug 2024)</h4>
                      <li>Assisted in maintaining and landscaping the facilities and ensuring that they met the needs of the students and staff.</li>
                     </ul>
                    </li>
                    <li>
                      <h4>Personal Assitant|PIE- Kumasi,Gh</h4>
                      <h4>Bar Tender(2018-2023)</h4>
                    </li>
                  </ul>
        </div>
     </div>
    </div>


<div class="container-fl" style="background-color:#08A4BD;">
  <div class="card-section">
    <div class="grid-two-columns" style="place-items:center;">
      <div>
        <div class="flex-container">
          <div class="card" style="background-color:#F7F7FF">
            <div class="card-image" style="background-image: url(./../assets/images/mega.png)"></div>
              <div class="card-content">
                <h1>MEGA</h1>
                <p>A website for The Mobile Esports Gaming Association</p>
                <div class="subtitle"></div>
                <div class="card-details">
                    <div class="card-details-inner">
                      <div class="read-more"><a class="button-card" href="https://megagh.xyz">Go To Project</a></div>
                    </div>
                </div>
              </div>
          </div>
        </div>
      </div>
      <div>
        <div class="flex-container">
            <div class="card" style="background-color:#F7F7FF">
              <div class="card-image" style="background-image: url(./../assets/images/ouroboros.png)"></div>
                <div class="card-content">
                  <h1>OUROBOROS</h1>
                  <p>A Discord tournament bot thah has a couple of general features</p>
                  <div class="subtitle"></div>
                  <div class="card-details">
                      <div class="card-details-inner">
                        <div class="read-more"><a class="button-card" href="https://discord.com/oauth2/authorize?client_id=1280610867846578309">Invite To Server</a></div>
                      </div>
                  </div>
                </div>
            </div>
          </div>
      </div>
    </div>
   </div>
</div>
   <script src="https://unpkg.com/aos@2.3.1/dist/aos.js"></script>
<script>
    // this is for the animations
   AOS.init({
    easing: 'ease-in-out',   // Global easing
    once: true,              // Only animate once
    delay: 200               // Global delay before animation
  });
</script>
<footer class="footer">
    <?php include('includes/footer.php'); ?>
</footer>
</body>
</html>