
<script src="./js/input_field.js"></script>
<script src="./js/jquery.slicknav3.js"></script>
<script src="./js/jquery.slicknav.js"></script>
<script src="./js/jquery.slicknav2.js"></script>
<script src="./js/jquery.magnific-popup.min.js"></script>
<script src="./js/jquery.maskedinput.min.js"></script>
<script src="./js/jquery-ui.js"></script>
<script src="./js/popup-link.js"></script>
<script src="./js/open-hide.js"></script>
<script src="./js/sliders.js"></script>
<script src="./js/slicknav.js"></script>
<script src="./js/phone_mask.js"></script>
<!--<script src="./js/steps-zayavka.js"></script>-->


<script>
$(function(){
  'use strict';
$('#form').on('submit', function(e){
    e.preventDefault();
    var fd = new FormData( this );
    $.ajax({
      url: './send2.php',
      type: 'POST',
      contentType: false, 
      processData: false, 
      data: fd,
      success: function() {
			$(".successform").removeClass("hidden");
			$(".successform").addClass("visible");
			$(".formvisible").addClass("hidden");
			$(".mfp-close").addClass("hidden");
				setTimeout(function () {
				// Done Functions
				th.trigger("reset");
				$(".successform").addClass("hidden");
				$(".successform").removeClass("visible");
				$(".formvisible").removeClass("hidden");
				$.magnificPopup.close();
			}, 100000);
		}
    });
  });
});
</script>

<script>
$(function(){
  'use strict';
$('#formland').on('submit', function(e){
    e.preventDefault();
    var fd = new FormData( this );
    $.ajax({
      url: './send.php',
      type: 'POST',
      contentType: false, 
      processData: false, 
      data: fd,
      success: function() {
			$(".successform2").removeClass("hidden");
			$(".successform2").addClass("visible");
			$(".mfp-close").addClass("hidden");
				setTimeout(function () {
				// Done Functions
				th.trigger("reset");
				$(".successform2").addClass("hidden");
				$(".successform2").removeClass("visible");
				$.magnificPopup.close();
			}, 100000);
		}
    });
  });
});
</script>

<script>
$(function(){
  'use strict';
$('#formcall').on('submit', function(e){
    e.preventDefault();
    var fd = new FormData( this );
    $.ajax({
      url: 'send.php',
      type: 'POST',
      contentType: false, 
      processData: false, 
      data: fd,
      success: function() {
			$(".successform3").removeClass("hidden");
			$(".successform3").addClass("visible");
			$(".formvisible3").addClass("hidden");
			$(".mfp-close").addClass("hidden");
				setTimeout(function () {
				// Done Functions
				th.trigger("reset");
				$(".successform3").addClass("hidden");
				$(".successform3").removeClass("visible");
				$(".formvisible3").removeClass("hidden");
				$.magnificPopup.close();
			}, 100000);
		}
    });
  });
});
</script>

<script>
    function callclosebtn() {
	    $.magnificPopup.close();
    }
</script>

<script>
    function calllandbtn() {
	    $(".successform2").addClass("hidden");
		$(".successform2").removeClass("visible");
    }
</script>