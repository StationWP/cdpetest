(function($) {
  var hashTarget = window.location.hash,
  hashTarget = hashTarget.replace('#', '');
  // delete hash so the page won't scroll to it
  window.location.hash = "";


  $(document).ready(function() {

    var acc = document.getElementsByClassName("toggle");
    var i;
    
    for (i = 0; i < acc.length; i++) {
      acc[i].addEventListener("click", function() {
        this.classList.toggle("active");
        var panel = this.nextElementSibling;
        if (panel.style.maxHeight){
          panel.style.maxHeight = null;
        } else {
          panel.style.maxHeight = panel.scrollHeight + "px";
        }
        
        $( window ).resize(function() {   
            panel.style.maxHeight = panel.scrollHeight + "px";
        }); 
      });
    }    
        
    //setting up waypoints for project nav
    if ($("#side-menu").length) {

      if ( $( ".has-hero" ).length ) {
        if ( $( "#top-waypoint" ).length ) {
          var waypoint = new Waypoint({
            element: $('#top-waypoint'),
            handler: function(direction) {
              $('#sdrn_bar').toggleClass('solid');
              $('#header').toggleClass('solid');
            }
          })
        }
      }
    }

    var menuOffset;
    var menuAbsolute;
    
    var menuHeight;


    
    function setOffset() {
      if ($("#side-menu").length) {
        vertOffset = $('#content-blocks').offset();
        console.log(vertOffset.top);
        console.log($(window).height());
        vertOffsetTop = vertOffset.top;
        hideNav = $('#copy-nav-waypoint').offset();
        hideNavOffset = hideNav.top;
        menuHeight = $('#side-menu').height();
        
        console.log(hideNav + 'HideNavOffset');
        menuAbsolute = menuHeight + 228;
      }

    }
    
    setOffset();

    if ( $( "#side-menu" ).length ) {
  
      var waypointFixed = new Waypoint({
        element: $('#content-blocks'),
        handler: function(direction) {
          if ($(window).width() > 768) {
            if (direction === "down") $('#side-menu').addClass('fixed');
            if (direction === "up") $('#side-menu').removeClass('fixed');
            }
          },
          offset: 135
      })
      
      var waypointAbsolute = new Waypoint({
        element: $('#copy-nav-waypoint'),
        handler: function(direction) {
        if ($(window).width() > 768) {
          if (direction === "down") $('#side-menu').removeClass('fixed');
          if (direction === "down") $('#side-menu').addClass('absolute');
          if (direction === "up") $('#side-menu').removeClass('absolute');
          if (direction === "up") $('#side-menu').addClass('fixed');
          }
        },
        offset: menuAbsolute
      })
  
      setOffset();   

    }
    
    var smoothOffset;
    
    $('#side-menu a').click(function(event) {
      event.preventDefault();
      var link = this;
      console.log(link.hash);
      if ($(window).width() > 959) smoothOffset = -134;
      else smoothOffset = -104;

      $.smoothScroll({
        scrollTarget: link.hash,
        offset: smoothOffset
      });
    });


    $( window ).resize(function() { 
    if ($("#side-menu").length) {
      setOffset();
      Waypoint.refreshAll();
    }

    });
  
// match img height with project info for two column layout

    if ($( window ).width() > 767) {
  	  $('.col-match').matchHeight({
          byRow: true,
          property: 'height',
          remove: true
      });
    }
  	
  	$( window ).resize(function() {
      if ($( window ).width() > 767) {
    	  $('.col-match').matchHeight({
            byRow: true,
            property: 'height',
            remove: true
        });
      } else $('.col-match').matchHeight('remove');
    });
  	

// mobile nav
    $('#hamburger').click(function() {
      $('body').toggleClass('js-drawer-open-NavDrawer');
      $('body').toggleClass('js-drawer-open');
    })
    
    $('.drawer__close svg').click(function() {
      $('body').toggleClass('js-drawer-open-NavDrawer');
      $('body').toggleClass('js-drawer-open');
    })
  });  
})(jQuery);