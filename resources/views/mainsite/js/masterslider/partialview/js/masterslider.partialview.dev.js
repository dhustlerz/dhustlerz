(function(){window.MSPartialView=function(e){MSWaveView.call(this,e);this.$element.removeClass("ms-wave-view").addClass("ms-stf-view")};MSPartialView.extend(MSWaveView);MSPartialView._3dreq=true;var e=MSPartialView.prototype;var t=MSWaveView.prototype;e.__updateSlidesHoriz=function(e,t){var n=Math.abs(t*100/this.__width);e.$bg_img.css("opacity",(100-Math.abs(t*120/this.__width/3))/100);e.$element.css(window._csspfx+"transform","translateZ("+ -n*3+"px) rotateY(0.01deg) translateX("+t*.75+"px)")};e.__updateSlidesVertic=function(e,t){this.__updateSlidesHoriz(e,t)};MSSlideController.registerView("prtialwave",MSPartialView)})();(function(){window.MSPartialView2=function(e){MSWaveView.call(this,e);this.$element.removeClass("ms-wave-view").addClass("ms-stf-view")};MSPartialView2.extend(MSWaveView);var e=MSPartialView2.prototype;var t=MSWaveView.prototype;e.__updateSlidesHoriz=function(e,t){var n=Math.abs(t*100/this.__width);n=Math.min(n,100);e.$element.css("opacity",1-n/300);e.$element.css(window._csspfx+"transform","scale("+(1-n/800)+") rotateY(0.01deg) ")};e.__updateSlidesVertic=function(e,t){this.__updateSlidesHoriz(e,t)};MSSlideController.registerView("prtialwave2",MSPartialView2)})();(function(){window.MSPartialView3=function(e){MSWaveView.call(this,e);this.$element.removeClass("ms-wave-view").addClass("ms-stf-view")};MSPartialView3.extend(MSWaveView);MSPartialView3._3dreq=true;var e=MSPartialView3.prototype;var t=MSWaveView.prototype;e.__updateSlidesHoriz=function(e,t){var n=Math.abs(t*100/this.__width);n=Math.min(n,100);var r=Math.min(n*50/100,50)*(t<0?-1:1);var i=n*20/100;e.$element.css("opacity",1-n/300);e.$element.css(window._csspfx+"transform","translateZ("+ -i*5+"px) rotateY("+r+"deg) ")};e.__updateSlidesVertic=function(e,t){this.__updateSlidesHoriz(e,t)};MSSlideController.registerView("prtialwave3",MSPartialView3)})()