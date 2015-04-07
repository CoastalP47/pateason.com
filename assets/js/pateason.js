/*! pateason - v0.1.0 - created: 04-06-2015 */ 
Masonry = {
  init: function(){
    this.buildPosts();
    this.events();
  },
  events: function(){
    var helper = this;
    $(window).resize(function(){
      var $container = $('#posts > .row');
      $container.masonry('bindResize');
    });
  },
  buildPosts: function(){
    var $container = $('#posts > .row');
    $container.masonry({
      itemSelector: '.post-entry'
    });
  }
}
;
NavBar = {
  init: function(){
    this.events();
  },
  events: function(){
    var helper = this;
    $('body').on('click tap', '.menu-icon', function(e){
      e.preventDefault();
      $(this).toggleClass('active');
      $('.nav-cover').toggleClass('active');
    });
  }
}
;
ScrollSpy = {
  init: function(){
    this.events();
  },
  events: function(){
    $(document).scroll(function(e){
      var curPos = $(document).scrollTop();
      var heroPos = $('header').innerHeight();
      if(curPos > heroPos){
        $('#stickyHeader').addClass('active');
        $('.menu-icon').addClass('sticky');
      }else{
        $('#stickyHeader').removeClass('active');
        $('.menu-icon').removeClass('sticky');
      }
    });
  }
}
;
ScriptLoad = {
    init: function () {
        NavBar.init();
        Masonry.init();
        ScrollSpy.init();
    }
};

jQuery(document).ready(function($){
    $(document).foundation();
    ScriptLoad.init();
});
