<?php

namespace Inn;

/**
 * Encodes and decodes a string to Base64 url safe
 *
 * @author  izisaurio
 * @version 1
 */
class Base64Url
{
	/**
	 * Transforms a text to Base64URL
	 *
	 * @static
	 * @access	public
	 * @param	string	$text	Text to encode
	 * @return	string
	 */
	public static function encode($text)
	{
		return str_replace(
			["+", "/", "="],
			["-", "_", ""],
			base64_encode($text)
		);
	}

	/**
	 * Base64URL to Base64
	 *
	 * @static
	 * @access	public
	 * @param	string	$base64URL	Base64Url to decode
	 * @return	string
	 */
	public static function decode($base64URL)
	{
		return base64_decode(str_replace(["-", "_"], ["+", "/"], $base64URL));
	}
}
