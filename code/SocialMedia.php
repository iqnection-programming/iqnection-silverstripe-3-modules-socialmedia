<?php
	
	class SiteConfig_SocialMedia extends DataExtension 
	{
		private static $db = array(
			'UseFacebook' => 'Boolean',
			'UseTwitter' => 'Boolean',
			'UseLinkedIn' => 'Boolean',
			'UsePinterest' => 'Boolean',
			'UseInstagram' => 'Boolean',
			'UseGooglePlus' => 'Boolean',
			'UseBlog' => 'Boolean',
			'UseFlickr' => 'Boolean',
			'UseYouTube' => 'Boolean',
			'UseVimeo' => 'Boolean',
			'UseYelp' => 'Boolean',
			'UseTumblr' => 'Boolean',
			'FacebookURL' => 'Varchar(255)',
			'TwitterURL' => 'Varchar(255)',
			'LinkedInURL' => 'Varchar(255)',
			'PinterestURL' => 'Varchar(255)',
			'InstagramURL' => 'Varchar(255)',
			'GooglePlusURL' => 'Varchar(255)',
			'BlogURL' => 'Varchar(255)',
			'FlickrURL' => 'Varchar(255)',
			'YouTubeURL' => 'Varchar(255)',
			'VimeoURL' => 'Varchar(255)',
			'YelpURL' => 'Varchar(255)',
			'TumblrURL' => 'Varchar(255)',
		);
	
		public function updateCMSFields(FieldList $fields) 
		{
			if (Permission::check('ADMIN')) $fields->addFieldToTab("Root.SocialMedia", new CheckboxField("UseFacebook", "Use Facebook"));
			if ($this->owner->UseSocial1) $fields->addFieldToTab("Root.SocialMedia", new TextField("FacebookURL", "Facebook Link URL"));
			if (Permission::check('ADMIN')) $fields->addFieldToTab("Root.SocialMedia", new CheckboxField("UseTwitter", "Use Twitter"));
			if ($this->owner->UseSocial1) $fields->addFieldToTab("Root.SocialMedia", new TextField("TwitterURL", "Twitter Link URL"));
			if (Permission::check('ADMIN')) $fields->addFieldToTab("Root.SocialMedia", new CheckboxField("UseLinkedIn", "Use LinkedIn"));
			if ($this->owner->UseSocial1) $fields->addFieldToTab("Root.SocialMedia", new TextField("LinkedInURL", "LinkedIn Link URL"));
			if (Permission::check('ADMIN')) $fields->addFieldToTab("Root.SocialMedia", new CheckboxField("UsePinterest", "Use Pinterest"));
			if ($this->owner->UseSocial1) $fields->addFieldToTab("Root.SocialMedia", new TextField("PinterestURL", "Pinterest Link URL"));
			if (Permission::check('ADMIN')) $fields->addFieldToTab("Root.SocialMedia", new CheckboxField("UseInstagram", "Use Instagram"));
			if ($this->owner->UseSocial1) $fields->addFieldToTab("Root.SocialMedia", new TextField("InstagramURL", "Instagram Link URL"));
			if (Permission::check('ADMIN')) $fields->addFieldToTab("Root.SocialMedia", new CheckboxField("UseGooglePlus", "Use GooglePlus"));
			if ($this->owner->UseSocial1) $fields->addFieldToTab("Root.SocialMedia", new TextField("GooglePlusURL", "GooglePlus Link URL"));
			if (Permission::check('ADMIN')) $fields->addFieldToTab("Root.SocialMedia", new CheckboxField("UseBlog", "Use Blog"));
			if ($this->owner->UseSocial1) $fields->addFieldToTab("Root.SocialMedia", new TextField("BlogURL", "Blog Link URL"));
			if (Permission::check('ADMIN')) $fields->addFieldToTab("Root.SocialMedia", new CheckboxField("UseFlickr", "Use Flickr"));
			if ($this->owner->UseSocial1) $fields->addFieldToTab("Root.SocialMedia", new TextField("FlickrURL", "Flickr Link URL"));
			if (Permission::check('ADMIN')) $fields->addFieldToTab("Root.SocialMedia", new CheckboxField("UseYouTube", "Use YouTube"));
			if ($this->owner->UseSocial1) $fields->addFieldToTab("Root.SocialMedia", new TextField("YouTubeURL", "YouTube Link URL"));
			if (Permission::check('ADMIN')) $fields->addFieldToTab("Root.SocialMedia", new CheckboxField("UseVimeo", "Use Vimeo"));
			if ($this->owner->UseSocial1) $fields->addFieldToTab("Root.SocialMedia", new TextField("VimeoURL", "Vimeo Link URL"));
			if (Permission::check('ADMIN')) $fields->addFieldToTab("Root.SocialMedia", new CheckboxField("UseYelp", "Use Yelp"));
			if ($this->owner->UseSocial1) $fields->addFieldToTab("Root.SocialMedia", new TextField("YelpURL", "Yelp Link URL"));
			if (Permission::check('ADMIN')) $fields->addFieldToTab("Root.SocialMedia", new CheckboxField("UseTumblr", "Use Tumblr"));
			if ($this->owner->UseSocial1) $fields->addFieldToTab("Root.SocialMedia", new TextField("TumblrURL", "Tumblr Link URL"));			
		}
	}