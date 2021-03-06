<?php
return apply_filters('mprm_admin_vars', array(
		"delete_img" => __('Delete Image', 'mp-restaurant-menu'),
		"delete" => __('Delete', 'mp-restaurant-menu'),
		"insert_media" => __('Insert a media', 'mp-restaurant-menu'),
		"insert" => __('Insert', 'mp-restaurant-menu'),
		"choose_image" => __('Choose an image', 'mp-restaurant-menu'),
		"use_image" => __('Select', 'mp-restaurant-menu'),
		"shortcode_title" => __('Insert Restaurant Menu Shortcode', 'mp-restaurant-menu'),
		"cancel" => __('Cancel', 'mp-restaurant-menu'),
		"choose" => __('Choose', 'mp-restaurant-menu'),
		'mprm_version' => mprm_get_plugin_version(),
		'add_new_menu_item' => __('Add New Menu item', 'mp-restaurant-menu'),
		'use_this_file' => __('Use This File', 'mp-restaurant-menu'),
		'quick_edit_warning' => __('Sorry, not available for variable priced products.', 'mp-restaurant-menu'),
		'delete_payment' => __('Are you sure you wish to delete this payment?', 'mp-restaurant-menu'),
		'delete_payment_note' => __('Are you sure you wish to delete this note?', 'mp-restaurant-menu'),
		'delete_tax_rate' => __('Are you sure you wish to delete this tax rate?', 'mp-restaurant-menu'),
		'revoke_api_key' => __('Are you sure you wish to revoke this API key?', 'mp-restaurant-menu'),
		'regenerate_api_key' => __('Are you sure you wish to regenerate this API key?', 'mp-restaurant-menu'),
		'resend_receipt' => __('Are you sure you wish to resend the purchase receipt?', 'mp-restaurant-menu'),
		'copy_menu_item_link_text' => __('Copy these links to your clipboard and give them to your customer', 'mp-restaurant-menu'),
		'delete_payment_menu_item' => sprintf(__('Are you sure you wish to delete this %s?', 'mp-restaurant-menu'), mprm_get_label_singular()),
		'one_price_min' => __('You must have at least one price', 'mp-restaurant-menu'),
		'one_field_min' => __('You must have at least one field', 'mp-restaurant-menu'),
		'one_menu_item_min' => __('Orders must contain at least one item', 'mp-restaurant-menu'),
		'one_option' => sprintf(__('Choose a %s', 'mp-restaurant-menu'), mprm_get_label_singular()),
		'one_or_more_option' => sprintf(__('Choose one or more %s', 'mp-restaurant-menu'), mprm_get_label_plural()),
		'numeric_item_price' => __('Item price must be numeric', 'mp-restaurant-menu'),
		'numeric_quantity' => __('Quantity must be numeric', 'mp-restaurant-menu'),
		'numeric_tax' => __('Tax must be numeric', 'mp-restaurant-menu'),
		'currency' => mprm_get_currency(),
		'rate' => mprm_get_option('tax_rate', 0),
		'enable_taxes' => mprm_get_option('enable_taxes', 0),
		'currency_sign' => mprm_currency_filter(''),
		'currency_pos' => mprm_get_option('currency_position', 'before'),
		'currency_decimals' => mprm_currency_decimal_filter(),
		'new_media_ui' => apply_filters('mprm_use_35_media_ui', 1),
		'remove_text' => __('Remove', 'mp-restaurant-menu'),
		'type_to_search' => sprintf(__('Type to search %s', 'mp-restaurant-menu'), mprm_get_label_plural()),
		'quantities_enabled' => mprm_item_quantities_enabled(),
		'batch_export_no_class' => __('You must choose a method.', 'mp-restaurant-menu'),
		'batch_export_no_reqs' => __('Required fields not completed.', 'mp-restaurant-menu'),
		'reset_stats_warn' => __('Are you sure you want to reset your store? This process is <strong><em>not reversible</em></strong>. Please be sure you have a recent backup.', 'mp-restaurant-menu'),
	)
);
