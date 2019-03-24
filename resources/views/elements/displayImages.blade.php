@section('page_style')
	<style type="text/css">
		.remove-image {
			position: relative;
		    font-size: 19px;
		    width: 24px;
		    height: 24px;
		    border-radius: 50%;
		    background: wheat;
		    cursor: pointer;
		    bottom: 196px;
		    right: 9px;
		}
		.remove-image span {
			position: absolute;
			left: 5px;
		}
		.gallery > div {
			float: left;
    		margin: 14px;
		}
	</style>
@endsection
<div class="form-group">
	<div class="input-group increment" >
        <input type="file" name="featured[]" class="form-control" id="gallery-photo-add" multiple>
        <div class="input-group-append">
		    <button class="btn btn-success" type="button"><i class="glyphicon glyphicon-plus"></i>Add</button>
		</div>
	</div>
</div>
<div class="gallery">
</div>
@section('page_script')
	<script type="text/javascript">
		function removeImage(idImage) {
	    	$('.remove-img-'+ idImage).remove();
	    	return 
	    }
	    
		$(function() {
	    // Multiple images preview in browser
	    var imagesPreview = function(input) {
	        if (input.files) {
	            var filesAmount = input.files.length;
	            for (i = 0; i < filesAmount; i++) {
	                var reader = new FileReader(); 
	                reader.onload = function(event) {
	                	var idDiv = event.target.result.slice(-12,-8);
	                	$('.gallery').append('<div class="remove-img-'+ idDiv.toString() + '"></div>');
	                    $($.parseHTML('<img>'))
	                    .attr('src', event.target.result)
	                    .attr('id-div', idDiv)
	                    .appendTo('.remove-img-' + idDiv.toString());
	                    $('.remove-img-'+ idDiv.toString()).append("<div onclick='removeImage("+ '"'+idDiv+'"' +")' class='remove-image'><span>X</span></div></div>");
	                }
	                reader.readAsDataURL(input.files[i]);
	            }
	        }

	    };
	    $('#gallery-photo-add').on('change', function() {
	        imagesPreview(this);
	    })
	});
	</script>
@parent
@endsection