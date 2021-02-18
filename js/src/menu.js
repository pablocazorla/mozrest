// Menu

var $main_menu_mobile_trigger = $("#main-menu_mobile-trigger"),
  $main_menu_a = $("#main-menu a"),
  $main_menu = $("#main-menu");

$main_menu_mobile_trigger.add($main_menu_a).click(function () {
  $main_menu_mobile_trigger
    .add($main_menu)
    .toggleClass("main-menu_mobile-open");
});
