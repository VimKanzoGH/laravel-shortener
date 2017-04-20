<?php

namespace LeadThread\Shortener\Drivers;

use LeadThread\Bitly\Bitly as BitlyDriver;
use LeadThread\Shortener\Interfaces\UrlShortener;
use LeadThread\Shortener\Rotators\Account\Bitly as BitlyRotator;

class Bitly implements UrlShortener
{
    protected $config;
    protected $rotator;

    public function __construct(BitlyRotator $rotator = null)
    {
        $this->config = config('shortener.accounts.bitly');

        if(!$rotator instanceof BitlyRotator){
            $drivers = [];

            foreach ($this->config as $c) {
                $drivers[] = new BitlyDriver($c['token']);
            }

            $rotator = new BitlyRotator($drivers);
        }
        
        $this->rotator = $rotator;
    }

    public function shorten($url, $encode = true){
        return $this->rotator->shorten($url, $encode);
    }
}