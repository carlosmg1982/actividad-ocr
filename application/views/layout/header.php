<!doctype html>
<html class="no-js" lang="en">
<head>
    <meta charset="utf-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <title>Área Privada - Actividad Módulo 6 - Curso Digitalización del Patrimonio Cultural (8ª Edición)</title>
    <link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/foundation.css" />
	<link rel="stylesheet" href="<?php echo base_url(); ?>assets/css/custom.css" />
    <script src="<?php echo base_url(); ?>assets/js/vendor/modernizr.js"></script>
</head>
<body>
<div class="row">
    <div class="large-9 columns">
        <h1><img src="<?php echo base_url(); ?>assets/img/logo.png"/>Curso Digitalización del Patrimonio Cultural (8ª Edición)</h1>
    </div>
    <div class="large-3 columns">
        <ul class="right button-group">
			<? if(!$this->session->logged_in) { ?>
            <li><a href="<?php echo site_url('main/login'); ?>" class="button">Inicio de sesi&oacute;n</a></li>
			<? } else { ?>
			<li><a href="<?php echo site_url('main/logout'); ?>" class="button">Desconectar</a></li>
			<? } ?>
        </ul>
    </div>
</div>