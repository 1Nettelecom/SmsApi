<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 01.03.2019
 * Time: 16:51
 */

namespace Kubpro;


class Send extends Netsms
{
    protected $array;
    protected $type;

    /**
     * Send constructor.
     * @param array $array
     */
    public function __construct(array $array)
    {
        $this->array = $array;
        $this->type  = $this->check_speed($array) == true ? SENDSPEED : SENDSINGLEBULK;
        $this->url   = URL.$this->type;
    }


    /**
     * @return array
     */
    protected function send_array()
    {

        return $this->array;

    }

    /**
     * @param $array
     * @return bool
     */
    private function check_speed($array){

        if (isset($array['speed'])) return $array['speed'] == true ? true : false;

        else return false;
    }




}