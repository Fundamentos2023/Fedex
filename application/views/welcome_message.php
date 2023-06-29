<body>
	<header>
		<div class="text-center pt-5">
			<img src="<?php echo base_url('assets/fedex.png') ?>" alt="logo fedex" width="420">
		</div>
		<h1 class="text-center fs-1 fw-bold my-5">Control geográfico <br> de <span
				class="text-primary">sucursales</span>, <span class="text-warning">clientes</span> y <span
				class="text-danger">pedidos</span></h1>
		<hr>
	</header>

	<div class="container">
		<div class="d-flex flex-column align-items-center gap-2 px-5">
			<a href="<?php echo site_url('Sucursales/index') ?>" class="btn btn-outline-primary w-50">
				Administrar<span class="fw-bold">Sucursales</span>
			</a>
			<a href="<?php echo site_url('clientes') ?>" class="btn btn-outline-warning w-50">Administrar<span
					class="fw-bold">Clientes</span></a>
			<a href="<?php echo site_url('pedidos') ?>" class="btn btn-outline-danger w-50">Administrar<span
					class="fw-bold">Pedidos</span></a>
			<!-- <a href="<? //php echo site_url('global') ?>" class="btn btn-outline-secondary w-50">Mapa
			<span class="fw-bold">
				Global</span></a> -->
		</div>

	</div>
