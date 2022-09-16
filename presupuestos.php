<!DOCTYPE html>
<html>
<head>
	
	<?php include("analitycs.php"); ?>	
	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>RollTec - Presupuestos</title>
   
<?php include("meta.php"); ?>
	
	<style>
		a.presupuestos{
			color:#D71313 !important
		}
	</style>
</head>

<!-- page wrapper -->
<body class="page-wrapper">

    <!-- .preloader -->
    <div class="preloader"></div>
    <!-- /.preloader -->
   
<?php include("header.php"); ?>


    <!-- page title -->
    <div class="about-bg centered">
        <div class="container">
            <div class="text text-left">RollTec - Presupuestos</div>
        </div>
    </div>
    <!-- end page title -->

    
	
    <!-- about section -->
    <section class="sec-pad">
        <div class="container">
            <div class="row">
				<div class="col-md-12 text-center">
					<div class="team-title centered">
                		<div class="section-title"><h2>Serie Liviana - Rodillos a gravedad</h2></div>
                		<div class="title-text"><p>Eje Retractil tapa a bolillas</p></div>
            		</div>
					<img src="images/products/form_5.jpg" class="img-responsive my-auto" />
				<p class="mb-2">	D: ∅ de caño | e: Espesor de caño |  d: ∅ de eje | LU: Largo Útil</p>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<div class="row">
				
	
	<div class="col-md-10 col-md-offset-1">
		<div class="alert-medida"> Medidas expresadas en milimetros.</div>
		
		 

                   <form id="form5" name="form5" method="post" action="formularios/form_5.php">
					   
				<div class="row">
								
								<input type="hidden" name="recaptcha" id="recaptcha">
                                <input type="hidden" name="action" id="action" value="process">
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="cantidad" id="cantidad" size="30" tabindex="1" required
                                        placeholder="Cantidad (requerido)">
                                </div>
                                <div class="col-md-6">
									 
                                    <select name="material" id="material" tabindex="2" required >
									<option selected="true" disabled="disabled">Material</option>	
										 <option VALUE="Acero_zincado"> ACERO ZINCADO</option>
        <option VALUE="Acero_inoxidable"> ACERO INOXIDABLE</option>
        <option VALUE="Plastico"> PLASTICO</option> 
										</select>
                                </div>
                                <div class="col-md-4">
									<label for="d_cano" class="mt-1 mr-1">D:</label>
									<select name="d_cano" title="" tabindex="3" id="d_cano" style="width: 80%; float: right"> 
							
        <option VALUE="19ac"> 19ac</option>
        <option VALUE="29ac"> 29ac</option>
        <option VALUE="32"> 32</option>
        <option VALUE="50,8"> 50,8</option> 
        <option VALUE="57"> 57</option>   
        <option VALUE="60,3"> 60,3</option>
        <option VALUE="63,5"> 63,5 </option>      
      </select>
									
                                </div>
					
					
					<div class="col-md-4">
						<label for="d_cano" class="mt-1 mr-1">d:</label>
									<select name="d_eje" title="" tabindex="4" id="d_eje" style="width: 80%; float: right"> 
							        <option VALUE="6"> 6</option>
										<option VALUE="8"> 8</option>
										<option VALUE="10"> 10</option>
										<option VALUE="12"> 12</option>
             
      </select>
									
                                </div>
					
					<div class="col-md-4">
									<input autocomplete="false" type="text" name="lu" id="lu" size="30" tabindex="5" required
                                        placeholder="Largo útil">
									
                                </div>
                                
                                <div class="col-md-12">
                                   <textarea class="form-control text-area"  id="observaciones" name="observaciones" cols="40" tabindex="6" rows="2" placeholder="Observaciones"></textarea>
									
									<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                </div>
                            </div>
					   
					   
					   <div class="row">
								
						   <div class="col-md-12 mt-3">
						   
						   <div class="team-title centered">
                		
                		<div class="title-text"><p>Datos del interesado:</p></div>
            		</div>
						   
						   </div>
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="nombre" id="nombre" size="30" tabindex="7" pattern=".{2,100}" required value="<?php if(isset($_POST['nombre']) && $_POST['nombre']!=''){echo $_POST['nombre'];} ?>" 
                                        placeholder="Nombre y Apellido (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="email" name="email" id="email" size="30" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" tabindex="8" required value="<?php if(isset($_POST['email']) && $_POST['email']!=''){echo $_POST['email'];} ?>" placeholder="E-Mail (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="telefono" id="telefono" size="30" tabindex="9" pattern=".{2,100}" required value="<?php if(isset($_POST['telefono']) && $_POST['telefono']!=''){echo $_POST['telefono'];} ?>" placeholder="Telefono - Whatsapp (requerido)">
                                </div>
						   
						   <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="empresa" id="empresa" size="30" tabindex="10" pattern=".{2,100}" required value="<?php if(isset($_POST['empresa']) && $_POST['empresa']!=''){echo $_POST['empresa'];} ?>" placeholder="Empresa">
                                </div>
                                
                                
                            </div>
					   
					   
                          <button class="btn-one style-one radi" type="submit" id="submit_btn"  tabindex="1" >Enviar Consulta</button>	   
					   
					   
    
  </form>
                </div>
                
            </div>
			</div>
			</div>
			
        </div>
    </section>
    <!-- about section end -->


	
    <!-- about section -->
    <section class="sec-pad bg-gray">
        <div class="container">
            <div class="row">
				<div class="col-md-12 text-center">
					<div class="team-title centered">
                		<div class="section-title"><h2>Serie Liviana - Rodillos a gravedad</h2></div>
                		<div class="title-text"><p>Eje rosca - Interior tapa bolillas</p></div>
            		</div>
					<img src="images/products/serie_bolilla_rosca.jpg" class="img-responsive my-auto border-radius mb-2" />
				<p class="mb-2">	D: ∅ de caño | e: Espesor de caño |  d: ∅ de eje | LU: Largo Útil</p>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<div class="row">
				
	
	<div class="col-md-10 col-md-offset-1">
		<div class="alert-medida"> Medidas expresadas en milimetros.</div>
		
		 

                   <form id="form2" name="form2" method="post" action="formularios/form_2.php">
					   
				<div class="row">
								
								<input type="hidden" name="recaptcha" id="recaptcha">
                                <input type="hidden" name="action" id="action" value="process">
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="cantidad" id="cantidad" size="30" tabindex="1" required
                                        placeholder="Cantidad (requerido)">
                                </div>
                                <div class="col-md-6">
									 
                                    <select name="material" id="material" tabindex="2" required >
									<option selected="true" disabled="disabled">Material</option>	
										 <option VALUE="Acero_zincado"> ACERO ZINCADO</option>
        <option VALUE="Acero_inoxidable"> ACERO INOXIDABLE</option>
        <option VALUE="Plastico"> PLASTICO</option> 
										</select>
                                </div>
                                <div class="col-md-4">
									<label for="d_cano" class="mt-1 mr-1">D:</label>
									<select name="d_cano" title="" tabindex="3" id="d_cano" style="width: 80%; float: right"> 
							
         <option VALUE="50,8"> 50,8</option>
        <option VALUE="57"> 57</option>   
        <option VALUE="60,3"> 60,3</option>
        <option VALUE="63"> 63</option>         
      </select>
									
                                </div>
					
					
					<div class="col-md-4">
						<label for="d_cano" class="mt-1 mr-1">d:</label>
									<select name="d_eje" title="" tabindex="4" id="d_eje" style="width: 80%; float: right"> 
							        <option VALUE="10"> 10</option>
									<option VALUE="12"> 12</option>
             
      </select>
									
                                </div>
					
					<div class="col-md-4">
									<input autocomplete="false" type="text" name="lu" id="lu" size="30" tabindex="5" required
                                        placeholder="Largo útil">
									
                                </div>
                                
                                <div class="col-md-12">
                                   <textarea class="form-control text-area"  id="observaciones" name="observaciones" cols="40" tabindex="6" rows="2" placeholder="Observaciones"></textarea>
									
									<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                </div>
                            </div>
					   
					   
					   <div class="row">
								
						   <div class="col-md-12 mt-3">
						   
						   <div class="team-title centered">
                		
                		<div class="title-text"><p>Datos del interesado:</p></div>
            		</div>
						   
						   </div>
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="nombre" id="nombre" size="30" tabindex="7" pattern=".{2,100}" required value="<?php if(isset($_POST['nombre']) && $_POST['nombre']!=''){echo $_POST['nombre'];} ?>" 
                                        placeholder="Nombre y Apellido (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="email" name="email" id="email" size="30" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" tabindex="8" required value="<?php if(isset($_POST['email']) && $_POST['email']!=''){echo $_POST['email'];} ?>" placeholder="E-Mail (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="telefono" id="telefono" size="30" tabindex="9" pattern=".{2,100}" required value="<?php if(isset($_POST['telefono']) && $_POST['telefono']!=''){echo $_POST['telefono'];} ?>" placeholder="Telefono - Whatsapp (requerido)">
                                </div>
						   
						   <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="empresa" id="empresa" size="30" tabindex="10" pattern=".{2,100}" required value="<?php if(isset($_POST['empresa']) && $_POST['empresa']!=''){echo $_POST['empresa'];} ?>" placeholder="Empresa">
                                </div>
                                
                                
                            </div>
					   
					   
                          <button class="btn-one style-one radi" type="submit" id="submit_btn"  tabindex="1" >Enviar Consulta</button>	   
					   
					   
    
  </form>
                </div>
                
            </div>
			</div>
			</div>
			
        </div>
    </section>
    <!-- about section end -->
	

