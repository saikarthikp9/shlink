<?php
namespace Shlinkio\Shlink\Rest\Util;

use Shlinkio\Shlink\Common\Exception as Common;
use Shlinkio\Shlink\Core\Exception as Core;
use Shlinkio\Shlink\Rest\Exception as Rest;

class RestUtils
{
    const INVALID_SHORTCODE_ERROR = 'INVALID_SHORTCODE';
    const INVALID_URL_ERROR = 'INVALID_URL';
    const INVALID_ARGUMENT_ERROR = 'INVALID_ARGUMENT';
    const INVALID_CREDENTIALS_ERROR = 'INVALID_CREDENTIALS';
    const INVALID_AUTH_TOKEN_ERROR = 'INVALID_AUTH_TOKEN_ERROR';
    const UNKNOWN_ERROR = 'UNKNOWN_ERROR';

    public static function getRestErrorCodeFromException(Common\ExceptionInterface $e)
    {
        switch (true) {
            case $e instanceof Core\InvalidShortCodeException:
                return self::INVALID_SHORTCODE_ERROR;
            case $e instanceof Core\InvalidUrlException:
                return self::INVALID_URL_ERROR;
            case $e instanceof Core\InvalidArgumentException:
                return self::INVALID_ARGUMENT_ERROR;
            case $e instanceof Rest\AuthenticationException:
                return self::INVALID_CREDENTIALS_ERROR;
            default:
                return self::UNKNOWN_ERROR;
        }
    }
}
