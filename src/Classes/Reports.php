<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 01.03.2019
 * Time: 17:07
 */



namespace Kubpro;


class Reports extends Netsms
{
    protected $array;

    /**
     * Reports constructor.
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->array = $array;
        $this->url   = URL.REPORTS;
    }


    /**
     * @return array
     */
    protected function send_array()
    {
        return $this->array;
    }


}