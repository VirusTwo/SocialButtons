<?php
form_security_validate( 'plugin_format_config_edit' );

auth_reauthenticate( );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

$f_facebook_text = gpc_get_string( 'facebook');

if( plugin_config_get( 'facebook_url' ) != $f_facebook_text ) {
	plugin_config_set( 'facebook_url', $f_facebook_text );
}

$f_twitter_text = gpc_get_string( 'twitter');

if( plugin_config_get( 'twitter_url' ) != $f_twitter_text ) {
    plugin_config_set( 'twitter_url', $f_twitter_text );
}

$f_linkedin_text = gpc_get_string( 'linkedin');

if( plugin_config_get( 'linkedin_url' ) != $f_linkedin_text ) {
    plugin_config_set( 'linkedin_url', $f_linkedin_text );
}

$f_youtube_text = gpc_get_string( 'youtube');

if( plugin_config_get( 'youtube_url' ) != $f_youtube_text ) {
    plugin_config_set( 'youtube_url', $f_youtube_text );
}

$f_website_text = gpc_get_string( 'website');

if( plugin_config_get( 'website_url' ) != $f_website_text ) {
    plugin_config_set( 'website_url', $f_website_text );
}

form_security_purge( 'plugin_format_config_edit' );

print_successful_redirect( plugin_page( 'config', true ) );
