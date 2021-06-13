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
    let tbody = $(".titre_colonnes").parent().children()[1];
    let col = tbody.children[0].children;
    // console.log(col[0].width());
    console.log(col[0].outerWidth());
    // console.log($(".titre_colonnes tr").parent().parent().children()[1].children()[0].children()[0].width());
    // for (let i = 0; i < $(".titre_colonnes tr").children().length; i++) {
    //     let width = $(".titre_colonnes tr").parent().children()[1].children()[i].width();
    //     $(".titre_colonnes tr").children()[i].css('width', width);
    // }
})