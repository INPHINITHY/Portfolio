<nav id="nav">
<a href="#nav" title="Show navigation"><img src="images/hamburger.png" valign="middle" alt="menu icon" /> Menu</a>
<a href="#" title="Hide navigation"><img src="images/hamburger.png" valign="middle" alt="menu icon" /> Menu</a>
 <ul>
  <li><a href="home.htm" >Home</a></li>
  <li><a href="about.htm">About</a></li>
  <li><a href="Skills.htm">Skills</a></li>
  <li><a href="Projects.htm">Projects</a></li>
 </ul>
    <script>
        $( function()
        {
            $( '#nav li:has(ul)' ).doubleTapToGo();
        });
    </script>
</nav>