<?php
get_header();
pageBannar();
while(have_posts()){
    the_post();
    $parentPageId = wp_get_post_parent_id(get_the_id());
?>
  <div class="container container--narrow page-section">
    <?php 
      if($parentPageId){
    ?> <div class="metabox metabox--position-up metabox--with-home-link">
    <p><a class="metabox__blog-home-link" href="<?php echo get_the_permalink($parentPageId); ?>"><i class="fa fa-home" aria-hidden="true"></i> Back to <?php echo get_the_title($parentPageId); ?></a> <span class="metabox__main"><?php the_title(); ?></span></p>
    </div>
    <?php
      } 
    ?>
    
    <?php  
       $childPages = get_pages(array(
           'child_of' => get_the_id()
       ));
       
       if($childPages || $parentPageId){
           if($parentPageId){
               $cureentHeader = $parentPageId;
           }else{
               $cureentHeader = get_the_id();
           }
           ?>
               <div class="page-links">
                <h2 class="page-links__title"><a href="<?php echo get_the_permalink($cureentHeader); ?>"><?php echo get_the_title($cureentHeader); ?></a></h2>
                <ul class="min-list">
                    <?php wp_list_pages(array(
                        'title_li' => '',
                        'child_of' => $cureentHeader
                    ));
                    ?>
                </ul>
               </div>
           <?php
       }

    ?>


    <div class="generic-content">
      <?php  the_content(); ?>
    </div>

  </div>

<?php
}
get_footer();
?>