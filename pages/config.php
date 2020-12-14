<?php
auth_reauthenticate( );
access_ensure_global_level( config_get( 'manage_plugin_threshold' ) );

layout_page_header( lang_get( 'plugin_social_title' ) );

layout_page_begin( 'manage_overview_page.php' );

print_manage_menu( 'manage_plugin_page.php' );

?>

<div class="col-md-12 col-xs-12">
<div class="space-10"></div>
<div class="form-container" >

<form id="formatting-config-form" action="<?php echo plugin_page( 'config_edit' )?>" method="post">
<?php echo form_security_field( 'plugin_format_config_edit' ) ?>

<div class="widget-box widget-color-blue2">
<div class="widget-header widget-header-small">
	<h4 class="widget-title lighter">
		<i class="ace-icon fa fa-text-width"></i>
		<?php echo lang_get( 'plugin_social_title' ) . ': ' . lang_get( 'plugin_social_description' )?>
	</h4>
</div>
<div class="widget-body">
<div class="widget-main no-padding">
<div class="table-responsive">
<table class="table table-bordered table-condensed table-striped">
<tr>
	<th class="category width-40">
		<?php echo lang_get( 'plugin_social_config' )?>
	</th>
	<td class="center">
        <p><i class="ace-icon fa fa-facebook-f"></i>
            <input name="facebook" type="text" value="<?php echo plugin_config_get('facebook_url')?>" ></p>
        <p><i class="ace-icon fa fa-twitter"></i>
            <input name="twitter" type="text" value="<?php echo plugin_config_get('twitter_url')?>"/></p>
        <p><i class="ace-icon fa fa-linkedin"></i>
            <input name="linkedin" type="text" value="<?php echo plugin_config_get('linkedin_url')?>"/></p>
        <p><i class="ace-icon fa fa-chrome"></i>
            <input name="website" type="text" value="<?php echo plugin_config_get('website_url')?>"/></p>
        <p><i class="ace-icon fa fa-youtube"></i>
            <input name="youtube" type="text" value="<?php echo plugin_config_get('youtube_url')?>"/></p>
	</td>
</tr>

</table>
</div>
</div>
<div class="widget-toolbox padding-8 clearfix">
	<input type="submit" class="btn btn-primary btn-white btn-round" value="<?php echo lang_get( 'change_configuration' )?>" />
</div>
</div>
</div>
</form>
</div>
</div>

<?php
layout_page_end();
