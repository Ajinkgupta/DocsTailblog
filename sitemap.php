<?php require_once('config.php') ?>
<?php require_once( ROOT_PATH . '/includes/public_functions.php') ?>
<?php echo '<?xml version="1.0" encoding="UTF-8"?>' ?>
<?php $posts= getPublishedPosts(); ?>
<urlset xmlns="http://www.sitemaps.org/schemas/sitemap/0.9">
<?php foreach ($posts as $post): ?>  
  <url>
    <loc>https://java.quesnit.com/q/<?php echo $post['slug']; ?>"</loc>
    <lastmod><?php echo date("F j, Y ", strtotime($post["created_at"])); ?></lastmod>
  </url>
<?php endforeach ?>
</urlset>