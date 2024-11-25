(function ($) {
  "use strict";

  $("document").ready(function () {
    var $window = $(window);

    // Header ************************************************************
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

    // Menu ***************************************************************

    var $main_menu_mobile_trigger = $("#main-menu_mobile-trigger"),
      $main_menu_a = $("#main-menu a"),
      $main_menu = $("#main-menu");

    $main_menu_mobile_trigger.add($main_menu_a).click(function () {
      $main_menu_mobile_trigger
        .add($main_menu)
        .toggleClass("main-menu_mobile-open");
    });

    // Splide ***************************************************************

    $("#testimonials").each(function () {
      new Splide("#testimonials", {
        type: "loop",
        // perPage: 3,
        focus: "center",
        autoWidth: true,
        perMove: 1,
      }).mount();
    });
    $("#splide-brands").each(function () {
      new Splide("#splide-brands", {
        type: "loop",
        /// perPage: 3,
        focus: "center",
        autoWidth: true,
        perMove: 1,
        autoplay: true,
      }).mount();
    });

    // SlideTab *************************************************************

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

    // Integration *************************************************************
    $("#integracion-a").each(function () {
      var $intlabrms = $("#int-lab-rms"),
        $intlistrms = $("#int-list-rms"),
        $intlabrp = $("#int-lab-rp"),
        $intBtn = $("#integracion-btn-central"),
        $a = $intBtn.find("a"),
        $intlistrp = $("#int-list-rp"),
        showLink = false,
        hrefBase = $a.attr("href");

      var valRMS = "";
      var valRP = "";

      var onSelect = function () {
        console.log("Integration -----------------");
        console.log("RMS", valRMS);
        console.log("RP", valRP);
        if (valRMS !== "" && valRP !== "" && !showLink) {
          showLink = true;
          $intBtn.addClass("show-link");
        }
        $a.attr("href", hrefBase + "?matching=" + valRMS + "--" + valRP);
      };

      $intlistrms.find(".integracion-dropdown-list_item").click(function () {
        var $int = $(this);
        valRMS = $int.data("value");
        $intlabrms.html($int.html());
        onSelect();
      });
      $intlistrp.find(".integracion-dropdown-list_item").click(function () {
        var $int = $(this);
        valRP = $int.data("value");
        $intlabrp.html($int.html());
        onSelect();
      });
    });

    // DATALIST *************************************************************
    $(".datalist-reservation").each(function () {
      var $this = $(this),
        $input = $this.find("input"),
        $list = $this.find("option"),
        $a = $this.find("a"),
        options = [];

      $list.each(function () {
        var value = $(this).val(),
          url = $(this).data("slug");
        options.push({
          value: value,
          url: url,
        });
      });

      $input.on("change", function () {
        var href = "#";
        var value = $input.val();
        var arr = options.filter(function (o) {
          return o.value === value;
        });

        if (arr[0]) {
          href = arr[0].url;
        }

        $a.attr("href", href);
      });
    });

    // Menu Lang ************************************************************************

    $(".drop-lang-selector").each(function () {
      var $this = $(this),
        $selectedLang = $this.find(".selected-lang"),
        $a = $this.find("li");

      var setText = function (text) {
        $selectedLang.text(text);
      };

      var initialText = $this.find("li.current-language-menu-item a").text();

      console.log(initialText);

      setText(initialText);

      $a.click(function (e) {
        //  e.preventDefault();
        var newText = $(this).text();
        setText(newText);
      });
    });

    // Chat Bot ************************************************************************

    $(".chat-bot").each(function () {
      const action = $(this).attr("action");
      $(this).click(function (e) {
        e.preventDefault();
        $zoho.salesiq.floatwindow.visible("show");
        if (action !== "undefined") {
          $zoho.salesiq.visitor.info({
            CTA: action,
            CTA2: action,
            CTA3: action,
          });
          console.log("action3", action);
        }
      });
    });

    // AOS *******************************************************************

    if (AOS) {
      AOS.init({
        once: true,
        //  mirror: true,
      });
    }
  });
})(jQuery);
