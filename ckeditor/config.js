/**
 * @license Copyright (c) 2003-2014, CKSource - Frederico Knabben. All rights reserved.
 * For licensing, see LICENSE.html or http://ckeditor.com/license
 */

CKEDITOR.editorConfig = function( config ) {
	// Define changes to default configuration here. For example:
	 config.language = 'uk';
	// config.uiColor = '#AADC6E';
    config.allowedContent = 'div[*]{*}(*); p[*]{*}(*); ul[*]{*}(*); li[*]{*}(*); ol[*]{*}(*); ' +
                            'table[*]{*}(*); tr[*]{*}(*); td[*]{*}(*); a[href, alt, src, name]{*}(*); ' +
                            'h1[*]{*}(*); h2[*]{*}(*); h3[*]{*}(*); h4[*]{*}(*); h5[*]{*}(*); ' +
                            'strong[*]{*}(*); img[*]{*}(*); br[*]{*}(*); em[*]{*}(*); iframe[*]{*}(*); ' +
                            'article[*]{*}(*);';
};
