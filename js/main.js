$(function() { $('.banner').unslider() })

console.log('ready');

$('.banner').on('unslider.change', function(event, index, slide) {
    
    var link = slide.children().attr('href');
    
    $(".fb-share-button").attr('data-href', link)
    
    $(".fb-xfbml-parse-ignore").attr('onclick', "window.open('https://www.facebook.com/sharer/sharer.php?u="+encodeURIComponent(link)+"&amp;src=sdkpreparse', 'newwindow', 'width=600, height=500'); return false;")
    
    $(".twitter-share-button").attr('onclick', "window.open('https://twitter.com/intent/tweet?text="+encodeURI(link)+"', 'newwindow', 'width=600, height=500'); return false;")
});