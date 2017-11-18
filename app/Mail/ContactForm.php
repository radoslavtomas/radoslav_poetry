<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class ContactForm extends Mailable
{
	use Queueable, SerializesModels;

	public $data;
	/**
	 * Create a new message instance.
	 *
	 * @return void
	 */
	public function __construct($data)
	{
		$this->data = $data;
	}

	/**
	 * Build the message.
	 *
	 * @param $data
	 * @return $this
	 */
	public function build()
	{
		return $this->from($this->data['email'])
			->markdown('emails.contact')
			->with(['data', $this->data]);
	}
}
