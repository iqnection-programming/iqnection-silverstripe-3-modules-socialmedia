# SilverStripe Social Media Icons

Provides ability to manage social media icons in your site settings, and add them to your template

### Installaion
```
$ composer require iqnection-modules/socialmedia
$ ~/public_html/vendor/bin/sake dev/build "flush=1"
```

### Setup
Navigate to the Settings area in the admin, click the Developer Tab, then Social Media Link tab
Add links as needed

Add the following code in your template where you want the links to display
```
<% include SocialMediaLinks %>
```

It's up to you to add styling

### Adding more link options
Add the following lines to your site's YML config file
```
IQnection\SocialMedia\Model\SocialMediaLink:
  social_media_options:
    - "My New Option 1"
    - "My New Option 2"
```

### Icon Templates
You can add or replace icons by adding files to your theme's templates/Includes directory
The file name must match the option name in the dropdown, with the following format
* Replace all non-alphanumeric characters with a dash
ex. "Google My Business" template name will be "GoogleMyBusiness"

---
Currently supports:
- Facebook
- Twitter
- Instagram
- Pinterest
- YouTube
- LinkedIn
- Vimeo
- Houzz
- Flickr
- Tumblr
- Vimeo
- Yelp
- Angies List
- Google My Business
- Blog