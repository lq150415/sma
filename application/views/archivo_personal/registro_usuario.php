<html>
	<head>
		<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
		<title>Archivo Central</title>
		<meta name="Description" content=""/>
		<meta name="Keywords" content=""/>
		<meta name="Author" content=""/>
		<meta name="Robots" content=""/>
		<meta http-equiv="imagetoolbar" content="no"/>
		<link rel="stylesheet" media="screen" href="<?= base_url('templates/css/style_general.css');?>"/>	
		<link rel="stylesheet" media="screen" href="<?= base_url('templates/css/style_menu.css');?>"/>
		<link rel="stylesheet" media="screen" href="<?= base_url('templates/css/style_form.css');?>"/>
		<link rel="stylesheet" media="screen" href="<?= base_url('templates/css/style_botones.css');?>"/>
		<link href="favicon.ico" rel="shortcut icon" type="image/x-icon" />
		<!--validaciones-->
		<script type="text/javascript" src="<?= base_url();?>/templates/js/jquery_1.4.js"></script>
		<script type="text/javascript" src="<?= base_url();?>/templates/js/jquery_validate.js"></script>
		<script type="text/javascript" src="<?= base_url();?>/templates/js/validaciones.js"></script>


		<!--Datepicker-->
		<link rel="stylesheet" href="<?= base_url('templates/js/date/themes/base/ui.all.css');?>"/>
		<script type="text/javascript" src="<?= base_url();?>/templates/js/date/ui/ui.datepicker.js"></script>
		
		
		<!--Validacion de campos-->
		<script type="text/javascript">
			$(
			   function()
			   {
					$('#frmarchivo').validate
					(
					 	{
							rules:
							{
								
							'ncj_arc': {required: true},
							'cub_arc': 'required',
							'npr_dte': {required: true},
							'lug_dte': 'required',
							'man_dte': {required: true},
							'lot_dte': {required: true},
							'nom_car': {required: true},
							'cant_fol': {required: true},
							'fec_ini': {required: true},
							'fec_fin': {required: true},
							'tip_doc': {required: true},
							'fec_doc': {required: true},
							'amb_ubi': {required: true},
							'est_ubi': {required: true},
							'crp_ubi': 'required',
							'bal_ubi': {required: true},
							'pro_area': {required: true},
							'obs_area': {required: true}

							},
							messages: 
							{
							'ncj_arc':{required:'<label class="mensajevalidacion">Campo requerido</label>'},

							'cub_arc':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'npr_dte':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'lug_dte':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'man_dte':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'lot_dte':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'nom_car':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'cant_fol':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'fec_ini':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'fec_fin':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'tip_doc':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'fec_doc':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'amb_ubi':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'est_ubi':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'crp_ubi':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'bal_ubi':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'pro_area':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'obs_area':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							},
							debug: true,
							submitHandler: function(form)
							{
								document.getElementById("frmarchivo").submit();
							}
					 	}
					);
				}
			);
		</script>
		<!--Datepicker-->
		<script type="text/javascript">
			$(function() {
			$('.datepicker').datepicker
				({
				monthNames: [ "Enero", "Febrero", "Marzo", "Abril", "Mayo", "Junio", "Julio", "Agosto", "Septiembre", "Octubre", "Noviembre", "Diciembre" ],
				monthNamesShort: [ "Ene", "Feb", "Mar", "Abr", "Mar", "Jun", "Jul", "Ago", "Sep", "Oct", "Nov", "Dic" ],
				dayNamesMin: [ "Do", "Lu", "Ma", "Mi", "Ju", "Vi", "Sa" ],
				
				dateFormat:'yy/mm/dd',
				beforeShowDay: $ .datepicker.noWeekends,
				changeMonth: true,
				changeYear: true,
				firstDay: 1,
				yearRange: "1900:2025",
				beforeShow :  function (){     
		        $ ( ".ui-datepicker" ). css ( 'font-size' ,  12 )  
		    	} 

			});

			});
		</script>
	</head>
<body>

