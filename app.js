const lenis = new Lenis();

function raf(time) {
  lenis.raf(time);
  requestAnimationFrame(raf);
}
var isTextAnimationComplete = false;
function backgroundAnimation() {
  const gridContainer = document.querySelector(".grid-container");
  const numCols = 90; // Number of columns
  const numRows = 60; // Number of rows
  const itemSize = 3; // Size of each grid item in rem (this should match your CSS)

  // Create the grid of divs
  for (let i = 0; i < numCols * numRows; i++) {
    const gridItem = document.createElement("div");
    gridContainer.appendChild(gridItem);
  }

  // Mouse move event listener
  document.addEventListener("mousemove", function (e) {
    const rect = gridContainer.getBoundingClientRect();
    const mouseX = e.clientX - rect.left;
    const mouseY = e.clientY - rect.top;

    // Calculate the column and row based on the size of each grid item
    const col = Math.floor(mouseX / (itemSize * parseFloat(getComputedStyle(document.documentElement).fontSize)));
    const row = Math.floor(mouseY / (itemSize * parseFloat(getComputedStyle(document.documentElement).fontSize)));

    // Get the target grid item
    const gridIndex = row * numCols + col;
    const targetDiv = gridContainer.children[gridIndex];

    if (targetDiv) {
      // Animate the div to light up
      gsap.to(targetDiv, { backgroundColor: "#ffff66", duration: 0.2 });

      // Reset the color after a delay
      setTimeout(() => {
        gsap.to(targetDiv, { backgroundColor: "transparent", duration: 1 });
      }, 500);
    }
  });
}
function circleAnimation() {
  // Initialize CircleType.js for circular text effect
  const circleText = new CircleType(document.getElementById("circle-text"));
  circleText.radius(0); // Adjust the radius as per your need

  // Detect scroll direction to rotate the arrow and text
  let lastScrollTop = 0;

  window.addEventListener("scroll", function () {
    let st = window.pageYOffset || document.documentElement.scrollTop;

    // Rotate the text continuously while scrolling
    let rotationDegree = st * 0.2; // Adjust speed of rotation
    document.getElementById(
      "circle-text"
    ).style.transform = `rotate(${rotationDegree}deg)`;

    // Rotate the arrow based on scroll direction
    let arrowIcon = document.querySelector(".arrow-icon");
    if (st > lastScrollTop) {
      // Scrolling down
      arrowIcon.style.transform = "rotate(0deg)";
    } else {
      // Scrolling up
      arrowIcon.style.transform = "rotate(180deg)";
    }
    lastScrollTop = st <= 0 ? 0 : st; // For Mobile or negative scrolling
  });
}

function page3Animation() {
    let boxC = document.querySelector(".sec2Down");
    let box = document.querySelectorAll(".box");
    let fixed = document.querySelector(".img-container");
    let isHoveringBox = false; // Track when hovering over the box
  
    box.forEach(function (e) {
      e.addEventListener("mouseenter", function () {
        isHoveringBox = true;
        let boxImage = e.getAttribute("data-image");
        fixed.style.backgroundImage = `url(${boxImage})`;
        fixed.style.display = "block";
      });
  
      e.addEventListener("mouseleave", function () {
        isHoveringBox = false;
        setTimeout(() => {
          if (!isHoveringBox) fixed.style.display = "none";
        }, 100);
      });
    });
  
    // Add event listeners to the fixed image container
    fixed.addEventListener("mouseenter", function () {
      isHoveringBox = true;
      disableScroll();
    });
  
    fixed.addEventListener("mouseleave", function () {
      isHoveringBox = false;
      fixed.style.display = "none";
      enableScroll();
    });
  }

