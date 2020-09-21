<?php
?>
	<div class="clearfix"></div>

		<div class="w3-content w3-display-container">
			<img class="mySlides" src="img/1.jpg">
			<img class="mySlides" src="img/2.jpg">
			<img class="mySlides" src="img/3.jpeg">
			<div class="w3-center w3-display-bottommiddle" style="width:100%">
				<div class="w3-left" onclick="plusDivs(-1)">&#10094;</div>
				<div class="w3-right" onclick="plusDivs(1)">&#10095;</div>
				<span class="w3-badge demo w3-border" onclick="currentDiv(1)"></span>
				<span class="w3-badge demo w3-border" onclick="currentDiv(2)"></span>
				<span class="w3-badge demo w3-border" onclick="currentDiv(3)"></span>
			</div>
		</div>

		
<script>
var slideIndex = 1;
showDivs(slideIndex);

function plusDivs(n) {
  showDivs(slideIndex += n);
}

function currentDiv(n) {
  showDivs(slideIndex = n);
}

function showDivs(n) {
  var i;
  var x = document.getElementsByClassName("mySlides");
  var dots = document.getElementsByClassName("demo");
  if (n > x.length) {slideIndex = 1}
  if (n < 1) {slideIndex = x.length}
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  for (i = 0; i < dots.length; i++) {
    dots[i].className = dots[i].className.replace(" w3-white", "");
  }
  x[slideIndex-1].style.display = "block";  
  dots[slideIndex-1].className += " w3-white";
}
</script>

<?php
?>