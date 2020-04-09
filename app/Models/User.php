<?php

namespace App\Models;

use Illuminate\Contracts\Auth\MustVerifyEmail;
use Illuminate\Foundation\Auth\User as Authenticatable;
use Illuminate\Notifications\Notifiable;

class User extends Authenticatable
{
    use Notifiable;

    /**
     * The attributes that are mass assignable.
     *
     * @var array
     */
    protected $fillable = [
        'account_id', 'name', 'screen_name', 'avatar_path', 'access_token', 'access_token_secret'
    ];

    /**
     * 暗号化してトークンを保存
     * @param  string  $access_token
     */
    public function setAccessTokenAttribute(string $access_token)
    {
        $this->attributes['access_token'] = bcrypt($access_token);
    }

    /**
     * 復号化してトークン返却
     * @param string $access_token
     * @return string
     */
    public function getAccessTokenAttribute(string $access_token)
    {
        return decrypt($access_token);
    }

    /**
     * 暗号化してトークンを保存
     * @param  string  $access_token_secret
     */
    public function setAccessTokenSecretAttribute(string $access_token_secret)
    {
        $this->attributes['access_token_secret'] = bcrypt($access_token_secret);
    }

    /**
     * 復号化してトークン返却
     * @param string $access_token_secret
     * @return string
     */
    public function getAccessTokenSecretAttribute(string $access_token_secret)
    {
        return decrypt($access_token_secret);
    }
}
