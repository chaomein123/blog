<?php namespace D3dengineering\Contact;

use System\Classes\PluginBase;

class Plugin extends PluginBase
{
    public function registerComponents()
    {
    	return [
    		'D3dengineering\Contact\Components\ContactForm' => 'contactForm',
    	];
    }

    public function registerSettings()
    {

    }
}
