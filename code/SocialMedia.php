<?php
	
	class SiteConfig_SocialMedia extends DataExtension {
	
		private static $db = array(
			'Social1' => 'Varchar(255)',
			'Social2' => 'Varchar(255)',
			'Social3' => 'Varchar(255)',
			'Social4' => 'Varchar(255)',
			'Social5' => 'Varchar(255)',
			'Social6' => 'Varchar(255)'
		);
	
		public function updateCMSFields(FieldList $fields) {
			$fields->addFieldToTab("Root.SocialMedia", new TextField("Social1", "Facebook Link URL"));
			$fields->addFieldToTab("Root.SocialMedia", new TextField("Social2", "Twitter Link URL"));
			$fields->addFieldToTab("Root.SocialMedia", new TextField("Social3", "LinkedIn Link URL"));
			$fields->addFieldToTab("Root.SocialMedia", new TextField("Social4", "Google Plus Link URL"));
			$fields->addFieldToTab("Root.SocialMedia", new TextField("Social5", "Pinterest Link URL"));
			$fields->addFieldToTab("Root.SocialMedia", new TextField("Social6", "Instagram Link URL"));
		}
	}