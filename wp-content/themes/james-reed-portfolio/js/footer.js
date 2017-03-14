jQuery(function ($) {
  function initFooter() {
    var $titles = $('.footer-nav .title');
    var $navs = $titles.next();

    $titles.on('click', function (e) {
      var $this = $(this);
      var $target = $('#' + $this.data('toggle'));

      if ($target.outerHeight() > 0) {
          $target.removeClass('open');
          $this.removeClass('active');
      } else {
          $navs.removeClass('open');
          $titles.removeClass('active');
          $target.addClass('open');
          $this.addClass('active');
      }
    });
  }

  initFooter();
});
