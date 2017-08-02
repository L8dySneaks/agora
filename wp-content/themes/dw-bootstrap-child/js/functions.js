jQuery(function(){ /* to make sure the script runs after page load */

    jQuery('a.read_more').click(function(event){ /* find all a.read_more elements and bind the following code to them */

        event.preventDefault(); /* prevent the a from changing the url */
        jQuery(this).parents('.item').find('.team-member-bio').show(); /* show the .more_text span */

    });
});



jQuery(document).ready(function () {
    jQuery(".content").hide();
    jQuery(".show_hide").on("click", function () {
        var txt = jQuery(".content").is(':visible') ? 'Read More' : 'Read Less';
        jQuery(".show_hide").text(txt);
        jQuery(this).next('.content').slideToggle(200);
    });
});

jQuery('article').readmore();
