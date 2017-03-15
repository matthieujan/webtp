var firstTry = true;
var started = false;
var lost = false;


window.onload= function(){
	var b = document.getElementsByClassName("boundary");
	var i;
	for(i = 0; i< b.length; i++){
		b[i].observe("mouseover", bOnMouseOver);
	}

		var s = document.getElementById("start");
	s.observe("mouseover", sOnMouseClick);
	var e = document.getElementById("end");
	e.observe("mouseover", eOnMouseOver);
};

function sOnMouseClick(event){
	window.started = true;
	window.lost = false;

	var st = document.getElementById("status");
	st.innerHTML = "GO !";

	var b = document.getElementsByClassName("boundary");
	var i;
	for(i = 0; i< b.length; i++){
		b[i].style.backgroundColor = "#eeeeee";
	}
};

function eOnMouseOver(event){
	var st = document.getElementById("status");
	if(window.started){
		if(window.lost){
			st.innerHTML = "You lost! Click S to try again";
		}else{
			st.innerHTML = "You win ! Click S to try again";
		}
        if(firstTry){
            var s = document.getElementById("start");
            s.stopObserving("mouseover", sOnMouseClick);
            s.observe("click", sOnMouseClick);
            window.firstTry = false;
        }

		window.started = false;
		window.lost = false;
		var b = document.getElementsByClassName("boundary");
		var i;
		for(i = 0; i< b.length; i++){
			b[i].style.backgroundColor = "#eeeeee";
		}
	}
};

function bOnMouseOver(event){
	if(window.started){
		window.lost = true;
		var b = document.getElementsByClassName("boundary");
		var i;
		for(i = 0; i< b.length; i++){
			b[i].style.backgroundColor = "red";
		}
	}
};

