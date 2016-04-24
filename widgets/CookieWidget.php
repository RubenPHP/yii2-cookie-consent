<?php

/**
 * @copyright Copyright &copy; Gogodigital Srls
 * @company Gogodigital Srls - Wide ICT Solutions
 * @website http://www.gogodigital.it
 * @github https://github.com/cinghie/yii2-cookie-consent
 * @license GNU GENERAL PUBLIC LICENSE VERSION 3
 * @package yii2-cookie-consent
 * @version 1.4.3
 */

namespace cinghie\cookieconsent\widgets;

use Yii;

class CookieWidget extends \yii\base\Widget
{
    public $message;
    public $dismiss;
    public $learnMore;
    public $link;
    public $theme;
    public $container;
    public $path;
    public $domain;
    public $expiryDays;
    public $target;


    public function __construct()
    {
        $this->message = 'This website uses cookies to ensure you get the best experience on our website.';
        $this->dismiss = 'Got It!';
        $this->learnMore = 'More info';
        $this->link = null;
        $this->theme = 'dark-bottom';
        $this->container = null;
        $this->path = '/';
        $this->domain = '';
        $this->expiryDays = 365;
        $this->target = '_self';

        parent::__construct();
    }

    public function run($params = [])
    {
        return $this->render('cookieWidget', [
            'message' => $this->message,
            'dismiss' => $this->dismiss,
            'learnMore' => $this->learnMore,
            'link' => $this->link,
            'theme' => $this->theme,
            'container' => $this->container,
            'path' => $this->path,
            'domain' => $this->domain,
            'expiryDays' => $this->expiryDays,
            'target' => $this->target,
        ]);
    }

}