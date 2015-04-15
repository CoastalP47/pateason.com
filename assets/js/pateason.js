/*! pateason - v0.1.0 - created: 04-15-2015 */ 
Masonry = {
  init: function(){
    this.buildPosts();
    this.events();
  },
  events: function(){
    var helper = this;
    $(window).resize(function(){
      var $container = $('#posts > .row.posts');
      $container.masonry('bindResize');
    });
  },
  buildPosts: function(){
    var $container = $('#posts > .row.posts');
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
      if($(this).hasClass('active')){
        $(this).removeClass('active');
        $(this).addClass('reverse');
        $('.nav-cover').removeClass('active').removeClass('search');
        $('#searchResults').empty();
        $('.nav-cover input.search-field').val('');
      }else{
        $(this).addClass('active');
        $(this).removeClass('reverse');
        $('.nav-cover').addClass('active');
      }
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
Search = {
	init: function(){
		this.events();
	},
	events: function(){
		var helper = this;
		$('.nav-cover input.search-field').focus(function(e){
			$('.nav-cover').addClass('search');
		}).blur(function(e){
			$('.nav-cover').removeClass('search');
		});
		$('.nav-cover form.search-form').submit(function(e){
			e.preventDefault();
			helper.processAJAX($('.nav-cover input.search-field').val());
		});
	},
	processAJAX: function(data){
		if(data && data != ''){
			$.ajax({
			  method: "POST",
			  url: pateason_wp.ajax_url,
			  data: {
			  	action : 'search_results',
			  	search : data
			  }
			}).done(function(response){
			    $('#searchResults').html(response);
			});
		}
	}
};
ScriptLoad = {
    init: function () {
        NavBar.init();
        Masonry.init();
        ScrollSpy.init();
        Search.init();
    }
};

jQuery(document).ready(function($){
    $(document).foundation();
    ScriptLoad.init();
});