<!-- about section -->
    <section class="sec-pad">
        <div class="container">
            <div class="row">
				<div class="col-md-12 text-center">
					<div class="team-title centered">
                		<div class="section-title"><h2>Serie Liviana - Rodillos a gravedad</h2></div>
                		<div class="title-text"><p>Eje fresado - Tapa Bolillas</p></div>
            		</div>
					<img src="images/products/serie_bolilla_frezado.jpg" class="img-responsive my-auto" />
				<p class="mb-2">	D: ∅ de caño | e: Espesor de caño |  d: ∅ de eje | LU: Largo Útil | LR: Largo Rodadura</p>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<div class="row">
				
	
	<div class="col-md-10 col-md-offset-1">
		<div class="alert-medida"> Medidas expresadas en milimetros.</div>
		
		 

                   <form id="form1" name="form1" method="post" action="formularios/form_1.php">
					   
				<div class="row">
								
								<input type="hidden" name="recaptcha" id="recaptcha">
                                <input type="hidden" name="action" id="action" value="process">
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="cantidad" id="cantidad" size="30" tabindex="1" required
                                        placeholder="Cantidad (requerido)">
                                </div>
                                <div class="col-md-6">
									 
                                    <select name="material" id="material" tabindex="2" required >
									<option selected="true" disabled="disabled">Material</option>	
										 <option VALUE="Acero_zincado"> ACERO ZINCADO</option>
        <option VALUE="Acero_inoxidable"> ACERO INOXIDABLE</option>
        <option VALUE="Plastico"> PLASTICO</option> 
										</select>
                                </div>
                                <div class="col-md-6">
									<label for="d_cano" class="mt-1 mr-1">D:</label>
									<select name="d_cano" title="" tabindex="3" id="d_cano" style="width: 80%; float: right"> 
							
        
        <option VALUE="50,8"> 50,8</option> 
        <option VALUE="57"> 57</option>   
        <option VALUE="60,3"> 60,3</option>
        <option VALUE="63"> 63 </option>      
      </select>
									
                                </div>
					
					
					<div class="col-md-6">
						<label for="d_cano" class="mt-1 mr-1">d:</label>
									<select name="d_eje" title="" tabindex="4" id="d_eje" style="width: 80%; float: right"> 
							        <option VALUE="10"> 10</option>
										<option VALUE="12"> 12</option>
             
      </select>
									
                                </div>
					
					<div class="col-md-6">
									<input autocomplete="false" type="text" name="lr" id="lr" size="30" tabindex="5" required
                                        placeholder="Largo útil">
									
                                </div>
					
					<div class="col-md-6">
									<input autocomplete="false" type="text" name="le" id="le" size="30" tabindex="5" required
                                        placeholder="Largo útil">
									
                                </div>
                                
                                <div class="col-md-12">
                                   <textarea class="form-control text-area"  id="observaciones" name="observaciones" cols="40" tabindex="6" rows="2" placeholder="Observaciones"></textarea>
									
									<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                </div>
                            </div>
					   
					   
					   <div class="row">
								
						   <div class="col-md-12 mt-3">
						   
						   <div class="team-title centered">
                		
                		<div class="title-text"><p>Datos del interesado:</p></div>
            		</div>
						   
						   </div>
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="nombre" id="nombre" size="30" tabindex="7" pattern=".{2,100}" required value="<?php if(isset($_POST['nombre']) && $_POST['nombre']!=''){echo $_POST['nombre'];} ?>" 
                                        placeholder="Nombre y Apellido (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="email" name="email" id="email" size="30" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" tabindex="8" required value="<?php if(isset($_POST['email']) && $_POST['email']!=''){echo $_POST['email'];} ?>" placeholder="E-Mail (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="telefono" id="telefono" size="30" tabindex="9" pattern=".{2,100}" required value="<?php if(isset($_POST['telefono']) && $_POST['telefono']!=''){echo $_POST['telefono'];} ?>" placeholder="Telefono - Whatsapp (requerido)">
                                </div>
						   
						   <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="empresa" id="empresa" size="30" tabindex="10" pattern=".{2,100}" required value="<?php if(isset($_POST['empresa']) && $_POST['empresa']!=''){echo $_POST['empresa'];} ?>" placeholder="Empresa">
                                </div>
                                
                                
                            </div>
					   
					   
                          <button class="btn-one style-one radi" type="submit" id="submit_btn"  tabindex="1" >Enviar Consulta</button>	   
					   
					   
    
  </form>
                </div>
                
            </div>
			</div>
			</div>
			
        </div>
    </section>
    <!-- about section end -->

		
    <!-- about section -->
    <section class="sec-pad bg-gray">
        <div class="container">
            <div class="row">
				<div class="col-md-12 text-center">
					<div class="team-title centered">
                		<div class="section-title"><h2>Serie Liviana - Rodillos a gravedad y a bandas</h2></div>
                		<div class="title-text"><p>Eje Retractil - Tapa a rod. 6202</p></div>
            		</div>
					<img src="images/products/form_6.jpg" class="img-responsive my-auto border-radius mb-2" />
				<p class="mb-2">	D: ∅ de caño | e: Espesor de caño |  d: ∅ de eje | LU: Largo Útil</p>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<div class="row">
				
	
	<div class="col-md-10 col-md-offset-1">
		<div class="alert-medida"> Medidas expresadas en milimetros.</div>
		
		 

                   <form id="form6" name="form6" method="post" action="formularios/form_6.php">
					   
				<div class="row">
								
								<input type="hidden" name="recaptcha" id="recaptcha">
                                <input type="hidden" name="action" id="action" value="process">
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="cantidad" id="cantidad" size="30" tabindex="1" required
                                        placeholder="Cantidad (requerido)">
                                </div>
                                <div class="col-md-6">
									 
                                    <select name="material" id="material" tabindex="2" required >
									<option selected="true" disabled="disabled">Material</option>	
										 <option VALUE="Acero_zincado"> ACERO ZINCADO</option>
        <option VALUE="Acero_inoxidable"> ACERO INOXIDABLE</option>
        <option VALUE="Plastico"> PLASTICO</option> 
										</select>
                                </div>
                                <div class="col-md-4">
									<label for="d_cano" class="mt-1 mr-1">D:</label>
									<select name="d_cano" title="" tabindex="3" id="d_cano" style="width: 80%; float: right"> 
							
         <option VALUE="50,8"> 50,8</option>
        <option VALUE="57"> 57</option>   
        <option VALUE="60,3"> 60,3</option>
        <option VALUE="63"> 63</option>         
      </select>
									
                                </div>
					
					
					<div class="col-md-4">
						<label for="d_cano" class="mt-1 mr-1">d:</label>
									<select name="d_eje" title="" tabindex="4" id="d_eje" style="width: 80%; float: right"> 
							        <option VALUE="8"> 8</option>
									<option VALUE="10"> 10</option>
									<option VALUE="12"> 12</option>
             
      </select>
									
                                </div>
					
					<div class="col-md-4">
									<input autocomplete="false" type="text" name="lu" id="lu" size="30" tabindex="5" required
                                        placeholder="Largo útil">
									
                                </div>
                                
                                <div class="col-md-12">
                                   <textarea class="form-control text-area"  id="observaciones" name="observaciones" cols="40" tabindex="6" rows="2" placeholder="Observaciones"></textarea>
									
									<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                </div>
                            </div>
					   
					   
					   <div class="row">
								
						   <div class="col-md-12 mt-3">
						   
						   <div class="team-title centered">
                		
                		<div class="title-text"><p>Datos del interesado:</p></div>
            		</div>
						   
						   </div>
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="nombre" id="nombre" size="30" tabindex="7" pattern=".{2,100}" required value="<?php if(isset($_POST['nombre']) && $_POST['nombre']!=''){echo $_POST['nombre'];} ?>" 
                                        placeholder="Nombre y Apellido (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="email" name="email" id="email" size="30" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" tabindex="8" required value="<?php if(isset($_POST['email']) && $_POST['email']!=''){echo $_POST['email'];} ?>" placeholder="E-Mail (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="telefono" id="telefono" size="30" tabindex="9" pattern=".{2,100}" required value="<?php if(isset($_POST['telefono']) && $_POST['telefono']!=''){echo $_POST['telefono'];} ?>" placeholder="Telefono - Whatsapp (requerido)">
                                </div>
						   
						   <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="empresa" id="empresa" size="30" tabindex="10" pattern=".{2,100}" required value="<?php if(isset($_POST['empresa']) && $_POST['empresa']!=''){echo $_POST['empresa'];} ?>" placeholder="Empresa">
                                </div>
                                
                                
                            </div>
					   
					   
                          <button class="btn-one style-one radi" type="submit" id="submit_btn"  tabindex="1" >Enviar Consulta</button>	   
					   
					   
    
  </form>
                </div>
                
            </div>
			</div>
			</div>
			
        </div>
    </section>
    <!-- about section end -->
	   