function sliderAnimation() {
     // Array of slides content
const slidesContent = [
    {
      img: 'assets/s1.jpg',
      heading: 'UI/UX Designing',
      text: 'Crafting intuitive and engaging user experiences, our UI/UX design service focuses on creating interfaces that are not only visually appealing but also user-friendly. We design with the end-user in mind, ensuring every interaction is seamless and satisfying.'
    },
    {
      img: 'assets/s2.jpg',
      heading: 'Motion Graphics',
      text: 'Bring your ideas to life with stunning motion graphics. Our team of designers creates visually striking animations that effectively communicate your brand’s message and captivate your audience.'
    },
    {
      img: 'assets/s3.jpg',
      heading: 'Development',
      text: 'We offer comprehensive development services, ensuring your digital product is built to the highest standards. Our team specializes in both frontend and backend development, ensuring a seamless and scalable solution.'
    },
    {
      img: 'assets/s4.jpg',
      heading: 'Marketing',
      text: 'With our data-driven marketing strategies, we help your brand reach the right audience. Our approach is tailored to boost your brand’s visibility, engagement, and conversions through targeted campaigns.'
    }
  ];
  
  // Initial slide index
  let currentSlideIndex = 0;
  
  // DOM elements
  const slideImage = document.querySelector('.slide-image');
  const slideHeading = document.querySelector('.card h2');
  const slideText = document.querySelector('.card p');
  const prevButton = document.querySelector('.prev-btn');
  const nextButton = document.querySelector('.for-btn');
  
  // Function to update slide content
  function updateSlideContent(index) {
    const currentSlide = slidesContent[index];
    slideImage.style.backgroundImage = `url(${currentSlide.img})`;
    slideHeading.textContent = currentSlide.heading;
    slideText.textContent = currentSlide.text;
  
    // Handle button disable/enable based on current slide index
    if (index === 0) {
      prevButton.disabled = true;
      prevButton.style.opacity = 0.5; // To visually indicate it's disabled
    } else {
      prevButton.disabled = false;
      prevButton.style.opacity = 1;
    }
  
    if (index === slidesContent.length - 1) {
      nextButton.disabled = true;
      nextButton.style.opacity = 0.5; // To visually indicate it's disabled
    } else {
      nextButton.disabled = false;
      nextButton.style.opacity = 1;
    }
  }
  
  // Event listener for the Next button
  nextButton.addEventListener('click', () => {
    if (currentSlideIndex < slidesContent.length - 1) {
      currentSlideIndex++;
      updateSlideContent(currentSlideIndex);
    }
  });
  
  // Event listener for the Prev button
  prevButton.addEventListener('click', () => {
    if (currentSlideIndex > 0) {
      currentSlideIndex--;
      updateSlideContent(currentSlideIndex);
    }
  });
  
  // Initialize the slider with the first slide
  updateSlideContent(currentSlideIndex);
}

function section4Animation() {
gsap.registerPlugin(ScrollTrigger);


// Background gradient change based on scroll
gsap.to(".section4", {
  backgroundImage: "linear-gradient(to bottom, #000000, #ffff66, #000000)", // Gradient from black to yellow
  ease: "none",
  scrollTrigger: {
    trigger: ".section4",
    start: "top center",
    end: "bottom center",
    scrub: true
  }
});

// Project containers animation (slide-in based on flex alignment)
gsap.utils.toArray('.pro-container').forEach((container) => {
  const isRightAligned = getComputedStyle(container).justifySelf === "flex-end";

  gsap.from(container, {
    x: isRightAligned ? '100%' : '-100%', // Slide from the right if right-aligned, else from the left
    opacity: 0,
    ease: "power3.out", // Smooth easing effect
    duration: 1.5, // Slower animation
    scrollTrigger: {
      trigger: container,
      start: "top 80%", // Start when the container is near the viewport
      end: "bottom 60%",
      scrub: true,
      toggleActions: "play reverse play reverse" // Animates both ways (on scroll up/down)
    }
  });
});

const paragraph = document.querySelector(".animated-paragraph");
const words = paragraph.textContent.split(" ");
paragraph.innerHTML = words.map(word => `<span class='word'>${word}</span>`).join(" ");

// Split text animation
gsap.from(".word", {
  scrollTrigger: {
    trigger: ".split-text-container",
    start: "top 20%", 
    end: "+=500", 
    pin: true, 
    scrub: true, 
    toggleActions: "play reverse play reverse", 
    anticipatePin: 1, // Slight anticipation when the pinning starts
  },
  x: () => Math.random() > 0.5 ? gsap.utils.random(-200, -100) : gsap.utils.random(100, 200), // Random x direction
  y: () => Math.random() > 0.5 ? gsap.utils.random(-200, -100) : gsap.utils.random(100, 200), // Random y direction
  opacity: 0, 
  duration: 1.5,
  stagger: 0.1, 
  ease: "power2.out",
  onComplete: () => {
    isTextAnimationComplete = true; // Set the flag to true when animation completes
  }
});

}
  
