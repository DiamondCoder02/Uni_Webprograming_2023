console.log("Ready");

var inputView = document.querySelector(".input");

var summaryView = document.querySelector(".outputSummary");
var firstText = summaryView.querySelector(".firstDay");
var reduceText = summaryView.querySelector(".reduction");
var monthResult = summaryView.querySelector(".month");
var yearResult = summaryView.querySelector(".year");

var detailsView = document.querySelector(".outputDetails");

var table = document.querySelector("tbody");

console.log(inputView);
console.log(summaryView);
console.log(detailsView);

function Calculator(evt) {
	evt.preventDefault();

	var first = document.getElementById("firstDay").value;
	var reduce = document.getElementById("reduction").value;
	first = parseInt(first);
	reduce = parseInt(reduce);
	
	if (first >0) {
		table.innerHTML = "";
		var actual = first;
		var total = 0;
	
		for (var day = 1; day <= 30 && actual >0 ; day++) {
			total += actual;
			table.innerHTML += `<tr><th>${day}</th><td>${actual}</td><td>${total}</td></tr>`;
			actual -= reduce;
		}
	
		firstText.innerHTML = first;
		reduceText.innerHTML = reduce;
		monthResult.innerHTML = total+" Ft";
		yearResult.innerHTML = (total * 12) + " Ft";
	
		inputView.classList.add("hidden");
		summaryView.classList.remove("hidden");
		detailsView.classList.remove("hidden");
	}
}

function Reset(evt) {
	evt.preventDefault();

	inputView.classList.remove("hidden");
	summaryView.classList.add("hidden");
	detailsView.classList.add("hidden");
}

inputView.querySelector("button").onclick = Calculator;

summaryView.querySelector(".new").onclick = Reset;