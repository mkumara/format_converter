<?php
/**
 * @copyright Copyright (c) 2017, Jayantha Muthukudage
 */

namespace App\Model\Converter;

/**
 * Abstract class to represent different data conversion strategies
 */
abstract class DataConverter
{
  
  //conversion strategy
  public abstract function convert();

}