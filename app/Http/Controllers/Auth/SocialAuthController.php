<?php

namespace App\Http\Controllers\Auth;

use App\Services\Auth\SocialProviderHandler;
use Illuminate\Foundation\Auth\RedirectsUsers;
use App\Providers\RouteServiceProvider;
use App\Http\Controllers\Controller;
use Illuminate\Support\Facades\Auth;
use Socialite;

class SocialAuthController extends Controller
{
    use RedirectsUsers;

    protected $redirectTo = RouteServiceProvider::HOME;

    /**
     * 認証画面へリダイレクトする
     * @param string $provider
     * @return \Symfony\Component\HttpFoundation\RedirectResponse
     */
    public function redirect(string $provider)
    {
        return Socialite::driver($provider)->redirect();
    }

    /**
     * コールバック処理
     */
    public function callback(string $provider, SocialProviderHandler $service)
    {
        // providerからuser取得
        $provider_user = rescue(function () use ($provider) {
            return Socialite::driver($provider)->user();
        });
        abort_unless($provider_user, 403);

        // 保存更新処理
        $user = $service->upsertAndFetchUser($provider_user);
        Auth::login($user);
        return redirect()->intended($this->redirectPath());
    }
}
