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

    $slideTrig.each(function (i) {
      var $trig = $(this);

      $trig.click(function () {
        $slideTrig.removeClass("current");
        $trig.addClass("current");
        $slideTabCont.removeClass("current").eq(i).addClass("current");
      });
    });
  }
});
