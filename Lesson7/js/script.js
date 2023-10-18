console.log('Hello World!');
var details = document.querySelector(".details");
var intro = document.querySelector(".datailsIntro");

if (details) {
	details.style.display = "none";
	intro.innerHTML += ' <span class="showMore">Details thing...</span>';
	
	var more = document.querySelector(".showMore");
	
	function showDetails() {
		intro.style.display = "block";
		more.style.display = "none";
	}
	
	more.onclick = showDetails;
}

