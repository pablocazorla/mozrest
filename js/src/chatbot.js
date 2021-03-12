$(".chat-bot").each(function () {
  const action =  $(this).attr('action');
  $(this).click(function(e) {
    e.preventDefault();
    $zoho.salesiq.floatwindow.visible("show");
    if(action !== 'undefined') {
      $zoho.salesiq.visitor.info({"CTA" : action});
      console.log("action1", action)
    }
  });
});