<div class="row">
    <div class="large-12 columns">
        <h2>Inicio de sesi&oacute;n</h2>
        <div class="section-container tabs" data-section>
            <section class="section">
                <div class="content" data-slug="panel1">
                    <?php if($login_failed) { ?>
                    <div data-alert class="alert-box alert radius">
                        Error al iniciar su sesi&oacute;n
                        <a href="#" class="close">&times;</a>
                    </div>
                    <?php } ?>
                    <form action="<?php echo site_url('login'); ?>" method="post">
                        <div class="row collapse">
                            <div class="large-2 columns">
                                <label class="inline">DNI</label>
                            </div>
                            <div class="large-2 columns">
                                <input type="text" size="15" id="txtEmail" name="username" >
                            </div>
							<div class="large-8 columns"></div>
                        </div>
						<div class="row collapse">
							<div class="large-12 columns">
								<button type="submit" class="radius button">Acceder</button>
							</div>
						</div>
                    </form>
                </div>
            </section>
        </div>
    </div>
</div>