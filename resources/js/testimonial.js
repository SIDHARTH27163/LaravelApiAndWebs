document.addEventListener('DOMContentLoaded', () => {
  const testimonials = [
    {
      text: "Alcaline Solutions exceeded our expectations with their creative approach and attention to detail. Their team is highly professional and skilled, delivering exceptional results1.",
      image: "https://cdn.builder.io/api/v1/image/assets/TEMP/46b5bb1efe4cea052a4c14cdac2ee55d93ae968d20e680cbb6c9fa8054aca8e8?apiKey=c81a87a8b87043acac16b0e47d857063&",
      name: "Imran Khan1",
      company: "Software Engineer"
    },
    {
      text: "Alcaline Solutions exceeded our expectations with their creative approach and attention to detail. Their team is highly professional and skilled, delivering exceptional results2.",
      image: "https://cdn.builder.io/api/v1/image/assets/TEMP/46b5bb1efe4cea052a4c14cdac2ee55d93ae968d20e680cbb6c9fa8054aca8e8?apiKey=c81a87a8b87043acac16b0e47d857063&",
      name: "Imran Khan2",
      company: "Software Engineer"
    },
    {
      text: "Alcaline Solutions exceeded our expectations with their creative approach and attention to detail. Their team is highly professional and skilled, delivering exceptional results3.",
      image: "https://cdn.builder.io/api/v1/image/assets/TEMP/46b5bb1efe4cea052a4c14cdac2ee55d93ae968d20e680cbb6c9fa8054aca8e8?apiKey=c81a87a8b87043acac16b0e47d857063&",
      name: "Imran Khan3",
      company: "Software Engineer"
    },
    {
      text: "Alcaline Solutions exceeded our expectations with their creative approach and attention to detail. Their team is highly professional and skilled, delivering exceptional result4.",
      image: "https://cdn.builder.io/api/v1/image/assets/TEMP/46b5bb1efe4cea052a4c14cdac2ee55d93ae968d20e680cbb6c9fa8054aca8e8?apiKey=c81a87a8b87043acac16b0e47d857063&",
      name: "Imran Khan4",
      company: "Software Engineer"
    },
    {
      text: "Alcaline Solutions exceeded our expectations with their creative approach and attention to detail. Their team is highly professional and skilled, delivering exceptional results.",
      image: "https://cdn.builder.io/api/v1/image/assets/TEMP/46b5bb1efe4cea052a4c14cdac2ee55d93ae968d20e680cbb6c9fa8054aca8e8?apiKey=c81a87a8b87043acac16b0e47d857063&",
      name: "Imran Khan5",
      company: "Software Engineer"
    },

    // Add more testimonials as needed
  ];

  const testimonialMessage = document.getElementById('testimonial-message');
  const carouselIndicators = document.getElementById('carousel-indicators');

  function createTestimonialElement(testimonial, index) {
    return `
      <div class="testimonial-item ${index === 0 ? 'active' : ''}" data-index="${index}">
        <p>${testimonial.text}</p>
      </div>
    `;
  }

  function createIndicatorElement(testimonial, index) {
    return `
     <figure class="flex mx-2 flex-col justify-center self-stretch ${index === 0 ? 'active' : ''}" data-index="${index}">
        <img loading="lazy" src="${testimonial.image}" alt="Customer avatar" class="self-center max-w-full aspect-square w-[40px]" />

        <figcaption class="mt-1 text-sm font-bold tracking-normal  bg-[linear-gradient(225deg,#F76680_0%,#57007B_100%)]  text-transparent  bg-clip-text">
          ${testimonial.name}
        </figcaption>
        <p class="text-xs leading-6 text-black font-Robotomedium">${testimonial.company}</p>
      </figure>

    `;
  }

  function updateCarousel(index) {
    const items = document.querySelectorAll('.testimonial-item');
    const indicators = document.querySelectorAll('#carousel-indicators figure');
    const offset = Math.floor(index / 5) * 100;

    document.querySelector('.testimonial-items').style.transform = `translateX(-${offset}%)`;

    items.forEach((item, i) => {
      item.classList.toggle('active', i === index);
    });

    indicators.forEach((indicator, i) => {
      indicator.classList.toggle('active', i === index);
    });
  }

  testimonials.forEach((testimonial, index) => {
    testimonialMessage.innerHTML += createTestimonialElement(testimonial, index);
    carouselIndicators.innerHTML += createIndicatorElement(testimonial, index);
  });

  let currentIndex = 0;
  updateCarousel(currentIndex);

  setInterval(() => {
    currentIndex = (currentIndex + 1) % testimonials.length;
    updateCarousel(currentIndex);
  }, 3000); // Change every 3 seconds

  document.getElementById('carousel-indicators').addEventListener('click', (event) => {
    const index = event.target.closest('figure')?.dataset.index;
    if (index !== undefined) {
      currentIndex = parseInt(index, 10);
      updateCarousel(currentIndex);
    }
  });

  document.getElementById('prev').addEventListener('click', () => {
    currentIndex = (currentIndex - 1 + testimonials.length) % testimonials.length;
    updateCarousel(currentIndex);
  });

  document.getElementById('next').addEventListener('click', () => {
    currentIndex = (currentIndex + 1) % testimonials.length;
    updateCarousel(currentIndex);
  });
});

