<?php

namespace App\Providers;

use App\Billing\BankPaymentGateway;
use App\Billing\CreditPaymentGateway;
use App\Billing\PaymentGatewayContract;
use Illuminate\Support\ServiceProvider;

class AppServiceProvider extends ServiceProvider
{
    /**
     * Register any application services.
     *
     * @return void
     */
    public function register()
    {
        $this->app->singleton(PaymentGatewayContract::class,function($app){
            //return new BankPaymentGateway('usd');
            return new CreditPaymentGateway('usd');

            //you can dynamicall chose which payment gateway you want to choose
        });
    }

    /**
     * Bootstrap any application services.
     *
     * @return void
     */
    public function boot()
    {
        //
    }
}
