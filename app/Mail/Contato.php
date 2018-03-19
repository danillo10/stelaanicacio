<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;
use Illuminate\Contracts\Queue\ShouldQueue;

class Contato extends Mailable
{
    use Queueable, SerializesModels;

    /**
     * Variável que guarda o conteúdo do formulário
     * @var Content
    */
    public $content;

    /**
     * Create a new message instance.
     *
     * @var request = Array com os dados do formulário
     * @return void
     */
    public function __construct($request)
    {
        $this->content = $request;
    }

    /**
     * Build the message.
     *
     * @return $this
     */
    public function build()
    {
        return 
        $this->from('faleconosco@stelaanicacio.com.br')
        ->view('email.contato');
    }
}
