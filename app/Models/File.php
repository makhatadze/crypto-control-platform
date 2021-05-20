<?php
/**
 *  app/Models/File.php
 *
 * Date-Time: 20.05.21
 * Time: 16:14
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Models;

use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;

class File extends Model
{
    use HasFactory;
    protected $fillable = [
        'name',
        'path',
        'format',
        'type'
    ];

    public const FILE_PASSPORT  = 1;
    public const FILE_DRIVING_BACK  = 2;
    public const FILE_DRIVING_FRONT  = 3;
    public const FILE_NATIONAL_BACK  = 4;
    public const FILE_NATIONAL_FRONT  = 5;
    public const FILE_WITH_SELFIE  = 6;
    public const FILE_DOCUMENT  = 7;


    public function fileable()
    {
        return $this->morphTo();
    }
}
