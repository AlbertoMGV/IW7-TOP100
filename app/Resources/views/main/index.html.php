<?php $title = 'TOP100!' ?>

<?php ob_start() ?>

	<div class="title"></div>
	
				

	<table align="center" cellpadding="10" style="font:16px Arial;">
		
		<?php
			$num=1;
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
												<h1 style="color:black; align:left;"><b> Genero '.$num.'</b></h1>
												<h2>Top '.$genero->getNombre().' songs</h2>
												<ol><li>'.
													$test
													.'
												</li></ol>
												<button class="button button5" onclick="window.location=;" >Explore</button>
										</div>
									</td>
								</tr>
							</table>
						</div>
					</td>
				</tr>
				';
				$num++;
			}

		?>
	</table>


<?php $content = ob_get_clean() ?>
<?php include 'layout.html.php' ?>