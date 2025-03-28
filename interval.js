document.addEventListener("DOMContentLoaded", function() {
    let images = document.querySelectorAll(".slideshow-image");
    let currentIndex = 0;
    let interval = setInterval(changeImage, 3000);

    function changeImage() {
        images[currentIndex].classList.remove("active");
        currentIndex = (currentIndex + 1) % images.length;
        images[currentIndex].classList.add("active");
    }

    images[currentIndex].classList.add("active");
});
