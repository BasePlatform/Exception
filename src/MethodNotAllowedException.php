<?php
/*
 * This file is part of the BasePlatform project.
 *
 * (c) BasePlatform project <https://github.com/BasePlatform>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

namespace Base\Exception;

use RuntimeException;

/**
 * Represents an HTTP 405 error - Method Not Allowed
 */
class MethodNotAllowedException extends RuntimeException
{
  /**
   * @param string $message
   *
   * @param string|integer $code
   */
  public function __construct($message = 'Method Not Allowed', $code = 405)
  {
    parent::__construct($message, $code);
  }
}
