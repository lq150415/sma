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
					$('#frmbusquedanombre').validate
					(
					 	{
							rules:
							{
							'nom_arc': {required: true}
							},
							messages: 
							{
							'nom_arc':{required:'<label class="mensajevalidacion">Campo requerido</label>'},
							},
							debug: true,
							submitHandler: function(form)
							{
								document.getElementById("frmbusquedanombre").submit();
							}
					 	}
					);
				}
			);
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
			<div class="titulo">CONSULTA DE ARCHIVO POR NOMBRE </div>
			<form name="frmbusquedanombre" id="frmbusquedanombre" action="<?=base_url();?>registro/busca_nombre" method="post">
				<!--TIPOS DE DOCUMENTOS-->
				<center>
            <div class="colordiv">
                <center>
	        <table>
	        <tr>
	            <td rowspan="5">
	            <img src="<?= base_url('templates/img/images/buscar.jpg');?>">
	            </td>
	        </tr>
	        <tr>
	        <td></td>
	        <td></td>
	        </tr>
	        <tr>
	        <tr style="height: 50px;">
			   <td width="100px" class="lblnombre">Ingrese nombre:</td>
			   <td width="100px"><input type="text" name="nom_car" class="txtcampo" placeholder="NOMBRE DE ARCHIVO" onkeypress="return alfanumerico(event);" onpaste="return false"></td>	
		    </tr>  
	        </tr>
	        <tr>
	           <td height="40px" colspan="2" style="padding-left:25px" align="center">
				<input type="submit" class="botones ico-btnsearch" value="BUSCAR">
                <input type="reset" class="botones ico-btnlimpiar" value="LIMPIAR DATOS">
               </td>
           </tr>
	<tr><td></td><td></td></tr>
	</table>
</form>
</center>
</div>
</center>
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
		<div id="foot1"><a href="">&copy; Copyright 2015</a> - Sistemas Octavo</div><!-- foot1 -->
		<div id="foot2">
			<span class="valid"><a href="">LA PAZ</a> - <a href="">BOLIVIA</a></span><center> Ingenieria de Sistemas<a href=""> Unifranz<span class="star">*</span></a></center>
		</div><!-- foot1 -->
	</div><!-- foot -->
</div><!-- footer -->

</body>
</html>
