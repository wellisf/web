window.onload = function() {
	disponivel();
}

var poltrona = [true, true, false,true,false,false,true,true,true,false,false,true];
var azul = [];

function disponivel() {
	var imagens = document.getElementsByTagName("img");
	
	for (var i=0; i<imagens.length; i++) {
		if(poltrona[i]) {
			imagens[i].src = "_image/cadeiraverde.png";
		} else imagens[i].src = "_image/cadeiravermelha.png";
	}
}

function selecionar(i) {
	if (poltrona[i] ) {
		
		var imagens = document.getElementsByTagName("img");
		imagens[i].src = "_image/cadeiraazul.png";
		azul.push(i);
	} else {
		alert("poltrona ocupada");
	}
}

function confirmar() {
	for (var i=0; i<azul.length; i++) {
		var imagens = document.getElementsByTagName("img");
		imagens[azul[i]].src = "_image/cadeiravermelha.png";
		poltrona[azul[i]] = false;
	}
	azul = [];
}

function reset() {
	for (var i=0; i<azul.length; i++) {
		var imagens = document.getElementsByTagName("img");
		imagens[azul[i]].src = "_image/cadeiraverde.png";
		poltrona[azul[i]] = true;
	}
	azul = [];
}