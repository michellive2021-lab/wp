<?php
/**
 * قالب الأرشيف والفهرس
 * 
 * @package Smart_Lock_Theme
 */

get_header();
?>

<main id="main-content">
    <div style="max-width: 1200px; margin: 3rem auto; padding: 0 2rem;">
        
        <?php
        if (is_archive()) :
            echo '<h1 class="section-title" style="margin-bottom: 1rem;">';
            the_archive_title();
            echo '</h1>';
            echo '<p class="section-subtitle">' . get_the_archive_description() . '</p>';
        endif;
        ?>
        
        <div style="display: grid; grid-template-columns: repeat(auto-fill, minmax(300px, 1fr)); gap: 2rem; margin-bottom: 3rem;">
            
            <?php
            if (have_posts()) :
                while (have_posts()) : the_post();
                    ?>
                    
                    <article class="post-card" style="background: white; border-radius: 10px; overflow: hidden; box-shadow: 0 2px 8px rgba(0,0,0,0.1); transition: all 0.3s ease; cursor: pointer;">
                        
                        <?php
                        if (has_post_thumbnail()) :
                            echo '<div style="height: 200px; overflow: hidden;">';
                            the_post_thumbnail('large', array('style' => 'width: 100%; height: 100%; object-fit: cover;'));
                            echo '</div>';
                        endif;
                        ?>
                        
                        <div style="padding: 1.5rem;">
                            <h2 style="margin-bottom: 0.5rem; color: var(--primary-color);">
                                <a href="<?php the_permalink(); ?>" style="text-decoration: none; color: inherit;">
                                    <?php the_title(); ?>
                                </a>
                            </h2>
                            
                            <div style="color: var(--text-muted); font-size: 0.9rem; margin-bottom: 1rem;">
                                <?php the_date('d/m/Y'); ?>
                            </div>
                            
                            <div style="color: #666; line-height: 1.6; margin-bottom: 1rem;">
                                <?php the_excerpt(); ?>
                            </div>
                            
                            <a href="<?php the_permalink(); ?>" class="btn-primary" style="display: inline-block; padding: 0.75rem 1.5rem; background-color: var(--primary-color); text-decoration: none;">
                                اقرأ المزيد
                            </a>
                        </div>
                        
                    </article>
                    
                    <?php
                endwhile;
            else :
                echo '<p style="text-align: center; color: var(--text-muted); grid-column: 1 / -1;">لا توجد مشاركات</p>';
            endif;
            ?>
            
        </div>
        
        <!-- الترقيم -->
        <div style="display: flex; justify-content: center; gap: 0.5rem; margin-top: 2rem;">
            <?php
            echo paginate_links(array(
                'type'      => 'list',
                'before_page_number' => '<span style="display: inline-block; padding: 0.5rem 0.75rem; border: 1px solid var(--border-color); border-radius: 5px;">',
                'after_page_number'  => '</span>',
            ));
            ?>
        </div>
        
    </div>
</main>

<?php
get_footer();
?>