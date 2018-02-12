<?php
	//testa se a varivel existe
	$head = "head.html";
	if ( isset( $head ) ) {
		if ($head) {
			$auxSite = $head;
			include $auxSite;
		}
	} else {
		echo "Error : 404";
	}
?>

<?php
	//testa se a varivel existe
	$about = "page/about.html";
	if ( isset( $about ) ) {
		if ($about) {
			$auxSite = $about;
			include $auxSite;
		}
	} else {
		echo "Error : 404";
	}
?>

<?php
	//testa se a varivel existe
	$footer = "footer.html";
	if ( isset( $footer ) ) {
		if ($footer) {
			$auxSite = $footer;
			include $auxSite;
		}
	} else {
		echo "Error : 404";
	}
?>