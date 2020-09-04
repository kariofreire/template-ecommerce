<?php

	# Inclui Banco de Produtos
	require("controller/banco-de-produtos.php");

	# Define os Produtos
	$dataProdutosRecomended = productRecomended();
	$dataProdutosFeatured = productFeatured();

?>
<div class="body-app">
	<div class="section-title">
		<div class="texto-left">
			<h5>Recomended</h5>
		</div>
		<div class="texto-right">
			<button class="button-app button-success">More</button>
		</div>
	</div>

	<div class="owl-carousel owl-theme produtos-recomendados">
		<?php for ($i = 0; $i < $dataProdutosRecomended["quantidades"]; $i++) { ?>
		<div class="item">
			<div class="card card-produto">
				<img class="card-img-top" alt="Planta" src="view/assets/images/<?= $dataProdutosRecomended['imagens'][$i]; ?>">
				<div class="card-body">
					<div class="card-title">
						<div class="float-left">
							<strong><?= $dataProdutosRecomended['nomes'][$i]; ?></strong>
						</div>
						<div class="float-right">R$ <?= $dataProdutosRecomended['precos'][$i]; ?></div>
					</div>
					<br>
					<p class="card-text">
						<div class="float-left"><?= $dataProdutosRecomended['pais'][$i]; ?></div>
						<div class="float-right">
							<button class="button-app button-circle rounded-circle button-success addProductCart" id-product="<?= $i; ?>">
								<i class="fas fa-shopping-cart"></i>
							</button>
						</div>
					</p>
				</div>
			</div>
		</div>
		<?php }# Fecha o Foreach ?>
	</div>

	<div class="section-title">
		<div class="texto-left">
			<h5>Featured Plants</h5>
		</div>
		<div class="texto-right">
			<button class="button-app button-success">More</button>
		</div>
	</div>

	<div class="section-card-produtos">
		<div class="owl-carousel owl-theme produtos-destaques">
			<?php for ($i = 0; $i < $dataProdutosFeatured["quantidades"]; $i++) { ?>
			<div class="item">
				<div class="card card-produto">
					<img class="card-img-top" alt="Planta" src="view/assets/images/<?= $dataProdutosFeatured['imagens'][$i]; ?>">
					<div class="card-body">
						<div class="card-title">
							<div class="float-left">
								<strong><?= $dataProdutosFeatured['nomes'][$i]; ?></strong>
							</div>
							<div class="float-right">R$ <?= $dataProdutosFeatured['precos'][$i]; ?></div>
						</div>
						<br>
						<p class="card-text">
							<div class="float-left"><?= $dataProdutosFeatured['pais'][$i]; ?></div>
							<div class="float-right">
								<button class="button-app button-circle rounded-circle button-success" id-product="<?= $i; ?>">
									<i class="fas fa-shopping-cart"></i>
								</button>
							</div>
						</p>
					</div>
				</div>
			</div>
			<?php }# Fecha o Foreach ?>
		</div>
	</div>
</div>