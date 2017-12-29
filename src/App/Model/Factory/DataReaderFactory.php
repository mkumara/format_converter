<?php
/**
 * @copyright Copyright (c) 2017, Jayantha Muthukudage
 */

namespace App\Model\Factory;
use App\Model\Reader\XMLDataReader;
use App\Model\Reader\JSONDataReader;
/**
 * Abstract class to represent different data conversion strategies
 */
class DataReaderFactory
{  
	public static function getReader($type, $source)
	{
		if(isset($type))
		{
			switch ($type) {
				case 'xml':
					return new XMLDataReader($source);
					break;

				case 'json':
					return new JSONDataReader($source);
					break;
				
				default:
					return null;
					break;
			}
		}

	}
}