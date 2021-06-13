let $ttr = $(".titre_colonnes");
let $offset = $ttr.offset();

$(window).on('scroll', function() {
    if ($(window).scrollTop() > $offset.top) {
        $ttr.css('position', 'fixed');
        $ttr.css('top', '10');
        $ttr.css('width', '100%');
    } else {
        $ttr.css('position', 'relative');
    }
    for (let i = 0; i < $(".titre_colonnes tr").children().length; i++) {
        let colWidth = $(".td" + i).css("width");
        $(".th" + i).css('width', colWidth);
    }
})