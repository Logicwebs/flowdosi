<?php

/*
 * This file is part of jwt-auth.
 *
 * (c) Sean Tymon <tymon148@gmail.com>
 *
 * For the full copyright and license information, please view the LICENSE
 * file that was distributed with this source code.
 */

return [

    /*
    |--------------------------------------------------------------------------
    | JWT Authentication Secret
    |--------------------------------------------------------------------------
    |
    | Don't forget to set this in your .env file, as it will be used to sign
    | your tokens. A helper command is provided for this:
    | `php artisan jwt:secret`
    |
    | Note: This will be used for Symmetric algorithms only (HMAC),
    | since RSA and ECDSA use a private/public key combo (See below).
    |
    */

    'secret' => env('JWT_SECRET'),

    /*
    |--------------------------------------------------------------------------
    | JWT Authentication Keys
    |--------------------------------------------------------------------------
    |
    | The algorithm you are using, will determine whether your tokens are
    | signed with a random string (defined in `JWT_SECRET`) or using the
    | following public & private keys.
    |
    | Symmetric Algorithms:
    | HS256, HS384 & HS512 will use `JWT_SECRET`.
    |
    | Asymmetric Algorithms:
    | RS256, RS384 & RS512 / ES256, ES384 & ES512 will use the keys below.
    |
    */

    'keys' => [

        /*
        |--------------------------------------------------------------------------
        | Public Key
        |--------------------------------------------------------------------------
        |
        | A path or resource to your public key.
        |
        | E.g. 'file://path/to/public/key'
        |
        */

        'public' => "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",

        /*
        |--------------------------------------------------------------------------
        | Private Key
        |--------------------------------------------------------------------------
        |
        | A path or resource to your private key.
        |
        | E.g. 'file://path/to/private/key'
        |
        */

        'private' => "MIIFBDCCAuygAwIBAgIJAKTJCIyY6B4dMA0GCSqGSIb3DQEBCwUAMBgxFjAUBgNVBAMTDUZsb3dk
        b3NpIFRlc3QwHhcNMjIwMjE3MTIxNTI3WhcNMjQwMjE4MTIxNTI3WjAYMRYwFAYDVQQDEw1GbG93
        ZG9zaSBUZXN0MIICIjANBgkqhkiG9w0BAQEFAAOCAg8AMIICCgKCAgEAuMWjXyOcAZxljRPKGAGM
        hPCK3/fowoes0CcgthApSh1JTLM4lYynNUOwouHCE3w2+nzRX7uivo57tkj/nEXoBTCJerszamrz
        5UUZwsi2tWcGXd3WGCF/mPYg5x0Dzp0pEGiLi2fXRd4uBr0QuKciicwlhC2hxOR/xD0fJqOF4oBq
        SQuhMeG/DKTtln4NfVGCH3/Azn8ZemVFiPhaeMTE+RJ2gKnTK3KLxjcRNS8iaWZU7oyMq2ZmrPJO
        5Vho850nQsTbv5M4qvOKzBEz69YK8sAsOLbWAmVFsa3a3/c/Ey1YwaDKWFl1s17YoqDlRLd/VQQB
        P/fyJdp27VpPjLZTVYt5JA1mvZooIRCCG7SWzhArqxXPBjrjsBIjxVBhiw6UOm31AIHYk1xDNWaK
        AaXCvCRJXjrVm3XjREVEHXGoCLxj5xc9dgZTWhoLQRSnNGdD7EKHoitE7qzA9ykotAft/t4ojV62
        3TdPaeNgb6LNHYydn9JygwWcfIM3sHOc6l86mY1H1fXR7YPE+I6vBbPdwHBMT/20XpeUQq6vlURa
        PvMGgMrhL5l5fLg7PfUv2htDn1TbsJ9gZ+7clXixV4eJnUjhoeTkvqtm5RJlmf3otyT74ovyuOnt
        swdOt/eQdiNJEWLOile6CTUz55MfkjQCGm8CxFSgBDKBf2/Yc0rj5mcCAwEAAaNRME8wCQYDVR0T
        BAIwADALBgNVHQ8EBAMCBsAwFgYDVR0lAQH/BAwwCgYIKwYBBQUHAwgwHQYDVR0OBBYEFCS6svoY
        qxzLFGUkcDS8+C3U0lhNMA0GCSqGSIb3DQEBCwUAA4ICAQBBApH91RwLx9co3JMPJp3qCqay7ll1
        zHb3lCabJk6PlHj8W5VvAJdO+9P59B4Ux+kWcmaGSanMRf3xcsfdV2VJD1nPnpFjFJU0UKLytO0l
        T1rsgoNu7R2ro9pbYYgIOM+c8RLeurBLRPtu5sX9Y1FUcrM6WaCndukqXgn4R0TcBVTx+eBel15h
        AH3Y24X7b68BDFK9rzf1B8VWQMq0fXggC9OC9mH62OpXcL6zgPoIGS3LhSV9YdYzwiftAuLEZeqn
        1O2/7067P+NlwbqhwedeY7zIKU0OWn59RPrRx1hSqvNT0fs+rLtdJ0fMpP5DjIHTRYyG60JFVxbI
        KMz3kMYqKyxEqu8o+StHPmG8Icm9ygX/LulHeIaHkrObQOJHibgg1IyH1slYbOGjDpKKDN7z+2Yb
        aR5EjcrJuahAYFHw29pJcuoJY2XWdlsK5dyZnwy6JH6bqAicGr5y38G5Ql1i/Y+ABCdD54ILg3mm
        8OByBznRJoMWKgpbp7sd54zxGqy+gVg7winn8Z7yMte/atYvz9FSL50jS24SaJrJO8qMfdHVxOvf
        Ql2z1QO0Y/Aee4noAMUAVSQWWYwog6HXmqrYs4zdas5dTtL8zmbxtUOAeNFlWWOlNpe1dr9EVHfe
        PbiMsMJMGEakuTFnL9p7/7El7mD7OlRzFnRVLbnNAWDpeA==",

        /*
        |--------------------------------------------------------------------------
        | Passphrase
        |--------------------------------------------------------------------------
        |
        | The passphrase for your private key. Can be null if none set.
        |
        */

        'passphrase' => env('JWT_PASSPHRASE'),

    ],

    /*
    |--------------------------------------------------------------------------
    | JWT time to live
    |--------------------------------------------------------------------------
    |
    | Specify the length of time (in minutes) that the token will be valid for.
    | Defaults to 1 hour.
    |
    | You can also set this to null, to yield a never expiring token.
    | Some people may want this behaviour for e.g. a mobile app.
    | This is not particularly recommended, so make sure you have appropriate
    | systems in place to revoke the token if necessary.
    | Notice: If you set this to null you should remove 'exp' element from 'required_claims' list.
    |
    */

    'ttl' => env('JWT_TTL', 60),

    /*
    |--------------------------------------------------------------------------
    | Refresh time to live
    |--------------------------------------------------------------------------
    |
    | Specify the length of time (in minutes) that the token can be refreshed
    | within. I.E. The user can refresh their token within a 2 week window of
    | the original token being created until they must re-authenticate.
    | Defaults to 2 weeks.
    |
    | You can also set this to null, to yield an infinite refresh time.
    | Some may want this instead of never expiring tokens for e.g. a mobile app.
    | This is not particularly recommended, so make sure you have appropriate
    | systems in place to revoke the token if necessary.
    |
    */

    'refresh_ttl' => env('JWT_REFRESH_TTL', 20160),

    /*
    |--------------------------------------------------------------------------
    | JWT hashing algorithm
    |--------------------------------------------------------------------------
    |
    | Specify the hashing algorithm that will be used to sign the token.
    |
    | See here: https://github.com/namshi/jose/tree/master/src/Namshi/JOSE/Signer/OpenSSL
    | for possible values.
    |
    */

    'algo' => env('JWT_ALGO', 'RS256'),

    /*
    |--------------------------------------------------------------------------
    | Required Claims
    |--------------------------------------------------------------------------
    |
    | Specify the required claims that must exist in any token.
    | A TokenInvalidException will be thrown if any of these claims are not
    | present in the payload.
    |
    */

    'required_claims' => [
        'iss',
        'iat',
        'exp',
        'nbf',
        'aud',
        'sub',
        'jti',
    ],

    /*
    |--------------------------------------------------------------------------
    | Persistent Claims
    |--------------------------------------------------------------------------
    |
    | Specify the claim keys to be persisted when refreshing a token.
    | `sub` and `iat` will automatically be persisted, in
    | addition to the these claims.
    |
    | Note: If a claim does not exist then it will be ignored.
    |
    */

    'persistent_claims' => [
        // 'foo',
        // 'bar',
    ],

    /*
    |--------------------------------------------------------------------------
    | Lock Subject
    |--------------------------------------------------------------------------
    |
    | This will determine whether a `prv` claim is automatically added to
    | the token. The purpose of this is to ensure that if you have multiple
    | authentication models e.g. `App\User` & `App\OtherPerson`, then we
    | should prevent one authentication request from impersonating another,
    | if 2 tokens happen to have the same id across the 2 different models.
    |
    | Under specific circumstances, you may want to disable this behaviour
    | e.g. if you only have one authentication model, then you would save
    | a little on token size.
    |
    */

    'lock_subject' => true,

    /*
    |--------------------------------------------------------------------------
    | Leeway
    |--------------------------------------------------------------------------
    |
    | This property gives the jwt timestamp claims some "leeway".
    | Meaning that if you have any unavoidable slight clock skew on
    | any of your servers then this will afford you some level of cushioning.
    |
    | This applies to the claims `iat`, `nbf` and `exp`.
    |
    | Specify in seconds - only if you know you need it.
    |
    */

    'leeway' => env('JWT_LEEWAY', 0),

    /*
    |--------------------------------------------------------------------------
    | Blacklist Enabled
    |--------------------------------------------------------------------------
    |
    | In order to invalidate tokens, you must have the blacklist enabled.
    | If you do not want or need this functionality, then set this to false.
    |
    */

    'blacklist_enabled' => env('JWT_BLACKLIST_ENABLED', true),

    /*
    | -------------------------------------------------------------------------
    | Blacklist Grace Period
    | -------------------------------------------------------------------------
    |
    | When multiple concurrent requests are made with the same JWT,
    | it is possible that some of them fail, due to token regeneration
    | on every request.
    |
    | Set grace period in seconds to prevent parallel request failure.
    |
    */

    'blacklist_grace_period' => env('JWT_BLACKLIST_GRACE_PERIOD', 0),

    /*
    |--------------------------------------------------------------------------
    | Cookies encryption
    |--------------------------------------------------------------------------
    |
    | By default Laravel encrypt cookies for security reason.
    | If you decide to not decrypt cookies, you will have to configure Laravel
    | to not encrypt your cookie token by adding its name into the $except
    | array available in the middleware "EncryptCookies" provided by Laravel.
    | see https://laravel.com/docs/master/responses#cookies-and-encryption
    | for details.
    |
    | Set it to true if you want to decrypt cookies.
    |
    */

    'decrypt_cookies' => false,

    /*
    |--------------------------------------------------------------------------
    | Providers
    |--------------------------------------------------------------------------
    |
    | Specify the various providers used throughout the package.
    |
    */

    'providers' => [

        /*
        |--------------------------------------------------------------------------
        | JWT Provider
        |--------------------------------------------------------------------------
        |
        | Specify the provider that is used to create and decode the tokens.
        |
        */

        'jwt' => Tymon\JWTAuth\Providers\JWT\Lcobucci::class,

        /*
        |--------------------------------------------------------------------------
        | Authentication Provider
        |--------------------------------------------------------------------------
        |
        | Specify the provider that is used to authenticate users.
        |
        */

        'auth' => Tymon\JWTAuth\Providers\Auth\Illuminate::class,

        /*
        |--------------------------------------------------------------------------
        | Storage Provider
        |--------------------------------------------------------------------------
        |
        | Specify the provider that is used to store tokens in the blacklist.
        |
        */

        'storage' => Tymon\JWTAuth\Providers\Storage\Illuminate::class,

    ],

];
