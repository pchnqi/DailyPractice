<?php
/**
 * pipe.php.
 *
 * @version         1.0.0
 *
 * @author          nqi
 * @license         Proprietary
 * @copyright   (c) Publishers Clearing House. All rights reserved.
 */

namespace Source\Closure;

/**
 * Class Pipe.
 */
class Pipe
{
    protected $val;

    public function __construct($val)
    {
        $this->val = $val;
    }

    public function getClosure()
    {
        return function () {
            echo $this->val;
        };
    }
}
