<?php
namespace App;
use Illuminate\Notifications\Notifiable;
use Laravel\Passport\HasApiTokens;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Spatie\Permission\Traits\HasRoles;
class User extends Authenticatable
{

    use HasApiTokens, Notifiable;
    use HasRoles;
    /**

     * The attributes that are mass assignable.

     *

     * @var array

     */

    protected $fillable = [
        'name', 'email', 'password', 'opm_id'
    ];

    public function opm()
    {
        return $this->belongsTo('App\Models\Opm\Opm', 'opm_id', 'id');
    }


    /**

     * The attributes that should be hidden for arrays.

     *

     * @var array

     */
    protected $hidden = [

        'password', 'remember_token',
    ];
}