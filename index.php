<?php
     get_header();
     pageBannar(array(
       'title' => 'Welcome to our blog',
       'subtitle' => 'Kep track what\'s going on'
     ));
?>
<div class="container container--narrow page-section">

    <div class="event-summary">
              <a class="event-summary__date t-center" href="#">
                <span class="event-summary__month">Mar</span>
                <span class="event-summary__day">25</span>  
              </a>
              <div class="event-summary__content">
                <h5 class="event-summary__title headline headline--tiny"><a href="#">Poetry in the 100</a></h5>
                <p>Bring poems you&rsquo;ve wrote to the 100 building this Tuesday for an open mic and snacks. <a href="#" class="nu gray">Learn more</a></p>
              </div>
    </div>
</div>
<?php
 get_footer();
?>
