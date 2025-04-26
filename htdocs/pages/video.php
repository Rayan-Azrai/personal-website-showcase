<?php
// pages/video.php
include("../includes/header.php");
include("../includes/nav.php");
?>

<main class="video-section">
  <h2>Cooking Video Tutorial</h2>
  <p>Watch this video to learn how to bake a perfect Cheesecake!</p>

  <object width="720" height="405"
          data="https://www.youtube.com/embed/YKI8TcaRdbI">
    <p>If your browser does not support embedded videos,
       <a href="https://www.youtube.com/watch?v=YKI8TcaRdbI" target="_blank">Click here</a> to watch on YouTube.</p>
  </object>
</main>

<?php
include("../includes/footer.php");
?>
