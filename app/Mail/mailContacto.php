<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;

class mailContacto extends Mailable
{
    use Queueable, SerializesModels;

    public $nombre_cliente;
    public $apellido_cliente;
    public $email;
    public $celular;
    public $consulta;
    public $mensaje;

    /**
     * Create a new message instance.
     */
    public function __construct($nombre_cliente, $apellido_cliente, $email, $celular, $consulta, $mensaje)
    {
        //

         $this->nombre_cliente = $nombre_cliente;
         $this->apellido_cliente = $apellido_cliente;
         $this->email = $email;
         $this->celular = $celular;
         $this->consulta = $consulta;
         $this->mensaje = $mensaje;

    }

    /**
     * Get the message envelope.
     */
    public function envelope(): Envelope
    {
        return new Envelope(
            subject: 'Un usuario está interesado  en nuestros servicios ',
        );
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'mail.mailContacto',
        );
    }

    /**
     * Get the attachments for the message.
     *
     * @return array<int, \Illuminate\Mail\Mailables\Attachment>
     */
    public function attachments(): array
    {
        return [];
    }
}
