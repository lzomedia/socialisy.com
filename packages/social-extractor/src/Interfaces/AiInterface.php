<?php


namespace LzoMedia\SocialExtractor\Interfaces;


interface AiInterface {


    public function classify(string $text);

    public function entities(string $text);


}