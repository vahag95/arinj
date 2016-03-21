@extends('layouts.layout')
@section('title')
	{{ $event->title }}
@stop
@section('content')	
	<!-- Core CSS file -->	
	<link rel="stylesheet" href="/photoSwipe/dist/photoswipe.css"> 

	<!-- Skin CSS file (styling of UI - buttons, caption, etc.)
	     In the folder of skin CSS file there are also:
	     - .png and .svg icons sprite, 
	     - preloader.gif (for browsers that do not support CSS animations) -->
	<link rel="stylesheet" href="/photoSwipe/dist/default-skin/default-skin.css"> 

	<!-- Core JS file -->
	<script src="/photoSwipe/dist/photoswipe.min.js"></script> 

	<!-- UI JS file -->
	<script src="/photoSwipe/dist/photoswipe-ui-default.min.js"></script>
	<div class="pswp" tabindex="-1" role="dialog" aria-hidden="true">

	    <!-- Background of PhotoSwipe. 
	         It's a separate element as animating opacity is faster than rgba(). -->
	    <div class="pswp__bg"></div>

	    <!-- Slides wrapper with overflow:hidden. -->
	    <div class="pswp__scroll-wrap">

	        <!-- Container that holds slides. 
	            PhotoSwipe keeps only 3 of them in the DOM to save memory.
	            Don't modify these 3 pswp__item elements, data is added later on. -->
	        <div class="pswp__container">
	            <div class="pswp__item"></div>
	            <div class="pswp__item"></div>
	            <div class="pswp__item"></div>
	        </div>

	        <!-- Default (PhotoSwipeUI_Default) interface on top of sliding area. Can be changed. -->
	        <div class="pswp__ui pswp__ui--hidden">

	            <div class="pswp__top-bar">

	                <!--  Controls are self-explanatory. Order can be changed. -->

	                <div class="pswp__counter"></div>

	                <button class="pswp__button pswp__button--close" title="Close (Esc)"></button>                

	                <button class="pswp__button pswp__button--fs" title="Toggle fullscreen"></button>

	                <button class="pswp__button pswp__button--zoom" title="Zoom in/out"></button>

	                <!-- Preloader demo http://codepen.io/dimsemenov/pen/yyBWoR -->
	                <!-- element will get class pswp__preloader--active when preloader is running -->
	                <div class="pswp__preloader">
	                    <div class="pswp__preloader__icn">
	                      <div class="pswp__preloader__cut">
	                        <div class="pswp__preloader__donut"></div>
	                      </div>
	                    </div>
	                </div>
	            </div>

	            <div class="pswp__share-modal pswp__share-modal--hidden pswp__single-tap">
	                <div class="pswp__share-tooltip"></div> 
	            </div>

	            <button class="pswp__button pswp__button--arrow--left" title="Previous (arrow left)">
	            </button>

	            <button class="pswp__button pswp__button--arrow--right" title="Next (arrow right)">
	            </button>

	            <div class="pswp__caption">
	                <div class="pswp__caption__center"></div>
	            </div>

	        </div>

	    </div>

	</div>
	<section id="blog"> 
		<div class="container">
			<div class="row text-center clearfix">
				<div class="single_event_title col-sm-8 col-sm-offset-2">
					<h2 class="title-one">{{ $event->title }}</h2>
					@if(isset($event->description))
						<h2>{{ $event->description }}</h2>
					@endif
				</div>
			</div> 
			<div class="row photos">				
				@foreach($event->images as $image)
					<div style="" class="photo">
						<img style="cursor: zoom-in;" onclick="imageOpen('https://s3-us-west-2.amazonaws.com/arinj{{ $image->image_url }}', {{ json_encode($image_urls) }})" src="https://s3-us-west-2.amazonaws.com/arinj{{ $image->image_url }}">
					</div>
				@endforeach
			</div> 
		</div> 
	</section> <!--/#blog-->	
	<script src="/assets/js/xgallerify.min.js"></script>
	<script>		
		$(document).on('ready', function(){
			var gallery = $('.photos').gallerify({
			  margin:10,
			  mode:'bootstrap',
			  lastRow:'adjust'
			});	
		})
		function imageOpen(source, sources){
				console.log( source );
				console.log( sources );

				var pswpElement = document.querySelectorAll('.pswp')[0];
				var items = [
				    {
				        src: source,
				        w: 1200,
				        h: 900
				    }		    
				];
				for( var src in sources ){
					if( 'https://s3-us-west-2.amazonaws.com/arinj' + sources[src] !== source ){
						items.push({
							src: 'https://s3-us-west-2.amazonaws.com/arinj'+sources[src],
							w: 1200,
							h: 900
						})
					}
				}
				// define options (if needed)
				var options = {
				    // optionName: 'option value'
				    // for example:		 
				    bgOpacity : 0.6, 
				    closeOnScroll : false,  
				    index: 0 // start at first slide
				};
				// Initializes and opens PhotoSwipe
				var gallery = new PhotoSwipe( pswpElement, PhotoSwipeUI_Default, items, options);
				gallery.listen('imageLoadComplete', function(index, item) {
			        var img = new Image();
			        img.src = item.src;	        
			        item.w = img.width;
			        item.h = img.height;
			    });
			    gallery.listen('gettingData', function(index, item) {
			        // index - index of a slide that was loaded
			        // item - slide object
			        // e.g. change path to the image based on `something`
			        var img = new Image();
			        img.src = item.src;
					item.w = img.width;
					item.h = img.height;	        
			    });
				gallery.init();		
			}
			
		</script>
	</script>
@stop