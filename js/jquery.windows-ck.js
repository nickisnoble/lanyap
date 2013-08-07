/*!
 * windows: a handy, loosely-coupled jQuery plugin for full-screen scrolling windows.
 * Version: 0.0.1
 * Original author: @nick-jonas
 * Website: http://www.workofjonas.com
 * Licensed under the MIT license
 */(function(e,t,n,r){function h(t,n){this.element=t;u=u=e.extend({},o,n);this._defaults=o;this._name=s;c.push(t);var r=e(t).isOnScreen();e(t).data("onScreen",r);r&&u.onWindowEnter(e(t))}var i=this,s="windows",o={snapping:!0,snapSpeed:200,snapInterval:200,onScroll:function(){},onSnapComplete:function(){},onWindowEnter:function(){}},u={},a=e(t),f=0,l=null,c=[];e.fn.ratioVisible=function(){var e=a.scrollTop();if(!this.isOnScreen())return 0;var t=this.offset(),n=t.top-e,r=a.height(),i=(n+r)/r;i>1&&(i=1-(i-1));return i};e.fn.isOnScreen=function(){var e=a.scrollTop(),t=a.height(),n=this.offset(),r=n.top-e;return r>=t||r<=-t?!1:!0};var p=e.fn.getCurrentWindow=function(){var t=0,n=c[0];e.each(c,function(r){var i=e(this).ratioVisible();if(Math.abs(i)>Math.abs(t)){n=e(this);t=i}});return e(n)},d=function(){f=a.scrollTop();m();u.onScroll(f);e.each(c,function(t){var n=e(this),r=n.isOnScreen();r&&(n.data("onScreen")||u.onWindowEnter(n));n.data("onScreen",r)})},v=function(){m()},m=function(){l&&clearTimeout(l);u.snapping&&(l=setTimeout(function(){var t=p(),n=t.offset().top,r=!1;e("html:not(:animated),body:not(:animated)").animate({scrollTop:n},u.snapSpeed,function(){if(!r){l&&clearTimeout(l);l=null;r=!0;u.onSnapComplete(t)}})},u.snapInterval))};e.fn[s]=function(t){a.scroll(d);a.resize(v);return this.each(function(n){e.data(this,"plugin_"+s)||e.data(this,"plugin_"+s,new h(this,t))})}})(jQuery,window,document);