function openModal(e){
	 var box = document.getElementById("modal-box");
	 var content = document.getElementById("modal-content");

	 var img = "<img src='"+e+"'>";

	 content.innerHTML = img;

	 box.style.display = "block";
}

function closeModal(){
	document.getElementById("modal-box").style.display = "none";
}