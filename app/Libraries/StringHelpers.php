<?php

namespace App\Libraries;

class StringHelpers {

  /**
	 * Verifies if supplied string is a valid Monero Address
	 *
	 * @param string $str String to validate
	 * @return boolean
	 */
  public static function isValidAddress($str) {
  	//return !empty($str) && preg_match('4[0-9AB][123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz]{93}', $str);
		return !empty($str) && preg_match('/^4[0-9AB][123456789ABCDEFGHJKLMNPQRSTUVWXYZabcdefghijkmnopqrstuvwxyz]{93}/', $str);
  }
  
  /**
	 * Verifies if supplied string is a valid Hash
	 *
	 * @param string $str String to validate
	 * @return boolean
	 */
  public static function isValidHash($str) {
    return !empty($str) && preg_match('/^[0-9A-Fa-f]{64}/', $str);
  }

  /**
   * Verifies if supplied string is a valid Height Number
   *
   * @param string $str String to validate
   * @return boolean
   */
  public static function isValidHeight($str) {
		return !empty($str) && preg_match('/^[0-9]+$/', $str);
	}
  
}