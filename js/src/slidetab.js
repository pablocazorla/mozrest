// SlideTab
$(".slidetab-trigger").each(function () {
  var $this = $(this),
    $slideTrig = $this.find(".slidetab-trig"),
    slideTabId = $this.data("slidetab"),
    $slideTabContent = $("#" + slideTabId),
    $slideTabCont = $slideTabContent.find(".slidetab-cont");

  if ($slideTabCont.length > 0) {
    $slideTrig.eq(0).addClass("current");
    $slideTabCont.eq(0).addClass("current");

    var current = 0;
    var changeSlide = function (i) {
      $slideTrig.removeClass("current").eq(i).addClass("current");
      $slideTabCont.removeClass("current").eq(i).addClass("current");
      current = i;
    };

    var timer = setInterval(function () {
      var next = current + 1;
      next = next >= $slideTrig.length ? 0 : next;
      changeSlide(next);
    }, 4000);

    $slideTrig.each(function (i) {
      var $trig = $(this);

      $trig.click(function () {
        clearInterval(timer);
        changeSlide(i);
      });
    });
  }
});
