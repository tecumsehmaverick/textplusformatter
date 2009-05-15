<?php
	
	class Extension_TextPlusFormatter extends Extension {
	/*-------------------------------------------------------------------------
		Definition:
	-------------------------------------------------------------------------*/
		
		public function about() {
			return array(
				'name'			=> 'Formatter: Text Plus',
				'version'		=> '1.0.1',
				'release-date'	=> '2009-05-15',
				'author'		=> array(
					'name'			=> 'Rowan Lewis',
					'website'		=> 'http://pixelcarnage.com/',
					'email'			=> 'rowan@pixelcarnage.com'
				),
				'description'	=> 'Plain text with entities sanitized and some extra features.'
			);
		}
	}
	
?>