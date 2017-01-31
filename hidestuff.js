var kid_friendly = $('.kid_friendly');
var adult_only = $('.adult_only');

$('#kid_friendly_only').on('click', function () {
  if (adult_only.hasClass('hidden')) {
    
    adult_only.removeClass('hidden');
    setTimeout(function () {
      adult_only.removeClass('visuallyhidden');
    }, 20);

  } else {
    
    adult_only.addClass('visuallyhidden');
    
    adult_only.one('transitionend', function(e) {

      adult_only.addClass('hidden');

    });
    
  }

});
$('#hide_gta').on('click', function () {
  if (div_gta.hasClass('hidden')) {
    
    div_gta.removeClass('hidden');
    setTimeout(function () {
      div_gta.removeClass('visuallyhidden');
    }, 20);

  } else {
    
    div_gta.addClass('visuallyhidden');
    
    div_gta.one('transitionend', function(e) {

      div_gta.addClass('hidden');

    });
    
  }

});
$('#hide_gta').on('click', function () {
  if (div_gta.hasClass('hidden')) {
    
    div_gta.removeClass('hidden');
    setTimeout(function () {
      div_gta.removeClass('visuallyhidden');
    }, 20);

  } else {
    
    div_gta.addClass('visuallyhidden');
    
    div_gta.one('transitionend', function(e) {

      div_gta.addClass('hidden');

    });
    
  }

});