<!-- Add icon library -->
<div class="es-wrapper-color">
    <table class="es-wrapper" width="100%" cellspacing="0" cellpadding="0">
        <tbody>
            <tr>
                <td class="esd-email-paddings" valign="top">
                    <table class="es-header" cellspacing="0" cellpadding="0" align="center">
                        <tbody>
                            <tr>
                                <td class="esd-stripe esd-checked" style="background-image:url({{ asset('storage/app/public/email/circuits2.png') }});background-position: center top; background-repeat: no-repeat; background-size: cover;" bgcolor="#3d4c6b" align="center">
                                    <!-- Background table -->
                                    <table class="es-header-body" style="background-color: transparent;" width="650" cellspacing="0" cellpadding="0" align="center">
                                        <tbody>
	                                        <tr><td><br></td></tr>
                                            <tr>
                                            	<td>
		                                            <table class="es-header-body" style="background-color: white; border-radius: 5px 5px 5px 5px;" width="600" cellspacing="0" cellpadding="0" align="center">
		                                            	<tr>
		                                            		<td>
			                                                	<table class="es-header-body" style="background-color: white;" width="550" cellspacing="0" cellpadding="0" align="center">
						                                            <tbody>
							                                            <tr><td><br></td></tr>

							                                            <!-- Content -->
						                                                <tr>
						                                                	<td style="background-color: white; color: black; text-align: justify; font-family:'Courier New'; padding: 5px">
						                                                		<br> 
						                                                		<h3>Hola {{ $data['nombre'] }} </h3>
						                                                		<p>
                                                                                    Recientemente, te inscribiste a la Olimpiada de Informática ¡y eso nos llenó de emoción!
                                                                                </p>
                                                                                <p>
                                                                                    ¡Da clic en <a href="https://entrenator.omri.org.mx/public/em/{{ $data['cr'] }}" target="_blank">este enlace para entrar a la plataforma</a>
                                                                                     y supera el puntaje del Entrenator!
                                                                                </p>
																				<p>
																					<i>Solo los más fuertes avanzan </i>
																				</p>
																				<strong><p>Si tienes dudas, por favor responde a este correo y únete a nuestro grupo <a href="https://www.facebook.com/groups/foromri">https://www.facebook.com/groups/foromri</a></p></strong>
															                    <br>
                                                                                <img src="https://entrenator.omri.org.mx/public/img/guia/c.png" style="width: 100%;">
															                    <br>
																				<p>
																					<i>Enviado {{ $data['now'] }}</i>
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

