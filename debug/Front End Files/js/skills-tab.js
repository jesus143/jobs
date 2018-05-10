var tabsFn = (function() {
  
  function init() {
    setHeight();
  }
  
  function setHeight() {
    var $tabPane = $('.tab-pane'),
        tabsHeight = $('.nav-tabs').height();
    
    $tabPane.css({
      height: tabsHeight
    });
  }
    
  $(init);
})();

$(".child-skill-item").each(function () {
    // $this is a reference to .slider in current iteration of each
    var $this = $(this);
    // find any .slider-range element WITHIN scope of $this
    $(".level-slider", $this).slider({
        min: 1,
        max: 5,
        range: "min",
        animate: true,
        value: 1,
        slide: function (event, ui) {
            // find any element with class .amount WITHIN scope of $this
            //$(".amount", $this).val("$" + ui.value);
            $(this).parent().find(".level-slider").attr('name', ui.value);
            
            $(".select-level", $this).val(ui.value);
        }
    });

}); 