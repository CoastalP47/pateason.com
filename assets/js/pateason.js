/*! pateason - v0.1.0 - created: 04-05-2015 */ 
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
ScriptLoad = {
    init: function () {
        NavBar.init();
    }
};

jQuery(document).ready(function($){
    $(document).foundation();
    ScriptLoad.init();
});
