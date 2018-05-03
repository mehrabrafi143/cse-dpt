<?php
 
 function pageBannar( $arr = null ){
     if($arr['title']){
       $arr['title'] = $arr['title'];
     }else{
       $arr['title'] = get_the_title();
     }
     if(get_field('page_bannar')){
       $arr['img'] = get_field('page_bannar')['sizes']['pageBannar'];
     }else{
       if($arr['img']){
         $arr['img'] = $arr['img'];
       }else{
        $arr['img'] = get_theme_file_uri('images/ocean.jpg');
       }
     }

     if($arr['subtitle']){
       $arr['subtitle'] = $arr['subtitle'];
     }else{
         $arr['subtitle'] = get_field('sub_title');
     }

     ?>
        <div class="page-banner">
        <div class="page-banner__bg-image" style="background-image: url(<?php echo $arr['img']; ?>);"></div>
        <div class="page-banner__content container container--narrow">
          <h1 class="page-banner__title"><?php echo $arr['title']; ?></h1>
          <div class="page-banner__intro">
            <p><?php echo $arr['subtitle']; ?></p>
          </div>
        </div>  
      </div>   
     <?php
 }


 



function departmentScripts(){
    wp_enqueue_script('main_js',get_theme_file_uri("js/scripts-bundled.js"),NULL,microtime(),true);
    wp_enqueue_style('main_css',get_stylesheet_uri(),NULL,microtime());
    wp_enqueue_style('google_fonts',get_theme_file_uri("'//fonts.googleapis.com/css?family=Roboto+Condensed:300,300i,400,400i,700,700i|Roboto:100,300,400,400i,700,700i"));
}

  add_action('wp_enqueue_scripts','departmentScripts');

 function dptSupports(){
   add_theme_support('title-tag');
   add_theme_support('thumbnail');
   add_image_size('slides',1350,525,true);
   add_image_size('pageBannar',1500,350,true);
 }

 add_action('after_setup_theme','dptSupports')

  ?>