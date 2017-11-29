			<div class="col-sm-3 col-sm-offset-1 blog-sidebar well">
            <!--search form-->
              <?php get_search_form();?>
              <div class="advert1">
                <h3>Advertise here<br>+254716 206 965</h3>
              </div>
          	<!--widgets-->
          	<?php if(is_active_sidebar('sidebar')):?><!--sidebar is the widget id set in functions.php-->
            	<?php dynamic_sidebar('sidebar');?>  
          	<?php endif;?>
            <div>
              <?php if(!is_user_logged_in()):?>
                <h3>Login</h3>
                <?php
                  $args = array(
                    'echo'           => true,
                    'remember'       => true,
                    'redirect'       => ( is_ssl() ? 'https://' : 'http://' ) . $_SERVER['HTTP_HOST'] . $_SERVER['REQUEST_URI'],
                    'form_id'        => 'loginform',
                    'id_username'    => 'user_login',
                    'id_password'    => 'user_pass',
                    'id_remember'    => 'rememberme',
                    'id_submit'      => 'wp-submit',
                    'label_username' => __( 'Username/Email Address' ),
                    'label_password' => __( 'Password' ),
                    'label_remember' => __( 'Remember Me' ),
                    'label_log_in'   => __( 'Log In' ),
                    'value_username' => '',
                    'value_remember' => false
                  );
                ?>
                 <?php wp_login_form( $args ); ?>
                 <?php wp_register('Resister and write with us ', ''); ?>
              <?php endif; ?>
            </div>
              
        		</div><!-- /.blog-sidebar -->

      		</div><!-- /.row -->

    	</div><!-- /.container -->

			<div class="row text-center">
				<?php
	           	    $year=date("Y");
	           		    echo bloginfo('name')." | Copyright&copy ". $year." | All Rights Reserved <br> A product of Biffon Momanyi";
	           	    ?>
			</div>
            <?php wp_footer();?>
        </div>	
        <!--end of container wrapper class-->
        <script type="text/javascript"src="<?php bloginfo('template_url')?>\assets\vendor\jquery\dist\jquery.min.js"></script>
      	<script type="text/javascript"src="<?php bloginfo('template_url');?>\assets\vendor\bootstrap\dist\js\bootstrap.min.js"></script>
    </body>
</html>