<?php
/**
 *  app/Models/Verify.php
 *
 * Date-Time: 20.05.21
 * Time: 15:18
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */

namespace App\Models;

use App\Traits\ScopeFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Model;
use Illuminate\Database\Eloquent\Relations\MorphOne;

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
    use HasFactory, ScopeFilter;

    public const VERIFY_FAILED = 0;
    public const VERIFY_SUCCESS = 1;
    public const VERIFY_PENDING = 2;

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

    /**
     * @return array[]
     */
    public function getFilterScopes(): array
    {
        return [
            'id' => [
                'hasParam' => true,
                'scopeMethod' => 'id'
            ],
            'name' => [
                'hasParam' => true,
                'scopeMethod' => 'name'
            ],
            'email' => [
                'hasParam' => true,
                'scopeMethod' => 'email'
            ],
            'address' => [
                'hasParam' => true,
                'scopeMethod' => 'address'
            ],
            'status' => [
                'hasParam' => true,
                'scopeMethod' => 'status'
            ]
        ];
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function filePassport(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('type', File::FILE_PASSPORT);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function fileDrivingBack(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('type', File::FILE_DRIVING_BACK);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function fileDrivingFront(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('type', File::FILE_DRIVING_FRONT);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function fileNationalBack(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('type', File::FILE_NATIONAL_BACK);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function fileNationalFront(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('type', File::FILE_NATIONAL_FRONT);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function fileWithSelfie(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('type', File::FILE_WITH_SELFIE);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function fileDocument(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable')->where('type', File::FILE_DOCUMENT);
    }

    /**
     * @return \Illuminate\Database\Eloquent\Relations\MorphOne
     */
    public function files(): MorphOne
    {
        return $this->morphOne(File::class, 'fileable');
    }
}
