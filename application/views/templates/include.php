<!DOCTYPE html>
<html lang="en">

	<?php $this->load->view('templates/head_tag.php'); ?>

	<body>
		<div class="layout-wrapper layout-content-navbar">
			<div class="layout-container">

				<?php

					$skipHeaderView = array('view_signIn','view_forgotPassword');

					if ( ! in_array( $main_view, $skipHeaderView) ) {
		            	$this->load->view('templates/header_menu.php');
					}

					$this->load->view($main_view.'.php');

					if ( ! in_array( $main_view, $skipHeaderView) ) { 
				?>
		            	</div>
				<?php } ?>

			</div>
		</div>

		<!-- $data['main_view'] = 'view_signIn'; -->
		<?php $this->load->view('templates/script_tag.php',$main_view); ?>
		<?php $this->load->view('templates/footer.php'); ?>
	</body>
</html>