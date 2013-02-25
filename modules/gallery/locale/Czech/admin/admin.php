<?php defined('EF5_SYSTEM') || exit;

return array(
	'Gallery' => 'Galerie',
	'Section' => 'Sekce',
	'Categories' => 'Kategorie',
	'Albums' => 'Albumy',
	'Images' => 'Obrázky',
	'Existing categories' => 'Vytvořené kategorie',
	'Existing albums' => 'Vytvořené albumy',
	'Added images' => 'Přidané obrázky',
	'Display settings' => 'Zobrazit nastavení',
	'Gallery settings' => 'Nastavení galerie',
	'Statistics' => '<h4>Statistiky</h4>',
	'Images:' => 'Obrázků:',
	'Albums:' => 'Alba:',
	'Categories:' => 'Kategorie:',
	
	
	//Form
	'Category:' => 'Kategorie:',
	'File name:' => 'Název souboru:',
	'File:' => 'Soubor:',
	'Width:' => 'Šířka:',
	'Height:' => 'Výška:',
	'Watermark:' => 'Vodoznak:',
	'Comments:' => 'Komentáře:',
	'Evaluations:' => 'Hodnocení:',
	'Animation speed:' => 'Rychlost animace:',
	'slow' => 'pomalá',
	'normal' => 'střední',
	'fast' => 'rychlá',
	'Slideshow:' => 'Prezentace snímků:',
	'Auto play slideshow:' => 'Automatické přehrávání prezentace snímků:',
	'Opacity:' => 'Neprůhlednost:',
	'Show title:' => 'Ukázat název:',
	'Allow resize:' => 'Povolit změnu velikosti:',
	'Default width:' => 'Výchozí šířka:',
	'Default height:' => 'Výchozí výška:',
	'Counter separator label:' => 'Etykieta separatora licznika:',
	'Default theme:' => 'Výchozí šablona(theme):',
	'Horizontal padding:' => 'Vodorovná vzdálenost:',
	'Hide flash:' => 'Schovat flash:',
	'Window mode options:' => 'Parametry režimu okna:',
	'Auto play:' => 'Automatické spuštění videa:',
	'Modal:' => 'Omezené zamykání:',
	'Deep linking:' => 'Přímé odkazy:',
	'Overlay gallery:' => 'Galeria průhledná:',
	'Keyboard shortcuts:' => 'Klávesové zkratky:',
	'Social tools:' => 'Sociální nástroje:',
	'IE6 fallback:' => 'Kompatibilita prohlížečů IE6:',
	'Gallery title:' => 'Název galerie:',
	'Gallery description:' => 'Popis galerie:',
	'Gallery keywords:' => 'Klíčové slova galerie:',
	'Thumbnail compression:' => 'Metoda komprese náhledů:',
	'Thumbnail width:' => 'Šírka náhledu:',
	'Thumbnail height:' => 'Výška náhledu:',
	'Image max width:' => 'Maximální šířka obrázku:',
	'Image max height:' => 'Maximální výška obrázku:',
	'Watermark image:' => 'Vodoznak obrázku:',
	'CACHE files storage:' => 'Ukládání souborů CACHE:',
	'Cache desc' => 'Čas uchovávání souboru v CACHE pro modul galerie. Hodnota v sekundách, výchozí hodnota je 3600 sekund (1 hodina).<br />
					<a href=":file?page=sett&action=clear_cache">Odstranit ručně CACHE.</a>',
	'Allow extensions:' => 'Povolit rozšíření:',
	'Maximum file size:' => 'Maximální rozměry souboru:',
	'Max file desc' => 'Maximální povolená velikosti souborů v modulu galerie je :kbsize.
				<br />Maximální povolená velikost souboru odesílaná na server je :uploadsize.
				<br />Maximální povolená doba vykonávaní skriptu na serveru je :maxtime sekund.',
	
	
	
	//Info
	'There are no categories.' => 'Nejsou zde žádné kategorie.',
	'There are no albums.' => 'Nejsou zde žádné alba',
	'There are no categories. Add at least one category.'  => 'Nejsou vytvořené žádné kategorie. Přidej alespoň jednu kategorii.',
	'Leave this field empty if you want to keep original name or add your own file name.'  => 'Nechte prázdné pokud chcete zachovat původní název souboru nebo dát vlastní název souboru.',
	'Add watermark to this file.' => 'Přidej vodoznak pro tento soubor.',
	'Allow comment.' => 'Povolit komentáře.',
	'Allow for evaluation.' => 'Zezwól na ocenianie.',
	'There are no images.' => 'Nejsou zde žádné obrázky',
	'There are no albums. Add at least one album.' => 'Nejsou vytvořene žádné alba. Přidej alespoň jedno album.',
	
	//Sectors
	'cats' => 'Kategorie',
	'albums' => 'Albumy',
	'photos' => 'Obrázky',
	'sett' => 'Nastavení',
	
	//Logs - Categories
	'The category has been added.' => 'Kategorie byla přidána.',
	'Error! The category has not been added.' => 'Došlo k chybě! Kategorie nebyla přidána.',
	'The category has been edited.' => 'Kategoria byla upravena.',
	'Error! The category has not been edited.' => 'Došlo k chybě! Kategorie nebyla upravena.',
	'The category has been deleted.' => 'Kategorie byla smazána.',
	'Error! The category has not been deleted.' => 'Došlo k chybě! Kategorie nebyla smazána.',
	'Not empty cat' => 'Nemůžete smazat kategorii, která obsahuje alba (<strong>:albums</strong>)!',
	'There is no record with ID: :id!' => 'Žádný záznam s ID: :id!',
	
	//Logs - Albums
	'The album has been added.' => 'Album bylo přidáno.',
	'Error! The album ahs not been added.' => 'Došlo k chybě! Album nebylo přidáno.',
	'The album has been edited.' => 'Album bylo upraveno.',
	'Error! The album has not been edited.' => 'Došlo k chybě! Album nebylo upraveno.',
	'The album has been deleted.' => 'Album bylo smazáno.',
	'Error! The album has not been deleted.' => 'Došlo k chybě! Album nebylo smazáno.',
	'Not empty album' => 'Nemůžete smazat album, které obsahuje obrázky (<strong>:images</strong>)!',
	
	//Logs - Images
	'The image has been added.' => 'Obrázek byl přidán.',
	'Error! The image has not been added.' => 'Došlo k chybě! Obrázek nebyl přidán.',
	'The image has been edited.' => 'Obrázek byl upraven.',
	'Error! The image has not been edited.' => 'Došlo k chybě! Obrázek nebyl upraven.',
	'The image has been deleted.' => 'Obrázek byl smazán.',
	'Error! The image has not been deleted.' => 'Došlo k chybě! Obrázek nebyl smazán.',
	'Empty field' => 'Chyba: Pole <strong>Název:</strong> nemůže být prázdné!',
	'Error: Image with that name (:iname) is already existing!' => 'Chyba: Obrázek s tímto názvem (:iname) již existuje!',
	
	//Logs
	'Error while getting setting' => 'Chyba při výběru nastavení: Nastavený klíč <strong>:key</strong> neexistuje.',
	'Update error' => 'Chyba aktualizace: Nastavený klíč <strong>:key</strong> neexistuje.',
	'Error: The image size (:new_size px) is greater than the set limit (:sett_thumbnail_width px).' => 'Chyba: Rozlišení přidaného obrázku (:new_size px) je větší než stanovený limit (:sett_thumbnail_width px).',
	'Error: The file (:image) has not been found.' => 'Chyba: Nebyl nalezen soubor (:image).',
	'Error: Incorrect file extension: (:image).' => 'Chyba: Nesprávný formát souboru: (:image).',
	'Error: The file dimensions (:x/:y px) are greater than the limit set in settings (:photo_max_width/:photo_max_hight px).' => 'Chyba: Rozměry souboru (:x/:y px) jsou vyšší než limit stanovený v nastavení (:photo_max_width/:photo_max_hight px).',
	'Error: Incorrect file extension: (:file_ext).' => 'Chyba: Neplatný formát souboru: (:file_ext).',
	'Error: The file extension :var is not consisten with avaible extensions list.' => 'Chyba: Přípona souboru :var není v souladu s dostupnými příponami v seznamu.',
	'Error: Directory :path does not exist.' => 'Chyba: Katalog :path neexistuje.',
	'Error: Permissions for directory :path can not be set.' => 'Chyba: Nelze nastavit oprávnění pro adresář :path.',
	'Error: Directory :path can not be created.' => 'Chyba: Nelze vytvořit adresář :path.',
	'Error: File :path has not been deleted.' => 'Chyba: Soubor :path nebyl smazán.',
	'Error: Image :name does not exist.' => 'Chyba: Obrázek :name neexistuje.',
	'Error: Watermark :name does not exist.' => 'Chyba: Vodoznak :name neexistuje.',
	'Error: Output image in directory :name is already existing.' => 'Chyba: Obrázek vložený do adresáře :name již existuje.',
	'Error: The file (:path) does not exist.' => 'Chyba: Uvedený soubor neexistuje (:path).',
	'Error: File size (:var) exceeds allowed settings limit (:max_file_size).' => 'Chyba: Velikost souboru (:var) překračuje povolený limit v nastavení (:max_file_size).',
	
	
);