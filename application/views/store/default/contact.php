<style>
	@import url('https://fonts.googleapis.com/css2?family=Marcellus&family=Nunito:ital,wght@0,200;0,300;0,400;0,500;0,600;0,700;0,800;0,900;0,1000;1,200;1,300;1,400;1,500;1,600;1,700;1,800;1,900;1,1000&family=Yeseva+One&display=swap');

	:root {
		--color-primary: #6C9BCF;
		--color-danger: #FF0060;
		--color-success: #1B9C85;
		--color-warning: #F7D060;
		--color-white: #fff;
		--color-info-dark: #7d8da1;
		--color-dark: #363949;
		--color-black: #000;
		--color-light: rgba(132, 139, 200, 0.18);
		--color-dark-variant: #677483;
		--color-pink: #F95F7D;
		--color-background: #f6f6f9;
		--card-border-radius: 2rem;
		--border-radius-1: 0.4rem;
		--border-radius-2: 1.2rem;
		--card-padding: 1.8rem;
		--padding-1: 1.2rem;
		--box-shadow: 0 2rem 3rem var(--color-light);
	}

	h2 {
		color: var(--color-pink);
		font-family: Yeseva One !important;
		font-size: 40px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
		letter-spacing: 1.6px;
	}

	h1 {
		color: var(--color-pink);
		font-family: Yeseva One !important;
		font-size: 45px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
		letter-spacing: 1.8px;
	}

	li {
		list-style: none;
		margin: 15px 0;
	}

	ul {
		padding-left: 0;
	}

	h3 {
		color: var(--color-dark);
		font-family: Yeseva One !important;
		font-size: 30px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
		margin: 0;
	}

	h4 {
		font-family: Yeseva One !important;
		font-size: 20px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
		letter-spacing: 1px;
		color: var(--color-pink);
	}

	h5 {
		color: var(--color-dark);
		font-family: Marcellus;
		font-size: 20px;
		font-style: normal;
		font-weight: 400;
		line-height: normal;
	}

	h6 {
		color: #000;
		font-family: Nunito;
		font-size: 15px;
		font-style: normal;
		font-weight: 600;
		line-height: normal;
		word-wrap: break-word;
		width: 250px;
	}

	p {
		font-family: Nunito;
		font-size: 14px;
		font-weight: 600;
		line-height: normal;
		display: block;
		margin: 0;
	}

	a {
		text-decoration: none;
	}

	.about-contact {
		padding: 50px 50px;
		display: flex;
		width: 100%;
		position: absolute;
		left: 50%;
		top:2%;
		transform: translate(-50%);
	}

	.about-contact h4 {
		color: var(--color-dark);
		margin: 20px 0;
	}

	.contact {
		margin: 150px 0;
		position: relative;
		display: grid;
		grid-template-columns: 70% 30%;
		width: 100%;
		height: 890px;
		border-radius: 20px;
	}

	.contact .left {
		background-color: #f9f8fd;
		width: 100%;
		height: 890px;
		justify-content: center;
		align-items: center;
		border-radius: 20px 0px 0px 20px;
	}

	.contact .right {
		background-color: #F95F7D;
		width: 100%;
		height: 890px;
		border-radius: 0px 20px 20px 0px;
	}

	.form-groupp {
		margin: 20px 0;
	}

	.form-groupp textarea{
		font-size: 20px;
	}

	.form-groupp input {
		/* border-bottom: 1px solid var(--color-dark); */
		outline: none;
		width: 100%;
		height: 80px;
		border-radius: 15px;
		box-shadow: 5px 5px 5px solid var(--color-dark);
		font-size: 20px;
	}

	
	.btn-contact{
		width:100%;
		padding: 10px;
		background-color: var(--color-dark);
		color:var(--color-pink);
		font-size: 20px;
		font-family: Yeseva One;
		display: block;
		transition: all 0.5s ease;
	}

	.btn-contact:hover{
		background-color: var(--color-pink);
		color:var(--color-white);
		transition: all 0.5s ease;
	}

	@media screen and (max-width:1200px) {
	.contact {
		margin: 50px 0;
		position: relative;
		display: grid;
		grid-template-columns: 1fr;
		width: 100%;
		height: 900px;
		border-radius: 20px;
	}
	.contact .left {
		background-color: #f9f8fd;
		width: 100%;
		height: 500px;
		justify-content: center;
		align-items: center;
		border-radius: 20px 0px 0px 20px;
	}

	.contact .right {
		display:none;
	}
	.about-contact{
		display: grid;
		grid-template-columns: 1fr;
		gap: 10px;
	}
	.contact-map iframe{
		display: none;
		
	}
}

