console.log('Hello World!');
var details = document.querySelector(".details");
var intro = document.querySelector(".detailsIntro");
console.log(details);
console.log(intro);

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

/* References */

var items = document.querySelectorAll(".gallery a");
var viewer = document.querySelector(".imageViewer");
var viewerImage = viewer.querySelector("img");

console.log(items);

function galleryClick(evt) {
	evt.preventDefault();

	var href = this.getAttribute("href");
	viewerImage.setAttribute("src", href);
	// viewer.style.display = "flex";

	view.classList.add("visible");
}

function closePreview() {
	// viewer.style.display = "none";
	view.classList.remove("visible");
}
viewer.onclick = closePreview;

if (items.length > 0) {
	for (var items of items) {
		items.onclick = galleryClick();
	}
}

