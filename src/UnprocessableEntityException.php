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
 * Represents an HTTP 422 error - Unprocessable Entity
 */
class UnprocessableEntityException extends RuntimeException
{
  /**
   * @param string $message
   *
   * @param string|integer $code
   */
  public function __construct($message = 'Unprocessable Entity', $code = 422)
  {
    parent::__construct($message, $code);
  }
}
