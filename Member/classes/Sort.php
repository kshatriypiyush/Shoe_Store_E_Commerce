<?php
class Sorting{
	
    // ------ Sorting Cars by Key (Make) ------ 

    // ------ Sorting Cars by Value (Price) ------ 
	private static function comparisonByPriceInc($array1 , $array2){
		if($array1['Price'] == $array2['Price'])
			return 0;
		elseif ($array1['Price']>$array2['Price'])
			return 1;
		else
			return -1;
    }
    private static function comparisonByPriceDec($array1 , $array2){	
		if($array1['Price'] == $array2['Price'])
			return 0;
		elseif ($array1['Price']>$array2['Price'])
			return -1;
		else
			return  1;
    }
    public static function sortByPriceInc(&$myArray){
		//We have to use keyword self:: because the function comparisonByPriceInc is static
		uasort($myArray, "self::comparisonByPriceInc");
	}
	public static function sortByPriceDec(&$myArray){
		//We have to use keyword self:: because the function comparisonByPriceDec is static
		uasort($myArray, "self::comparisonByPriceDec");
	}


	

}
?>