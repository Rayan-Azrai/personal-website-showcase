<?php
// pages/resume.php
include("../includes/header.php");
include("../includes/nav.php");
?>

<main class="resume_section">
  <h2>My Resume</h2>
  <p>Below is my resume in PDF format. You can scroll through it directly on this page.</p>

  <div class="resume_container">
    <object data="../resume/RAYAN AZRAI.pdf" type="application/pdf" width="100%" height="800">
      <p>If your browser does not support PDFs, 
        <a href="../resume/RAYAN AZRAI.pdf" target="_blank">click here to download it.</a>
      </p>
    </object>
  </div>
</main>

<?php
include("../includes/footer.php");
?>
