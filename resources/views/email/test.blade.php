<!--
<h1>Confirmo confirmo!</h1>
<ul>
	<li>Nombre: {{ $data['nombre'] }}</li>
	<li>E-mail: {{ $data['email'] }}</li>
</ul>
<p>
	<i>Recibido {{ $data['now'] }}</i>
</p>
-->

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
                                                                                    <p style="font-family: arial, helvetica\ neue, helvetica, sans-serif;">Mail de confirmación - OMRI<br></p>
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
                                <td class="esd-stripe esd-checked" style="background-image:url(circuits2.png);background-position: center top; background-repeat: no-repeat; background-size: cover;" bgcolor="#3d4c6b" align="center">
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

							                                            <tr align="center">
							                                            	<td align="center" style="background-color: white;">
						                                                        <img src="logochico.png" alt="logo OMI" style="border-radius: 5px 5px 5px 5px; display: block;" title="logo OMI" width="200"></a></td>
						                                                    </td>
							                                            </tr>
							                                            <!-- Content -->
						                                                <tr>
						                                                	<td style="background-color: white; color: black; text-align: justify; font-family:'Courier New';">
						                                                		<br> 
						                                                		<h2>Gracias por registrarte!, {{ $data['nombre'] }} </h2>
																				<br>
																					<center>
																					<button style="background-color: #86c128; border-style: none; color: white; border-radius: 3px; font-size: 17px; height: 40px; width: 380px; font-family:'Consolas'"> Tu folio de registro es  <strong>{{ $data['folio'] }}  </strong></button>
																					</center>
																				<br>
																				<!--p>
																					
																					El <strong style="color: #038dd0;"> primer examen de selección </strong>se llevará a cabo el día <strong  style="color: #f00883;">666/666</strong>.
																				</p-->
																				
																				<p>
																					Los temas que vendrán en el examen serán relacionados a programación básica. Si estás interesado en prepararte en programación con bloques, puedes inscribirte a un curso de preparación adecuado a tu nivel escolar en <strong><a style="color: #038dd0;" href="{{ $data['link-codeorg'] }}"">code.org</a></strong>. 
																				</p>
																				<p>
																					A cambio de una cuota voluntaria de <strong>$50</strong> para apoyar para cubrir gastos de la OMI, podemos ofrecerte asesoría personalizada durante el curso de preparación.
																				</p>
																				<br>
																				<strong><p>Síguenos en nuestras redes sociales para mantenerte informado!</p></strong>
																				<center>
																					<table style=" border-style: none; border-radius: 3px; height: 40px; width: 250px; text-align: center;">
																						<tr>
																							<td>
																							<a style="text-decoration: none; color: blue; font-size: 30px;" href="https://www.facebook.com/omri2014" target="_blank" class="fa fa-facebook"></a>
																							</td>
																							<td>
																							<a style="text-decoration: none; color: purple; font-size: 30px;" href="https://www.facebook.com/omri2014" target="_blank" class="fa fa-instagram"></a>
																                        	</td>
																                        	<td>
																                        	<a style="color: red; font-size: 30px;"  href="https://www.youtube.com/channel/UCrMIVoXBR1cLffg76f7falw"   target="_blank" class="fa fa-youtube"></a>
															                        		</td>
															                        	</tr>
																					</table>
																				</center>
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

