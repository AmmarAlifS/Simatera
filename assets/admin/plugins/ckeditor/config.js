/**
 * @license Copyright (c) 2003-2023, CKSource Holding sp. z o.o. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	config.filebrowserBrowseUrl ='http://localhost/Simatera/assets/admin/plugins/kcfinder/browse.php?type=files',
    config.filebrowserImageBrowseUrl = 'http://localhost/Simatera/assets/admin/plugins/kcfinder/browse.php?type=images',
    config.filebrowserFlashBrowseUrl = 'http://localhost/Simatera/assets/admin/plugins/kcfinder/browse.php?type=flash',
    config.filebrowserUploadUrl = 'http://localhost/Simatera/assets/admin/plugins/kcfinder/browse.php?type=files',
    config.filebrowserImageUploadUrl ='http://localhost/Simatera/assets/admin/plugins/kcfinder/browse.php?type=images',
    config.filebrowserFlashUploadUrl = 'http://localhost/Simatera/assets/admin/plugins/kcfinder/browse.php?type=flash'
	// Define changes to default configuration here. For example:
	// config.language = 'fr';
	// config.uiColor = '#AADC6E';
};
