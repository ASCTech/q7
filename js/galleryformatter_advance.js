jQuery(document).ready(function() {
  var advance = setInterval("jQuery('a.next-slide').trigger('click')",6000);
  jQuery('.galleryformatter').hover(
     function () {
       clearInterval(advance);
     },
     function () {
       advance = setInterval("jQuery('a.next-slide').trigger('click')",6000);
     }
   );


  var displayThumbs = jQuery('.field-name-field-displaythumbs').text();
  if (displayThumbs=='0') {
    jQuery('.gallery-thumbs').hide();
  }
}

    );
