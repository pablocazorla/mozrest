// Header
var $main_header = $("#main-header");
var header_scroll_limit = 500;
var header_scrolled = false;

var header_setScroll = () => {
  var s = $window.scrollTop();

  if (!header_scrolled && s >= header_scroll_limit) {
    $main_header.addClass("scrolled");
    header_scrolled = true;
  }
  if (header_scrolled && s < header_scroll_limit) {
    $main_header.removeClass("scrolled");
    header_scrolled = false;
  }
};

header_setScroll();

$window.on("scroll resize", header_setScroll);
