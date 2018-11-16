<?php get_header(); ?>
<?php

query_posts( 'order=ASC&posts_per_page=-1' );

if ( have_posts() ) : while ( have_posts() ) : the_post();
get_template_part( 'content', get_post_format($args) );
endwhile; endif; 

?>
<a href="#point">aller au point</a>


<?php get_footer(); ?>


<div>
    <p style="text-align: center;"><span style="font-size: 14pt;">who are we</span></p>
    &nbsp;
    <p style="text-align: center;"><span style="font-size: 24pt;">In a few words</span></p>
    &nbsp;
    <div class="row">
        <div class="col-4 offset-2">
            <div><span style="font-size: 14pt;">Mowali was born in 2018 by Orange</span></div>
            <div><span style="font-size: 14pt;">and MTN with the common goal</span></div>
            <div><span style="font-size: 14pt;">of democratizing mobile</span></div>
            <div><span style="font-size: 14pt;">payments an money transfers.</span></div>
            <div><span style="font-size: 14pt;">The joint venture dedicated to</span></div>
            <div><span style="font-size: 14pt;">development and interoperability,</span></div>
            <br>
            <br>
            <br>
            <br>
            <span style="font-size: 24pt;">our shareholders:</span>
            <br>
            <div><span style="font-size: 14pt;">lorem Lorem ipsum dolor sit amet,</span></div>
            <div><span style="font-size: 14pt;">consectetuer adipiscing elit, sed</span></div>
            <div><span style="font-size: 14pt;">diam nonummy nibh.</span></div>
            <br>
            <div class="row">
                <div class="col-4">
                    <img class="alignnone size-full wp-image-168" src="http://localhost/Wordpress_ITSS/wp-content/uploads/2018/11/MTN.png" alt="" width="98" height="93" />
                </div>
                <div class="col-4">
                    <img class="alignnone size-full wp-image-169" src="http://localhost/Wordpress_ITSS/wp-content/uploads/2018/11/ORANGE.png" alt="" width="92" height="91" />
                </div>
            </div>
            <div><span style="font-size: 14pt;">No matter where we develop</span></div>
            <div><span style="font-size: 14pt;">our activities, Orange’s philosophy</span></div>
            <div><span style="font-size: 14pt;">remains the same: to make</span></div>
            <div><span style="font-size: 14pt;">technology accessible</span></div>
            <div><span style="font-size: 14pt;">to everyone. We adapt to each</span></div>
            <div><span style="font-size: 14pt;">requirement to offer our customers</span></div>
            <div><span style="font-size: 14pt;">the best possible experience,</span></div>
            <div><span style="font-size: 14pt;">in each of the 28 countries</span></div>
            <div><span style="font-size: 14pt;">where we operate and in the 220</span></div>
            <div><span style="font-size: 14pt;">countries and territories where we</span></div>
            <div><span style="font-size: 14pt;">operate as Orange Business</span></div>
            <div><span style="font-size: 14pt;">Services.</span></div>
        </div>
        <div class="col-4">
            <div><span style="font-size: 14pt;">with support f rom the Bill</span></div>
            <div><span style="font-size: 14pt;">and Melinda Gates Foundation,</span></div>
            <div><span style="font-size: 14pt;">combines the expertise of the</span></div>
            <div><span style="font-size: 14pt;">two partners to offer a simple</span></div>
            <div><span style="font-size: 14pt;">and modern solution to payment</span></div>
            <div><span style="font-size: 14pt;">transfers, no matter the operator.</span></div>
            <br>
            <br>
            <br>
            <br>
            <span style="font-size: 24pt;">our partners:</span>
            <br>
            <div><span style="font-size: 14pt;">The GSMA and the Bill Gates’</span></div>
            <div><span style="font-size: 14pt;">fondation supports mowali’s solution.</span></div>
            <br>
            <div class="row">
                <div class="col-4">
                    <img class="alignnone size-full wp-image-166" src="http://localhost/Wordpress_ITSS/wp-content/uploads/2018/11/GSMA.png" alt="" width="94" height="91" />
                </div>
                <div class="col-4">
                    <img class="alignnone size-full wp-image-170" src="http://localhost/Wordpress_ITSS/wp-content/uploads/2018/11/BILL.png" alt="" width="91" height="92" />
                </div>
            </div>
            <div><span style="font-size: 14pt;">Lorem ipsum dolor sit amet,</span></div>
            <div><span style="font-size: 14pt;">consectetuer adipiscing elit, sed</span></div>
            <div><span style="font-size: 14pt;">diam nonummy nibh euismod</span></div>
            <div><span style="font-size: 14pt;">tincidunt ut laoreet dolore</span></div>
            <div><span style="font-size: 14pt;">magna aliquam erat volutpat. Ut</span></div>
            <div><span style="font-size: 14pt;">wisi enim ad minim veniam, quis</span></div>
            <div><span style="font-size: 14pt;">nostrud exerci tation ullamcorper</span></div>
            <div><span style="font-size: 14pt;">suscipit lobortis nisl ut aliquip ex</span></div>
            <div><span style="font-size: 14pt;">ea commodo consequat. Duis</span></div>
            <div><span style="font-size: 14pt;">autem vel eum iriure dolor in</span></div>
            <div><span style="font-size: 14pt;">hendrerit in vulputate velit esse</span></div>
        </div>
    </div>
</div>