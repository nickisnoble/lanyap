$.fn.shynav = function(opts) {
  var elem = this;
 
  var defaults = {
    delay: 3000,                      // how long til shynav gets shy
    minScroll: $(elem).height() || 0, // how far user scrolls before shynav does its thing
    detachedClass: 'scrolled',        // what class does the element get when scrolled
    hiddenClass: 'hidden'             // what class does the element get when hidden
  };
  
  var opts = $.extend(defaults, opts);
 
  var nav = {
    el: $(elem),
    
    show: function() {
      this.el.removeClass(opts.hiddenClass);
      this.checkInteraction();
    },
    
    hide: function() {
      this.el.addClass(opts.hiddenClass);
    },
    
    checkInteraction: function() {
      var self = this;
      
      if (this.timer) clearTimeout(this.timer);
      this.timer = setTimeout(function() {
        if (self.isScrolled()) {
          self.hide();
        }
        return false;
      }, opts.delay);
    },
    
    isHidden: function() {
      return this.el.hasClass(opts.hiddenClass);
    },
    
    isScrolled: function() {
      return ($(window).scrollTop() > opts.minScroll);
    },
    
    handle: function(direction) {
      if (this.isScrolled()) {
        this.el.addClass(opts.detachedClass);
      } else {
        this.el.removeClass(opts.detachedClass);
      }
      
      if (direction == 'down') {
        if (this.isScrolled()) this.hide();
      } else if (this.isHidden()) {
        this.show();
      }
      
      this.scrollTop = $(window).scrollTop();
    }
  };
 
  // init binding
  $(window).scroll(function(){
    var scrollDirection = ($(this).scrollTop() >= nav.scrollTop) ? 'down' : 'up';
    nav.handle(scrollDirection);
  });
}
 
//usage
$('header').shynav({
  delay: 4000,
  minScroll: 0,
  detachedClass: 'fixed'
});