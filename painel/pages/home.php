<div class="box-content">
	<h2><i class="fa fa-home"></i> Painel de Controle - <?php echo NOME_EMPRESA ?></h2>

	<div class="box-metricas">
		<div class="box-metrica-single">
			<div class="box-metrica-wraper">
				<h2>Usuários Online</h2>
				<p>10</p>
			</div><!--box-metrica-wraper-->
		</div><!--box-metrica-single-->
		<div class="box-metrica-single">
			<div class="box-metrica-wraper">
				<h2>Total de Vistas</h2>
				<p>100</p>
			</div><!--box-metrica-wraper-->
		</div><!--box-metrica-single-->
		<div class="box-metrica-single">
			<div class="box-metrica-wraper">
				<h2>Vistas de Hoje</h2>
				<p>3</p>
			</div><!--box-metrica-wraper-->
		</div><!--box-metrica-single-->
</div><!--box-metricas-->

<div class="box-content w100">
	<h2><i class="fa fa-rocket" aria-hidden="true"></i> Usuários Online</h2>
		<div class="table-responsive">
			<div class="row">
				<div class="col">
					<span>IP</span>
				</div><!--col-->
				<div class="col">
					<span>Última Ação</span>
				</div><!--col-->
				<div class="clear"></div>
			</div><!--row-->

			<?php
				for($i = 0; $i < 1; $i++){
			?>
			<div class="row">
				<div class="col">
					<span>199.199.199.199</span>
				</div><!--col-->
				<div class="col">
					<span>27/10/2020 10:00:00</span>
				</div><!--col-->
				<div class="clear"></div>
			</div><!--row-->
			<?php } ?>
		</div><!--table-responsive-->
</div><!--box-content-->