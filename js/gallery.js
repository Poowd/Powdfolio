document.addEventListener('DOMContentLoaded', function() {
    const slider = document.querySelector('.slider');
    const sliderItems = document.querySelectorAll('.slider-item');
    const previousBtn = document.querySelector('.slider-button.previous');
    const nextBtn = document.querySelector('.slider-button.next');

    let currentIndex = 0;
    const totalItems = sliderItems.length;
    const itemWidth = 450;

    function goToSlide(index) {
        if (index < 0 || index >= totalItems) {
        return;
        }
        currentIndex = index;
        const translateX = -currentIndex * itemWidth;
        slider.style.transform = `translateX(${translateX}px)`;
    }

    function goToPrevious() {
        goToSlide(currentIndex - 1);
    }

    function goToNext() {
        goToSlide(currentIndex + 1);
    }

    previousBtn.addEventListener('click', goToPrevious);
    nextBtn.addEventListener('click', goToNext);
    });

    document.addEventListener('DOMContentLoaded', function() {
        const slider2 = document.querySelector('.slider-2');
        const sliderItems2 = document.querySelectorAll('.slider-item-2');
        const previousBtn2 = document.querySelector('.slider-button.previous-2');
        const nextBtn2 = document.querySelector('.slider-button.next-2');

        let currentIndex2 = 0;
        const totalItems2 = sliderItems2.length;
        const itemWidth2 = 850;

        function goToSlide2(index2) {
            if (index2 < 0 || index2 >= totalItems2) {
            return;
            }
            currentIndex2 = index2;
            const translateX = -currentIndex2 * itemWidth2;
            slider2.style.transform = `translateX(${translateX}px)`;
        }

        function goToPrevious2() {
            goToSlide2(currentIndex2 - 1);
        }

        function goToNext2() {
            goToSlide2(currentIndex2 + 1);
        }

        previousBtn2.addEventListener('click', goToPrevious2);
        nextBtn2.addEventListener('click', goToNext2);
        });