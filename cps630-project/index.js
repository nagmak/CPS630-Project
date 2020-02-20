$('.dropdown-menu a.dropdown-toggle').on('click', function(e) {
    if (!$(this).next().hasClass('show')) {
      $(this).parents('.dropdown-menu').first().find('.show').removeClass('show');
    }

    $(this).parents('li.nav-item.dropdown.show').on('hidden.bs.dropdown', function(e) {
        $('.dropdown-submenu .show').removeClass('show');
    });
  
    return false;
  });


$('.dropdown-submenu a.dropdown-toggle').on('click', function(e) {
      
      console.log("submenu click")
      var $subMenu = $(this).next('.dropdown-menu');
      $subMenu.toggleClass('show');

});
