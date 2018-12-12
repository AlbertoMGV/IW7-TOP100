<?php $title = 'Song view' ?>

<?php ob_start() ?>
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
								<a class="twitter-timeline" href="https://twitter.com/official_php?ref_src=twsrc%5Etfw">Tweets by official_php</a> <script async src="https://platform.twitter.com/widgets.js" charset="utf-8"></script>
							</div>
						</td>
					</tr>
				</table>
			</div>
		</td>
		</tr>
	</div>
</center>
<?php $content = ob_get_clean();?>
<?php include 'layout.html.php' ?>