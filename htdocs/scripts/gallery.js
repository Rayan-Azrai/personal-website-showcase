// scripts/gallery.js

// A list of image filenames (the same file used for both thumbnail & main image)
const imageFiles = [
    '1.jpg',
    '2.jpg',
    '3.jpg',
    '4.jpg',
    '5.jpg',    
    '6.jpg',
    '7.jpg',
    '8.jpg',
    '9.jpg',
    '10.jpg',    
  ];
  
  let currentIndex = 0;
  
  function updateMainImage() {
    const mainImg = document.getElementById("mainImage");
    // Just use the same file name for the main image
    mainImg.src = "../images/gallery/" + imageFiles[currentIndex];
  }
  
  function selectImage(index) {
    currentIndex = index;
    updateMainImage();
  }
  
  function nextImage() {
    currentIndex = (currentIndex + 1) % imageFiles.length;
    updateMainImage();
  }
  
  function prevImage() {
    currentIndex = (currentIndex - 1 + imageFiles.length) % imageFiles.length;
    updateMainImage();
  }
  