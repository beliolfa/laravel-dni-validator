<?php

namespace Disitec\DniValidator;

use Illuminate\Support\ServiceProvider;
use Illuminate\Support\Facades\Validator;

class DniValidatorServiceProvider extends ServiceProvider
{
    /**
     * Bootstrap the application services.
     *
     * @return void
     */
    public function boot()
    {
      Validator::extend('dni', function ($attribute, $value, $parameters, $validator) {
        if (!$value) {
          return true;
        }
        return ValidateDni::check_dni($value);
      }, 'Invalid Dni');
    }

    /**
     * Register the application services.
     *
     * @return void
     */
    public function register()
    {
        //
    }
}