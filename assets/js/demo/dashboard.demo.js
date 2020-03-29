var handleNotification = function() {
    $.notification({
        title: 'Application Needs Fastest Internet',
        content: 'If no records coming you need to refresh the app.',
        icon: 'fa fa-envelope',
        iconClass: 'bg-gradient-blue-indigo text-white'
    });
};


/* Controller
------------------------------------------------ */
$(document).ready(function() {
    handleNotification();
});