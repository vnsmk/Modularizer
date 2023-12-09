<?php

use Vnsmk\Modularizer\Templates\BaseTemplate;

class ModuleBuilder
{

    static private function fetchTemplates()
    {
        $templates = config('modularizer.templates');

        $templates = array_filter($templates,function ($class){
            return is_subclass_of($class,BaseTemplate::class);
        });

        return $templates;
    }

    static function build($name,$namespace)
    {

        $templates = self::fetchTemplates();

        $files = [];

        foreach ($templates as $template_class) {
           $files[] = new $template_class($name, $namespace);
        }

        self::clearCache();
    }

    static private function clearCache()
    {
        return Artisan::call('config:clear');
    }
}
