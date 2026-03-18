document.addEventListener("DOMContentLoaded", function() {
    const slides = document.querySelectorAll(".banner .slide");
    const prevBtn = document.querySelector(".banner .prev");
    const nextBtn = document.querySelector(".banner .next");
    let index = 0;
    let interval = setInterval(nextSlide, 5000); // auto-scroll every 5s

    function showSlide(i){
        slides.forEach(slide => slide.classList.remove("active"));
        slides[i].classList.add("active");
    }

    function nextSlide(){
        index++;
        if(index >= slides.length) index = 0;
        showSlide(index);
    }

    function prevSlide(){
        index--;
        if(index < 0) index = slides.length - 1;
        showSlide(index);
    }

    // Manual controls
    nextBtn.addEventListener("click", function(){
        nextSlide();
        resetInterval();
    });

    prevBtn.addEventListener("click", function(){
        prevSlide();
        resetInterval();
    });

    // Reset auto-scroll when user clicks
    function resetInterval(){
        clearInterval(interval);
        interval = setInterval(nextSlide, 5000);
    }
});