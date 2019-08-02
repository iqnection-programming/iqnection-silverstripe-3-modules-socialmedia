<?php

namespace IQnection\SocialMedia;

use SilverStripe\ORM;
use SilverStripe\Forms;

class SiteConfigExtension extends ORM\DataExtension
{
	private static $db = array(
		'UseFacebook' => 'Boolean',
		'UseTwitter' => 'Boolean',
		'UseLinkedIn' => 'Boolean',
		'UsePinterest' => 'Boolean',
		'UseInstagram' => 'Boolean',
		'UseGoogleMyBusiness' => 'Boolean',
		'UseBlog' => 'Boolean',
		'UseFlickr' => 'Boolean',
		'UseYouTube' => 'Boolean',
		'UseVimeo' => 'Boolean',
		'UseYelp' => 'Boolean',
		'UseTumblr' => 'Boolean',
		'UseHouzz' => 'Boolean',
		'UseAngiesList' => 'Boolean',
		'FacebookURL' => 'Varchar(255)',
		'TwitterURL' => 'Varchar(255)',
		'LinkedInURL' => 'Varchar(255)',
		'PinterestURL' => 'Varchar(255)',
		'InstagramURL' => 'Varchar(255)',
		'GoogleMyBusinessURL' => 'Varchar(255)',
		'BlogURL' => 'Varchar(255)',
		'FlickrURL' => 'Varchar(255)',
		'YouTubeURL' => 'Varchar(255)',
		'VimeoURL' => 'Varchar(255)',
		'YelpURL' => 'Varchar(255)',
		'TumblrURL' => 'Varchar(255)',
		'HouzzURL' => 'Varchar(255)',
		'AngiesListURL' => 'Varchar(255)',
	);

	public function updateCMSFields(Forms\FieldList $fields) 
	{
		$links = $fields->findOrMakeTab('Root.Developer.SocialMedia.Links');
		$activateFields = $fields->findOrMakeTab('Root.Developer.SocialMedia.Enable');
		$activateFields->push( Forms\CheckboxField::create("UseFacebook", "Use Facebook"));
		if ($this->owner->UseFacebook) $links->push( Forms\TextField::create("FacebookURL", "Facebook Link URL"));
		$activateFields->push( Forms\CheckboxField::create("UseTwitter", "Use Twitter"));
		if ($this->owner->UseTwitter) $links->push( Forms\TextField::create("TwitterURL", "Twitter Link URL"));
		$activateFields->push( Forms\CheckboxField::create("UseLinkedIn", "Use LinkedIn"));
		if ($this->owner->UseLinkedIn) $links->push( Forms\TextField::create("LinkedInURL", "LinkedIn Link URL"));
		$activateFields->push( Forms\CheckboxField::create("UsePinterest", "Use Pinterest"));
		if ($this->owner->UsePinterest) $links->push( Forms\TextField::create("PinterestURL", "Pinterest Link URL"));
		$activateFields->push( Forms\CheckboxField::create("UseInstagram", "Use Instagram"));
		if ($this->owner->UseInstagram) $links->push( Forms\TextField::create("InstagramURL", "Instagram Link URL"));
		$activateFields->push( Forms\CheckboxField::create("UseGoogleMyBusiness", "Use Google My Business"));
		if ($this->owner->UseGoogleMyBusiness) $links->push( Forms\TextField::create("GoogleMyBusinessURL", "Google My Business Link URL"));
		$activateFields->push( Forms\CheckboxField::create("UseBlog", "Use Blog"));
		if ($this->owner->UseBlog) $links->push( Forms\TextField::create("BlogURL", "Blog Link URL"));
		$activateFields->push( Forms\CheckboxField::create("UseFlickr", "Use Flickr"));
		if ($this->owner->UseFlickr) $links->push( Forms\TextField::create("FlickrURL", "Flickr Link URL"));
		$activateFields->push( Forms\CheckboxField::create("UseYouTube", "Use YouTube"));
		if ($this->owner->UseYouTube) $links->push( Forms\TextField::create("YouTubeURL", "YouTube Link URL"));
		$activateFields->push( Forms\CheckboxField::create("UseVimeo", "Use Vimeo"));
		if ($this->owner->UseVimeo) $links->push( Forms\TextField::create("VimeoURL", "Vimeo Link URL"));
		$activateFields->push( Forms\CheckboxField::create("UseYelp", "Use Yelp"));
		if ($this->owner->UseYelp) $links->push( Forms\TextField::create("YelpURL", "Yelp Link URL"));
		$activateFields->push( Forms\CheckboxField::create("UseTumblr", "Use Tumblr"));
		if ($this->owner->UseTumblr) $links->push( Forms\TextField::create("TumblrURL", "Tumblr Link URL"));	
		$activateFields->push( Forms\CheckboxField::create("UseHouzz", "Use Houzz"));
		if ($this->owner->UseHouzz) $links->push( Forms\TextField::create("HouzzURL", "Houzz Link URL"));
		$activateFields->push( Forms\CheckboxField::create("UseAngiesList", "Use Angie's List"));
		if ($this->owner->UseAngiesList) $links->push( Forms\TextField::create("AngiesListURL", "Angies List Link URL"));
	}
}




