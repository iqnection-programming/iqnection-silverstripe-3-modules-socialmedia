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
			'UseHouzz' => 'Boolean',
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
			'HouzzURL' => 'Varchar(255)',
		);
	
		public function updateCMSFields(FieldList $fields) 
		{
			$tab = $fields->findOrMakeTab('Root.Developer.SocialMedia');
			$tab->push( $activateFields = ToggleCompositeField::create('ActivateFields','Activate Fields',null));
			$activateFields->push( new CheckboxField("UseFacebook", "Use Facebook"));
			if ($this->owner->UseFacebook) $fields->addFieldToTab("Root.Developer.SocialMedia", new TextField("FacebookURL", "Facebook Link URL"));
			$activateFields->push( new CheckboxField("UseTwitter", "Use Twitter"));
			if ($this->owner->UseTwitter) $fields->addFieldToTab("Root.Developer.SocialMedia", new TextField("TwitterURL", "Twitter Link URL"));
			$activateFields->push( new CheckboxField("UseLinkedIn", "Use LinkedIn"));
			if ($this->owner->UseLinkedIn) $fields->addFieldToTab("Root.Developer.SocialMedia", new TextField("LinkedInURL", "LinkedIn Link URL"));
			$activateFields->push( new CheckboxField("UsePinterest", "Use Pinterest"));
			if ($this->owner->UsePinterest) $fields->addFieldToTab("Root.Developer.SocialMedia", new TextField("PinterestURL", "Pinterest Link URL"));
			$activateFields->push( new CheckboxField("UseInstagram", "Use Instagram"));
			if ($this->owner->UseInstagram) $fields->addFieldToTab("Root.Developer.SocialMedia", new TextField("InstagramURL", "Instagram Link URL"));
			$activateFields->push( new CheckboxField("UseGooglePlus", "Use GooglePlus"));
			if ($this->owner->UseGooglePlus) $fields->addFieldToTab("Root.Developer.SocialMedia", new TextField("GooglePlusURL", "GooglePlus Link URL"));
			$activateFields->push( new CheckboxField("UseBlog", "Use Blog"));
			if ($this->owner->UseBlog) $fields->addFieldToTab("Root.Developer.SocialMedia", new TextField("BlogURL", "Blog Link URL"));
			$activateFields->push( new CheckboxField("UseFlickr", "Use Flickr"));
			if ($this->owner->UseFlickr) $fields->addFieldToTab("Root.Developer.SocialMedia", new TextField("FlickrURL", "Flickr Link URL"));
			$activateFields->push( new CheckboxField("UseYouTube", "Use YouTube"));
			if ($this->owner->UseYouTube) $fields->addFieldToTab("Root.Developer.SocialMedia", new TextField("YouTubeURL", "YouTube Link URL"));
			$activateFields->push( new CheckboxField("UseVimeo", "Use Vimeo"));
			if ($this->owner->UseVimeo) $fields->addFieldToTab("Root.Developer.SocialMedia", new TextField("VimeoURL", "Vimeo Link URL"));
			$activateFields->push( new CheckboxField("UseYelp", "Use Yelp"));
			if ($this->owner->UseYelp) $fields->addFieldToTab("Root.Developer.SocialMedia", new TextField("YelpURL", "Yelp Link URL"));
			$activateFields->push( new CheckboxField("UseTumblr", "Use Tumblr"));
			if ($this->owner->UseTumblr) $fields->addFieldToTab("Root.Developer.SocialMedia", new TextField("TumblrURL", "Tumblr Link URL"));	
			$activateFields->push( new CheckboxField("UseHouzz", "Use Houzz"));
			if ($this->owner->UseHouzz) $fields->addFieldToTab("Root.Developer.SocialMedia", new TextField("HouzzURL", "Houzz Link URL"));			
		}
	}