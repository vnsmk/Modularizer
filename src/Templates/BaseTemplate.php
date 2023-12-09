<?php

namespace Vnsmk\Modularizer\Templates;
class BaseTemplate implements TemplateInterface{
    private $relativePath;

    public $stubPath = "BaseTemplate.stub";
    private $name;
    private $namespace;

    /**
     * @return mixed
     */
    public function getRelativePath()
    {
        if(isset($this->relativePath)){
            return $this->relativePath;
        }
        return  config('modularizer.modules_folder')."\\". $this->namespace;
    }

    /**
     * @param mixed $relativePath
     */
    public function setRelativePath($relativePath)
    {
        $this->relativePath = $relativePath;
    }
    public function __construct(String $name,String $namespace)
    {
        $this->name = $name;
        $this->namespace = $namespace;
        $this->make();
    }

    function make(){
        // TODO: Implement createFiles() method.
    }
    function createFile()
    {
        // TODO: Implement createFiles() method.
    }

    function fill()
    {
        // TODO: Implement fill() method.
    }
}