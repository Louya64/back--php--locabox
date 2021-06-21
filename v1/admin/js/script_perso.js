let $ttr = $(".titre_colonnes");
let $offset = $ttr.offset();

$(window).on('scroll', function() {
    if ($(window).scrollTop() > $offset.top) {
        $ttr.addClass('ttr_fixed');
    } else {
        $ttr.removeClass('ttr_fixed');
    }
    
    for (let i = 0; i < $(".titre_colonnes tr").children().length; i++) {
        let colWidth = $(".td" + i).css("width");
        $(".th" + i).css('width', colWidth);
    }
})