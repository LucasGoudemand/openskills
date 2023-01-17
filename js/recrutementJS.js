//middle bubble COntent slide
const slidingBubbleRecrutementMiddleContainer = document.querySelector('.middle-container-bubble-recrutement');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;
    
    const elementToTopViewport = slidingBubbleRecrutementMiddleContainer.getBoundingClientRect().top;

    if(scrollTop > (scrollTop + elementToTopViewport).toFixed() - clientHeight * 0.50) {
      slidingBubbleRecrutementMiddleContainer.classList.add('active')
    }
    
})

//right bubble COntent slide
const slidingBubbleRecrutementRightContainer = document.querySelector('.right-container-bubble-recrutement');

window.addEventListener('scroll', () => {

    const {scrollTop, clientHeight} = document.documentElement;
    
    const elementToTopViewport = slidingBubbleRecrutementRightContainer.getBoundingClientRect().top;

    if(scrollTop > (scrollTop + elementToTopViewport).toFixed() - clientHeight * 0.50) {
        slidingBubbleRecrutementRightContainer.classList.add('active')
    }
    
})