function cursorAnimation() {
  
// Custom Cursor Element
const cursor = document.getElementById("custom-cursor");
const cursorText = document.getElementById("cursor-text");

// Track mouse movement to move custom cursor
document.addEventListener("mousemove", (e) => {
  gsap.to(cursor, {
    x: e.clientX,
    y: e.clientY,
    duration: 0.1, // Smooth transition
    ease: "power2.out",
  });
  
  // Ensure the cursor is visible
  cursor.style.display = 'block';
});


const proCovers = document.querySelectorAll(".proCover");

proCovers.forEach((cover) => {
  cover.addEventListener("mouseenter", () => {
    cursorText.textContent = "Learn More"; // Set text
    cursorText.style.display = "block"; // Show text
    
    gsap.to(cursor, {
      backgroundColor: "#ffff66", // Set background color to yellow
      width: "6rem",
      fontFamily: "pixel",
      height: "6rem",
      duration: 0.3,
    });
  });

  cover.addEventListener("mouseleave", () => {
    cursorText.style.display = "none"; // Hide text on mouse leave
    
    gsap.to(cursor, {
      backgroundColor: "transparent", // Revert background to transparent
      width: "1.5rem",
      height: "1.5rem",
      duration: 0.3,
    });
  });
});
const textElements = document.querySelectorAll(".text");

textElements.forEach((textElement) => {
  textElement.addEventListener("mouseenter", () => {
    gsap.to(cursor, {
      mixBlendMode: "difference", 
      scale: 3, // Scale up the cursor
      backgroundColor: "#ffff66", // Optional: different color for .text
      duration: 0.3,
    });
  });

  textElement.addEventListener("mouseleave", () => {
    cursorText.style.display = "none";

    gsap.to(cursor, {
      mixBlendMode: "normal", 
      scale: 1, // Reset scale to original
      backgroundColor: "transparent",
      duration: 0.3,
    });
  });
});

const animatedParagraph = document.querySelector(".animated-paragraph");

animatedParagraph.addEventListener("mouseenter", () => {
  if (isTextAnimationComplete) {

    gsap.to(cursor, {
      backgroundColor: "white",
      border: "none",
      mixBlendMode: "exclusion",
      scale: 5,
      duration: 0.3,
    });
  }
});

animatedParagraph.addEventListener("mouseleave", () => {
  if (isTextAnimationComplete) {
    gsap.to(cursor, {
      mixBlendMode: "normal",
      scale: 1,
      border: "2px solid #ffff66",
      backgroundColor: "transparent",
      duration: 0.3,
    });
  }
});
}
function loaderAnimation() {
  let loader = document.querySelector(".loader");
  setTimeout(() => {
    loader.style.top = "-100%";
  }, 3400);
}
  let navBar = document.querySelector("nav");
  let emailBar = document.querySelector(".email-bar");
  let container = document.querySelector(".content-container");
  setTimeout(() => {
    gsap.from(navBar,{
      y: -100,
      opacity: 0,
      duration: 1,
      ease: "power2.inOut",
    });
    gsap.from(emailBar, {
      x: -100,
      opacity: 0,
      duration: 1,
      ease: "power2.inOut",
    });
    gsap.from(container, {
      opacity: 0,
      duration: 1,
      ease: "power2.inOut",
    });
  }, 3500);
function responsiveDesign() {
  let hamburger = document.querySelector(".hamburger");
let navContainer = document.querySelector(".nav-container");
let navResponsive = document.querySelector(".navResponsive");
let navItem = document.querySelectorAll(".nav-item");
console.log(navItem);
let flag = 0;

hamburger.addEventListener("click", () => {
  if (flag === 0) {
    navResponsive.style.height = "30vh";
    navContainer.style.borderBottomRightRadius = "0";
    navContainer.style.borderBottomLeftRadius = "0";
    navContainer.style.borderTopRightRadius = "5rem";
    navContainer.style.borderTopRightRadius = "5rem";
    navItem.forEach((item) => {
      setTimeout(() => {
        item.style.opacity = 1;
      }, 500); 
    });
    flag = 1;
  } else {
    setTimeout(() => {
      navResponsive.style.height = "4vh";
    }, 400);
    navContainer.style.borderRadius = "5rem";
    navItem.forEach(item => {
      item.style.opacity = 0;
    });
    flag = 0;
  }
  console.log(flag);
});
}


responsiveDesign();
loaderAnimation();
cursorAnimation();
section4Animation();
sliderAnimation();
page3Animation();
circleAnimation();
requestAnimationFrame(raf);
backgroundAnimation();
