
<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    
<!-- Added by HTTrack --><meta http-equiv="content-type" content="text/html;charset=UTF-8" /><!-- /Added by HTTrack -->
<head>
	<!-- Google Tag Manager -->
	<script>(function(w,d,s,l,i){w[l]=w[l]||[];w[l].push({'gtm.start':
			new Date().getTime(),event:'gtm.js'});var f=d.getElementsByTagName(s)[0],
			j=d.createElement(s),dl=l!='dataLayer'?'&l='+l:'';j.async=true;j.src=
			'https://www.googletagmanager.com/gtm.js?id='+i+dl;f.parentNode.insertBefore(j,f);
			})(window,document,'script','dataLayer','GTM-5HKRD2L');</script>
			<!-- End Google Tag Manager -->
		
	<meta charset="utf-8">
	<meta http-equiv="x-ua-compatible" content="ie=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>France Isolation un euro - Isolation 1€</title>
	<!-- CSS -->
	<!-- font famil CSS
		============================================ -->
	<link href="https://fonts.googleapis.com/css?family=Raleway:100,100i,200,200i,300,300i,400,500,600,600i,700,800,900" rel="stylesheet">
	<link rel="stylesheet" href="{{asset('assets/css/all.css')}}">
	<!-- Bootstrap CSS
		============================================ -->
	<link rel="stylesheet" href="{{asset('assets/css/bootstrap.min.css')}}">
	<!-- Icon Font CSS
		============================================ -->
	<link rel="stylesheet" href="{{asset('assets/css/font-awesome.min.css')}}">
	<!-- Style CSS
		============================================ -->
	<link rel="stylesheet" href="{{asset('assets/css/style.css')}}">
	<link rel="stylesheet" href="{{asset('assets/css/responsive.css')}}">
	<!-- Modernizer JS
		============================================ -->
	<script src="{{asset('assets/js/vendor/modernizr-2.8.3.min.js')}}"></script>
	<style>
		.display_none{display: none;}
		@media only screen and (max-width: 767px) and (min-width: 480px){		
			.form-group {
				margin-bottom: 27px;
				height: 60px;
			}
		}
	</style>
