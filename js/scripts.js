$(document).ready(function () {

    //make sections *at least* as tall as the viewport
    var winheight = $(window).height();
    $('section').each(function(){
        var $this = $(this);
        if ($this.height() <= winheight) {
            $this.css('min-height', winheight);
        }
    });
    
    //fitvid
    $(".video").fitVids();

    // Animate Scroll
    $('.to-top').click(function(event){
      event.preventDefault();
      $('html, body').animate({scrollTop: 0}, 300);
    });

  $('a[href*=#]:not([href=#])').click(function() {
      if (location.pathname.replace(/^\//,'') === this.pathname.replace(/^\//,'') || location.hostname === this.hostname) {
          var target = $(this.hash);
          target = target.length ? target : $('[name=' + this.hash.slice(1) +']');
             if (target.length) {
               $('html,body').animate({
                   scrollTop: target.offset().top
              }, 300);
              return false;
          }
      }
  });

  // Typer
    $('[data-typer-targets]').typer();
});