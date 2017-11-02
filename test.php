		<!-- CSS Stylesheets -->
		<link rel="stylesheet" type="text/css" href="https://cdn6.aptoide.com/includes/themes/2014/css/reset.css?timestamp=20161205"><link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Open+Sans:600italic,400,800,700,600"><link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Roboto:400,400italic,500,500italic,700,700italic,900,900italic"><link rel="stylesheet" type="text/css" href="https://cdn6.aptoide.com/includes/themes/2014/css/aptoide.minimalect.css?timestamp=20161205"><link rel="stylesheet" type="text/css" href="https://cdn6.aptoide.com/includes/themes/2014/css/page_header.css?timestamp=20161205"><link rel="stylesheet" type="text/css" href="https://cdn6.aptoide.com/includes/themes/2014/css/style_main.css?timestamp=20161205"><link rel="stylesheet" type="text/css" href="https://cdn6.aptoide.com/includes/themes/2014/css/onboarding/onboarding.css?timestamp=20161205"><link rel="stylesheet" type="text/css" href="https://cdn6.aptoide.com/includes/themes/2014/css/fancyboxcss/jquery.fancybox-1.3.4.css?timestamp=20161205"><link rel="stylesheet" type="text/css" href="https://cdn6.aptoide.com/includes/themes/2014/css/page_footer.css?timestamp=20161205"><link rel="stylesheet" type="text/css" href="https://cdn6.aptoide.com/includes/themes/2014/css/style_review.css?timestamp=20161205">		
		<!-- Analytics -->


