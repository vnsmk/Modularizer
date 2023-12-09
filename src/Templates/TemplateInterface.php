<?php

namespace Vnsmk\Modularizer\Templates;
interface TemplateInterface{
    public function __construct(String $name,String $namespace);

    function make();

    function createFile();

    function fill();

}