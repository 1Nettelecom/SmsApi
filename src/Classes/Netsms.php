<?php
/**
 * Created by PhpStorm.
 * User: coder
 * Date: 01.03.2019
 * Time: 16:49
 */

namespace Kubpro;


abstract class Netsms
{

    abstract protected function send_array();

    protected $url;

    /**
     * @return bool|string
     */

    public function request()
    {

        $curl = curl_init();
        curl_setopt_array($curl, $this->crul_array());

        $results = curl_exec($curl);

        curl_close($curl);

        return $results;

    }


    /**
     * Crul Array
     * @return array
     */
    public function crul_array()
    {

        $options = array(
            CURLOPT_URL        => $this->url,
            CURLOPT_POST       => true,
            CURLOPT_RETURNTRANSFER => 1,
            CURLOPT_TIMEOUT => 30,
            CURLOPT_CONNECTTIMEOUT => 30,
            CURLOPT_POSTFIELDS => $this->send_array(),
        );


        return $options;

    }

}