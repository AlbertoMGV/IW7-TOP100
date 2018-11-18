<?php $title = 'TOP100!' ?>

<?php ob_start() ?>

	<div class="title"></div>
	
				

	<table align="center" cellpadding="10" style="font:16px Arial;">
		
		<?php
			
			foreach ($generos as $genero) {
				echo '
				<tr>
					<td>
						<div class="card">
							<table>
								<tr>
									<td>
										<img src="genres.jpg" alt="Avatar" style="width:100%" >
									</td>	
									<td>	
										<div class="container">
												<h1 style="color:black; align:left;"><b>'.ucfirst($genero->getNombre()).'</b></h1>
												<h2>Top 3 songs</h2>
												<ol>';
												$top=$tops[$genero->getNombre()];
												foreach ($top as $tx) {
													echo '<li><a href="songs/'.$tx->getId().'">'.$tx->getNombre().'</a></li>';
												};	
												echo '
												</ol>
												<button class="button button5" onclick="window.location.href=\'/genres/'.$genero->getId().'\';" >Explore</button>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
				';
				
			}

		?>
	</table>


<?php $content = ob_get_clean() ?>
<?php include 'layout.html.php' ?>