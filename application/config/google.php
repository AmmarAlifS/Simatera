<?php
defined('BASEPATH') OR exit('No direct script access allowed');

/*
| -------------------------------------------------------------------
|  Google API Configuration
| -------------------------------------------------------------------
| 
| To get API details you have to create a Google Project
| at Google API Console (https://console.developers.google.com)
| 
|  client_id         string   Your Google API Client ID.
|  client_secret     string   Your Google API Client secret.
|  redirect_uri      string   URL to redirect back to after login.
|  application_name  string   Your Google application name.
|  api_key           string   Developer key.
|  scopes            string   Specify scopes
*/
$config['google']['client_id']        = '331527896168-9p9h74lbckj0m91haj0d3cqibauj2ojt.apps.googleusercontent.com';
$config['google']['client_secret']    = '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';
$config['google']['redirect_uri']     = 'http://localhost/Simatera/google_login/callback';
$config['google']['application_name'] = 'Login to SIMATERA';
$config['google']['api_key']          = '';
$config['google']['scopes']           = 'email';
$config['google']['scopes']           = 'profile';