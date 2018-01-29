<?php
/*------------------------------------------------------------------------
# mod_our_products - Products Page
# ------------------------------------------------------------------------
# author    @sam_roksta - roksta21@gmail.com
# @license - http://www.gnu.org/licenses/gpl-2.0.html GNU/GPL
# Websites: http://www.mavrosxristoforos.com
-------------------------------------------------------------------------*/

// no direct access
defined( '_JEXEC' ) or die( 'Restricted access' );

// Import the file / foldersystem
$base_url = JURI::base();
jimport('joomla.filesystem.file');
jimport('joomla.filesystem.folder');
$document = JFactory::getDocument();
$module_base = JURI::base(true).'/modules/mod_slider/';
$document->addStyleSheet($module_base . 'css/responsiveslides.css');
$document->addScript($module_base . 'js/responsiveslides.js');	

?>

 <script>
    // You can also use "$(window).load(function() {"
    jQuery(function () {
      jQuery("#slider4").responsiveSlides({
        auto: true,
        pager: false,
        nav: true,
        speed: 500,
        namespace: "callbacks",
        before: function () {
          jQuery('.events').append("<li>before event fired.</li>");
        },
        after: function () {
          jQuery('.events').append("<li>after event fired.</li>");
        }
      });

    });
</script>

<div class="callbacks_container">
	<ul class="rslides" id="slider4">
		<?php for ($i = 1; $i <= 8; $i++) { ?>
			<?php if ($params->get('slide_' . $i) != null) { ?>
				<li>
					<img src="<?php echo $base_url . $params->get('slide_' . $i); ?>"/>
					<p class="caption"><?php echo $params->get('caption_' . $i); ?></p>
				</li>
			<?php } else { ; ?>
				<?php if ($i == 0) { ?>
					<li>
						<img src="<?php echo $module_base . '/images/1.jpg'; ?>"/>
						<p class="caption"><?php echo "Caption Slide 1"; ?></p>
					</li>
				<?php } ?>
				<?php if ($i == 1) { ?>
					<li>
						<img src="<?php echo $module_base . '/images/2.jpg'; ?>"/>
						<p class="caption"><?php echo "Caption Slide 2"; ?></p>
					</li>
				<?php } ?>
			<?php } ?>
		<?php } ?> 
	</ul>
</div>

		
	 