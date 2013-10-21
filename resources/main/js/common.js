jQuery(document).ready(function(){
    // binds form submission and fields to the validation engine
    jQuery("#form_validation").validationEngine();
    jQuery("#form_validation_alt").validationEngine();
});

function confirmDelete()
{
    return confirm("Are you sure about this!");
}

$.extend( jQuery.fn.dataTableExt.oSort, {
    "date-uk-pre": function ( a ) {
        var ukDatea = a.split('-');
        return (ukDatea[2] + ukDatea[1] + ukDatea[0]) * 1;
    },

    "date-uk-asc": function ( a, b ) {
        return ((a < b) ? -1 : ((a > b) ? 1 : 0));
    },

    "date-uk-desc": function ( a, b ) {
        return ((a < b) ? 1 : ((a > b) ? -1 : 0));
    }
} );


$(document).ready(function() {
    $('#user-stat-table').dataTable({
        "aaSorting": [],
        "sDom": "<'row-fluid'<'span6'l><'span6'f>r>t<'row-fluid'<'span12'i><'span12 center'p>>",
        "sPaginationType": "bootstrap",
        "oLanguage": {
            "sLengthMenu": "_MENU_ records per page"
        },
        "aoColumns": [
            { "sType": "date-uk" },
            null,
            null
        ]
    });
});

//$(document).ready(function() {
//    $('.nav li.dropdown').hover(function() {
//        $(this).addClass('open');
//    }, function() {
//        $(this).removeClass('open');
//    });
//
//    $('.nav li.dropdown .dropdown-menu li').mouseout(function() {
//        $(this).removeClass('open');
//    });
//});