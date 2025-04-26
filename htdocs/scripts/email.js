// scripts/email.js

window.addEventListener("DOMContentLoaded", function () {
    const emailLink = document.getElementById("emailLink");
  
    if (emailLink) {
      // Grab reversed email
      const reversed = emailLink.textContent.trim();
  
      // Flip it back
      const corrected = reversed.split('').reverse().join('');
  
      // Update the anchor
      emailLink.textContent = corrected;
      emailLink.href = "mailto:" + corrected;
    }
  });
  