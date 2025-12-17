import stickyContent from "./lib/stickyContent";
import Accordion from "./lib/accordion";
import SmoothScroll from "smooth-scroll";
import Splide from "@splidejs/splide";
import GLightbox from "glightbox";

/* -------------------------------------------------------------------
  utility
------------------------------------------------------------------- */
const smoothScroll = new SmoothScroll('a[href*="#"]', {
  speed: 500,
  speedAsDuration: true,
  popstate: true,
  updateURL: false,
  offset: (anchor, toggle) => {
    if (toggle.href == "#") {
      return 0;
    } else {
      const headerHeight = document.querySelector(".header")
        ? document.querySelector(".header").offsetHeight
        : 0;
      return headerHeight;
    }
  },
});

stickyContent("footer", "header");

// FAQアコーディオン
const faq = new Accordion(".accordion", {
  speed: 400,
  target: "next",
  event: "click",
  display: "block",
});

const voiceSurveyBox = GLightbox({
  selector: ".js-voice-open",
  loop: false,
});

document.addEventListener("DOMContentLoaded", () => {
  const voicesSplideOptions = {
    type: "loop",
    arrows: false,
    pagination: false,
    rewind: true,
    autoplay: false,
    drag: true,
    focus: "center",
    fixedWidth: "var(--global-voice-item-width)",
    gap: "var(--global-space-low)",
  };
  const voicesCarouselClass = ".js-voices-carousel";
  const voicesCarousel = document.querySelector(voicesCarouselClass);
  if (!voicesCarousel) return;
  const voicesSplide = new Splide(voicesCarouselClass, voicesSplideOptions);
  voicesSplide.mount();

  const voicePrev = document.querySelector(".js-voices-arrow-prev");
  const voiceNext = document.querySelector(".js-voices-arrow-next");

  if (voicePrev) {
    voicePrev.addEventListener("click", (event) => {
      event.preventDefault();
      voicesSplide.go("<");
    });
  }

  if (voiceNext) {
    voiceNext.addEventListener("click", (event) => {
      event.preventDefault();
      voicesSplide.go(">");
    });
  }
});

document.addEventListener("DOMContentLoaded", () => {
  const targets = document.querySelectorAll(
    ".js-fade-up, .js-fade-down, .js-fade-in, .js-blink, .js-scale-up"
  );

  if (!targets.length) return;

  const observer = new IntersectionObserver(
    (entries, ob) => {
      entries.forEach((entry) => {
        if (entry.isIntersecting) {
          const el = entry.target;
          const delay = el.dataset.delay;
          if (delay) {
            el.style.transitionDelay = `${delay}s`;
            el.style.animationDelay = `${delay}s`;
          }

          el.classList.add("is-inview");
          ob.unobserve(el);
        }
      });
    },
    {
      rootMargin: "0px 0px 0px 0px",
      threshold: 0,
    }
  );

  targets.forEach((el) => observer.observe(el));
});
