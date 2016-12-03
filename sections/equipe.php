
			<div class="section section-equipe" id="section2">
				<div class="container">

					<div class="row">
						<div class="col-xs-12">
							<h1>Equipe<span>Educativa</span></h1>	
						</div>
					</div>


						<?php 

						$equipe = [

							'http://educativa2.sites.ufms.br/files/2016/11/ANTONIO-MARCOS_300.jpg',
							'http://educativa2.sites.ufms.br/files/2016/11/MARCELO-DIAS_300.jpg',
							'http://educativa2.sites.ufms.br/files/2016/11/GISELY-2_300.jpg',
							'http://educativa2.sites.ufms.br/files/2016/11/LOB%C3%83O_300.jpg',
							'http://educativa2.sites.ufms.br/files/2016/11/ALESSANDRO-MARCOS_300.jpg',
							'http://educativa2.sites.ufms.br/files/2016/11/VALDIR_300.jpg',
							'http://educativa2.sites.ufms.br/files/2016/11/MAYARA_300.jpg',
							'http://educativa2.sites.ufms.br/files/2016/11/TARCISIO_300.jpg'
						];

						$equipe2 = [
							'http://educativa2.sites.ufms.br/files/2016/11/LINARA_300.jpg',
							'http://educativa2.sites.ufms.br/files/2016/11/MARCELO-PEREIRA_300.jpg',
							'http://educativa2.sites.ufms.br/files/2016/11/CADU2_300.jpg',
							'http://educativa2.sites.ufms.br/files/2016/11/DANI_300.jpg',
							'http://educativa2.sites.ufms.br/files/2016/11/Maciel-Dias_300.jpg',
							
						];

						?>
						<div class="slide" id="slide1">
							<div class="row">
								<?php foreach ($equipe as $pessoa) : ?>
								<div class="col-md-3">
									<figure class="imghvr-fade equipe-pessoa-item">
									  <img src="<?php echo $pessoa; ?>" />
									  <figcaption>
									    <strong>Nome do Locutor</strong>
									    <p>Pequena descrição sobre o locutor auqi</p>
									    <hr />
									    <p class='text-center'>Programa Nome</p>
									  </figcaption>
									</figure>
								</div>	
								<?php endforeach; ?>
							</div>
						</div>

						<div class="slide" id="slide2">
							<?php foreach ($equipe2 as $pessoa) : ?>
								<div class="col-md-3">
									<figure class="imghvr-fade equipe-pessoa-item">
									  <img src="<?php echo $pessoa; ?>" />
									  <figcaption>
									    <strong>Nome do Locutor</strong>
									    <p>Pequena descrição sobre o locutor auqi</p>
									    <hr />
									    <p class='text-center'>Programa Nome</p>
									  </figcaption>
									</figure>
								</div>	
								<?php endforeach; ?>
						</div>

				</div>
			</div>