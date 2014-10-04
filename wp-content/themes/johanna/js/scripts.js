jQuery(document).ready(function($){
	
var image = new Image;
var result = $('body > .target-image').attr('src');
image.src = result;
var colorThief = new ColorThief();
var color = colorThief.getColor(image);
	
	console.log(color);

var str=location.href.toLowerCase();
	
$("nav ul li a").each(function() {
if (str.indexOf(this.href.toLowerCase()) > -1) {
 $("a.active").removeClass("active");
$(this).addClass("active");
}
 });
	
	    
    $('#venues_slider').superslides();
    

/*----- NAVIGATION -----*/

// Cache selectors
var lastId,
    topMenu = $("#navMain ul"),
    topMenuHeight = topMenu.outerHeight(),
    // All list items
    menuItems = topMenu.find("a"),
    // Anchors corresponding to menu items
    scrollItems = menuItems.map(function(){
      var item = $($(this).attr("href"));
      if (item.length) { return item; }
    });

// Bind click handler to menu items
// so we can get a fancy scroll animation
menuItems.click(function(e){
  var href = $(this).attr("href"),
      offsetTop = href === "#" ? 0 : $(href).offset().top;
  $('html, body').stop().animate({ 
      scrollTop: offsetTop
  }, 500);
  e.preventDefault();
});

// Bind to scroll
$(window).scroll(function(){
   // Get container scroll position
   var fromTop = $(this).scrollTop()+topMenuHeight;
   
   // Get id of current scroll item
   var cur = scrollItems.map(function(){
     if ($(this).offset().top < fromTop)
       return this;
   });
   // Get the id of the current element
   cur = cur[cur.length-1];
   var id = cur && cur.length ? cur[0].id : "";
   
   if (lastId !== id) {
       lastId = id;
       // Set/remove active class
       menuItems
         .parent().removeClass("active")
         .end().filter("[href=#"+id+"]").parent().addClass("active");
   }
});
    
/*MENUCONTROLLER*/
// Hide Header on on scroll down
var didScroll;
var lastScrollTop = 0;
var delta = 5;
var navbarHeight = $('body > nav, header h2, .hamburger').outerHeight();

$(window).scroll(function(event){
    didScroll = true;
});

setInterval(function() {
    if (didScroll) {
        hasScrolled();
        didScroll = false;
    }
}, 250);

function hasScrolled() {
    var st = $(this).scrollTop();
    
    // Make sure they scroll more than delta
    if(Math.abs(lastScrollTop - st) <= delta)
        return;
    
    // If they scrolled down and are past the navbar, add class .nav-up.
    // This is necessary so you never see what is "behind" the navbar.
    if (st > lastScrollTop && st > navbarHeight){
        // Scroll Down
        $('body > nav, header h2').removeClass('nav-down').addClass('nav-up');
    } else if ($(window).width() < 800 && st > lastScrollTop && st > navbarHeight) {
		$('body > nav, header h2, .hamburger').removeClass('nav-down').addClass('nav-up');
	} else {
        // Scroll Up
        if(st + $(window).height() < $(document).height()) {
            $('body > nav, header h2').removeClass('nav-up').addClass('nav-down');
        }
    }
    
    lastScrollTop = st;
}
 
});