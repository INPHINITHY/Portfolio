<nav id="nav">
    <a href="#nav" title="Show navigation"><i class="bi bi-list"></i>MEGA<p> </p><a><!--The space helps the the nav stay central and apart-->
    <a href="#" title="Hide navigation"><i class="bi bi-list"></i> MEGA<p> </p></a>
     <ul style="margin-bottom:0;">
      <li><a href="index.php">Home</a></li>
      <li><a href="pages/tournament.php">Tournament</a></li>
      <li><a href="pages/clubs.php">Clans</a></li>
      <li> <a href="pages/aboutUs.php">About Us</a></li>  
    </ul>
    <script>
        $( function()
        {
            $( '#nav li:has(ul)' ).doubleTapToGo();
        });
    </script>
</nav>
