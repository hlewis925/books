<?php get_header()?>
<div id="container">
	<div id="leftcon">
    	<?php while(have_posts()): the_post();?>
                	<h2 class="titlept"><?php the_title()?></h2>
            <p><?php the_content(__('Continue Reading'));?></p>
            <h4>
            	By: <a href="<?php echo get_author_link(false, $autordata->ID, $authordata->user-nicename);?>"><?php the_author()?></a>
            </h4>

        <?php endwhile;?>
	</div>
    <div id="rightcon">
    	<div id="sidebarcon"><?php dynamic_sidebar('leftcontent-sidebar')?></div>
        <div id="sidebarcon"><?php dynamic_sidebar('middlecontent-sidebar')?></div>
        <div id="sidebarcon"><?php dynamic_sidebar('rightcontent-sidebar')?></div>
    </div>
</div>
<?php get_footer()?>
