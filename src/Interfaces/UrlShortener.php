<?php

namespace LeadThread\Shortener\Interfaces;

interface UrlShortener
{
    public function shorten($url, $encode);
}