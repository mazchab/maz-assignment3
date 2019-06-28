$('#iconified').on('keyup', function() {
    var input = $(this);
    if(input.val().length === 0) {
        input.addClass('empty');
    } else {
        input.removeClass('empty');
    }
});

window.transitionToPage = function(href) {
    document.querySelector('html').slideUp = 0
    setTimeout(function() { 
        window.location.href = href
    }, 500);
};

document.addEventListener('DOMContentLoaded', function(event) {
    document.querySelector('html').style.opacity = 1
});