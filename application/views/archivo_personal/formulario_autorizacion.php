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

	    <!-- validaciones -->
		<script type="text/javascript" src="<?= base_url('templates/js/jquery_1.4.js');?>"/></script>
        <script type="text/javascript" src="<?= base_url('templates/js/jquery_validate.js');?>"/></script>
        <script type="text/javascript" src="<?= base_url('templates/js/validaciones.js');?>"/></script>		
		<!--Validacion de campos-->
		<script type="text/javascript">
			$(
			   function()
			   {
					$('#frmautorizacion').validate
					(
					 	{
							rules:
							{
							'nro_per': {required: true},
							'raz_arc': {required: true},
							'nom_arc': {required: true},
							'fec_arc': {required: true},
							'mot_arc': {required: true}
							},
							messages: 
							{
							'nro_per':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'raz_arc':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'nom_arc':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'fec_arc':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							'mot_arc':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							},
							debug: true,
							submitHandler: function(form)
							{
								document.getElementById("frmautorizacion").submit();
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
				<li><a href="" id="active">Principal</a></li>
				<li><a href="">Registrar Archivos</a></li>
				<li><a href="">Registrar usuarios</a></li>
				<li><a href="">Notificaciones</a></li>
				<li><a href="">Consultas</a></li>
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
	                        <li><a href="">VOLVER A MENU PRINCIPAL</a></li>
	                    </ul>
	                </li>
	                <li class="active2">
	                    <a href="" class="vnav-item2">CARPETAS<span class="vnav-counter2">2</span></a>
	                    <ul class="vnav-subnav2">
	                    	<li><a href="index.html">LISTAR ARCHIVOS</a></li>
	                        <li><a href="index.html">REGISTRAR NUEVO ARCHIVO</a></li>
	                        <li><a href="index.html">MODIFICAR ARCHIVO</a></li>
	                    </ul>
	                </li>
	                <li class="active2">
	                    <a href="" class="vnav-item2">CONSULTAS Y REPORTES<span class="vnav-counter2">5</span></a>
	                    <ul class="vnav-subnav2">
	                        <li><a href="index.html">POR NOMBRE DE CARPETA</a></li>
	                        <li><a href="index.html">POR NOMBRE PROYECTO (URBANIZACION)</a></li>
	                        <li><a href="index.html">POR NOMBRE DE PRODUCTOR</a></li>
	                        <li><a href="index.html">POR UBICACION</a></li>
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
			<div class="titulo">FORMULARIO DE AUTORIZACIÓN </div>
			<form name="frmautorizacion" id="frmautorizacion" action="<?=base_url();?>personal/insertar" method="post">
				<!--TIPOS DE DOCUMENTOS-->
			<fieldset class="fieldcuerpo" align="left" style="height: 555px;">
			<legend> DATOS AUTORIZACIÓN</legend>
					<table >
						<tr style="height: 60px;">
							<td width="100px" class="lblnombre">Nro. de personal</td>
							<td width="240px" ><input type="text" name="nro_per" class="txtcampo" placeholder="NRO DE PERSONAL" onkeypress="return solonumeros(event);" onpaste="return false"></td>
							<td width="100px" class="lblnombre">Razón</td>
							<td width="240px">
								<select name="raz_arc" class="txtselect">
									<option value="">SELECCIONE</option>
									<option value="Carpetilla">Carpetilla</option>
									<option value="Carpeta de palanca">Carpeta de palanca</option>
									<option value="Otros">Otros</option>
								</select>
							</td>
						</tr>
						<tr style="height: 40px;">
							<td width="100px" class="lblnombre">Nombre de archivo</td>
							<td width="240px"><input type="text" name="nom_arc" class="txtcampo" placeholder="NOMBRE DE ARCHIVO" onkeypress="return alfanumerico(event);" onpaste="return false"></td>
						    <td width="130px" class="lblnombre">Fecha de autorización </td>
							<td width="220px"><input type="text" name="fec_aut" class="txtcampo datepicker" readonly="" placeholder="FECHA DE AUTORIZACIÓN " ></td>
					    </tr> 
					   <table>
						<tr style="height: 60px;">
							<td width="180px" class="lblnombre">Motivos de autorización </td>
							<td width="320px"><textarea class="txtcampo large2" type="text" name="mot_arc" placeholder="MOTIVOS DE AUTORIZACIÓN" onkeypress="return alfanumerico(event);" onpaste="return false"></textarea> </td>
						</tr>
					   </table>
					</table>
					<center>
					<table>
						<tr style="height: 80px;">
							<td>
								<input type="submit" class="botones ico-btnsave" value="ENVIAR DATOS">
                 				<input type="reset"  onclick="document.location.reload();" class="botones ico-btnlimpiar" value="LIMPIAR DATOS">
                 			</td>
						</tr>
					</table>
				</td>
				</tr>
				</table>
				</center>	
				</fieldset>	
			</form>
		</div><!-- cB -->
		<div class="Cpad">
			<br class="clear" />
		</div>
		</div><!-- Cpad -->
	</div><!-- content -->
	<div id="properspace"></div><!-- properspace -->
</div><!-- daddy -->
<div id="footer">
	<div id="foot">
		<div id="foot1"><a href="">&copy; Copyright 2015</a> - Sistemas UET</div><!-- foot1 -->
		<div id="foot2">
			<span class="valid"><a href="">LA PAZ</a> - <a href="">BOLIVIA</a></span><center>Av. Mariscal Santa Cruz Edif. Mutual la Primera <a href=""> Bloque B Piso 19 y 20<span class="star">*</span></a><br>Telf. 2 - <a href="">2141534</a> Fax. 2-<a href="">2141565</a></center>
		</div><!-- foot1 -->
	</div><!-- foot -->
</div><!-- footer -->
</body>
</html>
