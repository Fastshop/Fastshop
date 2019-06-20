$.AdminLTESidebarTweak = $.AdminLTESidebarTweak || {};

$.AdminLTESidebarTweak.options = {
    EnableRemember: true,
    NoTransitionAfterReload: true
    //Removes the transition after page reload.
};

$(function () {
    "use strict";
    
    $("body").on("collapsed.pushMenu", function() {
        if($.AdminLTESidebarTweak.options.EnableRemember) {
            localStorage.setItem("toggleState", "closed");
        }
    });
    
    $("body").on("expanded.pushMenu", function() {
        if($.AdminLTESidebarTweak.options.EnableRemember) {
            localStorage.setItem("toggleState", "opened");
        }
    });
    
    if ($.AdminLTESidebarTweak.options.EnableRemember) {
        var toggleState = localStorage.getItem("toggleState");
        if (toggleState == 'closed'){
            if ($.AdminLTESidebarTweak.options.NoTransitionAfterReload) {
                $("body").addClass('sidebar-collapse hold-transition').delay(100).queue(function() {
                    $(this).removeClass('hold-transition');
                });
            } else {
                $("body").addClass('sidebar-collapse');
            }
        }
    }
});
