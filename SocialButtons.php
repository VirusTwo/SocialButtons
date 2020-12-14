<?php

class SocialButtonsPlugin extends MantisPlugin {

    function register() {
        $this->name = lang_get( 'plugin_social_title' );
        $this->description = lang_get( 'plugin_social_description' );
        $this->page = 'config';

        $this->version     = '1.0';
        $this->requires    = array(
            'MantisCore'       => '2.0.0',
        );

        $this->author      = 'Alexis POKORSKI';
        $this->contact     = '';
        $this->url         = '';
    }

    /**
     * Event hook declaration.
     * @return array
     */
    function hooks(){
        return array(
            "EVENT_LAYOUT_RESOURCES" => 'ressources',
            "EVENT_LAYOUT_PAGE_FOOTER" => 'redirect'
        );
    }


    function config(){
        return array(
            'facebook_url' => 'Your Facebook link',
            'twitter_url' => 'Your Twitter link',
            'linkedin_url' => 'Your Linkedin link',
            'youtube_url' => 'Your Youtube link',
            'website_url' => 'Your Website link'
        );
    }

    function ressources(){
        return '<link rel="stylesheet" type="text/css" href="'.plugin_file("socialStyle.css").'"/>';
    }

    function redirect(){
        include('pages/printSocialButtons.php');
    }


}