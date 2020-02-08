<!DOCTYPE html>
<html>
<HEAD>
	<TITLE>GraphApp</TITLE>
	<META charset="UTF-8" />
	 <link href="assets/css/bootstrap.min.css" rel="stylesheet" />
	<link href="assets/css/paper-bootstrap-wizard.css" rel="stylesheet" />

	<!-- Fonts and Icons -->
    <link href="http://netdna.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.css" rel="stylesheet">
	<link href='https://fonts.googleapis.com/css?family=Muli:400,300' rel='stylesheet' type='text/css'>
	<link href="assets/css/themify-icons.css" rel="stylesheet">

	<script src="assets/js/jquery-2.2.4.min.js" type="text/javascript"></script>
	<script src="assets/js/bootstrap.min.js" type="text/javascript"></script>
	<script src="assets/js/jquery.bootstrap.wizard.js" type="text/javascript"></script>

	<!--  Plugin for the Wizard -->
	<script src="assets/js/paper-bootstrap-wizard.js" type="text/javascript"></script>

	<!--  More information about jquery.validate here: http://jqueryvalidation.org/	 -->
	<script src="assets/js/jquery.validate.min.js" type="text/javascript"></script>

</HEAD>
<BODY style="background-color: #F3F2EE">
	<div class="container">
	        <div class="row"><br>
	        	
		        <div <?php if($_POST["nlignes"]<21) echo"class=\"col-sm-8 col-sm-offset-2\""; ?> > 

		            <!--      Wizard container        -->
		            <div class="wizard-container">
		                <div class="card wizard-card" data-color="blue" id="wizard">
		                   <div class="wizard-header text-center">
		                        	<center><h1>GraphApp</h1>	
	<h4>Matrice d'adjacence</h4>	
</center>	
		                    	</div>

		                   <FORM ACTION="mygraph.php" METHOD="POST" >
			
			
		
		                <!--        You can switch " data-color="azure" "  with one of the next bright colors: "blue", "green", "orange", "red"           -->

		                    

								<div class="wizard-navigation">
									<div class="progress-with-circle">
									     <div class="progress-bar" role="progressbar" aria-valuenow="1" aria-valuemin="1" aria-valuemax="2" style="width: 83.3333%;"></div>
									</div>
									<ul>
			                            <li>
											<a style="pointer-events: none;
  cursor: default;" aria-expanded="false" data-toggle="tab">
												<div class="icon-circle checked ">
													<i class="ti-layout-list-post"></i>
												</div>
												Dimension
											</a>
										</li>
			                            <li class="active">
											<a  href="" data-toggle="tab" aria-expanded="true">
												<div class="icon-circle ">
													<i class="ti-layout-grid3"></i>
												</div>
												Valeurs
											</a>
										</li>
			                            
			                        </ul>
								</div>
		                        <div class="tab-content">

		                        	<div class="row">
		                                    <div class="" style="overflow-x: auto; margin-right:5%; margin-left:5%; ">
<br>

	<H5 style="text-align:center;">Matrice <?php echo $_POST["nlignes"]." x ".$_POST["ncolonnes"] ?>  </H5>
<br>
<TABLE align="center" style="background-color: white; ">
		<?php 
			for( $i=0; $i<$_POST["nlignes"]; $i++ ) { ?>
				<TR>
					<td> <?php echo "Ligne"." ".($i+1).""; ?> 	</td>
					<?php for( $j=0; $j<$_POST["ncolonnes"]; $j++ ) { ?>
					<TD>  <input size="1" type="textbox" name="<?php echo "matrix[".$i."][".$j."]"; ?>" /> </TD>
					<?php   
					} ?>
				</TR>
		<?php   
			} ?>
	</TABLE>
		<INPUT type="hidden" value="<?php echo $_POST["nlignes"] ?>" NAME="nlignes" >
		<INPUT type="hidden" value="<?php echo $_POST["ncolonnes"] ?>" NAME="ncolonnes" >
									</div>
								</div>
		                        </div>
		                        <div class="wizard-footer">
		                        	<div class="pull-right">
		                        		<br><br>
		                                <input type='submit' class='btn btn-fill btn-info btn-wd'  value='Next' />
		                                
		                            </div>

		                          
		                            <div class="clearfix"></div>
		                        </div>
		                    </form>
		                </div>
		            </div> <!-- wizard container -->
		        </div>
	        </div> <!-- row -->
	        <div style=" padding-top: 4%; padding-bottom: 2%">
	        <div class="container text-center">
	             © 2018 GraphApp - Projet pour la création des graphes et l'application des algorithmes de recherche
	            <br> Développé par Felloul Mehdi et Gharbi Wiam
	        </div>
	    </div>
	    </div> <!--  big container -->
	

	

		
</form>
</BODY>
</html>