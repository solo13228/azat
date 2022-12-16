function accordion(class_name, parent ='body') {

    $(parent).on('click', '.'+ class_name +'-item__header', function (e) {
        e.preventDefault();
        let elem = $('.'+ class_name +'-item');

        // Add the correct active class
        if ($(this).closest('.'+ class_name +'-item').hasClass(class_name +'-item_active')) {
            // Remove active classes
            elem.removeClass(class_name +'-item_active');
            $(this).find('.'+ class_name +'-item__header-icon').css({ 'transform' : 'rotate(0deg)' });
        } else {
            // Remove active classes
            elem.removeClass(class_name +'-item_active');
            $(parent).find('.'+ class_name +'-item__header-icon').css({ 'transform' : 'rotate(0deg)' });

            // Add the active class
            $(this).closest('.'+ class_name +'-item').addClass(class_name +'-item_active');
            $(this).find('.'+ class_name +'-item__header-icon').css({ 'transform' : 'rotate(-180deg)' });
        }

        // Show the content
        let $content = $(this).next();
        $content.slideToggle(150);
        $('.'+ class_name +'-item .'+ class_name +'-item__content').not($content).slideUp('fast');
    });
}
$(document).ready( function () {
    if ($('.accordion-item').length > 0) {
        accordion('accordion');
    }
});