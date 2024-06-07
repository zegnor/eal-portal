$(document).ready(function() {

function keyword_index_filter(elem) {
    var value = $(elem).val().toLowerCase(),
        headings = $('.keywords-index-list h4');

    value.length > 0 ? headings.hide() : headings.show();

    $(".keywords-index-list li").each(function() {
        $(this).text().toLowerCase().search(value) > -1 ? $(this).removeClass('hide-keyword') : $(this).addClass('hide-keyword');
    });
}

$('.keywords-filter-block .filter-keywords').on('keyup', function() {
    keyword_index_filter(this);
});

$('.keywords-filter-block .filter-controls').on('click', '.control', function() {
    $(this).parent().children('.control').removeClass('active');
    $(this).addClass('active');
    if ($(this).hasClass('block')) {
        $('.keywords-index-list').addClass('display-block');
    } else {
        $('.keywords-index-list').removeClass('display-block');
    }
});
  
  });