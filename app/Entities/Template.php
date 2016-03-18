<?php namespace App\Entities;
        
class Template
{

    /**
     * Generate a template path.
     *
     * @param $view
     * @return mixed
     */
    public function generatePath($view)
    {
        return env('TEMPLATE_NAME')  . '.' . $view;
    }

    /**
     * Generate an asset URL.
     *
     * @param $name
     * @return mixed
     */
    public function asset($path)
    {
        return asset(env('TEMPLATE_NAME') . '/' . $path);
    }
}
    