@media screen and (max-width:768px) {
	.about-contact {
		padding:20px 20px;
	}
	.about-contact h2{
		font-size: 30px;
	}
	.contact {
		margin-top: 50px;
		height: 800px;
	}
}
</style>

<?php
$db = &get_instance();
$googlerecaptcha = $db->Product_model->getSettings('googlerecaptcha');
?>
<section class="contact-page">
	<div class="container">
		<div class="row contact">
			<div class="left"></div>
			<!-- <div class="right"></div> -->
			<div class="about-contact">
				<div class="col-12 col-md-12 col-lg-12 col-xl-7 contact-form">
					<h2><?= __('store.contact_info') ?></h2>
					<h4>Bạn có muốn liên lạc với chúng tôi ?</h4>
					<form class="" action="" method="post">
						<div class="form-roww mt-3 mb-3">
							<div class="form-groupp">
								<input id="name" value="<?php echo set_value('name'); ?>" name="name" type="text" placeholder="<?= __('store.your_name') ?>" class="form-control">
								<?php
								if (!empty(form_error('name'))) {
									echo '<span class="text-danger">' . form_error('name') . '</span>';
								}
								?>
							</div>
							<div class="form-groupp">
								<input id="email" value="<?php echo set_value('email'); ?>" name="email" type="text" placeholder="<?= __('store.your_email') ?>" class="form-control">
								<?php
								if (!empty(form_error('email'))) {
									echo '<span class="text-danger">' . form_error('email') . '</span>';
								}
								?>
							</div>
						</div>
						<div class="form-groupp">
							<input id="phone" value="<?php echo set_value('phone'); ?>" name="phone" type="text" placeholder="<?= __('store.your_phone') ?>" class="form-control">
							<?php
							if (!empty(form_error('phone'))) {
								echo '<span class="text-danger">' . form_error('phone') . '</span>';
							}
							?>
						</div>
						<div class="form-groupp">
							<textarea class="form-control" id="message" name="message" placeholder="<?= __('store.please_enter_your_message_here') ?>" rows="5"><?php echo set_value('message'); ?></textarea>
							<?php
							if (!empty(form_error('message'))) {
								echo '<span class="text-danger">' . form_error('message') . '</span>';
							}
							?>
						</div>
						<div class="checkbox">
							<label>
								<input type="checkbox" name="terms" value="1" class="mr-2 float-left" style="height: 25px; width: 25px;" checked />
								<a href="<?= $tnc_link ? $tnc_link : base_url('term-condition') ?>" target="_blank">
									<?= __('store.terms_n_conditions') ?>
								</a>
							</label>

							<?php
							if (!empty(form_error('terms'))) {
								echo '<br><span class="text-danger">' . __('store.please_check_terms') . '</span>';
							}
							?>
						</div>
						<?php if (isset($googlerecaptcha['store_contact']) && $googlerecaptcha['store_contact']) { ?>
							<div class="captch mb-3">
								<script src='https://www.google.com/recaptcha/api.js'></script>
								<div class="g-recaptcha" data-sitekey="<?= $googlerecaptcha['sitekey'] ?>"></div>
								<!-- <input type="hidden" name="captch_response" id="captch_response"> -->
							</div>
						<?php } ?>
						<div class="form-group">
							<input type="submit" class="btn cn-sbt-btn btn-contact" value="<?= __('store.submit') ?>">
						</div>
					</form>
				</div>
				<div class="col-12 col-md-12 col-lg-12 col-xl-5 contact-map">
					<?= !empty($storesettings['contact_us_map']) ? $storesettings['contact_us_map'] :
						'<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d55565170.29301636!2d-132.08532758867793!3d31.786060306224!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x54eab584e432360b%3A0x1c3bb99243deb742!2sUnited%20States!5e0!3m2!1sen!2sph!4v1592929054111!5m2!1sen!2sph";" width="100%" height="auto" allowfullscreen="" aria-hidden="false" tabindex="0"></iframe>'
					?>
				</div>
			</div>
		</div>

	</div>
	</div>
</section>