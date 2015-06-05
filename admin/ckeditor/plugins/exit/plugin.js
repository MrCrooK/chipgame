// Register a plugin named "exit".
CKEDITOR.plugins.add( 'exit', {
	lang: 'af,ar,bg,bn,bs,ca,cs,cy,da,de,el,en,en-au,en-ca,en-gb,eo,es,et,eu,fa,fi,fo,fr,fr-ca,gl,gu,he,hi,hr,hu,id,is,it,ja,ka,km,ko,ku,lt,lv,mk,mn,ms,nb,nl,no,pl,pt,pt-br,ro,ru,si,sk,sl,sq,sr,sr-latn,sv,th,tr,tt,ug,uk,vi,zh,zh-cn', // %REMOVE_LINE_CORE%
	icons: 'exit,exit-rtl', // %REMOVE_LINE_CORE%
	hidpi: true, // %REMOVE_LINE_CORE%
	init: function( editor ) {
		editor.addCommand( 'exit', { modes: { wysiwyg: 1, source: 1 },

			exec: function( editor ) {
				history.go(-1);
			},
			async: true
		} );

		editor.ui.addButton && editor.ui.addButton( 'exit', {
			label: editor.lang.exit.toolbar,
			command: 'exit',
			toolbar: 'document,20'
		} );
	}
} );
