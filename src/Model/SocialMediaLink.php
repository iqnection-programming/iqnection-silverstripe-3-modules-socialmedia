<?php

namespace IQnection\SocialMedia\Model;

use SilverStripe\ORM\DataObject;
use SilverStripe\Forms;

class SocialMediaLink extends DataObject
{
    private static $table_name = 'SocialMediaLink';

    private static $db = [
        'SortOrder' => 'Int',
        'Name' => 'Varchar(255)',
        'URL' => 'Varchar(255)'
    ];

    private static $summary_fields = [
        'Name' => 'Name',
        'URL' => 'URL'
    ];

    private static $default_sort = 'SortOrder ASC';

    private static $social_media_options = [
        'Facebook',
        'Twitter',
        'LinkedIn',
        'Instagram',
        'YouTube',
        'Pinterest',
        'Google My Business',
        'Flickr',
        'Blog',
        'Vimeo',
        'Yelp',
        'Tumblr',
        'Houzz',
        'Angies List'
    ];

    public function getCMSFields()
    {
        $fields = parent::getCMSFields();
        $fields->removeByName('SortOrder');
        $socialOptions = $this->Config()->get('social_media_options');
        sort($socialOptions);
        $fields->replaceField('Name', Forms\DropdownField::create('Name','Social Media Source')
            ->setEmptyString('-- Select --')
            ->setSource(array_combine($socialOptions, $socialOptions)));
        return $fields;
    }

    public function validate()
    {
        $result = parent::validate();
        if (!$this->Name)
        {
            $result->addFieldError('Name','Required');
        }
        if (!trim($this->URL))
        {
            $result->addFieldError('URL','A URL is required');
        }
        return $result;
    }

    public function forTemplate()
    {
        $cleanName = preg_replace('/[^a-zA-Z0-9]/','',$this->Name);
        return $this->renderWith([
            'Includes/'.$cleanName.'_Icon',
            $cleanName.'_Icon',
        ]);
    }

    public function CssClass()
    {
        return preg_replace('/[^a-z0-9]/','-',strtolower($this->Name));
    }
}
