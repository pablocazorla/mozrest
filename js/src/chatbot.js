$(".chat-bot").each(function () {
  const action =  $(this).attr('action');
  $(this).click(function(e) {
    e.preventDefault();
    $zoho.salesiq.floatwindow.visible("show");
    if(action !== 'undefined') {
      $zoho.salesiq.visitor.info({"CTA" : action, "CTA2" : action, "CTA3" : action });
      console.log("action3", action)
    }
  });
});