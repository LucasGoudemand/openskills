//right bubble COntent slide
const slidingBubbleFormationFirstContent = document.querySelector('.first-content-bubble-formation');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;
    
    const elementToTopViewport = slidingBubbleFormationFirstContent.getBoundingClientRect().top;

    if(scrollTop > (scrollTop + elementToTopViewport).toFixed() - clientHeight * 0.50) {
        slidingBubbleFormationFirstContent.classList.add('active')
    }
    
})