<!-- about section -->
    <section class="sec-pad">
        <div class="container">
            <div class="row">
				<div class="col-md-12 text-center">
					<div class="team-title centered">
                		<div class="section-title"><h2>Serie Liviana - Rodillos a gravedad y a bandas</h2></div>
                		<div class="title-text"><p>Eje Retractil - Tapa a rod. 6202</p></div>
            		</div>
					<img src="images/products/form_3.jpg" class="img-responsive my-auto" />
				<p class="mb-2">	D: ∅ de caño | e: Espesor de caño |  d: ∅ de eje | LU: Largo Útil | LR: Largo Rodadura</p>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<div class="row">
				
	
	<div class="col-md-10 col-md-offset-1">
		<div class="alert-medida"> Medidas expresadas en milimetros.</div>
		
		 

                   <form id="form3" name="form3" method="post" action="formularios/form_3.php">
					   
				<div class="row">
								
								<input type="hidden" name="recaptcha" id="recaptcha">
                                <input type="hidden" name="action" id="action" value="process">
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="cantidad" id="cantidad" size="30" tabindex="1" required
                                        placeholder="Cantidad (requerido)">
                                </div>
                                <div class="col-md-6">
									 
                                    <select name="material" id="material" tabindex="2" required >
									<option selected="true" disabled="disabled">Material</option>	
										 <option VALUE="Acero_zincado"> ACERO ZINCADO</option>
        <option VALUE="Acero_inoxidable"> ACERO INOXIDABLE</option>
        <option VALUE="Plastico"> PLASTICO</option> 
										</select>
                                </div>
                                <div class="col-md-6">
									<label for="d_cano" class="mt-1 mr-1">D:</label>
									<select name="d_cano" title="" tabindex="3" id="d_cano" style="width: 80%; float: right"> 
							
        
        <option VALUE="50,8"> 50,8</option> 
        <option VALUE="57"> 57</option>   
        <option VALUE="60,3"> 60,3</option>
        <option VALUE="63,5"> 63,5 </option>      
		<option VALUE="76"> 76 </option>      
      </select>
									
                                </div>
					
					
					<div class="col-md-6">
						<label for="d_cano" class="mt-1 mr-1">d:</label>
									<select name="d_eje" title="" tabindex="4" id="d_eje" style="width: 80%; float: right"> 
							        <option VALUE="10"> 10</option>
										<option VALUE="12"> 12</option>
										<option VALUE="15"> 15</option>
             
      </select>
									
                                </div>
					
					<div class="col-md-6">
									<input autocomplete="false" type="text" name="lr" id="lr" size="30" tabindex="5" required
                                        placeholder="Largo Rodadura">
									
                                </div>
					
					<div class="col-md-6">
									<input autocomplete="false" type="text" name="le" id="le" size="30" tabindex="5" required
                                        placeholder="Largo de Eje">
									
                                </div>
                                
                                <div class="col-md-12">
                                   <textarea class="form-control text-area"  id="observaciones" name="observaciones" cols="40" tabindex="6" rows="2" placeholder="Observaciones"></textarea>
									
									<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                </div>
                            </div>
					   
					   
					   <div class="row">
								
						   <div class="col-md-12 mt-3">
						   
						   <div class="team-title centered">
                		
                		<div class="title-text"><p>Datos del interesado:</p></div>
            		</div>
						   
						   </div>
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="nombre" id="nombre" size="30" tabindex="7" pattern=".{2,100}" required value="<?php if(isset($_POST['nombre']) && $_POST['nombre']!=''){echo $_POST['nombre'];} ?>" 
                                        placeholder="Nombre y Apellido (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="email" name="email" id="email" size="30" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" tabindex="8" required value="<?php if(isset($_POST['email']) && $_POST['email']!=''){echo $_POST['email'];} ?>" placeholder="E-Mail (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="telefono" id="telefono" size="30" tabindex="9" pattern=".{2,100}" required value="<?php if(isset($_POST['telefono']) && $_POST['telefono']!=''){echo $_POST['telefono'];} ?>" placeholder="Telefono - Whatsapp (requerido)">
                                </div>
						   
						   <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="empresa" id="empresa" size="30" tabindex="10" pattern=".{2,100}" required value="<?php if(isset($_POST['empresa']) && $_POST['empresa']!=''){echo $_POST['empresa'];} ?>" placeholder="Empresa">
                                </div>
                                
                                
                            </div>
					   
					   
                          <button class="btn-one style-one radi" type="submit" id="submit_btn"  tabindex="1" >Enviar Consulta</button>	   
					   
					   
    
  </form>
                </div>
                
            </div>
			</div>
			</div>
			
        </div>
    </section>
    <!-- about section end -->

	
				
    <!-- about section -->
    <section class="sec-pad bg-gray">
        <div class="container">
            <div class="row">
				<div class="col-md-12 text-center">
					<div class="team-title centered">
                		<div class="section-title"><h2>Serie Semi Liviana - Rod. a gravedad y a bandas</h2></div>
                		<div class="title-text"><p>Eje Rosca int. a rodamiento 6202</p></div>
            		</div>
					<img src="images/products/form_4.jpg" class="img-responsive my-auto border-radius mb-2" />
				<p class="mb-2">	D: ∅ de caño | e: Espesor de caño |  d: ∅ de eje | LU: Largo Útil | LR: Largo Rodadura | M: Rosca Métrica</p>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<div class="row">
				
	
	<div class="col-md-10 col-md-offset-1">
		<div class="alert-medida"> Medidas expresadas en milimetros.</div>
		
		 

                   <form id="form4" name="form4" method="post" action="formularios/form_4.php">
					   
				<div class="row">
								
								<input type="hidden" name="recaptcha" id="recaptcha">
                                <input type="hidden" name="action" id="action" value="process">
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="cantidad" id="cantidad" size="30" tabindex="1" required
                                        placeholder="Cantidad (requerido)">
                                </div>
                                <div class="col-md-6">
									 
                                    <select name="material" id="material" tabindex="2" required >
									<option selected="true" disabled="disabled">Material</option>	
										 <option VALUE="Acero_zincado"> ACERO ZINCADO</option>
        <option VALUE="Acero_inoxidable"> ACERO INOXIDABLE</option>
        <option VALUE="Plastico"> PLASTICO</option> 
										</select>
                                </div>
                                <div class="col-md-4">
									<label for="d_cano" class="mt-1 mr-1">D:</label>
									<select name="d_cano" title="" tabindex="3" id="d_cano" style="width: 80%; float: right"> 
							
         <option VALUE="50,8"> 50,8</option>
        <option VALUE="57"> 57</option>   
        <option VALUE="60,3"> 60,3</option>
        <option VALUE="63,5"> 63,5</option>         
        <option VALUE="76"> 76</option>         
      </select>
									
                                </div>
					
					
					<div class="col-md-4">
						<label for="d_cano" class="mt-1 mr-1">d:</label>
									<select name="d_eje" title="" tabindex="4" id="d_eje" style="width: 80%; float: right"> 
							        
									<option VALUE="12"> 12</option>
									<option VALUE="15"> 15</option>
									
      </select>
									
                                </div>
					
					<div class="col-md-4">
									<input autocomplete="false" type="text" name="lr" id="lr" size="30" tabindex="5" required
                                        placeholder="Largo Rodadura">
									
                                </div>
					
                                <div class="col-md-4">
									<input autocomplete="false" type="text" name="lu" id="lu" size="30" tabindex="5" required
                                        placeholder="Largo Útil">
									
                                </div>
					
						<div class="col-md-8">
										<label for="d_cano" class="mt-1 mr-1">Rosca Métrica:</label>
									<select name="m" title="" tabindex="4" id="m" style="width: 60%; float: right"> 
							        
									<option VALUE="8x1,25"> 8 x 1,25</option>
									<option VALUE="10x1,50"> 10 x 1,50</option>
									
      </select>
							
                                </div>
                                
                                <div class="col-md-12">
                                   <textarea class="form-control text-area"  id="observaciones" name="observaciones" cols="40" tabindex="6" rows="2" placeholder="Observaciones"></textarea>
									
									<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                </div>
                            </div>
					   
					   
					   <div class="row">
								
						   <div class="col-md-12 mt-3">
						   
						   <div class="team-title centered">
                		
                		<div class="title-text"><p>Datos del interesado:</p></div>
            		</div>
						   
						   </div>
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="nombre" id="nombre" size="30" tabindex="7" pattern=".{2,100}" required value="<?php if(isset($_POST['nombre']) && $_POST['nombre']!=''){echo $_POST['nombre'];} ?>" 
                                        placeholder="Nombre y Apellido (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="email" name="email" id="email" size="30" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" tabindex="8" required value="<?php if(isset($_POST['email']) && $_POST['email']!=''){echo $_POST['email'];} ?>" placeholder="E-Mail (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="telefono" id="telefono" size="30" tabindex="9" pattern=".{2,100}" required value="<?php if(isset($_POST['telefono']) && $_POST['telefono']!=''){echo $_POST['telefono'];} ?>" placeholder="Telefono - Whatsapp (requerido)">
                                </div>
						   
						   <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="empresa" id="empresa" size="30" tabindex="10" pattern=".{2,100}" required value="<?php if(isset($_POST['empresa']) && $_POST['empresa']!=''){echo $_POST['empresa'];} ?>" placeholder="Empresa">
                                </div>
                                
                                
                            </div>
					   
					   
                          <button class="btn-one style-one radi" type="submit" id="submit_btn"  tabindex="1" >Enviar Consulta</button>	   
					   
					   
    
  </form>
                </div>
                
            </div>
			</div>
			</div>
			
        </div>
    </section>
    <!-- about section end -->
	   
	

