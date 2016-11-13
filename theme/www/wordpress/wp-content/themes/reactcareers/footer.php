<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after
 *
 * @package WordPress
 * @subpackage Twenty_Sixteen
 * @since Twenty Sixteen 1.0
 */
?>

		</div><!-- .site-content -->
	</div><!-- .site-inner -->
</div><!-- .site -->

<footer id="addcompany">
	<?php if ( $post->post_name != 'post-a-job') : ?>

		<h2>Add a company</h2>
		Email company name, 500x500px logo, and careers url to <a href="mailto:admin@react.careers">admin@react.careers</a>

		<br>
		<br>
		<a href="/post-a-job" class="button" style="color:black">Post a Job</a>

		<p style="margin-top:3em;">
			<em>Built by <a href="http://stefanritter.com/">Stefan Ritter</a></em>
		</p>

	<?php else : ?>
		Need help? Please email: <a href="mailto:admin@react.careers">admin@react.careers</a>
	<?php endif; ?>

</footer>

<script>
  (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
  (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
  m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
  })(window,document,'script','//www.google-analytics.com/analytics.js','ga');
  ga('create', 'UA-59987733-1', 'auto');
  ga('send', 'pageview');
</script>

<?php wp_footer(); ?>
</body>
</html>
