<% if $SiteConfig.SocialMediaLinks.Count %>
    <div class="social-media-links">
        <ul>
            <% loop $SiteConfig.SocialMediaLinks %>
                <% include SocialMediaLink %>
            <% end_loop %>
        </ul>
    </div><!-- /.social-media-links -->
<% end_if %>