</head>
    <body>
		<!-- Google Tag Manager (noscript) -->
		<noscript><iframe src="https://www.googletagmanager.com/ns.html?id=GTM-5HKRD2L"
			height="0" width="0" style="display:none;visibility:hidden"></iframe></noscript>
			<!-- End Google Tag Manager (noscript) --> 
        <!-- header Area
        ============================================ -->
        <section id="headerSection">
            <div class="container">
				<div class="row">
					<div class="col-md-6">
						<div class="box" style="margin: 0;">
							<div class="boxForm">							
								<div class="box" style="background: transparent;">
									<div class="row">
										<div class="divStep">
											<div class="col-md-12">
												<div id="carousel" class="carousel slide row" data-interval="">
													<div class="carousel-inner" role="listbox">
														<div class='item active'>
															<div class="col-md-12">
																<div class="section" style="margin-top: 15px;">
																	<div class="titre">Dans quel département se situe votre logement ?</div>
																	<select class="form-control chosen-select" id="departement" name="departement">
																		<option value="">Choisir votre département</option>
																		@forelse ($locations as $item)
                                                                            <option value="{{ $item->value }}">{{ $item->name }}</option>
                                                                        @empty
                                                                            
                                                                        @endforelse
																	</select>
																</div>

																<div class="section nextSection">
																	<div class="titre">Vous êtes</div>
																	<div class="row rowGroup group-etes">
																		<div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
																			<div class="radiobtn">
																				<input type="radio" id="etes_1" name="etes" value="Propriétaire" />
																				<label for="etes_1">Propriétaire</label>
																			</div>
																		</div>
																		<div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
																		<div class="radiobtn">
																				<input type="radio" id="etes_2" name="etes" value="Locataires" />
																				<label for="etes_2">Locataire</label>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="section nextSection">
																	<div class="titre">Quel type de surface souhaitez-vous isoler ?</div>
																	<div class="row rowGroup group-surface">
																		<div class="col col-xs-6 col-sm-4 col-md-4 col-lg-4">
																			<div class="radiobtn">
																				<input type="checkbox" id="surface_1" name="drone" value="Combles" />
																				<label for="surface_1">Combles</label>
																			</div>
																		</div>
																		<div class="col col-xs-6 col-sm-4 col-md-4 col-lg-4">
																		<div class="radiobtn">
																			<input type="checkbox" id="surface_2" name="drone" value="Caves" />
																			<label for="surface_2">Caves</label>
																		</div>
																		</div>
																		<div class="col col-xs-6 col-sm-4 col-md-4 col-lg-4">
																			<div class="radiobtn">
																				<input type="checkbox" id="surface_3" name="drone" value="Sous-Sol" />
																				<label for="surface_3">Sous-Sol</label>
																			</div>
																		</div>
																		<div class="col col-xs-6 col-sm-4 col-md-4 col-lg-4">
																			<div class="radiobtn">
																				<input type="checkbox" id="surface_4" name="drone" value="Vide Sanitaire" />
																				<label for="surface_4">Vide Sanitaire</label>
																			</div>
																		</div>
																		<div class="col col-xs-6 col-sm-4 col-md-4 col-lg-4">
																			<div class="radiobtn">
																				<input type="checkbox" id="surface_5" name="drone" value="Garage" />
																				<label for="surface_5">Garage</label>
																			</div>
																		</div>
																		<div class="col col-xs-6 col-sm-4 col-md-4 col-lg-4">
																			<div class="radiobtn">
																				<input type="checkbox" id="surface_6" name="drone" value="Murs Intérieurs" />
																				<label for="surface_6">Murs Int.</label>
																			</div>
																		</div>
																	</div>
																</div>

																<div class="section nextSection">
																	<div class="titre">Quelle est votre énergie de chauffage principale  ?</div>
																	<div class="row rowGroup group-energie">
																		<div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
																			<div class="radiobtn">
																				<input type="radio" id="energie_1" name="energie" value="Fioul" />
																				<label for="energie_1">Fioul</label>
																			</div>
																		</div>
																		<div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
																		<div class="radiobtn">
																				<input type="radio" id="energie_2" name="energie" value="Gaz" />
																				<label for="energie_2">Gaz</label>
																			</div>
																		</div>
																		<div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
																		<div class="radiobtn">
																				<input type="radio" id="energie_3" name="energie" value="Electrique" />
																				<label for="energie_3">Electrique</label>
																			</div>
																		</div>
																		<div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
																		<div class="radiobtn">
																				<input type="radio" id="energie_6" name="energie" value="Autre" />
																				<label for="energie_6">Autre</label>
																			</div>
																		</div>
																	</div>
																</div>																
														
																<div class="row"  style="text-align: center;padding-top: 20px;">
																	<button class="btn btn-success nextStep">Etape suivante »</button>
																</div>												
															</div>
														</div>
														<div class='item'>
															<div class="col-md-12">
																<div class="section" style="margin-top: 20px;">
																	<div class="titre">Quelle superficie souhaitez-vous isoler ?</div>
																	<div class="row rowGroup group-superficie">
																		<div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
																			<div class="radiobtn">
																				<input type="radio" id="superficie_1" name="superficie" value="Moins de 50m2" />
																				<label for="superficie_1">Moins de 50m<exp>2</exp></label>
																			</div>
																		</div>
																		<div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
																		<div class="radiobtn">
																				<input type="radio" id="superficie_2" name="superficie" value="50 à 100m2" />
																				<label for="superficie_2">50m<exp>2</exp> à 100m<exp>2</exp></label>
																			</div>
																		</div>
																		<div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
																		<div class="radiobtn">
																				<input type="radio" id="superficie_3" name="superficie" value="100 à 150m2" />
																				<label for="superficie_3">100m<exp>2</exp> à 150m<exp>2</exp></label>
																			</div>
																		</div>
																		<div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
																		<div class="radiobtn">
																				<input type="radio" id="superficie_4" name="superficie" value="Plus de 150m2" />
																				<label for="superficie_4">Plus de 150 m2</label>
																			</div>
																		</div>
																	</div>
																</div>
																<div class="section nextSection">
																	<div class="titre">Combien de personnes y a t-il dans votre foyer ?</div>
																	<div class="row rowGroup group-personnes">
																		<div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4 pers">
																			<div class="radiobtn">
																				<input type="radio" id="personnes_1" name="personnes" value="1" />
																				<label for="personnes_1">1</label>
																			</div>
																		</div>
																		<div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4 pers">
																			<div class="radiobtn">
																				<input type="radio" id="personnes_2" name="personnes" value="2" />
																				<label for="personnes_2">2</label>
																			</div>
																		</div>
																		<div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4 pers">
																			<div class="radiobtn">
																				<input type="radio" id="personnes_3" name="personnes" value="3" />
																				<label for="personnes_3">3</label>
																			</div>
																		</div>
																		<div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4 pers">
																			<div class="radiobtn">
																				<input type="radio" id="personnes_4" name="personnes" value="4" />
																				<label for="personnes_4">4</label>
																			</div>
																		</div>
																		<div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4 pers">
																			<div class="radiobtn">
																				<input type="radio" id="personnes_5" name="personnes" value="5" />
																				<label for="personnes_5">5</label>
																			</div>
																		</div>
																		<div class="col col-xs-4 col-sm-4 col-md-4 col-lg-4 pers">
																			<div class="radiobtn">
																				<input type="radio" id="personnes_6" name="personnes" value="Plus de 5" />
																				<label for="personnes_6">5 +</label>
																			</div>
																		</div>
																	</div>
																</div>
																
																<div class="section nextSection revenuApprox" style="display:none;">
																	<label for="revenus_mensuels" class="revenuLab">Quels est le revenu fiscal de référence du foyer ?</label>
											
																	<div class="group-revenue tworows">
																		<div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
																			<div class="radiobtn">
																				<input type="radio" id="revenu_1" name="revenus" value="Moins" />
																				<label for="revenu_1">Moins de <span class="bareme baremeFirst">18 960</span>€</label>
																			</div>
																		</div>
																		<div class="col col-xs-6 col-sm-6 col-md-6 col-lg-6">
																			<div class="radiobtn">
																				<input type="radio" id="revenu_2" name="revenus" value="Plus" />
																				<label for="revenu_2">Plus de <span class="bareme">18 960</span>€</label>
																			</div>
																		</div>
																	</div>
																	<br/><br/>
																</div>
																
																<div class="row" style="text-align: center;padding-top: 20px;">
																	<button class="btn btn-success nextStep2">Etape suivante »</button>
																</div>
																<div class="row" style="text-align: center;padding-top: 20px; font-weight: bold;font-size: 18px;">
																	<a class="prevStep1" href="javascript:void(0);">Retour</a>
																</div>
															</div>
														</div>
														<div class='item'>
															<div class="row connexion" style="padding-left: 20px;">
																<div style="margin-top:30px;margin-bottom:20px" class="col-sm-12  col-lg-10 col-lg-offset-1  etape_wrapper">
																	<span class="etape_check etape_check_1"><i data-fa="fas fa-spinner fa-spin" class="fas fa-spinner fa-spin faCheck faCheck1"></i> Connexion à la base de données</span>
																</div>                         
																<div  style="margin-bottom:20px" class="col-sm-12  col-lg-10 col-lg-offset-1 etape_wrapper ">
																	<span class="etape_check etape_check_3"><i data-fa="fas fa-notes-medical" class="fas fa-notes-medical faCheck faCheck3"></i> Vérification de vos informations</span>
																</div>
																<div style="margin-bottom:20px"  class="col-sm-12  col-lg-10 col-lg-offset-1 etape_wrapper ">
																	<span class=" etape_check etape_check_4"><i data-fa="far fa-money-bill-alt" class="far fa-money-bill-alt faCheck faCheck4"></i>  Mise à jour des Prestataires disponibles <span id="MAJ_tarif" style="display:none;margin-left: 6px">(<b>30/10/2019</b>)</span> </span>
																</div>
																<div style="margin-bottom:20px"  class="col-sm-12  col-lg-10 col-lg-offset-1  etape_wrapper">
																	<span class=" etape_check etape_check_5 "><i data-fa="fas fa-cloud-download-alt" class="fas fa-cloud-download-alt faCheck  faCheck5"></i>  Chargement du résultat votre éligibilité </span>
																</div>
																<div class="row" style="text-align: center;padding-top: 20px; font-weight: bold;font-size: 18px;">
																	<a class="prevStep2" href="javascript:void(0);">Retour</a>
																</div>
															</div>
														</div>
														<div class='item'>
															<div class='titleFinal' style="margin-top: 15px;">
																À qui devons-nous envoyer les résultats ?
															</div>
															
															<div class="col-md-12">
																<div class="form-group" style="height: 60px;">
																	<label for="exampleInputEmail1" class="titre">Votre Nom :</label>
																	<input type="text" class="form-control" id="nom" placeholder="Votre Nom">
																	<div class='erNom err'>Ce champ est obligatoire</div>
																</div>
															</div>
															<div class="col-md-12">
																<div class="form-group prenom">
																	<label for="exampleInputEmail1" class="titre">Votre Prénom : </label>
																	<input type="text" class="form-control" id="prenom" placeholder="Votre Prénom">
																	<div class='err'></div>
																</div>
															</div>
															<div class="col-md-12">
																<div class="form-group">
																	<label for="exampleInputEmail1" class="titre">Votre Numéro de téléphone : </label>
																	<input type="text" class="form-control" id="phone" placeholder="Votre Numéro de téléphone">
																	<div class='erTel err'>Ce champ est obligatoire</div>
																	<div class='ervalTel err'>Ce Numéro de téléphone n'est pas valide</div>
																</div>
															</div>
															<div class="col-md-12">
																<div class="form-group">
																<label for="exampleInputEmail1" class="titre">Votre Adresse mail :</label>
																<input type="text" class="form-control" id="email" placeholder="Votre Email">
																	<div class='erEmail err'>Ce champ est obligatoire</div>
																	<div class='ervalEmail err'>Cette adresse mail n'est pas valide</div>
																</div>
															</div>
															<div class="col-md-12">
																<div class="radiobtn" id="terms">
																	<input type="checkbox" id="term" name="terms"/>
																	<label for="term">J'ai lu et j'accepte les termes et conditions</label>
																</div>
															</div>
															<div class="row" style="text-align: center;">
																<button class="btn btn-success nextStep3 send"  style="">Obtenir mon eligibilité</button>
															</div>
															<div class="row" style="text-align: center;padding-top: 20px; font-weight: bold;font-size: 18px;">
																<a class="prevStep3" href="javascript:void(0);">Retour</a>
															</div>
														</div>
														<div class="item text-center display_none" id="eligble" style="margin-top: 15px;padding: 5px 15px;">
															<h1 style="color: #5abfad;font-size: 30px;">Vous êtes éligible</h1>
															<p style="color: #5abfad;">au programme d’isolation à 1€</p>
															<img src="{{ asset('img/house.png') }}" alt="Eligble" srcset="" style="margin:auto;margin-bottom: 25px;margin-top: 20px;" class="text-center">
															<p style="margin-bottom: 5px;font-size: 16px;">Subvention vous aide gratuitement</p>
															<p style="font-size: 16px;">à trouver un artisan RGE près de chez vous</p>
															<p style="margin-top:10px;font-weight:500;font-size: 14px;">En choisissant un artisan RGE vous êtes assurés de profiter de l’expérience et de l’expertise d’un professionnel du bâtiment spécialisé dans les économies d’énergie.</p>
															<a href="#" class="btn btn-primary" style="background-color: #0fb356;border:none;padding:10px 30px;font-size: 15px;margin-bottom: 30px;">Je prends Rendez-Vous</a>
															<img src="{{ asset('img/rainbow.png') }}" alt="Rainbow" style="display:block;margin:auto;" srcset="">
														</div>
														<div class="item text-center display_none" id="not_eligble" style="margin-top: 15px;padding: 5px 15px;">
															<h1 style="color: red;font-size: 30px;">Vous n’êtes pas éligible</h1>
															<p style="color: red;">au programme d’isolation à 1€</p>
															<img src="{{ asset('img/house_cancel.png') }}" alt="Eligble" srcset="" style="margin:auto;margin-bottom: 25px;margin-top: 20px;" class="text-center">
															<p style="margin-bottom: 5px;font-size: 16px;">Subvention vous aide gratuitement</p>
															<p style="font-size: 16px;">à trouver un artisan RGE près de chez vous</p>
															<p style="margin-top:10px;font-weight:500;font-size: 14px;">Pas d’inquiétude, vous pouvez bénéficier de tarifs préférentiels avec le Pacte énergie et profiter du crédit d’impôt à 30% sur votre facture.</p>
															<a href="#" class="btn btn-primary" style="background-color: #0fb356;border:none;padding:10px 30px;font-size: 15px;margin-bottom: 30px;">Je prends Rendez-Vous</a>
															<img src="{{ asset('img/rainbow.png') }}" alt="Rainbow" style="display:block;margin:auto;" srcset="">
														</div>
													</div>
												</div>											
											</div>
										</div>
									</div>							   
								</div>
							</div><!-- boxForm -->
						</div><!-- box-->
					</div><!-- box-->
				</div>
            </div>
		</section>
		<input type="hidden" id="location"/>
        <!-- JS -->
        <!-- jQuery JS
        ============================================ -->
        <script src="{{asset('assets/js/vendor/jquery-1.12.0.min.js')}}"></script>
        <!-- Bootstrap JS
        ============================================ -->
        <script src="{{asset('assets/js/bootstrap.min.js')}}"></script>
        <!-- Main JS
        ============================================ -->
        <script src="{{asset('assets/js/main.js')}}"></script>
        <script>
            window.addEventListener("message", function (event) {
                $("#location").val(event.data);
            });
        </script>

    </body>
</html>