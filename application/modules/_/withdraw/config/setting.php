<?php

/*
 * ------------------------------------------------------
 *  Module Setting Params
 * ------------------------------------------------------
 * 
 * $setting[param] = (array)options;
 * Danh sach cac tuy chon:
 * 	'type'			= Loai bien. VD: text. Cac loai bien duoc ho tro:
 * 						text, textarea, html, bool, select, select_multi, radio, checkbox, date, color, file, file_multi, image, image_multi
 * 	'name'			= Tieu de cua bien
 * 	'value'			= Gia tri mac dinh
 * 	'values'		= Cac gia tri tuy chon cua bien, ap dung voi type = select, select_multi, radio, checkbox
 * 						VD: array('value1' => 'Name1', 'value2' => 'Name2', ...)
 * 	'file_allowed'	= Cac loai file cho phep, khong khai bao thi lay theo mac dinh. VD: 'jpg|png'
 * 	'file_private'	= TRUE: File private khong co link down || FALSE: File public co link down
 * 	'file_server'	= TRUE: File luu tren server luu tru (Mac dinh) || FALSE: File luu len server hien tai
 * 	'file_thumb'	= Tao thumb cho anh hay khong, TRUE || FALSE
 */

$setting = [

	'amount_min' => [
		'type' => 'text',
		'name' => 'Số tiền rút tối thiểu',
	],

	'amount_max' => [
		'type' => 'text',
		'name' => 'Số tiền rút tối đa',
		'desc' => 'Nếu không khai báo thì không áp dụng',
	],

	'fee_constant' => [
		'type' => 'text',
		'name' => 'Phí cố định',
	],

	'fee_percent' => [
		'type' => 'text',
		'name' => 'Phí phần trăm (%)',
	],

	'fee_min' => [
		'type' => 'text',
		'name' => 'Phí tối thiểu',
		'desc' => 'Nếu không khai báo thì không áp dụng',
	],

	'fee_max' => [
		'type' => 'text',
		'name' => 'Phí tối đa',
		'desc' => 'Nếu không khai báo thì không áp dụng',
	],

];
