<div style="clear: both"></div>
</div>
<div id="foot">
<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a><?php $pages = wp_list_pages('depth=1&title_li=&echo=0');
$pages2 = preg_split('/(<li[^>]*>)/' ,$pages);foreach($pages2 as $var){ echo str_replace('</li>', '', $var);}?> <br/>
Copyright &#169; 2011, This <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a> is a participant in the Amazon Services LLC Associates Program, an affiliate advertising program designed to provide a means for sites to earn advertising fees by advertising and linking to amazon.com. Amazon, the Amazon logo, Endless, and the Endless logo are trademarks of Amazon.com, Inc. or its affiliates. CERTAIN CONTENT THAT APPEARS ON THIS SITE COMES FROM AMAZON SERVICES LLC. THIS CONTENT IS PROVIDED AS IS AND IS SUBJECT TO CHANGE OR REMOVAL AT ANY TIME <br/>
<?php wp_footer(); ?>
<?php $header_ads_act = get_theme_option('footer_ads_act1'); if(($header_ads_act == '') || ($header_ads_act == 'No')) { ?>
<a href="http://wpbestseller.com" target="_blank">WP Best Sellers Themes</a><?php } else { ?><?php echo get_theme_option('footer_ads1'); ?><?php } ?>
</div>
</div>
</body>
</html>