<?php
function books_get_theme_var()
{
$books_theme_data = array(
	'social_link_open_in_new_tab' 		=>	get_theme_mod('social_link_open_in_new_tab',true),
	'social_link_facebook' 				=>	get_theme_mod('social_link_facebook' , esc_url('#')),
	'social_link_google' 				=>	get_theme_mod('social_link_google',esc_url('#')),
	'social_link_youtube' 				=>	get_theme_mod('social_link_youtube' ,esc_url('#')),
	'social_link_twitter' 				=>	get_theme_mod('social_link_twitter' ,esc_url('#')),
	'social_link_linkedin' 				=>	get_theme_mod('social_link_linkedin' ,esc_url('#')),
	'contact_email' 					=>	get_theme_mod('contact_email' ,'email@exapmle.com'),
	'contact_phone' 					=>	get_theme_mod('contact_phone' ,'000-000-0000'),
	'cosmica_show_logo'					=>	get_theme_mod('cosmica_show_logo', false)
);
return $books_theme_data;
}
?>