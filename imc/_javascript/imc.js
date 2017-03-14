function imc() {
	var formImc = document.getElementById("formImc");

	var kg = formImc.kg.value;
	var cm = formImc.cm.value / 100;

	var imc = (kg / (cm * cm));

	formImc.imc.value = imc.toFixed(2);

	if (imc < 18.5) {

		formImc.grau.value = ("Abaixo do peso");
	} else if (imc < 24.9) {

		formImc.grau.value = ("Peso normal");
	} else if (imc < 29.9) {

		formImc.grau.value = ("Sobrepeso");
	} else if (imc < 39.9) {
		
		formImc.grau.value = ("Obeso");
	} else {
		
		formImc.grau.value = ("Obeso Mórbido");
	}	
}
