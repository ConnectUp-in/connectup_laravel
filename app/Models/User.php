<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Database\Eloquent\Factories\HasFactory;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;
use Laravel\Fortify\TwoFactorAuthenticatable;
use Laravel\Jetstream\HasProfilePhoto;
use Laravel\Sanctum\HasApiTokens;
use App\Models\Country;
use App\Models\College;
use App\Models\User;
use App\Models\AcademicBackground as AB;
use App\Models\Post;
// Import Str
use Illuminate\Support\Str;

class User extends Authenticatable
{
    use HasApiTokens;
    use HasFactory;
    use HasProfilePhoto;
    use Notifiable;
    use TwoFactorAuthenticatable;
    public $incrementing = false;
    /**
     * The attributes that are mass assignable.
     *
        return 'https://ui-avatars.com/api/?name='.urlencode($name).'&color=7F9CF5&background=EBF4FF';
     * 
     * @var string[]
     */
    protected $fillable = [
        'name',
        'email',
        'username',
        'password',
        'bio',
        'website',
        'birthday',
        'country',
        'college',
        'academic_background',
        'interests',
        'skills',
        'socials',
        'profile_photo_path',
        'cover_photo_path',
        'invited_by',
    ];

    /**
     * The attributes that should be hidden for serialization.
     *
     * @var array
     */
    protected $hidden = [
        'password',
        'remember_token',
        'two_factor_recovery_codes',
        'two_factor_secret',
    ];

    /**
     * The attributes that should be cast.
     *
     * @var array
     */
    protected $casts = [
        // 'email_verified_at' => 'datetime',
        'id' => 'string',
        'socials' => 'array',
        'skills' => 'array',
        'interests' => 'array',
    ];

    /**
     * The accessors to append to the model's array form.
     *
     * @var array
     */
    protected $appends = [
        // 'profile_photo_url',
        'postcount'
    ];



    // If id is not present while creating a new user, then generate a random id.
    public static function boot(){
        parent::boot();
        static::creating(function ($user) {
                $user->id = (string) Str::uuid();
            if (!$user->invite_refferal) {
                $name_initials = substr($user->name, 0, 2);
                $user->invite_refferal =  $name_initials.'_'.rand(1000, 9999);
            }
            if (!$user->username) {
                $email = explode('@', $user->email);
                $username = $email[0];
                function getUniqueUsername($username) {
                    $user = User::where('username', $username)->first();
                    if ($user) {
                        $username = $username . rand(1, 9);
                        return getUniqueUsername($username);
                    } else {
                        return $username;
                    }
                }
                $user->username = getUniqueUsername($username);
            }
            if(!$user->socials){
                $user->socials = '{}';
            }
            if(!$user->interests){
                $user->interests = [];
            }
            if(!$user->cover_photo_path){
                // generater a random cover photo from /assets/defaults/covers
                $user->cover_photo_path = '/assets/defaults/covers/'.rand(1, 22).'.jpg';
              }
        });
    }

    // Get the user's profile photo URL attribute.
    public function getProfilePhotoPathAttribute($image){
        if(!$image){
            return 'https://ui-avatars.com/api/?name='.urlencode($this->name).'&color=7F9CF5&background=EBF4FF';
        }
        return $image;
    }


    public  function getCountryAttribute($value){
        return Country::find($value);
    }

    function getAcademicBackgroundAttribute($value){
        return AB::find($value);
    }

    public function getPostcountAttribute(){
        return Post::where('user_id',$this->id)->count();
    }
    public function getCollegeAttribute($value){
        return College::find($value);
    }
    public function setSocialsAttribute($value){
        $this->attributes['socials'] = json_encode(json_decode($value));
    }

}