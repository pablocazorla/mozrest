$("#testimonials").each(function () {
  new Splide("#testimonials", {
    type: "loop",
    // perPage: 3,
    focus: "center",
    autoWidth: true,
    perMove: 1,
  }).mount();
});
