<?php
defined('PREVENT_DIRECT_ACCESS') OR exit('No direct script access allowed');
/**
 * ------------------------------------------------------------------
 * LavaLust - an opensource lightweight PHP MVC Framework
 * ------------------------------------------------------------------
 *
 * MIT License
 * 
 * Copyright (c) 2020 Ronald M. Marasigan
 * 
 * Permission is hereby granted, free of charge, to any person obtaining a copy
 * of this software and associated documentation files (the "Software"), to deal
 * in the Software without restriction, including without limitation the rights
 * to use, copy, modify, merge, publish, distribute, sublicense, and/or sell
 * copies of the Software, and to permit persons to whom the Software is
 * furnished to do so, subject to the following conditions:
 *
 * The above copyright notice and this permission notice shall be included in
 * all copies or substantial portions of the Software.
 *
 * THE SOFTWARE IS PROVIDED "AS IS", WITHOUT WARRANTY OF ANY KIND, EXPRESS OR
 * IMPLIED, INCLUDING BUT NOT LIMITED TO THE WARRANTIES OF MERCHANTABILITY,
 * FITNESS FOR A PARTICULAR PURPOSE AND NONINFRINGEMENT. IN NO EVENT SHALL THE
 * AUTHORS OR COPYRIGHT HOLDERS BE LIABLE FOR ANY CLAIM, DAMAGES OR OTHER
 * LIABILITY, WHETHER IN AN ACTION OF CONTRACT, TORT OR OTHERWISE, ARISING FROM,
 * OUT OF OR IN CONNECTION WITH THE SOFTWARE OR THE USE OR OTHER DEALINGS IN
 * THE SOFTWARE.
 *
 * @package LavaLust
 * @author Ronald M. Marasigan <ronald.marasigan@yahoo.com>
 * @copyright Copyright 2020 (https://techron.info)
 * @version Version 1.2
 * @link https://lavalust.com
 * @license https://opensource.org/licenses/MIT MIT License
 */

/*
* ------------------------------------------------------
*  Class Registry
* ------------------------------------------------------
*/
class Registry
{ 
	private $_classes = array();
	private static $_instance;
	
	private function __construct() { }
	
	private function __clone(){ }
	
    /*
    * ------------------------------------------------------
    *  Get Instance
    * ------------------------------------------------------
    */
    public static function get_instance()
    {
    	if(!isset(self::$_instance))
        {
            self::$_instance = new self();
        }
        return self::$_instance;
    }

    /*
    * ------------------------------------------------------
    *  Get Class
    * ------------------------------------------------------
    */
    protected function get($key)
    {
    	
        if(isset($this->_classes[$key]))
        {	
            return $this->_classes[$key];
        }
        return NULL;
    }

    /*
    * ------------------------------------------------------
    *  Set Class
    * ------------------------------------------------------
    */
    protected function set($key, $object)
    {
        $this->_classes[$key] = $object;
    }
    
    /*
    * ------------------------------------------------------
    *  Get Class Object
    * ------------------------------------------------------
    */
    static function getObject($key)
    {
		return self::get_instance()->get($key);
	}

    /*
    * ------------------------------------------------------
    *  Store Class Object
    * ------------------------------------------------------
    */
	static function storeObject($key, $object)
	{
		return self::get_instance()->set($key, $object);
	}
}

