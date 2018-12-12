<?php $title = 'Song view' ?>

<?php ob_start() ?>
<div id="fb-root"></div>
<script>(function(d, s, id) {
  var js, fjs = d.getElementsByTagName(s)[0];
  if (d.getElementById(id)) return;
  js = d.createElement(s); js.id = id;
  js.src = 'https://connect.facebook.net/es_ES/sdk.js#xfbml=1&version=v3.2';
  fjs.parentNode.insertBefore(js, fjs);
}(document, 'script', 'facebook-jssdk'));</script>
<center>
	
	<div class="card" style="font: 20px Arial;" >	
	<tr>
		<td>
			<div class="card_body">
				<table>
					<tr>
						<td>
							<img src="songs.jpg" alt="Avatar" style="width:100%" >
						</td>	
						<td class="songinfo">	
							<div class="container">
								<?php 
									echo '<h2 style="color:black; align:left;"><b>'.$song->getNombre().'</b></h2>';
									echo '<p>song by:<a href="/artists/'.$song->getAutor()->getId().'">'.$song->getAutor()->getNombre().' '.$song->getAutor()->getApellidos().'</a></p>';
									echo '<p>duration: '.$song->getDuracion().' seconds, ('.intval($song->getDuracion()/60).' min, '.($song->getDuracion()%60).' s)</p>';
									echo '<p>genre: <a href="/genres/'.$song->getGenero()->getId().'">'.$song->getGenero()->getNombre().'</a></p>';
									?>
									<div>
									<a href="https://twitter.com/share?ref_src=twsrc%5Etfw" class="twitter-share-button" data-text="Oh, I love '<?php echo $song->getNombre() ?>' by <?php echo $song->getAutor()->getNombre() ?>'s  song! Check it in IW7-TOP100.com!" data-hashtags="#php #iweb #symfony" data-show-count="false">Tweet this song!</a><script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
									</div>

									<div class="fb-share-button" data-href="https://IW7-TOP100.com" data-layout="button" data-text="Oh, I love '<?php echo $song->getNombre() ?>' by <?php echo $song->getAutor()->getNombre() ?>'s  song!" data-size="small" data-mobile-iframe="true"><a target="_blank" href="https://www.facebook.com/sharer/sharer.php?u=https%3A%2F%2FIW7-TOP100.com%2F&amp;src=sdkpreparse" class="fb-xfbml-parse-ignore">Compartir</a></div>
									
							</div>
						</td>
					</tr>
				</table>
			</div>
		</td>
		</tr>
	</div>
	<br>
	<br>
	<div class="card" style="font: 20px Arial;" >
		<h2 style="color:black; align:left;"><b>Coment about this song!</b></h2>	
		<div class="fb-comments" data-href="https://iw7-top100.com" data-numposts="5"></div>
	</div>
</center>
<?php $content = ob_get_clean();?>
<?php include 'layout.html.php' ?>