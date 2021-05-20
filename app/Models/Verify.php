<?php
/**
 *  app/Models/Verify.php
 *
 * Date-Time: 20.05.21
 * Time: 15:18
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

/**
 * Class Verify
 * @package App\Models
 * @property integer $id
 * @property string $name
 * @property string $email
 * @property string $address
 * @property integer $status
 * @property string $created_at
 * @property string $updated_at
 */
class Verify extends Model
{
    use HasFactory;
    public const VERIFY_PASSPORT = 1;
    public const VERIFY_DRIVING = 2;
    public const VERIFY_NATIONAL = 3;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'user_id',
        'name',
        'email',
        'address',
        'status'
    ];
}
