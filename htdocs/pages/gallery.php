<?php
// pages/gallery.php
include("../includes/header.php");
include("../includes/nav.php");
?>

<main>
  <h2 class="gallery_title"> My favorite meals gallery</h2>

  <!-- Main image display -->
  <div class="gallery-main">
    <!-- Default to the first image in the array -->
    <img id="mainImage" src="../images/gallery/1.jpg" alt="Dish 1" class="main-img">
  </div>

  <!-- Next/Prev Buttons (optional) -->
  <button onclick="prevImage()">Previous</button>
  <button onclick="nextImage()">Next</button>

  <!-- Thumbnails: same file, but smaller via CSS -->
  <div class="gallery-thumbs">
    <img class="thumb" src="../images/gallery/1.jpg" alt="Dish 1" onclick="selectImage(0)">
    <img class="thumb" src="../images/gallery/2.jpg" alt="Dish 2" onclick="selectImage(1)">
    <img class="thumb" src="../images/gallery/3.jpg" alt="Dish 3" onclick="selectImage(2)">
    <img class="thumb" src="../images/gallery/4.jpg" alt="Dish 4" onclick="selectImage(3)">
    <img class="thumb" src="../images/gallery/5.jpg" alt="Dish 5" onclick="selectImage(4)">
    <img class="thumb" src="../images/gallery/6.jpg" alt="Dish 6" onclick="selectImage(5)">
    <img class="thumb" src="../images/gallery/7.jpg" alt="Dish 7" onclick="selectImage(6)">
    <img class="thumb" src="../images/gallery/8.jpg" alt="Dish 8" onclick="selectImage(7)">
    <img class="thumb" src="../images/gallery/9.jpg" alt="Dish 9" onclick="selectImage(8)">
    <img class="thumb" src="../images/gallery/10.jpg" alt="Dish 10" onclick="selectImage(9)">
  </div>
</main>

<?php
include("../includes/footer.php");
?>

<!-- Link to your external JS file -->
<script src="../scripts/gallery.js"></script>
