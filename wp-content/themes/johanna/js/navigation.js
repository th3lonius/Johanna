(function( window ){

$("button").click(function(){
  $(this).toggleClass("close");
});
    
	
    var body = document.body,
        mask = document.createElement("div"),
        togglePushLeft = document.querySelector( ".toggle-push-right" ),
        pushMenuLeft = document.querySelector( ".push-menu-right" ),
        activeNav
    ;
    mask.className = "mask";

    /* push menu left */
    togglePushLeft.addEventListener( "click", function(){
        $(body).toggleClass("pml-open");
        activeNav = "pml-open";
    } );

    /* hide active menu if mask is clicked */
    mask.addEventListener( "click", function(){
        classie.remove( body, activeNav );
        activeNav = "";
        document.body.removeChild(mask);
    } );

    /* hide active menu if close menu button is clicked */
    [].slice.call(document.querySelectorAll(".close-menu")).forEach(function(el,i){
        el.addEventListener( "click", function(){
            classie.remove( body, activeNav );
            activeNav = "";
            document.body.removeChild(mask);
        } );
    });

})( window );