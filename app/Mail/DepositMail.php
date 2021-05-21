<?php
/**
 *  app/Mail/DepositMail.php
 *
 * Date-Time: 21.05.21
 * Time: 14:05
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class DepositMail extends Mailable
{
    use Queueable, SerializesModels;

    protected $data;

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
     * Build the message
     */
    public function build(): DepositMail
    {
        return $this
            ->from(env('MAIL_USERNAME'))
            ->subject('Deposit Mail')
            ->view('email.deposit',[
                'data' => $this->data
            ]);
    }
}