<!-- about section -->
    <section class="sec-pad">
        <div class="container">
            <div class="row">
				<div class="col-md-12 text-center">
					<div class="team-title centered">
                		<div class="section-title"><h2>Serie Pesada - Rodillos a gravedad y a bandas</h2></div>
                		<div class="title-text"><p>Eje Fresado rod. 6204 2RS</p></div>
            		</div>
					<img src="images/products/form_7.jpg" class="img-responsive my-auto" />
				<p class="mb-2">	D: ∅ de caño | e: Espesor de caño |  d: ∅ de eje | LU: Largo Útil | LR: Largo Rodadura</p>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<div class="row">
				
	
	<div class="col-md-10 col-md-offset-1">
		<div class="alert-medida"> Medidas expresadas en milimetros.</div>
		
		 

                   <form id="form7" name="form7" method="post" action="formularios/form_7.php">
					   
				<div class="row">
								
								<input type="hidden" name="recaptcha" id="recaptcha">
                                <input type="hidden" name="action" id="action" value="process">
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="cantidad" id="cantidad" size="30" tabindex="1" required
                                        placeholder="Cantidad (requerido)">
                                </div>
                                <div class="col-md-6">
									 
                                    <select name="material" id="material" tabindex="2" required >
									<option selected="true" disabled="disabled">Material</option>	
										 <option VALUE="Acero_zincado"> ACERO ZINCADO</option>
        <option VALUE="Acero_inoxidable"> ACERO INOXIDABLE</option>
        <option VALUE="Plastico"> PLASTICO</option> 
										</select>
                                </div>
                                <div class="col-md-4">
									<label for="d_cano" class="mt-1 mr-1">D:</label>
									<select name="d_cano" title="" tabindex="3" id="d_cano" style="width: 80%; float: right"> 
        <option VALUE="76"> 76</option> 
        <option VALUE="89"> 89</option>   
        <option VALUE="102"> 102</option>     
      </select>
					            </div>
					
					
					<div class="col-md-4">
									<input autocomplete="false" type="text" name="lr" id="lr" size="30" tabindex="5" required
                                        placeholder="Largo Rodadura">
									
                                </div>
					
					<div class="col-md-4">
									<input autocomplete="false" type="text" name="le" id="le" size="30" tabindex="5" required
                                        placeholder="Largo de Eje">
									
                                </div>
                                
                                <div class="col-md-12">
                                   <textarea class="form-control text-area"  id="observaciones" name="observaciones" cols="40" tabindex="6" rows="2" placeholder="Observaciones"></textarea>
									
									<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                </div>
                            </div>
					   
					   
					   <div class="row">
								
						   <div class="col-md-12 mt-3">
						   
						   <div class="team-title centered">
                		
                		<div class="title-text"><p>Datos del interesado:</p></div>
            		</div>
						   
						   </div>
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="nombre" id="nombre" size="30" tabindex="7" pattern=".{2,100}" required value="<?php if(isset($_POST['nombre']) && $_POST['nombre']!=''){echo $_POST['nombre'];} ?>" 
                                        placeholder="Nombre y Apellido (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="email" name="email" id="email" size="30" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" tabindex="8" required value="<?php if(isset($_POST['email']) && $_POST['email']!=''){echo $_POST['email'];} ?>" placeholder="E-Mail (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="telefono" id="telefono" size="30" tabindex="9" pattern=".{2,100}" required value="<?php if(isset($_POST['telefono']) && $_POST['telefono']!=''){echo $_POST['telefono'];} ?>" placeholder="Telefono - Whatsapp (requerido)">
                                </div>
						   
						   <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="empresa" id="empresa" size="30" tabindex="10" pattern=".{2,100}" required value="<?php if(isset($_POST['empresa']) && $_POST['empresa']!=''){echo $_POST['empresa'];} ?>" placeholder="Empresa">
                                </div>
                                
                                
                            </div>
					   
					   
                          <button class="btn-one style-one radi" type="submit" id="submit_btn"  tabindex="1" >Enviar Consulta</button>	   
					   
					   
    
  </form>
                </div>
                
            </div>
			</div>
			</div>
			
        </div>
    </section>
    <!-- about section end -->

						
    <!-- about section -->
    <section class="sec-pad bg-gray">
        <div class="container">
            <div class="row">
				<div class="col-md-12 text-center">
					<div class="team-title centered">
                		<div class="section-title"><h2>Serie Pesada - Rodillos a gravedad y a bandas</h2></div>
                		<div class="title-text"><p>Eje Roscado rod. 6204 2RS</p></div>
            		</div>
					<img src="images/products/form_8.jpg" class="img-responsive my-auto border-radius mb-2" />
				<p class="mb-2">	D: ∅ de caño | e: Espesor de caño |  d: ∅ de eje | LU: Largo Útil | LR: Largo Rodadura | M: Rosca Métrica</p>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<div class="row">
				
	
	<div class="col-md-10 col-md-offset-1">
		<div class="alert-medida"> Medidas expresadas en milimetros.</div>
		
		 

                   <form id="form8" name="form8" method="post" action="formularios/form_8.php">
					   
				<div class="row">
								
								<input type="hidden" name="recaptcha" id="recaptcha">
                                <input type="hidden" name="action" id="action" value="process">
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="cantidad" id="cantidad" size="30" tabindex="1" required
                                        placeholder="Cantidad (requerido)">
                                </div>
                                <div class="col-md-6">
									 
                                    <select name="material" id="material" tabindex="2" required >
									<option selected="true" disabled="disabled">Material</option>	
										 <option VALUE="Acero_zincado"> ACERO ZINCADO</option>
        <option VALUE="Acero_inoxidable"> ACERO INOXIDABLE</option>
        <option VALUE="Plastico"> PLASTICO</option> 
										</select>
                                </div>
                                <div class="col-md-4">
									<label for="d_cano" class="mt-1 mr-1">D:</label>
									<select name="d_cano" title="" tabindex="3" id="d_cano" style="width: 80%; float: right"> 
							
         <option VALUE="76"> 76</option>
        <option VALUE="89"> 89</option>   
        <option VALUE="102"> 102</option>
        
      </select>
									
                                </div>
					
					
					<div class="col-md-4">
						<label for="d_cano" class="mt-1 mr-1">d:</label>
									<select name="m" title="" tabindex="4" id="m" style="width: 80%; float: right"> 
							        
									<option VALUE="12 x 1,75"> 12 x 1,75</option>
									
									
      </select>
									
                                </div>
				
					
                                <div class="col-md-4">
									<input autocomplete="false" type="text" name="lu" id="lu" size="30" tabindex="5" required
                                        placeholder="Largo Útil">
									
                                </div>
					
						
                                
                                <div class="col-md-12">
                                   <textarea class="form-control text-area"  id="observaciones" name="observaciones" cols="40" tabindex="6" rows="2" placeholder="Observaciones"></textarea>
									
									<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                </div>
                            </div>
					   
					   
					   <div class="row">
								
						   <div class="col-md-12 mt-3">
						   
						   <div class="team-title centered">
                		
                		<div class="title-text"><p>Datos del interesado:</p></div>
            		</div>
						   
						   </div>
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="nombre" id="nombre" size="30" tabindex="7" pattern=".{2,100}" required value="<?php if(isset($_POST['nombre']) && $_POST['nombre']!=''){echo $_POST['nombre'];} ?>" 
                                        placeholder="Nombre y Apellido (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="email" name="email" id="email" size="30" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" tabindex="8" required value="<?php if(isset($_POST['email']) && $_POST['email']!=''){echo $_POST['email'];} ?>" placeholder="E-Mail (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="telefono" id="telefono" size="30" tabindex="9" pattern=".{2,100}" required value="<?php if(isset($_POST['telefono']) && $_POST['telefono']!=''){echo $_POST['telefono'];} ?>" placeholder="Telefono - Whatsapp (requerido)">
                                </div>
						   
						   <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="empresa" id="empresa" size="30" tabindex="10" pattern=".{2,100}" required value="<?php if(isset($_POST['empresa']) && $_POST['empresa']!=''){echo $_POST['empresa'];} ?>" placeholder="Empresa">
                                </div>
                                
                                
                            </div>
					   
					   
                          <button class="btn-one style-one radi" type="submit" id="submit_btn"  tabindex="1" >Enviar Consulta</button>	   
					   
					   
    
  </form>
                </div>
                
            </div>
			</div>
			</div>
			
        </div>
    </section>
    <!-- about section end -->
	   
	
	
	
