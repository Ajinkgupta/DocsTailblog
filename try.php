<?php include('config.php'); ?>
<?php include('includes/public_functions.php'); ?>
<?php include('includes/head_section.php'); ?>

	<title>LifeBlog | Home </title>
</head>
<body>
<div class="container">
<!-- Navbar -->
	<?php include( ROOT_PATH . '/includes/navbar.php'); ?>
<!-- // Navbar -->
<!-- content -->
<div class="content">
	 
	<hr>

    <?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>

<?php foreach ($topics as $topic): ?>
		<li class="mx-4 my-6 md:my-0"><a 
							href="<?php echo BASE_URL . 'filtered_posts.php?topic=' . $topic['id'] ?>" class="text-xl hover:text-cyan-500 duration-500">
							<?php echo $topic['name']; ?>
                           
						</a> </li>
					<?php endforeach ?>













	<?php foreach ($posts as $post): ?>
		 <a href="single_post.php?post-slug=<?php echo $post['slug']; ?>">
				 
					<h3><?php echo $post['title'] ?></h3>
				
			</a>
            <br>
		 
	<?php endforeach ?>
</div>
<!-- // content -->
</div>
<!-- // container -->

<!-- Footer -->
	<?php include( ROOT_PATH . '/includes/footer.php'); ?>
<!-- // Footer -->