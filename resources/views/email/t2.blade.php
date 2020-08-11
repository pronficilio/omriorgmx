<!-- Add icon library -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<div class="es-wrapper-color">
    <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td class="esd-email-paddings" valign="top">
                	<!-- Header table -->
                    <table class="es-content esd-header-popover" cellspacing="0" cellpadding="0" align="center">
                        <tbody>
                            <tr>
                                <td class="esd-stripe" esd-custom-block-id="7964" align="center">
                                    <table class="es-content-body" style="background-color: transparent;" width="640" cellspacing="0" cellpadding="0" align="center">
                                        <tbody>
                                            <tr>
                                                <td class="esd-structure es-p15t es-p15b es-p20r es-p20l" align="left">
                                                    <table class="es-left" cellspacing="0" cellpadding="0" align="left">
                                                        <tbody>
                                                            <tr>
                                                                <td class="esd-container-frame" width="290" align="left">
                                                                    <table width="100%" cellspacing="0" cellpadding="0">
                                                                        <tbody>
                                                                            <tr>
                                                                                <td class="es-infoblock esd-block-text es-m-txt-c" align="left">
                                                                                    <p style="font-family: arial, helvetica\ neue, helvetica, sans-serif;">Sitio entrenamiento - Entrenator<br></p>
                                                                                </td>
                                                                            </tr>
                                                                        </tbody>
                                                                    </table>
                                                                </td>
                                                            </tr>
                                                        </tbody>
                                                    </table>
                                                </td>
                                            </tr>
                                        </tbody>
                                    </table>
                                </td>
                            </tr>
                        </tbody>
                    </table>
                    <!-- Content table -->
                    <table class="es-header" cellspacing="0" cellpadding="0" align="center">
                        <tbody>
                            <tr>
                                <td class="esd-stripe esd-checked" style="background-image:url({{ asset('storage/app/public/email/') }}/circuits2.png);background-position: center top; background-repeat: no-repeat; background-size: cover;" bgcolor="#3d4c6b" align="center">
                                    <!-- Background table -->
                                    <table class="es-header-body" style="background-color: transparent;" width="640" cellspacing="0" cellpadding="0" align="center">
                                        <tbody>
	                                        <tr><td><br></td></tr>
                                            <tr>
                                            	<td>
		                                            <table class="es-header-body" style="background-color: white; border-radius: 5px 5px 5px 5px;" width="450" cellspacing="0" cellpadding="0" align="center">
		                                            	<tr>
		                                            		<td>
			                                                	<table class="es-header-body" style="background-color: white;" width="400" cellspacing="0" cellpadding="0" align="center">
						                                            <tbody>
							                                            <tr><td><br></td></tr>

							                                            <!-- Content -->
						                                                <tr>
						                                                	<td style="background-color: white; color: black; text-align: justify; font-family:'Courier New'; padding: 5px">
						                                                		<br> 
						                                                		<h3>Hola de nuevo {{ $data['nombre'] }} </h3>
						                                                		<p>
                                                                                    ¡Ya tienes disponible el acceso al sistema de entrenamiento!
                                                                                </p>
                                                                                <p>
                                                                                    Para acceder al curso haz clic en este enlace: <a href="https://entrenator.omri.org.mx/public/configura/{{ $data['email'] }}" target="_blank">https://entrenator.omri.org.mx/public/configura/{{ $data['email'] }}</a>
                                                                                </p>
																				<p>
																					<i>Programar es para todos. Programar es para ti.</i>
																				</p>
																				<br>
																				<strong><p>¡Síguenos en nuestras redes sociales para mantenerte informado! <a href="https://www.facebook.com/omrioficial/">https://www.facebook.com/omrioficial/</a></p></strong>
																				
															                    <br>
															                    <br>
																				<p>
																					<i>Recibido {{ $data['now'] }}</i>
																				</p>
						                                                	</td>
						                                                </tr>
						                                                <!-- End of content -->
						                                            </tbody>
						                                        </table>
						                                    </td>
						                                </tr>
				                                    </table>
				                                </td>
                                            </tr>
                                            <tr><td><br></td></tr>
                                        </tbody>
                                    </table>
                                </td>
                             </tr>   
                         </tbody>
                    </table>
                </td>
            </tr>
         </tbody>
    </table>
</div>