<!-- about section -->
    <section class="sec-pad">
        <div class="container">
            <div class="row">
				<div class="col-md-12 text-center">
					<div class="team-title centered">
                		<div class="section-title"><h2>Serie Semi Liviana / Pesada</h2></div>
                		<div class="title-text"><p>Rodillos Tractor P. Simple</p></div>
            		</div>
					<img src="images/products/form_7.jpg" class="img-responsive my-auto" />
				<p class="mb-2">	D: ∅ de caño | e: Espesor de caño |  d: ∅ de eje | LU: Largo Útil | LR: Largo Rodadura</p>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<div class="row">
				
	
	<div class="col-md-10 col-md-offset-1">
		<div class="alert-medida"> Medidas expresadas en milimetros.</div>
		
		 

                   <form id="form10" name="form10" method="post" action="formularios/form_10.php">
					   
				<div class="row">
								
								<input type="hidden" name="recaptcha" id="recaptcha">
                                <input type="hidden" name="action" id="action" value="process">
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="cantidad" id="cantidad" size="30" tabindex="1" required
                                        placeholder="Cantidad (requerido)">
                                </div>
                                <div class="col-md-6">
									 
                                    <select name="material" id="material" tabindex="2" required >
									<option selected="true" disabled="disabled">Material</option>	
										 <option VALUE="Acero"> ACERO</option>
        <option VALUE="Acero_inoxidable"> ACERO INOXIDABLE</option>
        <option VALUE="Plastico"> PLASTICO</option> 
										</select>
                                </div>
					
                                <div class="col-md-3">
									<label for="d_cano" class="mt-1 mr-1">D:</label>
									<select name="d_cano" title="" tabindex="3" id="d_cano" style="width: 80%; float: right"> 
      
        <option value="50"> 50</option>   
        <option value="57"> 57</option>
        <option value="60"> 60</option>
        <option value="63"> 63</option>      
        <option value="76"> 76</option>      
        <option value="89"> 89</option>      
        <option value="102"> 102</option>      
     
										
      </select>
					            </div>
					
					<div class="col-md-9">
									<label for="dientes" class="mt-1 mr-1">Cantidad Dientes Z y Paso:</label>
									<select name="dientes" title="" tabindex="3" id="dientes" style="width: 50%; float: right"> 
      
        <option value="Z14 - P 1/2"> Z14 - P 1/2"</option>
        <option value="Z15 - P 5/8"> Z15 - P 5/8"</option>
        <option value="Z17 - P 3/4"> Z14 - P 3/4"</option>
      
      </select>
					            </div>
					
					
					<div class="col-md-6">
									<input autocomplete="false" type="text" name="lr" id="lr" size="30" tabindex="5" required
                                        placeholder="Largo Rodadura">
									
                                </div>
					
					<div class="col-md-6">
									<input autocomplete="false" type="text" name="lu" id="lu" size="30" tabindex="5" required
                                        placeholder="Largo Útil">
									
                                </div>
                                
                                <div class="col-md-12">
                                   <textarea class="form-control text-area"  id="observaciones" name="observaciones" cols="40" tabindex="6" rows="2" placeholder="Observaciones"></textarea>
									
									<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                </div>
                            </div>
					   
					   
					   <div class="row">
								
						   <div class="col-md-12 mt-3">
						   
						   <div class="team-title centered">
                		
                		<div class="title-text"><p>Datos del interesado:</p></div>
            		</div>
						   
						   </div>
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="nombre" id="nombre" size="30" tabindex="7" pattern=".{2,100}" required value="<?php if(isset($_POST['nombre']) && $_POST['nombre']!=''){echo $_POST['nombre'];} ?>" 
                                        placeholder="Nombre y Apellido (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="email" name="email" id="email" size="30" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" tabindex="8" required value="<?php if(isset($_POST['email']) && $_POST['email']!=''){echo $_POST['email'];} ?>" placeholder="E-Mail (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="telefono" id="telefono" size="30" tabindex="9" pattern=".{2,100}" required value="<?php if(isset($_POST['telefono']) && $_POST['telefono']!=''){echo $_POST['telefono'];} ?>" placeholder="Telefono - Whatsapp (requerido)">
                                </div>
						   
						   <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="empresa" id="empresa" size="30" tabindex="10" pattern=".{2,100}" required value="<?php if(isset($_POST['empresa']) && $_POST['empresa']!=''){echo $_POST['empresa'];} ?>" placeholder="Empresa">
                                </div>
                                
                                
                            </div>
					   
					   
                          <button class="btn-one style-one radi" type="submit" id="submit_btn"  tabindex="1" >Enviar Consulta</button>	   
					   
					   
    
  </form>
                </div>
                
            </div>
			</div>
			</div>
			
        </div>
    </section>
    <!-- about section end -->

	
	
							
    <!-- about section -->
    <section class="sec-pad bg-gray">
        <div class="container">
            <div class="row">
				<div class="col-md-12 text-center">
					<div class="team-title centered">
                		<div class="section-title"><h2>Serie Semi Liviana / Pesada</h2></div>
                		<div class="title-text"><p>Rodillos Tractor P. Doble</p></div>
            		</div>
					<img src="images/products/form_9.jpg" class="img-responsive my-auto border-radius mb-2" />
				<p class="mb-2">	D: ∅ de caño | e: Espesor de caño |  d: ∅ de eje | LU: Largo Útil | LR: Largo Rodadura | M: Rosca Métrica</p>
				</div>	
			</div>
			
			<div class="row">
				<div class="col-md-8 col-md-offset-2">
				<div class="row">
				
	
	<div class="col-md-10 col-md-offset-1">
		<div class="alert-medida"> Medidas expresadas en milimetros.</div>
		
		 

                   <form id="form9" name="form9" method="post" action="formularios/form_9.php">
					   
				<div class="row">
								
								<input type="hidden" name="recaptcha" id="recaptcha">
                                <input type="hidden" name="action" id="action" value="process">
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="cantidad" id="cantidad" size="30" tabindex="1" required
                                        placeholder="Cantidad (requerido)">
                                </div>
                                <div class="col-md-6">
									 
                                    <select name="material" id="material" tabindex="2" required >
									<option selected="true" disabled="disabled">Material</option>	
										 <option VALUE="Acero"> ACERO </option>
        <option VALUE="Acero_inoxidable"> ACERO INOXIDABLE</option>
        <option VALUE="Plastico"> PLASTICO</option> 
										</select>
                                </div>
                                <div class="col-md-3">
									<label for="d_cano" class="mt-1 mr-1">D:</label>
									<select name="d_cano" title="" tabindex="3" id="d_cano" style="width: 80%; float: right"> 
							
        <option value="50"> 50</option>   
        <option value="57"> 57</option>
        <option value="60"> 60</option>
        <option value="63"> 63</option>      
        <option value="76"> 76</option>      
        <option value="89"> 89</option>      
        <option value="102"> 102</option>      
      
      </select>
									
                                </div>
					
					
					<div class="col-md-9">
						<label for="dientes" class="mt-1 mr-1">Cantidad Dientes Z y Paso:</label>
									<select name="dientes" title="" tabindex="4" id="dientes" style="width: 50%; float: right"> 
									
        <option value="Z14 - P 1/2"> Z14 - P 1/2"</option>   
        <option value="Z15 - P 5/8"> Z15 - P 5/8"</option>
        <option value="Z17 - P 3/4"> Z14 - P 3/4"</option>
      								
      </select>
									
                                </div>
				
					
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="lr" id="lr" size="30" tabindex="5" required
                                        placeholder="Largo Rodadura">
									
                                </div>
					
						  <div class="col-md-6">
									<input autocomplete="false" type="text" name="lu" id="lu" size="30" tabindex="5" required
                                        placeholder="Largo Útil">
									
                                </div>
					
						
                                
                                <div class="col-md-12">
                                   <textarea class="form-control text-area"  id="observaciones" name="observaciones" cols="40" tabindex="6" rows="2" placeholder="Observaciones"></textarea>
									
									<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                </div>
                            </div>
					   
					   
					   <div class="row">
								
						   <div class="col-md-12 mt-3">
						   
						   <div class="team-title centered">
                		
                		<div class="title-text"><p>Datos del interesado:</p></div>
            		</div>
						   
						   </div>
								
								
                                <div class="col-md-6">
									<input autocomplete="false" type="text" name="nombre" id="nombre" size="30" tabindex="7" pattern=".{2,100}" required value="<?php if(isset($_POST['nombre']) && $_POST['nombre']!=''){echo $_POST['nombre'];} ?>" 
                                        placeholder="Nombre y Apellido (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="email" name="email" id="email" size="30" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" tabindex="8" required value="<?php if(isset($_POST['email']) && $_POST['email']!=''){echo $_POST['email'];} ?>" placeholder="E-Mail (requerido)">
                                </div>
                                <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="telefono" id="telefono" size="30" tabindex="9" pattern=".{2,100}" required value="<?php if(isset($_POST['telefono']) && $_POST['telefono']!=''){echo $_POST['telefono'];} ?>" placeholder="Telefono - Whatsapp (requerido)">
                                </div>
						   
						   <div class="col-md-6">
                                    <input autocomplete="false" type="text" name="empresa" id="empresa" size="30" tabindex="10" pattern=".{2,100}" required value="<?php if(isset($_POST['empresa']) && $_POST['empresa']!=''){echo $_POST['empresa'];} ?>" placeholder="Empresa">
                                </div>
                                
                                
                            </div>
					   
					   
                          <button class="btn-one style-one radi" type="submit" id="submit_btn"  tabindex="1" >Enviar Consulta</button>	   
					   
					   
    
  </form>
                </div>
                
            </div>
			</div>
			</div>
			
        </div>
    </section>
    <!-- about section end -->
	   
	
	
	
	
    <?php include("footer.php"); ?>
    
    
<!--End pagewrapper-->


<!--Scroll to top-->
<div class="scroll-to-top scroll-to-target" data-target=".main-header"><span class="icon fa fa-angle-up"></span></div>


<!--jquery js -->


<script type="text/javascript" src="js/jquery-2.1.4.js"></script>
<script src="js/bootstrap.min.js"></script>
<script src="js/owl.carousel.min.js"></script>
<script src="js/wow.js"></script>
<script src="js/validation.js"></script>
<script src="js/jquery-ui.js"></script>
<script src="js/bxslider.js"></script>
<script type="text/javascript" src="js/SmoothScroll.js"></script>

<script src="js/script.js"></script>

<!-- End of .page_wrapper -->
</body>
</html>








