<?php
	$usuariosOnline = Painel::listarUsuariosOnline();

	$pegarVisitasTotais = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.visitas`");
	$pegarVisitasTotais->execute();

	$pegarVisitasTotais = $pegarVisitasTotais->rowCount();

	$pegarVisitasHoje = Mysql::conectar()->prepare("SELECT * FROM `tb_admin.visitas` WHERE dia = ?");
	$pegarVisitasHoje->execute(array(date('Y-m-d')));

	$pegarVisitasHoje = $pegarVisitasHoje->rowCount();


?>
<div class="box-content w100">
	<h2><i class="fa fa-home"></i> Painel de Controle - <?php echo NOME_EMPRESA ?></h2>

	<div class="box-metricas">
		<div class="box-metrica-single">
			<div class="box-metrica-wraper">
				<h2>Usuários Online</h2>
				<p><?php echo count($usuariosOnline); ?></p>
			</div><!--box-metrica-wraper-->
		</div><!--box-metrica-single-->
		<div class="box-metrica-single">
			<div class="box-metrica-wraper">
				<h2>Total de Vistas</h2>
				<p><?php echo $pegarVisitasTotais; ?></p>
			</div><!--box-metrica-wraper-->
		</div><!--box-metrica-single-->
		<div class="box-metrica-single">
			<div class="box-metrica-wraper">
				<h2>Vistas de Hoje</h2>
				<p><?php echo $pegarVisitasHoje; ?></p>
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
				foreach ($usuariosOnline as $key => $value) {
					
			?>
			<div class="row">
				<div class="col">
					<span><?php echo $value['ip']?></span>
				</div><!--col-->
				<div class="col">
					<span><?php echo date('d/m/Y H:i:s',strtotime($value['ultima_acao'])) ?></span>
				</div><!--col-->
				<div class="clear"></div>
			</div><!--row-->
			<?php } ?>
		</div><!--table-responsive-->
</div><!--box-content-->