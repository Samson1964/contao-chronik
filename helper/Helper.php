<?php

namespace Samson\Chronik;
 
class Helper
{

	var $Fragmente;

	/**
	 * Klasse initialisieren
	 */
	public function __construct()
	{
	}

	/**
	 * Hook-Funktion: 
	 * Wertet das URL-Parameter-Array aus und modifiziert es, wenn das Array für die Chronik bestimmt ist
	 *
	 * @return array
	 */
	public function getParamsFromUrl($arrFragments)
	{
		//echo "<!--";
		//print_r($arrFragments);
		$args = count($arrFragments); // Anzahl Argumente

		if($args > 1)
		{
			// In $args[0] steht das Seitenalias, ab $args[1] die Parameter
			if($arrFragments[0] == ALIAS_CHRONIK && $arrFragments[1] == 'auto_item')
			{
				$arrFragments[1] = 'year';
			}
		}
		
		//echo "<br>";
		//print_r($arrFragments);
		//print_r($GLOBALS['CHRONIKLINKS']);
		//echo "-->";

		return $arrFragments;
	}
}
