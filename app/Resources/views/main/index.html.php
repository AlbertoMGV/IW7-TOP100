<?php $title = 'TOP100!' ?>

<?php ob_start() ?>

	<div class="title"></div>
	


	<table align="center" cellpadding="10" style="font:16px Arial;">
		<tr>
			<td>
				<div class="card">
					<table>
						<tr>
							<td>
								<img src="rock.jpg" alt="Avatar" style="width:100%" >
							</td>	
							<td>	
								<div class="container">
										<h1 style="color:black; align:left;"><b>ROCK</b></h1>
										<h2>Top rock songs</h2>
										<ol>
											<li>Rock You Like a Hurricane - Scorpion</li>
											<li>Renegade - Styx</li>
											<li>Can't Find My Way Home - Blind Faith</li>
										</ol>
										<button class="button button5" onclick="window.location='/songs';" >Explore</button>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="card">
					<table>
						<tr>
							<td>
								<img src="classic.jpg" alt="Avatar" style="width:100%" >
							</td>	
							<td>	
								<div class="container">
										<h1 style="color:black; align:left;"><b>CLASSIC</b></h1>
										<h2>Top classic songs</h2>
										<ol>
											<li>Cavatina - Stanley Myers</li>
											<li>Thaïs: Meditation - Jules Massenet</li>
											<li>Canon in D major - Johann Pachelbel</li>
										</ol>
										<button class="button button5" onclick="window.location='/songs';" >Explore</button>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
		<tr>
			<td>
				<div class="card">
					<table>
						<tr>
							<td>
								<img src="rap.jpg" alt="Avatar" style="width:100%" >
							</td>	
							<td>	
								<div class="container">
										<h1 style="color:black; align:left;"><b>RAP</b></h1>
										<h2>Top rap songs</h2>
										<ol>
											<li>Lo que en silencio guardo - Kaze</li>
											<li>Libre - Hard GZ</li>
											<li>Mitad y Mitad - Kase.O</li>
										</ol>
										<button class="button button5" onclick="window.location='/songs';" >Explore</button>
								</div>
							</td>
						</tr>
					</table>
				</div>
			</td>
		</tr>
	</table>


<?php $content = ob_get_clean() ?>
<?php include 'layout.html.php' ?>