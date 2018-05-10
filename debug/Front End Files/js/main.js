$(document).ready(function(){
  
    $("a[data-toggle='collapse']").click(function(event){
        event.preventDefault();
    });
  
    /* datepicker */
    $('[data-toggle="tooltip"]').tooltip(); 
    $('.datepicker').datepicker({
        format: "dd/mm/yyyy"
    });
    
    /* video upload preview */
    $( ".video-upload" ).change(function() {
        function getId(url) {
            var regExp = /^.*(youtu.be\/|v\/|u\/\w\/|embed\/|watch\?v=|\&v=)([^#\&\?]*).*/;
            var match = url.match(regExp);
        
            if (match && match[2].length == 11) {
                return match[2];
            } else {
                return 'error';
            }
        }
        
        var youtube_id = getId( this.value );
        
        if ( youtube_id != 'error' ) {
          $('#youtube_preview').html('<div class="video-wrapper"><iframe width="560" height="315" src="//www.youtube.com/embed/' + youtube_id + '" frameborder="0" allowfullscreen></iframe></div>');  
        } else{
           $('#youtube_preview').html('<div class="video-wrapper"></div>'); 
        }
    });
    
   /* View More / View Less */
    $('.view-more-less').on("click", function() {
        var el = $(this);
        el.text() == el.data("text-swap") 
        ? el.text(el.data("text-original")) 
        : el.text(el.data("text-swap"));
    });
    
    /* row selected */
    $(".message-checkbox").change(function(){
        $(".message-checkbox").each(function(){
          if( $(this).data('id') == $('.message-row').data('row') ) {
            $('.message-row:has(:checked)').addClass('row-selected');
            $('.message-row:not(:has(:checked))').removeClass('row-selected');
          } 
        });  
    });
    $("#check_all").change(function(){
          $('.message-checkbox').prop('checked', $(this).is(':checked'));
          $('.message-row:has(:checked)').addClass('row-selected');
          $('.message-row:not(:has(:checked))').removeClass('row-selected');
    });
    
    
});

/* messages */
$.fn.pageMe = function(opts){
    var $this = this,
        defaults = {
            perPage: $('#messages-tbody').data('per-page'),
            showPrevNext: false,
            hidePageNumbers: false
        },
        settings = $.extend(defaults, opts);
    
    var listElement = $this;
    var perPage = settings.perPage; 
    var children = listElement.children();
    var pager = $('.message-pager');
    
    if (typeof settings.childSelector!="undefined") {
        children = listElement.find(settings.childSelector);
    }
    
    if (typeof settings.pagerSelector!="undefined") {
        pager = $(settings.pagerSelector);
    }
    
    var numItems = children.size();
    $(".total-entries").text(numItems);
    
    var numPages = Math.ceil(numItems/perPage);
    $(".total-in-page").text(perPage);
    
    if( numPages == 1 ){
      $('#myPager').remove();
    }
    
    pager.data("curr",0);
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="prev_link"><span class="fa fa-angle-left"></span></a></li>').appendTo(pager);
    }
    
    var curr = 0;
    while(numPages > curr && (settings.hidePageNumbers==false)){
        $('<li><a href="#" class="page_link">'+(curr+1)+'</a></li>').appendTo(pager);
        curr++;
    }
    
    if (settings.showPrevNext){
        $('<li><a href="#" class="next_link"><span class="fa fa-angle-right"></span></a></li>').appendTo(pager);
    }
    
    pager.find('.page_link:first').addClass('active');
    pager.find('.prev_link').hide();
    if (numPages<=1) {
        pager.find('.next_link').hide();
    }
  	pager.children().eq(1).addClass("active");
    
    children.detach();
    children.slice(0, perPage).appendTo('#messages-tbody');
    
    pager.find('li .page_link').click(function(){
        var clickedPage = $(this).html().valueOf()-1;
        goTo(clickedPage,perPage);
        return false;
    });
    pager.find('li .prev_link').click(function(){
        previous();
        return false;
    });
    pager.find('li .next_link').click(function(){
        next();
        return false;
    });
    
    function previous(){
        var goToPage = parseInt(pager.data("curr")) - 1;
        goTo(goToPage);
    }
     
    function next(){
        goToPage = parseInt(pager.data("curr")) + 1;
        goTo(goToPage);
    }
    function get_num_entries(){
        goTo(page);
    }
    function goTo(page){
      
        var startAt = page * perPage,
            endOn = startAt + perPage;
        
        $(".start-in-page").text(startAt+1);
        $(".total-in-page").text(endOn);
        $('#check_all').prop('checked',false);
        $('.message-checkbox').prop('checked',false);
        $('.message-row:not(:has(:checked))').removeClass('row-selected');
        
        children.detach().slice(startAt, endOn).appendTo('#messages-tbody');
        
        if (page>=1) {
            pager.find('.prev_link').show();
        }
        else {
            pager.find('.prev_link').hide();
        }
        
        if (page<(numPages-1)) {
            pager.find('.next_link').show();
        }
        else {
            pager.find('.next_link').hide();
        }
        
        pager.data("curr",page);
      	pager.children().removeClass("active");
        pager.children().eq(page+1).addClass("active");
    
    }
};

$(document).ready(function(){
  var per_page = $('#messages-tbody').data('per-page');
  $('#messages-tbody').pageMe({pagerSelector:'#myPager',showPrevNext:true,hidePageNumbers:false,perPage:per_page});
});


/* image upload preview */
'use strict';

;( function( $, window, document, undefined )
{
	$( '.inputfile' ).each( function()
	{
		var $input	 = $( this ),
			$label	 = $input.next( 'label' ),
			labelVal = $label.html();

		$input.on( 'change', function( e )
		{
			var fileName = '';

			if( this.files && this.files.length > 1 )
				fileName = ( this.getAttribute( 'data-multiple-caption' ) || '' ).replace( '{count}', this.files.length );
			else if( e.target.value )
				fileName = e.target.value.split( '\\' ).pop();

			if( fileName )
				$label.find( 'span.file-name' ).html( fileName );
			else
				$label.html( labelVal );

			readURL(this);
		    $('.image-preview-clear').css('display','block');
		});

		function readURL(input) {
		    if (input.files && input.files[0]) {
		        var reader = new FileReader();
		        
		        reader.onload = function (e) {
		            $('.preview-image').attr('src', e.target.result);
		        }
		        
		        reader.readAsDataURL(input.files[0]);
		    }
		}

		$('.image-preview-clear').click(function(){
		    $('.preview-image').attr('src','');
		    $('.image-preview-clear').css('display','none');
		    $('.inputfile').val("");
		}); 

		// Firefox bug fix
		$input
		.on( 'focus', function(){ $input.addClass( 'has-focus' ); })
		.on( 'blur', function(){ $input.removeClass( 'has-focus' ); });
	});
})( jQuery, window, document );