<section id="login_form" class="ob_popup_container nodisplay">
	<div id="login_form_bkg" class="ob_popup_container_bkg"></div>
	<div id="ob_container_user">
		<div id="ob_step1_user">
			<section class="ob_switch">
				<div class="btn ob_btn_switch whalf left" data-ob-switch data-ob-switch-id="user_join_sec">
					<p>
						<span class="ob_t20 ob_tw400">Novo utilizador?</span><br/>
						<span class="ob_t21 ob_tw700">REGISTAR AGORA!</span>
					</p>
				</div>
				<div class="btn ob_btn_switch whalf right selected" data-ob-switch data-ob-switch-id="user_login_sec">
					<p>
						<span class="ob_t20 ob_tw400">Está de regresso como utilizador?</span><br/>
						<span class="ob_t21 ob_tw700">REGISTAR-SE!</span>
					</p>
				</div>
			</section><br/>
		
			<section id="user_join_sec" data-ob-switch-box class="nodisplay">
				<form class="p40" data-onboarding data-onboarding-context="popup" data-onboarding-type="user" data-ajax-url-socialbtns="https://www.aptoide.com/phpajax/social_btns_init.php">
															<div class="ob_input01">
						<input id="email01" type="email" name="email" placeholder=" Insira o seu email" required>
						<div class="ob_input_msg ob_input_msg_bottom nodisplay" data-ob-input-msg></div>
					</div>
					<div class="ob_input01">
						<input id="password01" type="password" name="password" placeholder=" Palavra-passe" required><span class="btn ob_btn_password"></span>
						<div class="ob_input_msg ob_input_msg_bottom nodisplay" data-ob-input-msg></div>
					</div>
					<div class="ob_t03 ob_tw400">
						<p>
							<input id="staylogin" class="left" type="checkbox" name="remember" value="true">
							<label for="staylogin" class="ob_t03 ob_tw400 ob_tcgrey left" style="position: relative;vertical-align: middle;bottom: -2px;">Continuar logado</label>
							<a href="https://www.aptoide.com/account/password-recovery" class="ob_t03 ob_tw400 ob_tcgrey right">Esqueceu a sua palavra-passe?</a>
						</p>
					</div><br/>
					<div class="ob_input01 mt10" style="height:60px;overflow:hidden;"> 
						<div id="recaptcha_user" class="captcha left nodisplay"></div>
						<input type="button" class="btn ob_btn right "value="REGISTAR AGORA" data-onboarding-action="new_user">
					</div>
					<div class="ob_input_msg ob_input_msg_bottom nodisplay" data-ob-global-msg></div>
					<div class="clear"></div>
					<p class="ob_t03 ob_tw400 ob_tcgrey">É totalmente gratuito!</p>
					
										<div class="wfull">
					 	<div class="ob_line grey left"></div>
						<span class="ob_t03 ob_tcgrey">OU</span>
						 <div class="ob_line grey right"></div>
					</div>
					<div  class="mt20">
						<a class="btn ob_btn_social facebook small right login_form_facebook" href="#">Facebook</a>
						<a class="btn ob_btn_social google small left login_form_google" href="#">Google</a>
						<div class="clear"></div>
					</div>
														</form>
				
								<div id="user_roles">
					<div class="whalf right">
						<p class="w2third center">
							<span class="ob_t21 ob_tw700 ob_tcgrey">ANDROID DEV</span><br/>
							<a href="https://www.aptoide.com/page/developers" class="ob_t03 ob_tw400 ob_tcgrey">Registe-se aqui</a>
						</p>
					</div>
					
					<div class="whalf left" style="display: inline-block">
						<p class="w2third center">
							<span class="ob_t21 ob_tw700 ob_tcgrey">OEM</span><br/>
							<a href="https://www.aptoide.com/page/partners" class="ob_t03 ob_tw400 ob_tcgrey">Registe-se aqui</a>
						</p>
					</div>
					<div class="clear"></div>
				</div>
							</section>
			
			<section id="user_login_sec" data-ob-switch-box>
				<form data-onboarding data-onboarding-type="login_user" data-ajax-url-socialbtns="https://www.aptoide.com/phpajax/social_btns_init.php">
					<div class="ob_input01">
						<input id="email02" type="email" name="email" placeholder=" Insira o seu email" required>
						<div class="ob_input_msg ob_input_msg_bottom nodisplay" data-ob-input-msg></div>
					</div>
					<div class="ob_input01">
						<input id="password02" type="password" name="password" placeholder=" Palavra-passe" data-ob-noval required><span class="btn ob_btn_password"></span>
						<div class="ob_input_msg ob_input_msg_bottom nodisplay" data-ob-input-msg></div>
					</div>
					<div class="ob_t03 ob_tw400">
						<p>
							<input id="staylogin" class="left" type="checkbox" name="remember" value="true">
							<label for="staylogin" class="ob_t03 ob_tw400 ob_tcgrey left" style="position: relative;vertical-align: middle;bottom: -2px;">Continuar logado</label>
							<a href="https://www.aptoide.com/account/password-recovery" class="ob_t03 ob_tw400 ob_tcgrey right">Esqueceu a sua palavra-passe?</a>
						</p>
					</div><br/>
					<div class="ob_input01 mt10" style="height:80px;overflow:hidden;"> 
						<input type="button" name="confirm_login" class="btn ob_btn" value="ENTRAR" data-onboarding-action="login_user">
						<img class="nodisplay" style="margin-top:64px;" src="https://cdn6.aptoide.com/includes/themes/2014/images/load_more_h.gif" alt="Carregando..." id="ob_loading01">
						<div class="ob_t31 ob_tw700" data-ob-input-msg style="margin-top:64px;"></div>
					</div>
					
										<div class="wfull">
						<div class="ob_line grey left"></div>
						<span class="ob_t03 ob_tcgrey">OU</span>
						 <div class="ob_line grey right"></div>
					</div>
					<div  class="mt20">
						<a class="btn ob_btn_social facebook small right login_form_facebook" href="#">Facebook</a>
						<a class="btn ob_btn_social google small left login_form_google" href="#">Google</a>
						<div class="clear"></div>
					</div>
									</form>
			</section>
			
		</div>
		
		<div id="ob_step2_user" class="center nodisplay">
			<div style="padding:40px">
	<p class="ob_t05 ob_tw500 ob_tcgreydark">Está um passo mais próximo de ser um Aptoider!</p>
	<p class="ob_t08 ob_tw400 ob_tcgreylight">
		<span>Enviar-lhe-emos um email de confirmação para</span><br/>
		<span class="ob_email_confirm"></span>
	</p>
	
	<div>
		<div class="ob_loading02 posrel nodisplay">
			<div>
			    <div class="c1"></div>
			    <div class="c2"></div>
			    <div class="c3"></div>
			    <div class="c4"></div>
		    </div>
		</div>
		
		<div data-onboarding-action="new_user">
			<p class="ob_t08 ob_tw400 ob_tcgreylight ob_res480">Entretanto, por favor, prossiga para o último passo do registo.</p><br/>
				<span class="btn ob_btn2 left" data-onboarding-register >Prosseguir para o último passo</span>
				<span class="btn ob_btn3 right" data-onboarding-cancel>Ups... email errado...</span>
				<div class="clear"></div>
			<p class="mt40 ob_t09 ob_tcgreylight">Necessita &quot;contactar-nos&quot;?</a></p>
		</div>
	</div>
</div>		</div>
	</div>
</section>