//right bubble COntent slide
const slidingBubbleRecrutementRightContainer = document.querySelector(
  ".text-content-b1-bubble"
);

window.addEventListener("scroll", () => {
  const { scrollTop, clientHeight } = document.documentElement;

  const elementToTopViewport =
    slidingBubbleRecrutementRightContainer.getBoundingClientRect().top;

  if (
    scrollTop >
    (scrollTop + elementToTopViewport).toFixed() - clientHeight * 0.5
  ) {
    slidingBubbleRecrutementRightContainer.classList.add("active");
  }
});

const slidingBubbleRecrutementb6Container = document.querySelector(
  ".text-content-b6-bubble"
);

window.addEventListener("scroll", () => {
  const { scrollTop, clientHeight } = document.documentElement;

  const elementToTopViewport =
    slidingBubbleRecrutementb6Container.getBoundingClientRect().top;

  if (
    scrollTop >
    (scrollTop + elementToTopViewport).toFixed() - clientHeight * 0.5
  ) {
    slidingBubbleRecrutementb6Container.classList.add("active");
  }
});
