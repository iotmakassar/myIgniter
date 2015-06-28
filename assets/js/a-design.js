$(document).ready(function () {
    var url = site + '/' + ur_class + '/' + url_function;
        
    $('ul.sidebar-menu a').filter(function() {
         return this.href == url;
    }).parent().addClass('active');

    $('.treeview li.active').parent().parent().addClass('active');
    $('.treeview .level-2 li.active').parent().parent().parent().parent().addClass('active');

    //list.js
    var options = {
      searchClass: ['searchlist'], 
      valueNames: [ 'name' ]
    };
    $("#searchSidebar").focus(function() {
        menune = $('.name').parent().clone();
        $('#menuList').html(menune);
        $('#menuSub').hide();
        var menuSidebarList = new List('menuSidebar', options);
    }).focusout(function() {
        if (!$(this).val()) {
            $('#menuList').html('');
            $('#menuSub').show();
        };
    });
    $('.slimScrollDiv').mouseleave(function() {
        $('#searchSidebar').val('');        
    });
    
    //grocery fix bug
    $('.chzn-container').css('width', '100%');
    $('.chzn-drop').css('width', '100%');
    $('.chzn-search input').css('width', '100%');
    $('.fileinput-button').removeClass('qq-upload-button').addClass('btn btn-success').prepend('<i class="fa fa-upload"></i> '); 
    $('#fancybox-outer').css('width','107%');

    loadIt();
    setInterval(loadIt, 10000);
});

function loadIt() {
    $.get(site + '/crud/ajax_notif', function(data) {
        if (data != 'FALSE') {
            $('#announcement').html(data);
        }else{
            $('#announcement').html('');
        };
    });
}