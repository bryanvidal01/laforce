<?php
/*
Template Name: Homepage
*/

get_header();

$thumbsInsta = get_instagram_thumbs();
?>


<?php foreach ($thumbsInsta as $thumbsInstaItem): ?>
    <img src="<?= $thumbsInstaItem->media_url; ?>" width="50%" alt="">
<?php endforeach; ?>


<?php
get_footer();
