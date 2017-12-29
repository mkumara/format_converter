<?php
/**
 * @copyright Copyright (c) 2017, Jayantha Muthukudage
 */

namespace App\Model\Factory;
use App\Model\Converter\XMLDataConverter;
use App\Model\Converter\JSONDataConverter;

/**
 * Abstract class to represent different data conversion strategies
 */
class DataConverterFactory
{  
	public static function getConverter($type)
	{
		if(isset($type))
		{
			switch ($type) {
				case 'xml':
					return new XMLDataConverter();
					break;

				case 'json':
					return new JSONDataConverter();
					break;
				
				default:
					return null;
					break;
			}
		}

	}
}