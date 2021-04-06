<?php

namespace IQnection\SocialMedia\SiteConfig;

use SilverStripe\ORM\DataExtension;
use SilverStripe\Forms;
use IQnection\SocialMedia\Model\SocialMediaLink;
use Symbiote\GridFieldExtensions\GridFieldAddNewMultiClass;
use Symbiote\GridFieldExtensions\GridFieldAddNewInlineButton;
use Symbiote\GridFieldExtensions\GridFieldEditableColumns;
use Symbiote\GridFieldExtensions\GridFieldOrderableRows;
use Symbiote\GridFieldExtensions\GridFieldTitleHeader;

class SiteConfigExtension extends DataExtension
{
	public function updateCMSFields(Forms\FieldList $fields)
	{
		$socialMediaFields = $fields->findOrMakeTab('Root.Developer.SocialMediaIcons');
        $socialMediaFields->push( Forms\GridField\GridField::create(
            'SocialMediaLinks',
            'Social Media Links',
            SocialMediaLink::get(),
            Forms\GridField\GridFieldConfig::create()
                ->addComponent(new Forms\GridField\GridFieldButtonRow('before'))
                ->addComponent(new Forms\GridField\GridFieldToolbarHeader())
                ->addComponent(new Forms\GridField\GridFieldDetailForm())
                ->addComponent(new GridFieldTitleHeader())
                ->addComponent($editableColumns = new GridFieldEditableColumns())
                ->addComponent(new Forms\GridField\GridFieldDeleteAction())
                ->addComponent(new GridFieldAddNewInlineButton())
                ->addComponent(new GridFieldOrderableRows('SortOrder'))
                ->removeComponentsByType(Forms\GridField\GridFieldAddNewButton::class)
                ->removeComponentsByType(Forms\GridField\GridFieldAddExistingAutocompleter::class)
        ));

        $socialOptions = SocialMediaLink::Config()->get('social_media_options');
        sort($socialOptions);
        $displayFields =[
            'Name' => function($record, $column, $grid) use ($socialOptions) {
                return Forms\DropdownField::create('Name','Social Media Source')
                    ->setEmptyString('-- Select --')
                    ->setSource(array_combine($socialOptions, $socialOptions));
            },
            'URL' => [
                'title' => 'Link',
                'field' => Forms\TextField::class
            ]
        ];
        $editableColumns->setDisplayFields($displayFields);
	}

    public function SocialMediaLinks()
    {
        return SocialMediaLink::get();
    }
}




