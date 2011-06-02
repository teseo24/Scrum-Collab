$(document).ready(function() {
/* LOAD IN TOOLBAR */
/*
$('ul.notes li').each( function() {
$(this).prepend('<span class="toolbar"></span>');
$('ul.notes li span.toolbar').load('toolbar.html');
});
*/
/* HOVER NOTES & TOOLBAR FADE */
$('ul.notes li span.toolbar').fadeTo('fast',0.5); // initial fade
$('ul.notes li').hover(
function() {
$(this).children('span.toolbar').fadeTo('fast',1);
},
function() {
$(this).children('span.toolbar').fadeTo('fast',0.5);
}
);
/* TOOLBAR BUTTON */
$('ul.notes li span.toolbar img').hover(
function() {
$(this).addClass('on');
},
function() {
$(this).removeClass('on');
}
);
/* DRAG & DROP */
$("ul.notes").sortable({
connectWith: 'ul.notes',
placeholder: 'placeholder'
});
/* FLIP */
$.fn.flipBack = function() {
$('ul.notes li.unflipped span.toolbar img.flip').click(function() {
$(this).parent().parent('li.unflipped').removeClass('unflipped').addClass('flipped')
.flip({
direction: 'rl',
color: '#EFEFEF',
onEnd: $.fn.flipForward
});
})
};
$.fn.flipForward = function() {
$('ul.notes li.flipped span.toolbar img.flip').click(function() {
$(this).parent().parent('li.flipped').removeClass('flipped').addClass('unflipped')
.flip({
direction: 'lr',
color: '#fff',
onEnd: $.fn.flipBack
});
})
};
/* FLIP INITIAL CALL */
$('ul.notes').flipBack();
// GALLERY
/*
$('a.lightbox').lightBox();
$('a.lightbox').fadeTo('fast',0.7);
$('a.lightbox img').reflect({ 'height':0.4 });
*/
});

