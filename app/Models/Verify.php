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
}
