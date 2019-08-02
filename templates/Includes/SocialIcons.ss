<% if $Icon=='GMB' && $SiteConfig.UseGoogleMyBusiness && $SiteConfig.GoogleMyBusinessURL %>
	<li>
		<a href="$SiteConfig.GoogleMyBusinessURL" id="icon_gmb" target="_blank">
			<% include GMB_icon %>
		</a>
	</li>
<% end_if %>
<% if $Icon=='Facebook' && $SiteConfig.UseFacebook && $SiteConfig.FacebookURL %>
	<li>
		<a href="$SiteConfig.FacebookURL" id="icon_fb" target="_blank">
			<% include Facebook_icon %>
		</a>
	</li>
<% end_if %>
<% if $Icon=='Twitter' && $SiteConfig.UseTwitter && $SiteConfig.TwitterURL %>
	<li>
		<a href="$SiteConfig.TwitterURL" id="icon_tw" target="_blank">
			<% include Twitter_icon %>
		</a>
	</li>
<% end_if %>
<% if $Icon=='Pinterest' && $SiteConfig.UsePinterest && $SiteConfig.PinterestURL %>
	<li>
		<a href="$SiteConfig.PinterestURL" id="icon_pin" target="_blank">
			<% include Pinterest_icon %>
		</a>
	</li>
<% end_if %>
<% if $Icon=='LinkedIn' && $SiteConfig.UseLinkedIn && $SiteConfig.LinkedInURL %>
	<li>
		<a href="$SiteConfig.LinkedInURL" id="icon_li" target="_blank">
			<% include LinkedIn_icon %>
		</a>
	</li>
<% end_if %>
<% if $Icon=='Instagram' && $SiteConfig.UseInstagram && $SiteConfig.InstagramURL %>
	<li>
		<a href="$SiteConfig.InstagramURL" id="icon_in" target="_blank">
			<% include Instagram_icon %>
		</a>
	</li>
<% end_if %>
<% if $Icon=='GooglePlus' && $SiteConfig.UseGooglePlus && $SiteConfig.GooglePlusURL %>
	<li>
		<a href="$SiteConfig.GooglePlusURL" id="icon_gp" target="_blank">
			<% include GooglePlus_icon %>
		</a>
	</li>
<% end_if %>
<% if $Icon=='Blog' && $SiteConfig.UseBlog && $SiteConfig.BlogURL %>
	<li>
		<a href="$SiteConfig.BlogURL" id="icon_bl" target="_blank">
			Check out our Blog
		</a>
	</li>
<% end_if %>
<% if $Icon=='Flickr' && $SiteConfig.UseFlickr && $SiteConfig.FlickrURL %>
	<li>
		<a href="$SiteConfig.FlickrURL" id="icon_fl" target="_blank">
			<% include Flickr_icon %>
		</a>
	</li>
<% end_if %>
<% if $Icon=='YouTube' && $SiteConfig.UseYouTube && $SiteConfig.YouTubeURL %>
	<li>
		<a href="$SiteConfig.YouTubeURL" id="icon_yt" target="_blank">
			<% include YouTube_icon %>
		</a>
	</li>
<% end_if %>
<% if $Icon=='Vimeo' && $SiteConfig.UseVimeo && $SiteConfig.VimeoURL %>
	<li>
		<a href="$SiteConfig.VimeoURL" id="icon_vi" target="_blank">
			<% include Vimeo_icon %>
		</a>
	</li>
<% end_if %>
<% if $Icon=='Yelp' && $SiteConfig.UseYelp && $SiteConfig.YelpURL %>
	<li>
		<a href="$SiteConfig.YelpURL" id="icon_yl" target="_blank">
			<% include Yelp_icon %>
		</a>
	</li>
<% end_if %>
<% if $Icon=='Tumblr' && $SiteConfig.UseTumblr && $SiteConfig.TumblrURL %>
	<li>
		<a href="$SiteConfig.TumblrURL" id="icon_tu" target="_blank">
			<% include Tumblr_icon %>
		</a>
	</li>
<% end_if %>
<% if $Icon=='Houzz' && $SiteConfig.UseHouzz && $SiteConfig.HouzzURL %>
	<li>
		<a href="$SiteConfig.HouzzURL" id="icon_hz" target="_blank">
			<% include Houzz_icon %>
		</a>
	</li>
<% end_if %>

<% if $Icon=='AngiesList' && $SiteConfig.UseAngiesList && $SiteConfig.AngiesListURL %>
	<li>
		<a href="$SiteConfig.AngiesListURL" id="icon_an" target="_blank">
			<% include AngiesList_icon %>
		</a>
	</li>
<% end_if %>