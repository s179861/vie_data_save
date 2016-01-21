<?php
	$f = fopen("dokumenty/a.xml","w");
	fwrite($f,"<dane>\n");
	fwrite($f,"\t<nazwisko>".$_POST[nazwisko]."</nazwisko>\n");
	fwrite($f,"\t<student>".$_POST[student]."</student>\n");
	fwrite($f,"\t<dzien>".$_POST[dzien]."</dzien>\n");
	fwrite($f,"\t<nazwa_pliku>".$_FILES[plik][name]."</nazwa_pliku>\n");
	fwrite($f,"\t<rozmiar_pliku>".$_FILES[plik][size]."</rozmiar_pliku>\n");
	fwrite($f,"\t<typ_pliku>".$_FILES[plik][type]."</typ_pliku>\n");
	fwrite($f,"</dane>");
	fclose($f);
?>
