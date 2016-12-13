/* From http://stackoverflow.com/questions/1987524/turn-a-number-into-star-rating-display-using-jquery-and-css */

$.fn.stars = function() {
      return $(this).each(function() {
          // Get the value
          var val = parseFloat($(this).html());
          console.log(val);
          debugger;
          // Make sure that the value is in 0 - 5 range, multiply to get width
          var size = Math.max(0, (Math.min(5, val))) * 16;
          // Create stars holder
          var $span = $('<span />').width(size);
          // Replace the numerical value with stars
          $(this).html($span);
      });
}