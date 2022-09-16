<?php 
/********* EMAIL*/
require_once('mail/contacto.php');
/********* EMAIL*/
?>
<!DOCTYPE html>

<html>
<head>
	
	<?php include("analitycs.php"); ?>	
	
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<title>RollTec - Contacto</title>
   
<?php include("meta.php"); ?>
	
	<style>
		a.contacto{
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
            <div class="text text-left">RollTec - contacto</div>
        </div>
    </div>
    <!-- end page title -->


	
	
    
	
    <!-- about section -->
    <section class="service-style-tow pb-0">
        <div class="container">
            <div class="row">
				<div class="col-md-12 text-center">
					<div class="team-title centered">
                <div class="section-title"><h2>Contacto</h2></div>
                <div class="title-text" style="margin-top: -30px"><p> </p></div>
            </div>
                   	
                </div>
				
                
            </div>
			
			
        </div>
    </section>
    <!-- about section end -->
	
	
	<!-- contact-info -->
    <section class="contact-info contact-page centered pt-2">
        <div class="container">
            <div class="row">
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-map-marker"></i></div>
                        <div class="title">Ubicación</div>
                        <div class="text"><p>Tucumán Nº 1631 (B1878CGG)<br /> Quilmes - Buenos Aires</p></div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-phone"></i></div>
                        <div class="title">Telefonos:</div>
                        <div class="text"><p>
							<a class="btn btn-3 mt-1" href="https://api.whatsapp.com/send?phone=5491131051246&text=Hola,%20me%20gustaria%20asesorarme..." target="_blank"><i class="fa fa-whatsapp mr-1"> </i> (+54) 9 11 3105 1246</a></p>
						
						</div>
                    </div>
                </div>
                <div class="col-md-4 col-sm-6 col-xs-12 contact-colmun">
                    <div class="single-item hvr-float-shadow">
                        <div class="icon-box"><i class="fa fa-envelope"></i></div>
                        <div class="title">Email</div>
                        <div class="text"><p><a class="btn btn-3" href="mailto:ventas@rolltec.com.ar">ventas@rolltec.com.ar</a></p></div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact infe end -->
	
 <!-- call-back-section -->
    <section class="contact-section contact-page py-5">
        <div class="container">
            <div class="row">
                <div class="col-md-5 contact-colmun">
								
                          
                           
                            <?php if(!isset($_GET['estado'])){ ?>

                       <?php if($error!=''){ ?>
                        <div class="alert alert-danger col-12" role="alert">
                            <?php echo $error;?>
                        </div>
                        <?php }?>
                          
                         
					
                    <div class="contact-form-area">
                        <div class="title"><h2>Contáctenos</h2></div>
                        <div class="text"><p>Envienos su consulta.</p></div>
						
						<form id="contact-form" action="<?php echo $_SERVER['PHP_SELF'];?>#contacto" method="post" class="default-form">
                        
                            <div class="row">
								
								<input type="hidden" name="recaptcha" id="recaptcha">
                                <input type="hidden" name="action" id="action" value="process">
								
								
                                <div class="col-md-12">
									<input autocomplete="false" type="text" name="nombre" id="nombre" size="30" tabindex="1" pattern=".{2,100}" required value="<?php if(isset($_POST['nombre']) && $_POST['nombre']!=''){echo $_POST['nombre'];} ?>" 
                                        placeholder="Nombre y Apellido (requerido)">
                                </div>
                                <div class="col-md-12">
                                    <input autocomplete="false" type="email" name="email" id="email" size="30" pattern="[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*@[a-zA-Z0-9_]+([.][a-zA-Z0-9_]+)*[.][a-zA-Z]{1,5}" tabindex="2" required value="<?php if(isset($_POST['email']) && $_POST['email']!=''){echo $_POST['email'];} ?>" placeholder="E-Mail (requerido)">
                                </div>
                                <div class="col-md-12">
                                    <input autocomplete="false" type="text" name="telefono" id="telefono" size="30" tabindex="3" pattern=".{2,100}" required value="<?php if(isset($_POST['telefono']) && $_POST['telefono']!=''){echo $_POST['telefono'];} ?>" placeholder="Telefono - Whatsapp (requerido)">
                                </div>
                                
                                <div class="col-md-12">
                                   <textarea class="form-control text-area"  id="comentario" required name="comentario" cols="40" tabindex="4" rows="10" placeholder="Mensaje / Consulta (requerido)"><?php if(isset($_POST['comentario']) && $_POST['comentario']!=''){echo $_POST['comentario'];} ?></textarea>
									
									<input type="hidden" name="recaptcha_response" id="recaptchaResponse">
                                </div>
                            </div>
                          <button class="btn-one style-one radi" type="submit" id="submit_btn">Enviar Consulta</button>
                        </form>
                    </div>
					
					    <?php }else{ ?>

                    <?php if($_GET['estado']=='ok'){ ?>

                    <div class="col-lg-12 text-center">
                       <h5 class="font-primary"> Estimado <?php echo $_GET['nombre']?>: <br>
                        Su consulta se proceso exitosamente!!<br>
                        a la brevedad nos pondremos en contacto con usted.<br>
                        Muchas gracias.</h5>
                    </div>

                    <?php }else{?>

                    <div class="col-lg-12 text-center">
                        <h5 class="font-primary">Se produjo un error inesperado.<br>
                        Por favor intentelo de nuevo mas tarde.<br>
                        Muchas gracias.</h5>
                    </div>

                    <?php }?>


                    <?php }?>
                    <!-- EMAIL -->    
											
					
                </div>
                <div class="col-md-7 contact-colmun">
                    <div class="google-map-area">
                        <iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3279.0118186935047!2d-58.28076008424978!3d-34.730096471703874!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x95a32e75baf2698d%3A0x94514ff43c720ccb!2sTecno%20Roll%20S.A.!5e0!3m2!1ses!2sar!4v1660042537370!5m2!1ses!2sar" width="100%" height="500" style="border:0;" allowfullscreen="" loading="lazy" referrerpolicy="no-referrer-when-downgrade"></iframe>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- contact section end -->

	
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


<script src="js/script.js"></script>

<!-- End of .page_wrapper -->
</body>
</html>








