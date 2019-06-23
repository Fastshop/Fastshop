window.$ = window.$ || window.jQuery;

$(function () {

    $('#wpadminbar .quicklinks .ab-top-menu li.group a').click(function () {
        var li = $(this).parents('li.group');
        var group = li.attr('class').match(/group-\w+/)[0];
        $('#adminmenu li.group').hide();
        $('#adminmenu li.' + group).show();
        $('#wpadminbar .quicklinks .ab-top-menu li.group').removeClass('hover');
        li.addClass('hover');
        //console.log(group);
    });


    //$('#adminmenu > .wp-first-item').addClass('group group-main');

    $('#adminmenu > .menu-top').each(function () {
        var t = $(this).find('.wp-menu-name .group');
        if (t.length) {
            var group = t.attr('class').match(/group-\w+/)[0];
            t.parents("li.menu-top").addClass("group " + group);
        } else if (!$(this).hasClass('group') && $(this).attr('id') != 'menu-dashboard') {
            $(this).addClass('group group-main');
        }
    });

    var group = 'group-main';
    var kk = $('#adminmenu > .wp-has-current-submenu.group').attr('class');
    if (kk) {
        group = kk.match(/group-\w+/)[0];
    }
    $('#wp-admin-bar-' + group + " a").trigger("click");


    //$('#wp-admin-bar-' + group).addClass('hover');
    //$('#wpadminbar .quicklinks .ab-top-menu li.group').show();
    $('#adminmenu').show();

    $(".wp-has-submenu.menu-top").click(function () {
        console.log(this);
        var cur = this;
        $('.wp-has-current-submenu.wp-menu-open')
            .removeClass('wp-has-current-submenu')
            .addClass('wp-not-current-submenu')
            .removeClass('wp-menu-open');

        $('#adminmenu .current').removeClass('current');

        $(cur).removeClass('wp-not-current-submenu').addClass('wp-has-current-submenu')
            .removeClass('opensub').addClass('wp-menu-open');


        $(this).find('.wp-has-submenu.menu-top')
            .removeClass('wp-not-current-submenu')
            .addClass('wp-has-current-submenu')
            .addClass('wp-menu-open');

        $(this).parents('.menu-top')
            .removeClass('wp-not-current-submenu')
            .removeClass('opensub')
            .addClass('wp-has-current-submenu')
            .addClass('wp-menu-open');

        //return  false;

        if ($(this).is('a') || $(this).attr('aria-haspopup') === 'false') {
            return false;
        }
    });
});

