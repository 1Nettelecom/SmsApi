<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 01.03.2019
 * Time: 17:07
 */

namespace Kubpro;


class Balance extends Netsms
{
    protected $array;

    /**
     * Balance constructor.
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->array = $array;
        $this->url   = URL.BALANCE;
    }



    /**
     * @return array
     */
    protected function send_array()
    {
        return $this->array;
    }


}


