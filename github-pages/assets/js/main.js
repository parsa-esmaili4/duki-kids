const header = document.querySelector(".site-header");
const toggle = document.querySelector(".nav-toggle");
const subToggle = document.querySelector(".nav-sub-toggle");
const subItem = subToggle ? subToggle.closest(".site-nav__item") : null;

const setExpanded = (element, open) => {
  if (element) {
    element.setAttribute("aria-expanded", String(open));
  }
};

if (header && toggle) {
  toggle.addEventListener("click", () => {
    const open = header.classList.toggle("is-open");
    setExpanded(toggle, open);
  });
}

if (subToggle && subItem) {
  subToggle.addEventListener("click", () => {
    const open = subItem.classList.toggle("is-open");
    setExpanded(subToggle, open);
  });
}

document.addEventListener("click", (event) => {
  if (!header || header.contains(event.target)) {
    return;
  }

  header.classList.remove("is-open");
  setExpanded(toggle, false);
  if (subItem) {
    subItem.classList.remove("is-open");
    setExpanded(subToggle, false);
  }
});

document.addEventListener("keydown", (event) => {
  if (event.key !== "Escape" || !header) {
    return;
  }

  header.classList.remove("is-open");
  setExpanded(toggle, false);
  if (subItem) {
    subItem.classList.remove("is-open");
    setExpanded(subToggle, false);
  }
});

if (header) {
  header.querySelectorAll(".site-header__cluster a").forEach((link) => {
    link.addEventListener("click", () => {
      header.classList.remove("is-open");
      setExpanded(toggle, false);
    });
  });
}

const reduceMotion = window.matchMedia("(prefers-reduced-motion: reduce)");

const initCarousel = (root) => {
  const track = root.querySelector("[data-carousel-track]");
  const prev = root.querySelector("[data-carousel-prev]");
  const next = root.querySelector("[data-carousel-next]");
  const dotsWrap = root.querySelector("[data-carousel-dots]");
  const slides = track ? Array.from(track.children) : [];

  if (!track || !slides.length) {
    return;
  }

  const isRtl = getComputedStyle(track).direction === "rtl";
  let pageCount = 0;
  let frame = 0;
  let pending = null;
  let idle = 0;

  const edgeOf = (rect) => (isRtl ? rect.right : rect.left);

  const offsetOf = (slide) => {
    const style = getComputedStyle(track);
    const padding = parseFloat(isRtl ? style.paddingRight : style.paddingLeft) || 0;
    const start = edgeOf(track.getBoundingClientRect()) + (isRtl ? -padding : padding);
    const delta = edgeOf(slide.getBoundingClientRect()) - start;
    return isRtl ? -delta : delta;
  };

  const perView = () => {
    const gap = parseFloat(getComputedStyle(track).columnGap) || 0;
    const width = slides[0].getBoundingClientRect().width;
    return Math.max(1, Math.round((track.clientWidth + gap) / (width + gap)));
  };

  const currentIndex = () => {
    let best = 0;
    slides.forEach((slide, index) => {
      if (Math.abs(offsetOf(slide)) < Math.abs(offsetOf(slides[best]))) {
        best = index;
      }
    });
    return best;
  };

  const maxScroll = () => track.scrollWidth - track.clientWidth;
  const scrolled = () => Math.abs(track.scrollLeft);
  const atStart = () => scrolled() <= 2;
  const atEnd = () => scrolled() >= maxScroll() - 2;

  const goTo = (index) => {
    pending = Math.max(0, Math.min(slides.length - perView(), index));
    const delta = offsetOf(slides[pending]);
    clearTimeout(idle);
    idle = setTimeout(() => {
      pending = null;
    }, 900);
    track.scrollTo({
      left: track.scrollLeft + (isRtl ? -delta : delta),
      behavior: reduceMotion.matches ? "auto" : "smooth",
    });
  };

  const update = () => {
    frame = 0;
    if (prev) {
      prev.disabled = atStart();
    }
    if (next) {
      next.disabled = atEnd();
    }
    if (!dotsWrap) {
      return;
    }
    const view = perView();
    const active = atEnd() ? pageCount - 1 : Math.floor(currentIndex() / view);
    Array.from(dotsWrap.children).forEach((dot, index) => {
      if (index === active) {
        dot.setAttribute("aria-current", "true");
      } else {
        dot.removeAttribute("aria-current");
      }
    });
  };

  const buildDots = () => {
    if (!dotsWrap) {
      return;
    }
    const view = perView();
    const count = maxScroll() > 2 ? Math.ceil(slides.length / view) : 0;
    if (count === pageCount) {
      return;
    }
    pageCount = count;
    dotsWrap.replaceChildren();
    for (let page = 0; page < count; page += 1) {
      const dot = document.createElement("button");
      dot.type = "button";
      dot.className = "new-products__dot";
      dot.setAttribute("aria-label", `صفحه ${(page + 1).toLocaleString("fa-IR")}`);
      dot.addEventListener("click", () => goTo(page * perView()));
      dotsWrap.append(dot);
    }
  };

  const refresh = () => {
    buildDots();
    update();
  };

  const step = (direction) => goTo((pending ?? currentIndex()) + direction);

  if (prev) {
    prev.addEventListener("click", () => step(-1));
  }
  if (next) {
    next.addEventListener("click", () => step(1));
  }

  track.addEventListener(
    "scroll",
    () => {
      if (!frame) {
        frame = requestAnimationFrame(update);
      }
      clearTimeout(idle);
      idle = setTimeout(() => {
        pending = null;
      }, 180);
    },
    { passive: true }
  );

  window.addEventListener("resize", refresh);
  refresh();
};

document.querySelectorAll("[data-carousel]").forEach(initCarousel);

document.querySelectorAll(".product-card__fav").forEach((button) => {
  button.addEventListener("click", () => {
    const pressed = button.getAttribute("aria-pressed") === "true";
    button.setAttribute("aria-pressed", String(!pressed));
  });
});
