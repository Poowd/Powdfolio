var slidePosition = 1;
SlideShow(slidePosition);

// // forward/Back controls
// function plusSlides(n) {
//   SlideShow(slidePosition += n);
// }

// //  images controls
// function currentSlide(n) {
//   SlideShow(slidePosition = n);
// }

function SlideShow(n) {
    var i;
    var slides = document.getElementsByClassName("slideshow-items ");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slidePosition++;
    if (slidePosition > slides.length) {slidePosition = 1}
    slides[slidePosition-1].style.display = "block";
    setTimeout(SlideShow, 5000);
  } 

var slidePosition = 0;
SlideShow();

