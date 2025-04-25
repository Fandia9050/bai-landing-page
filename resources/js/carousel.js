import EmblaCarousel from "embla-carousel";
import Autoplay from "embla-carousel-autoplay";
import { addPrevNextBtnsClickHandlers } from "./carousel-arrow-button";
import { addDotBtnsAndClickHandlers } from "./carousel-dot-button";

const emblaNode = document.querySelector(".embla");
const viewportNode = emblaNode.querySelector(".embla__viewport");
const dotsNode = emblaNode.querySelector(".embla__dots");
const options = { loop: true };
const plugins = [Autoplay()];
const emblaApi = EmblaCarousel(viewportNode, options, plugins);

// Initialize the carousel
const embla = EmblaCarousel(viewportNode);
// Grab button nodes
const prevButtonNode = emblaNode.querySelector(".embla__prev");
const nextButtonNode = emblaNode.querySelector(".embla__next");

// Add click listeners
prevButtonNode.addEventListener("click", embla.scrollPrev, false);
nextButtonNode.addEventListener("click", embla.scrollNext, false);

const removePrevNextBtnsClickHandlers = addPrevNextBtnsClickHandlers(
    emblaApi,
    prevButtonNode,
    nextButtonNode
);
const removeDotBtnsAndClickHandlers = addDotBtnsAndClickHandlers(
    emblaApi,
    dotsNode
);

emblaApi.on("destroy", removePrevNextBtnsClickHandlers);
emblaApi.on("destroy", removeDotBtnsAndClickHandlers);
