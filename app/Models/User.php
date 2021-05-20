<?php
/**
 *  app/Models/User.php
 *
 * Date-Time: 18.05.21
 * Time: 13:01
 * @author Vito Makhatadze <vitomaxatadze@gmail.com>
 */
namespace App\Models;

use App\Traits\HasRolesAndPermissions;
use App\Traits\ScopeFilter;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Database\Eloquent\Relations\HasOne;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;


/**
 * Class User
 * @package App\Models
 * @property integer $id
 * @property string $name
 * @property string $username
 * @property string|null $email
 * @property integer $status
 * @property string $phone
 * @property string|null $email_verified_at
 * @property string $password
 * @property string $remember_token
 * @property string $created_at
 * @property string $updated_at
 */
class User extends Authenticatable
{
    use HasFactory, Notifiable, ScopeFilter, HasRolesAndPermissions;

    public const USER_ACTIVE = 1;
    public const USER_BLOCK = 2;
    public const USER_PENDING = 0;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'name',
        'email',
        'password',
        'phone'
    ];

    /**
     * The attributes that should be hidden for arrays.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
    ];

    /**
     * The attributes that should be cast to native types.
     *
     * @var array
     */
    protected $casts = [
        'email_verified_at' => 'datetime',
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
            'status' => [
                'hasParam' => true,
                'scopeMethod' => 'status'
            ]
        ];
    }

    /**
     *  Get wallet
     * @return \Illuminate\Database\Eloquent\Relations\HasOne
     */
    public function wallet(): HasOne
    {
        return $this->hasOne(Wallet::class, 'user_id');
    }
}
