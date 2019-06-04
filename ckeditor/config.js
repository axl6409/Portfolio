/**
 * @license Copyright (c) 2003-2018, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see https://ckeditor.com/legal/ckeditor-oss-license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	config.language = 'fr';
	config.uiColor = '#AADC6E';
	config.skin = 'moono-dark';
	config.filebrowserBrowseUrl = '/ckfinder/browse.php?opener=ckeditor&type=files';
    config.filebrowserImageBrowseUrl = '/ckfinder/browse.php?opener=ckeditor&type=images';
    config.filebrowserFlashBrowseUrl = '/ckfinder/browse.php?opener=ckeditor&type=flash';
    config.filebrowserUploadUrl = '/ckfinder/upload.php?opener=ckeditor&type=files';
    config.filebrowserImageUploadUrl = '/ckfinder/upload.php?opener=ckeditor&type=images';
    config.filebrowserFlashUploadUrl = '/ckfinder/upload.php?opener=ckeditor&type=flash';
};
