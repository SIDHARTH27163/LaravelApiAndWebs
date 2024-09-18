const prev = document.querySelector("#prev");
const next = document.querySelector("#next");

let carouselVp = document.querySelector("#carousel-vp");
let cCarouselInner = document.querySelector("#cCarousel-inner");
let leftValue = 0;
let totalMovementSize = 0; // Initialize this value
let itemWidth = 0; // Initialize this value

// Function to update the width of the carousel items based on viewport size
function updateItemWidth() {
  if (!carouselVp || !cCarouselInner) return; // Ensure elements are available

  const viewportWidth = carouselVp.getBoundingClientRect().width;
  
  if (window.innerWidth <= 510) {
    itemWidth = viewportWidth; // Mobile screen: full width
  } else if (window.innerWidth <= 770) {
    itemWidth = viewportWidth / 2; // Tablet screen: half width
  } else {
    itemWidth = viewportWidth / 3; // Large screen: one-third width
  }

  // Set the width of each carousel item
  document.querySelectorAll(".cCarousel-item").forEach(item => {
    item.style.width = `${itemWidth}px`;
  });

  const gap = parseFloat(
    window.getComputedStyle(cCarouselInner).getPropertyValue("gap")
  );
  totalMovementSize = itemWidth + gap; // Update the total movement size

  // Update width of carousel-inner
  const itemsCount = document.querySelectorAll(".cCarousel-item").length;
  cCarouselInner.style.width = `${itemWidth * itemsCount + gap * (itemsCount - 1)}px`;

  // Adjust left value if needed
  const maxLeftValue = -(cCarouselInner.getBoundingClientRect().width - viewportWidth);
  if (leftValue < maxLeftValue) {
    leftValue = maxLeftValue;
    cCarouselInner.style.left = `${leftValue}px`;
  }

  updateActiveState();
}

// Event listeners for prev and next buttons
prev.addEventListener("click", () => {
  if (leftValue < 0) {
    leftValue += totalMovementSize;
    cCarouselInner.style.left = `${leftValue}px`;
    updateActiveState();
  }
});

next.addEventListener("click", () => {
  const maxLeftValue = -(cCarouselInner.getBoundingClientRect().width - carouselVp.getBoundingClientRect().width);
  if (leftValue > maxLeftValue) {
    leftValue -= totalMovementSize;
    cCarouselInner.style.left = `${leftValue}px`;
    updateActiveState();
  }
});

// Media query handling
const mediaQuery510 = window.matchMedia("(max-width: 510px)");
const mediaQuery770 = window.matchMedia("(max-width: 770px)");

mediaQuery510.addEventListener("change", updateItemWidth);
mediaQuery770.addEventListener("change", updateItemWidth);

// Initial call to set item width and carousel state
updateItemWidth();

function updateActiveState() {
  if (!carouselVp || !cCarouselInner) return; // Ensure elements are available

  const items = document.querySelectorAll(".cCarousel-item");
  
  // Remove border from all items
  items.forEach((item) => {
    item.querySelector('div > div').classList.remove("border-rose-400", "border", "border-solid", "mt-12", "duration-700", "ease-in-out");
  });

  // Calculate visible items count based on screen width
  let visibleItemsCount;

  if (window.innerWidth <= 510) {
    visibleItemsCount = 1; // Mobile screen
  } else if (window.innerWidth <= 770) {
    visibleItemsCount = 2; // Tablet screen
  } else {
    visibleItemsCount = 3; // Large screen
  }

  const centerIndex = Math.round(Math.abs(leftValue) / totalMovementSize) + Math.floor(visibleItemsCount / 2);

  if (centerIndex >= 0 && centerIndex < items.length) {
    // Add border to the currently active item
    items[centerIndex].querySelector('div > div').classList.add("border-rose-400", "border", "border-solid", "mt-12", "duration-700", "ease-in-out");
  }
}
