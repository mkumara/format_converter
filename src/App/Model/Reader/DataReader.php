<?php
/**
 * @copyright Copyright (c) 2017, Jayantha Muthukudage
 */

namespace App\Model\Reader;

/**
 * Abstract class to represent different data conversion strategies
 */
abstract class DataReader
{  
	protected $source;

  //setting the data reading source path
  public  function setSource($source)
  {
  	$this->source = $source;
  }

  //getting the data reading source path
  public  function getSource()
  {
  	return $this->source;
  }

  //data reading strategy
  public abstract function read();

}