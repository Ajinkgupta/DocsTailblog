<?php  include('config.php'); ?>
<?php  include('includes/public_functions.php'); ?>  
<?php 
	if (isset($_GET['post-slug'])) {
		$post = getPost($_GET['post-slug']);
	}
	$topics = getAllTopics();
?>
<?php include('includes/head_section.php'); ?>
<title><?php if ($post['published'] == false): ?>404<?php else: echo $post['title'] ?>  <?php endif ?> |Java</title>
<meta name="keywords" content="<?php if ($post['published'] == false): ?>404<?php else: echo $post['title'] ?>  <?php endif ?> ">
</head>
<body> 
		<?php include( ROOT_PATH . '/includes/navbar.php'); ?>

    <!-- Main starts-->

    <section style="overflow-wrap: break-word;" CLASS="relative break-all flex justify-center mx-auto max-w-8xl"> 
    
    <input type="checkbox" name="nav" id="nav" class="hidden peer" />
          <label for="nav" style="right:10px;"class="fixed bottom-0 right-0 z-50 flex items-center justify-center w-12 h-12 mb-4 ml-4 bg-white border rounded-full shadow-lg cursor-pointer text-slate-600 border-slate-300 lg:hidden transition duration-200 ease-in-out active:scale-95">
            <svg xmlns="http://www.w3.org/2000/svg" width="40" height="40" fill="currentColor" class="bi bi-arrow-right-circle-fill" viewBox="0 0 16 16">
                <path d="M8 0a8 8 0 1 1 0 16A8 8 0 0 1 8 0zM4.5 7.5a.5.5 0 0 0 0 1h5.793l-2.147 2.146a.5.5 0 0 0 .708.708l3-3a.5.5 0 0 0 0-.708l-3-3a.5.5 0 1 0-.708.708L10.293 7.5H4.5z"/>
              </svg>
          </label>
          
     <div id="menu" class="fixed bg-white top-[2.5rem] h-screen shadow-xl left-0 hidden peer-checked:block lg:relative lg:top-0 lg:h-auto lg:px-0 lg:block lg:flex-none lg:shadow-none">
	<!-- Menu starts -->
 
  <!-- Menu ends -->
     </div>
     <div class="flex-auto max-w-2xl min-w-0 px-2 py-10 lg:max-w-none lg:pr-0 lg:pl-8 xl:px-16 bg-slate-200	">
                 
                 <article>
  
<?php if ($post['published'] == false): ?> 

   <div class="font-sans">
                 <h1 class="font-sans break-normal block p-2  bg-white rounded-lg border border-gray-200 shadow-md  text-xl">Learn Java with Quesnit (404)</h1>
                
        </div>
        
        <br><hr class="border-b border-gray-400"><br> 
 <div class="grid grid-cols-1 sm:grid-cols-1 md:grid-cols-3 lg:grid-cols-3 xl:grid-cols-3 gap-5">
     <?php $posts = getPublishedPosts(); ?>
    
    <?php foreach ($posts as $post): ?>
    
    <div class="rounded bg-white overflow-hidden shadow-lg">
    
      <div class="px-6 py-4">
        <div class="font-bold text-xl mb-2"><?php echo $post['title'] ?> </div>
       
      </div>
      <div class="px-6 pt-4 pb-2">
      <?php if (isset($post['topic']['name'])): ?>
			<a  href="<?php echo BASE_URL . $post['topic']['id'] .'/topic' ?>"
				class="inline-block bg-gray-200 rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2">
				 <span class="text-xs font-medium text-blue-600 uppercase">
        <?php echo $post['topic']['name'] ?>
        </span>
			</a>
		<?php endif ?> 
		
      <a style="float:right;" href="q/<?php echo $post['slug']; ?>" class="px-4 py-2 text-sm font-semibold rounded bg-slate-900 text-slate-50 transition ease-in-out delay-75 hover:scale-105 duration-200">
        Learn
          </a>
            
        
       </div>
    </div>
<?php endforeach ?>
    </div>
 

</div>

			<?php else: ?>

 <!--Title-->
 <div class="font-sans">
                 <h1 class="font-sans break-normal block p-2  bg-white rounded-lg border border-gray-200 shadow-md  text-xl"><?php echo $post['title'] ?></h1>
                
        </div>
         <!--Body--> <br><hr class="border-b border-gray-400"><br>
<div class="block p-2  bg-white rounded-lg border border-gray-200">
<?php echo html_entity_decode($post['body']); ?>

</div>
<div><br><br>
<?php if (isset($post['topic']['name'])): ?>
    <a href="<?php echo BASE_URL . $post['topic']['id'] .'/topic' ?>" 	class="inline-block  rounded-full px-3 py-1 text-sm font-semibold text-gray-700 mr-2 mb-2" style="background:black;color:white;">   
        <?php echo $post['topic']['name'] ?>
       
			</a>
      <?php endif ?>
</div>
</article>
<?php endif ?>
  </div>
</section> 
<script>
document.getElementById("menu").innerHTML = '<?php include( ROOT_PATH . '/includes/menu.php'); ?>'</script>
<style>
                        .active{background: #000;color:white;} 
                        .active:hover{color:black;}
                  blockquote{ background-color: rgb(17 24 39 / var(--tw-bg-opacity));
                  border-radius: 0.25rem/* 4px */;
                   --tw-text-opacity: 1;
  color: rgb(255 255 255 / var(--tw-text-opacity));
  font-family: ui-monospace, SFMono-Regular, Menlo, Monaco, Consolas, "Liberation Mono", "Courier New", monospace;
                   font-size: 1rem/* 16px */;
  line-height: 1.5rem;padding: 0.2rem;
  overflow-wrap: break-word;
  
  } 
                    </style>
<?php include( ROOT_PATH . '/includes/footer.php'); ?>