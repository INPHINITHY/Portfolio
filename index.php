<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
    <?php include('includes/links.php');?>
</head>
<body class="body-dark">
  <header>
    <?php include('includes/nav.php');?>
  </header>
  
<!--Main Content Start-->
  
<div class="container-lm" style="margin">
  <div class="grid-two-columns grid-two-columnsH" style="place-items: center;padding-top:40px;">
    <style>
      @media (min-width: 1024px){
        .grid-two-columnsH{
          height:100vh;
        }
      }
    </style>
    <div>
      <span id="hero-text" >
        <h1>Hi, I am Austin N. Dwomoh</h1>
        <p>A Computer Science Major, At Augustana College, With A Love and Knack For Tecnology.</p>
      </span>
      <div class="grid-two-columns" style="place-items: center;" >
        <div><button class="btn"><a href="./../pages/resume.php">Resume</a></button></div>
        <div><button class="btn-hol">Projects </button></div>
      </div>
      
          
        
    </div>
    <div >
        <img  class="card-img" src="assets/images/1st.jpg" alt="">
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

<footer class="footer">
    <?php include('includes/footer.php'); ?>
</footer>
</body>
</html>