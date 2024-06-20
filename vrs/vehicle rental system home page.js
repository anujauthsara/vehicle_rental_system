const sliderImages = ["bike.jpg","vmanage1.png","vmanage2.png","car.jpg","vmanage3.png","car2.jpg","bus.jpeg","i1.jpg"]; // Add more image URLs here
let currentImageIndex = 0;

const prevBtn = document.querySelector(".prev-btn");
const nextBtn = document.querySelector(".next-btn");
const sliderImage = document.querySelector(".slider-image");

function showPreviousImage() {
    currentImageIndex = (currentImageIndex - 1 + sliderImages.length) % sliderImages.length;
    sliderImage.src = sliderImages[currentImageIndex];
}

function showNextImage() {
    currentImageIndex = (currentImageIndex + 1) % sliderImages.length;
    sliderImage.src = sliderImages[currentImageIndex];
}

prevBtn.addEventListener("click", showPreviousImage);
nextBtn.addEventListener("click", showNextImage);
