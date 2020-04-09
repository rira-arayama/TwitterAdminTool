<?php

namespace App\Services\Auth;

use Laravel\Socialite\Contracts\User as ProviderUser;
use App\Models\User;
use Illuminate\Support\Facades\DB;

class SocialProviderHandler
{
    /**
     * 作成または最新情報に更新したユーザを取得する
     * @param  \Laravel\Socialite\Contracts\User $provider_user
     * @return \App\Models\User
     */
    public function upsertAndFetchUser(ProviderUser $provider_user): User
    {
        // userを更新または作成してユーザを返却
        return DB::transaction(function () use ($provider_user) {
            return User::updateOrCreate(['account_id' => $provider_user->getId()], [
                'name' => $provider_user->getName(),
                'screen_name' => $provider_user->getNickname(),
                'avatar_path' => $provider_user->getAvatar(),
                'access_token' => optional($provider_user)->token,
                'access_token_secret' => optional($provider_user)->tokenSecret
            ]);
        });
    }
}
