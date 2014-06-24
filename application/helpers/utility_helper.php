<?php  if (!defined('BASEPATH')) exit('No direct script access allowed');

/**

* Code Igniter

*

* An open source application development framework for PHP 4.3.2 or newer

*

* @package		CodeIgniter

* @author		Rick Ellis

* @copyright	Copyright (c) 2006, pMachine, Inc.

* @license		http://www.codeignitor.com/user_guide/license.html

* @link			http://www.codeigniter.com

* @since        Version 1.0

* @filesource

*/



// ------------------------------------------------------------------------



/**

* Code Igniter Utility Helpers

*

* @package		CodeIgniter

* @subpackage	Helpers

* @category		Helpers

* @author       Muhammad Fathur Rahman < mhd.fathur@live.com >

*/



// ------------------------------------------------------------------------



function encode_id($id)

{

	$hash = md5($id.SECRETTOKEN);



	$hash = substr($hash, 2, 6);



	return $hash;

}



//concate real id with hash



function encode_ajax_id($id)

{

	$hash = md5($id.SECRETTOKEN);



	$hash = substr($hash, 2, 6);



	$ajax_id = $id.'_'.$hash;



	return $ajax_id;

}



//concate real id with hash



function encode_form_id($id)

{

	$hash = md5($id.SECRETTOKEN);



	$hash = substr($hash, 2, 6);



	$form_id = $id.'_'.$hash;



	return $form_id;

}



//get the real id from the hash id



function get_attr_id($attr)

{

	$exp_attr = explode("_", $attr);



	$id = $exp_attr[0];



	return $id;

}



//get the hash from the ajax id



function get_attr_hash($attr)

{

	$exp_attr = explode("_", $attr);



	$hash = $exp_attr[1];



	return $hash;

}



//generate class name for datatables use



function generate_classname($name)

{

	$class_name = preg_replace('/[^A-Za-z0-9]/', '_', $name);

	return 'class_'.$class_name;

}



//replace all chars to underscore except alpha and num



function name_to_id($name)

{

	$id_name = preg_replace('/[^A-Za-z0-9]/', '_', $name);

	return $id_name;

}



//use for custom sms. change attribute to sms variable

//eg Phone => #_phone

//eg First Name => #_first_name



function string_to_smsvar($string)
{

	$smsvar = strtolower($string);

	$smsvar = str_replace(' ', '_', $smsvar);

	$smsvar = '#_'.$smsvar;



	return $smsvar;

}

function number2roman($num,$isUpper=true) {
    $n = intval($num);
    $res = '';

    /*** roman_numerals array ***/
    $roman_numerals = array(
        'M' => 1000,
        'CM' => 900,
        'D' => 500,
        'CD' => 400,
        'C' => 100,
        'XC' => 90,
        'L' => 50,
        'XL' => 40,
        'X' => 10,
        'IX' => 9,
        'V' => 5,
        'IV' => 4,
        'I' => 1
    );

    foreach ($roman_numerals as $roman => $number)
    {
        /*** divide to get matches ***/
        $matches = intval($n / $number);

        /*** assign the roman char * $matches ***/
        $res .= str_repeat($roman, $matches);

        /*** substract from the number ***/
        $n = $n % $number;
    }

    /*** return the res ***/
    if($isUpper) return $res;
    else return strtolower($res);
}

function money_to_number($str)
{
    //strip comma from string

    $str = str_replace(',', '', $str);

    return $str;
}

?>