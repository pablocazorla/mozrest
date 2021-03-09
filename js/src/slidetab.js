// SlideTab
$(".slidetab").each(function () {
  var autoplayTimeMS = 5000;

  var $this = $(this),
    $slidetabTab = $this.find(".slidetab-tab"),
    slideTabId = $this.data("slidetab"),
    $slideTabContent = $("#" + slideTabId),
    $slideTabCont = $slideTabContent.find(".slidetab-cont");

  if ($slidetabTab.length > 0) {
    $slidetabTab.eq(0).addClass("current");
    $slideTabCont.eq(0).addClass("current");
    var current = 0;
    var changeSlide = function (i) {
      $slidetabTab.removeClass("current").eq(i).addClass("current");
      $slideTabCont.removeClass("current").eq(i).addClass("current");
      current = i;
    };
    var timer = setInterval(function () {
      var next = current + 1;
      next = next >= $slidetabTab.length ? 0 : next;
      changeSlide(next);
    }, autoplayTimeMS);
    $slidetabTab.each(function (i) {
      $(this)
        .find(".slidetab-trig")
        .click(function () {
          clearInterval(timer);
          changeSlide(i);
        });
    });
  }
});
