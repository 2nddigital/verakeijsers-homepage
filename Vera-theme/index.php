<?php get_header(); ?>


 <section class="home" id="home">
        <div class="banner">
            <img src="<?php get_header_image(); ?>" class="bannerimg"/>
            <span class="bannerinfo">
                <h1 class="titel"><?php bloginfo('name'); ?></h1>
                 <?php bloginfo('description'); ?></span> 
        </div>
        <div class="info">
     <div class="imagecarts">
			<ul class="img-list">
  <li class="cart"><div>
    <a href="http://nataliemac.com">
      <img src="<?php bloginfo('template_directory') ?>/images/carts/1.jpg" />
      <span class="text-content titel-small"><span>Place Name</span></span>
    </a></div>
  </li><!--
                 --><li class="cart"><div >
    <a href="http://nataliemac.com">
      <img src="<?php bloginfo('template_directory') ?>/images/carts/1.jpg"  />
        <span class="text-content titel-small"><span>Place Name</span></span>
                </a></div>
  </li><!--
                --><li class="cart"><div>
    <a href="http://nataliemac.com">
      <img src="<?php bloginfo('template_directory') ?>/images/carts/1.jpg" />
      <span class="text-content titel-small"><span>Place Name</span></span>
                </a></div>
  </li><!--
              --><li class="cart"><div>
    <a href="http://nataliemac.com">
      <img src="<?php bloginfo('template_directory') ?>/images/carts/1.jpg"  />
      <span class="text-content titel-small"><span>Place Name</span></span>
                </a>
                </div>
  </li>
  
</ul>		
			</div>
        
         </div>   
    </section>
</div>
<?php wp_list_pages(); ?>
<?php get_footer(); ?>