<div id="daddy">
	<!-- header -->
	<div id="header">
		<div id="logo">
			<a href=""><img src="<?= base_url('templates/img/images/logo.png');?>" alt="" width="318px" height="85px" /></a>
			<span id="logo-text"><a href=""></a></span>
		</div>
		<!-- menu -->
		<div id="menu"> 
			<ul>
				<li><a href="<?= base_url('login/principal');?>" id="active">Principal</a></li>
				<li><a href="<?= base_url('registro');?>">Registrar Archivos</a></li>
				<li><a href="<?= base_url('registro/usuario');?>">Registrar usuarios</a></li>
				<li><a href="">Notificaciones</a></li>
				<li><a href="<?= base_url('busquedaarchivo');?>">Consultas</a></li>
			</ul>
		</div>
		<!-- ticker -->
		<div id="ticker">
			<b>Universidad Privada </b>Franz Tamayo
		</div>
		<div class="clear"></div>
		<!-- headerimage -->
		<div id="headerimage">
			<!-- download -->
			<div id="download">
				<center>
					<div id="user-icon">
						<img src="<?= base_url('templates/img/images/user-men.png');?>">
					</div>
					<span id="download-text"><a href="">Ingenieria de Sistemas<br/>Taller de Base de Datos</a></span>
				</center>
			</div>
			<!-- icons -->
			<div id="icons">
				<a href="" ><img src="<?= base_url('templates/img/images/icon_home.gif');?>" title="Principal" width="13" height="13" id="home" /></a>
				<a href=""><img src="<?= base_url('templates/img/images/icon_sitemap.gif');?>" title="Configuraciones" width="13" height="13" id="sitemap" /></a>
				<a href=""><img src="<?= base_url('templates/img/images/icon_contact.gif');?>" title="Correo Electrónico" width="13" height="13" id="contact" /></a>			
			</div>
			<div id="slogan">UNIVERSIDAD PRIVADA FRANZ TAMAYO</div>
		</div>
	</div>
	
	<div id="content">
		<div id="cA">
			<nav class="vnav2">
	            <ul class="vnav-menu2">
	                <li class="active2">
	                    <a href="" class="vnav-item2">INICIO<span class="vnav-counter2">1</span></a>
	                    <ul class="vnav-subnav2">
	                        <li><a href="<?= base_url('login/principal');?>">VOLVER A MENU PRINCIPAL</a></li>
	                    </ul>
	                </li>
	                <li class="active2">
	                    <a href="<?= base_url('grilla');?>" class="vnav-item2">CARPETAS<span class="vnav-counter2">2</span></a>
	                    <ul class="vnav-subnav2">
	                    	<li><a href="<?= base_url('grilla');?>">LISTAR ARCHIVOS</a></li>
	                        <li><a href="<?= base_url('registro');?>">REGISTRAR NUEVO ARCHIVO</a></li>
	                        <li><a href="<?= base_url('registro');?>">MODIFICAR ARCHIVO</a></li>
	                    </ul>
	                </li>
	                <li class="active2">
	                    <a href="" class="vnav-item2">CONSULTAS Y REPORTES<span class="vnav-counter2">5</span></a>
	                    <ul class="vnav-subnav2">
	                        
	                        <li><a href="<?= base_url('busquedaubicacion/proyecto');?>">POR NOMBRE PROYECTO (URBANIZACION)</a></li>
	                        <li><a href="<?= base_url('busquedaarchivo');?>">POR NOMBRE DE PRODUCTOR</a></li>
	                        <li><a href="<?= base_url('busquedaubicacion');?>">POR UBICACION</a></li>
	                        <li><a href="index.html">POR DEPARTAMENTO</a></li>
	                    </ul>
	                </li>
	                <li class="active2">
	                    <a href="" class="vnav-item2">CUENTA DE USUARIO<span class="vnav-counter2">2</span></a>
	                    <ul class="vnav-subnav2">
	                        <li><a href="index.html">CAMBIAR CONTRASEÑA</a></li>
	                        <li><a href="index.html">CERRAR SESION</a></li>
	                    </ul>
	                </li>
	            </ul>
	        </nav> 
		</div><!-- cA -->

		<div id="cB">
			
			<div class="titulo">REGISTRO DE USUARIO </div>
			<form name="frmusuario" id="frmusuario" action="<?=base_url();?>usuario/insertar" method="post">
				<!--TIPOS DE DOCUMENTOS-->
				<fieldset class="fieldcuerpo" align="left" >
					<legend>DATOS DE USUARIO</legend>
					<table>
						<tr style="height:30px;">
							<td width="90px" class="lblnombre">C.I.</td>
							<td width="480px"><input type="text" name="ci_usu" class="txtcampo " placeholder="CARNET DE IDENTIDAD" onkeypress="return alfanumerico(event);" onpaste="return false"></td>
						</tr>
						<tr style="height:30px;">
							<td width="90px" class="lblnombre">NOMBRE(S)</td>
							<td width="480px"><input type="text" name="nom_usu" class="txtcampo large" placeholder="NOMBRE" onkeypress="return sololetras(event);" onpaste="return false"></td>
						</tr>
					</table>
					<table >
						<tr style="height: 30px;">
							<td width="100px" class="lblnombre">AP. PATERNO</td>
							<td width="240px" ><input type="text" name="apa_usu" class="txtcampo" placeholder="APELLIDO PATERNO" onkeypress="return sololetras(event);" onpaste="return false"></td>
							<td width="100px" class="lblnombre">AP. MATERNO</td>
							<td width="240px" ><input type="text" name="ama_usu" class="txtcampo" placeholder="APELLIDO MATERNO" onkeypress="return sololetras(event);" onpaste="return false"></td>
						</tr>
					</table>
				</fieldset>
				<fieldset class="fieldcuerpo" align="left" >
					<legend>DATOS DE CUENTA</legend>
					<table>
						<tr style="height:30px;">
							<td width="150px" class="lblnombre">NOMBRE DE USUARIO</td>
							<td width="480px"><input type="text" name="nom_usu" class="txtcampo large" placeholder="NOMBRE DE USUARIO" onkeypress="return sololetras(event);" onpaste="return false"></td>
						</tr>
						<tr style="height:30px;">
							<td width="150px" class="lblnombre">PASSWORD</td>
							<td width="480px"><input type="password" name="pas_usu" class="txtcampo large" placeholder="NOMBRE DE USUARIO" onkeypress="return sololetras(event);" onpaste="return false"></td>
						</tr>
						<tr style="height:30px;">
							<td width="150px" class="lblnombre">REPITA EL PASSWORD</td>
							<td width="480px"><input type="password" name="pas_usu" class="txtcampo large" placeholder="NOMBRE DE USUARIO" onkeypress="return sololetras(event);" onpaste="return false"></td>
						</tr>
					</table>	
				</fieldset>
					<center>
					<table>
						<tr style="height: 50px;">
							<td>
								<input type="submit" class="botones ico-btnsave" value="GUARDAR DATOS">
                 				<input type="reset"  onclick="document.location.reload();" class="botones ico-btnlimpiar" value="LIMPIAR DATOS">
                 			</td>
						</tr>
					</table>
				</td>
				</tr>
				</table>
				</center>	
				

			</form>
					
		</div><!-- cB -->
		<div class="Cpad">
			<br class="clear" /></div>
		</div><!-- Cpad -->
	</div><!-- content -->
	<div id="properspace"></div><!-- properspace -->
</div><!-- daddy -->
<div id="footer">
	<div id="foot">
		<div id="foot1"><a href="">&copy; Copyright 2015</a> - Sistemas Octavo</div><!-- foot1 -->
		<div id="foot2">
			<span class="valid"><a href="">LA PAZ</a> - <a href="">BOLIVIA</a></span><center> Ingenieria de Sistemas<a href=""> Unifranz<span class="star">*</span></a></center>
		</div><!-- foot1 -->
	</div><!-- foot -->
</div><!-- footer -->

</body>
</html>
