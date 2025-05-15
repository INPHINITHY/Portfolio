<nav class="navbar-norm">
  <img src="../assets/favicon_io/android-chrome-192x192.png" alt="Logo" class="logo">
  <a href="javascript:void(0);" class="hamburger" onclick="toggleSidebar()">☰</a>
  <ul id="nav">
    <li><a href="./../index.php">Home</a></li>
    <li><a href="./../pages/skillsProject.php">Projects</a></li>
    <li><a href="../pages/resume.php">Resume</a></li>

  </ul>
</nav>

<!-- Sidebar -->
<div id="sidebar" class="sidebar">
  <a href="javascript:void(0)" style="justify-content:right;margin-top:0"class="closebtn" onclick="closeSidebar()">&times;</a>
  <a href="./../index.php">Home</a>
  <a href="./../pages/skillsProject.php">Projects</a>
  <a href="../pages/resume.php">Resume</a>
  <span class="button-container" style="top: 70%;left: 20%;">
    <button class="button-29" role="button">
        <a href="mailto:dwomohaustin14@gmail.com" style="margin-top:0;">Contact</a>
    </button>
</span>
</div>
<style>
     @media (min-width: 780px){
        .button-29{
            display:none;
        }
     }
</style>
  <script>
$(function() {
  $('#nav li:has(ul)').doubleTapToGo();
});
// JavaScript for hamburger menu toggle
function toggleMenu() {
  const navbar = document.querySelector('.navbar-norm');
  navbar.classList.toggle('active');
}
// Function to toggle the sidebar visibility
function toggleSidebar() {
  document.getElementById("sidebar").classList.toggle("open");
}
// Function to close the sidebar
function closeSidebar() {
  document.getElementById("sidebar").classList.remove("open");
}

  </script>
