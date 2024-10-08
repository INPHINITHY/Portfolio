<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.3.3/dist/js/bootstrap.min.js" integrity="sha384-0pUGZvbkm6XF6gxjEnlmuGrJXVbNuzT9qBBavbLwCsOGabYfZo0T0to5eqruptLy" crossorigin="anonymous"></script>
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.11.3/font/bootstrap-icons.min.css">
  <link rel="preconnect" href="https://fonts.googleapis.com">
  <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
  <link rel="apple-touch-icon" sizes="180x180" href="./../assets/favicon_io/apple-touch-icon.png">
  <link rel="icon" type="image/png" sizes="32x32" href="./../assets/favicon_io/favicon-32x32.png">
  <link rel="icon" type="image/png" sizes="16x16" href="./../assets/favicon_io/favicon-16x16.png">
  <link rel="manifest" href="./../assets/favicon_io/site.webmanifest">
  <link href="https://fonts.googleapis.com/css2?family=Noto+Sans:ital,wght@0,100..900;1,100..900&display=swap" rel="stylesheet">
  <link href="./../css-library/style.css" rel="stylesheet" type="text/css" />
  <title>AUSTIN N. DWOMOH</title>
</head>
<body class="body-dark">
  <header>
    <?php include('includes/nav.php');?>
  </header>
  
<!--Main Content Start-->
  
<div class="container-lm">
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

<div class="container-fl" style="background-color:#08A4BD">
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
                        <div class="read-more"><a class="button-card" href="#">Go To Project</a></div>
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