<?php
/**
 *  app/Mail/SignUpMail.php
 *
 * Date-Time: 19.05.21
 * Time: 15:44
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Mail;

use Illuminate\Bus\Queueable;
use Illuminate\Mail\Mailable;
use Illuminate\Queue\SerializesModels;

/**
 * Class SignUpMail
 * @package App\Mail
 */
class SignUpMail extends Mailable
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
    public function build(): SignUpMail
    {
        return $this
            ->from(env('MAIL_USERNAME'))
            ->subject('SignUp Request')
            ->view('email.signup',[
                'data' => $this->data
            ]);
    }
}