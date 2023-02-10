//right bubble COntent slide
const slidingLeftContainer = document.querySelector('.left-container');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;
    
    const elementToTopViewport = slidingLeftContainer.getBoundingClientRect().top;

    if(scrollTop > (scrollTop + elementToTopViewport).toFixed() - clientHeight * 0.50) {
        slidingLeftContainer.classList.add('active')
    }
    
})