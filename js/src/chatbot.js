$(".chat-bot").each(function () {
  $(this).click(function(e) {
    e.preventDefault();
    $zoho.salesiq.visitor.customaction("know-more");
  });
});