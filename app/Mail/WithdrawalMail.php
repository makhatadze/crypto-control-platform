<?php
/**
 *  app/Mail/WithdrawalMail.php
 *
 * Date-Time: 21.05.21
 * Time: 14:22
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

class WithdrawalMail extends Mailable
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
    public function build(): WithdrawalMail
    {
        return $this
            ->from(env('MAIL_USERNAME'))
            ->subject('Withdrawal Mail')
            ->view('email.withdrawal',[
                'data' => $this->data
            ]);
    }
}