		</div> <!-- end #background-main -->
            
			<footer class="footer clearfix" role="contentinfo">

				<div id="inner-footer" class="wrap clearfix">
                
                    <div class="fourcol first">
    
						<?php webdraftertheme_footer_links(); ?>
    
                    </div>
                
                    <div class="fourcol">
    
                    </div>
                
                    <div class="fourcol">
    
						<?php webdraftertheme_social_media_links(); ?>                                
    
                    </div>
                
                </div>
                
				<div class="author-credits wrap clearfix">
                
	                <div class="divider clearfix"></div> 

					<!--nav role="navigation">
							<?php //webdraftertheme_footer_links(); ?>
					</nav-->
                    
					<p class="source-org copyright">
                    	&copy; <?php echo date('Y'); ?> <?php bloginfo( 'name' ); ?>
                   	</p>
					
					<p class="source-org credits">
                   		<a target="_blank" href="http://www.webdrafter.com/" >Website Design &amp; SEO by WebDrafter.com, Inc</a>
                    </p>

				</div>

			</footer>

		</div>

		<?php // all js scripts are loaded in library/webdraftertheme.php ?>
        <script src="//ajax.googleapis.com/ajax/libs/jquery/1.11.0/jquery.min.js"></script>
        <script src="//ajax.googleapis.com/ajax/libs/jqueryui/1.10.4/jquery-ui.min.js"></script>
		<?php wp_footer(); ?>

	</body>

</html>
