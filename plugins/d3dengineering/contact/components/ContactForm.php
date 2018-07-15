<?php namespace d3dengineering\contact\components;

use Cms\Classes\ComponentBase;
use Input;
use Mail;

class ContactForm extends ComponentBase{


	public function componentDetails(){


		return[

			'name' => 'Contact Form',
			'description' => 'Simple contact form'

		];
	}

	public function onSend(){

		// These variables are available inside the message as Twig
		$vars = ['name' => Input::get('name'), 'email' => Input::get('email'),'content' => Input::get('content')];

		Mail::send('d3dengineering.contact::mail.message', $vars, function($message) {

		    $message->to('realmclothing12@gmail.com', 'Admin Person');
		    $message->subject('New Message');

		});


	}
}