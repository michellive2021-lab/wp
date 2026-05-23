<?php
/**
 * قالب صفحة 404
 * 
 * @package Smart_Lock_Theme
 */

get_header();
?>

<main id="main-content">
    <div style="min-height: 60vh; display: flex; align-items: center; justify-content: center;">
        <div style="text-align: center; padding: 2rem;">
            <div style="font-size: 6rem; margin-bottom: 1rem;">😕</div>
            <h1 style="font-size: 3rem; color: var(--primary-color); margin-bottom: 1rem;">صفحة غير موجودة</h1>
            <p style="font-size: 1.2rem; color: var(--text-muted); margin-bottom: 2rem;">للأسف، الصفحة التي تبحث عنها غير موجودة</p>
            <a href="<?php echo home_url('/'); ?>" class="btn-primary" style="display: inline-block; padding: 1rem 2rem;">
                العودة إلى الصفحة الرئيسية
            </a>
        </div>
    </div>
</main>

<?php
get_footer();
?>