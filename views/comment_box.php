<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = "//connect.facebook.net/en_US/all.js#xfbml=1&appId=<?=$config[comment_string]?>";
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>  
<?
	if($config[comment_type] == '1'){ 
		echo '<div class="fb-comments" data-href="'.curPageURL().'" data-width="470"></div>'; 
	}else if($config[comment_type] == '2'){
			echo '<div style="width: 60%; margin: 0 auto; margin-top:80px;">';
			echo '  <div id="disqus_thread"></div>
			<script type="text/javascript">
				/* * * CONFIGURATION VARIABLES: EDIT BEFORE PASTING INTO YOUR WEBPAGE * * */
				var disqus_shortname = \''.$config[comment_string].'\'; // required: replace example with your forum shortname

				(function() {
					var dsq = document.createElement(\'script\'); dsq.type = \'text/javascript\'; dsq.async = true;
					dsq.src = \'//\' + disqus_shortname + \'.disqus.com/embed.js\';
					(document.getElementsByTagName(\'head\')[0] || document.getElementsByTagName(\'body\')[0]).appendChild(dsq);
				})();
			</script>
			<noscript>Please enable JavaScript to view the <a href="http://disqus.com/?ref_noscript">comments powered by Disqus.</a></noscript>
			<a href="http://disqus.com" class="dsq-brlink">comments powered by <span class="logo-disqus">Disqus</span></a>
			';
			echo '</div>';
		}
				
?>