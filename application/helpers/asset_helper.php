<?php if (!defined('BASEPATH')) exit('No direct script access allowed');

if (!function_exists('asset_url()')) {
    function asset_url()
    {
        return base_url() . 'assets/';
    }
    function lib_url()
    {
        return asset_url() . 'lib/';
    }
    function js_url()
    {
        return asset_url() . 'js/';
    }
    function css_url()
    {
        return asset_url() . 'css/';
    }
}
