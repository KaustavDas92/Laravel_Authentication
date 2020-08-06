<?php

namespace App\Providers;

use App\Ability;
use App\Conversation;
use App\User;
use Illuminate\Foundation\Support\Providers\AuthServiceProvider as ServiceProvider;
use Illuminate\Support\Facades\Gate;

class AuthServiceProvider extends ServiceProvider
{
    /**
     * The policy mappings for the application.
     *
     * @var array
     */
    protected $policies = [
        // 'App\Model' => 'App\Policies\ModelPolicy',
    ];

    /**
     * Register any authentication / authorization services.
     *
     * @return void
     */
    public function boot()
    {
        $this->registerPolicies();
       /* Gate::define('update-conversation',function (User $user,Conversation $conversation)
        {
            return $conversation->user->is($user);
        });*/

        //giving all the access to the admin
        Gate::before( function (User $user)
        {
           if($user->id===2)
           {
               return true;
           }
        });

        Gate::define('edit-forum',function (User $user,Ability $ability)
        {
           return $user->userAbility()->contains($ability);
        });
    }
}
