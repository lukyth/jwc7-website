<!DOCTYPE html>
<html>
<head>
	<title>Ywc Team Blue</title>
	<link rel="stylesheet" href="./css/jquery.Jcrop.css" type="text/css" />
	<style type="text/css" href="./style.css"></style>
	<style type="text/css">
		body {
			padding: 0;
		}
		.crop-area {
			position: relative;
			display: block;
			width: 100%;
		}
		.jcrop-holder {
			position: inherit !important;
			width: auto;
		}
		#preview-pane {
			display: block;
			position: absolute;
			z-index: 2000;
			top: 10px;
			right: 0px;
		}
		#preview-pane .preview-container {
			display: block;
			width: 600px;
			height: 600px;
			overflow: hidden;
		}
	</style>
</head>
<body>
	<form>
		<input id="upload_image" type="file">
	</form>
	<div class="step2-left">
		<div class="crop-area">
			<img id="preview_upload_image" src="photo.jpg">
		</div>
	</div>
	<div class="step2-right">
		<div id="preview-pane">
			<div class="preview-container">
				<img src="photo.jpg" class="jcrop-preview" alt="Preview" />
			</div>
		</div>
	</div>
	<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.8.3/jquery.min.js"></script>
	<script src="./js/jquery.Jcrop.js"></script>
	<script type="text/javascript">
		var jcrop_api, boundx, boundy

		// Grab some information about the preview pane
		$preview = $('#preview-pane'),
		$pcnt = $('#preview-pane .preview-container'),
		$pimg = $('#preview-pane .preview-container img'),
		
		xsize = $pcnt.width(),
		ysize = $pcnt.height();


		function updatePreview(c) {
			if (parseInt(c.w) > 0) {
				var rx = xsize / c.w;
				var ry = ysize / c.h;
				$pimg.css({
			  		width: Math.round(rx * boundx) + 'px',
			  		height: Math.round(ry * boundy) + 'px',
					marginLeft: '-' + Math.round(rx * c.x) + 'px',
					marginTop: '-' + Math.round(ry * c.y) + 'px'
				});
		  	}
		};

		function jcrop_init() {
			$('#preview_upload_image').Jcrop({
				onChange: updatePreview,
				onSelect: updatePreview,
				setSelect:   [ 100, 100, 50, 50 ],
				aspectRatio: xsize / ysize,
				bgFade:     true,
				bgOpacity: .2,
				boxWidth: 600
			}, function(){
				// Use the API to get the real image size
				var bounds = this.getBounds();
				boundx = bounds[0];
				boundy = bounds[1];
				// Store the API in the jcrop_api variable
				jcrop_api = this;
				// Move the preview into the jcrop container for css positioning
				$preview.appendTo(jcrop_api.ui.holder);
			});
			jcrop_api.animateTo([20,20,300,300]);
			jcrop_api.setOptions({ allowResize: true, allowMove: true });
		}

		function readURL(input) {
			if (input.files && input.files[0]) {
				var reader = new FileReader();
				reader.onload = function (e) {
					jcrop_api.destroy();
					$('.step2-left').html('<div class="display:block; width:600px; margin:0 auto;"><img id="preview_upload_image" src="" width="400"></div>' )
					$('.step2-right').html('<div id="preview-pane" style="display:block; width: 300px; margin:0 auto;"><div class="preview-container"><img src="" class="jcrop-preview" alt="Preview" /></div></div>');
					$('#preview_upload_image').attr('src', e.target.result);
					$('.preview-container img').attr('src', e.target.result);
					// if( typeof jcrop_api == 'object' ) {
					// 	jcrop_api.setImage( e.target.result );
					// }
					jcrop_init();
					jcrop_api.setImage( e.target.result );
				}
				reader.readAsDataURL(input.files[0]);
			}
		}
		$("#upload_image").change(function(){
			readURL(this);
		});
		jcrop_init();
	</script>
</body>
</html>