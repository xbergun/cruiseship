 

 <div class="align-baseline sosyal text-center">
     <a href="https://www.facebook.com/miraycruisestr/" target="_blank"> <img src="img/facebook.png" class="img-fluid" alt="Responsive image"></a>
     <a href="https://twitter.com/miraycruises" target="_blank"> <img src="img/twitter.png" class="img-fluid" alt="Responsive image"></a>
     <a href="https://www.linkedin.com/in/miray-cruise-ab60a4203/" target="_blank"> <img src="img/linkedin.png" class="img-fluid" alt="Responsive image" style="height: 39px"></a>
     <a href="https://www.instagram.com/miraycruises/?igshid=t5fr2hltn9bn" target="_blank"> <img src="img/instagram.png" class="img-fluid" alt="Responsive image"></a>
 </div>
 
 	<div class="telfix text-center">
        <img src="img/tel.png" class="img-fluid" alt="Responsive image">
	<div> <a href="tel:+902122717777" >+90 212 271 77 77</a></div>


    </div>
 




 <!-- Optional JavaScript; choose one of the two! -->


<script src="https://code.jquery.com/jquery-3.5.1.slim.min.js" integrity="sha384-DfXdz2htPH0lsSSs5nCTpuj/zy4C+OGpamoFVy38MVBnE+IbbVYUew+OrCXaRkfj" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/popper.js@1.16.1/dist/umd/popper.min.js" integrity="sha384-9/reFTGAW83EW2RDu2S0VKaIzap3H66lZH81PoYlFhbGU+6BZp6G7niu735Sk7lN" crossorigin="anonymous"></script>
<script src="https://cdn.jsdelivr.net/npm/bootstrap@4.5.3/dist/js/bootstrap.min.js" integrity="sha384-w1Q4orYjBQndcko6MimVbzY0tgp4pWB4lZ7lr30WKz0vr/aWKhXdBNmNb5D92v7s" crossorigin="anonymous"></script>

  
<script src="https://ajax.googleapis.com/ajax/libs/jquery/1.7.1/jquery.min.js"></script>

 <script src="js/zoom.js"></script>
<script src="js/lightbox.js"></script>
<script src="js/popup.js" type="text/javascript"></script>
 <script src="jquery-1.10.2.min.js"></script>


 <script>
		$(document).ready(function() {
			$(".tab-menu a").click(function(event) {
				event.preventDefault();
				$(this).parent().addClass("current");
				$(this).parent().siblings().removeClass("current");
				var tab = $(this).attr("href");
				$(".tab-content").not(tab).css("display", "none");
				$(tab).fadeIn();
			});
		});
	</script>
	
	<script>
		$(document).ready(function(){
		centerPopup();
		loadPopup();
		setTimeout(function(){$("#backgroundPopup").fadeOut("slow");$("#popupContact").fadeOut("slow");	popupStatus = 0; }, 3000);

		});
		
	</script>
  
  </body>
</html>