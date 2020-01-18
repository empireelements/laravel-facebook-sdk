<?php namespace Nsivanoly\LaravelFacebookSdk;

use Illuminate\Support\Facades\Facade;

/**
 * @see \Nsivanoly\LaravelFacebookSdk\LaravelFacebookSdk
 */
class FacebookFacade extends Facade
{
    /**
     * Get the registered name of the component.
     *
     * Don't use this. Just... don't.
     *
     * @return string
     */
    protected static function getFacadeAccessor()
    {
        return 'Nsivanoly\LaravelFacebookSdk\LaravelFacebookSdk';
    }
}
