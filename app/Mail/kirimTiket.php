<?php

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Contracts\Queue\ShouldQueue;
use Illuminate\Mail\Mailable;
use Illuminate\Mail\Mailables\Content;
use Illuminate\Mail\Mailables\Envelope;
use Illuminate\Queue\SerializesModels;
use App\Models\Receipt;
use App\Models\Ferry;
use App\Models\User;

class kirimTiket extends Mailable
{
    use Queueable, SerializesModels;
    public $tiket;

    /**
     * Create a new message instance.
     */
    public function __construct($tiket)
    {
        $this->tiket = $tiket;
    }

    /**
     * Get the message envelope.
     */
    public function build()
    {
        $data = [
            'cust' => Receipt::all(),
        ];
        $query = Ferry::query();

        if(request()->has('ferryID'))
        {
            $query->where('id', 'like', '%' . request('ferryID') . '%');
        }  

        $data['tik'] = $query->get();

        return $this->subject($this->tiket['judul'])
                    ->from($this->tiket['sender'])
                    ->view('tiket', $data);
    }

    /**
     * Get the message content definition.
     */
    public function content(): Content
    {
        return new Content(
            view: 'tiket',
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
