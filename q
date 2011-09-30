[1mdiff --git a/application/views/common/poster/large_poster_info.php b/application/views/common/poster/large_poster_info.php[m
[1mindex c230604..f219686 100644[m
[1m--- a/application/views/common/poster/large_poster_info.php[m
[1m+++ b/application/views/common/poster/large_poster_info.php[m
[36m@@ -2,8 +2,10 @@[m
     $posterColors = $this->config->item('poster_colors');[m
     ?>[m
 [m
[31m-    <?php foreach($posters as $poster) {?>[m
[31m-        <div class="poster-print redirect <?php echo $posterColors[$poster->poster_color]; ?>" id="bg-<?php echo strtolower($poster->name); ?>" data-url='pricing/show?poster=<?php echo strtolower($poster->name); ?>'>[m
[32m+[m[32m    <?php foreach($posters as $poster) {[m
[32m+[m[32m        $class=(isset($noRedirect) && $noRedirect==true) ? ' ' : 'redirect ';[m
[32m+[m[32m    ?>[m
[32m+[m[32m        <div class="poster-print <?php echo $class; echo $posterColors[$poster->poster_color]; ?>" id="bg-<?php echo strtolower($poster->name); ?>" data-url='pricing/show?poster=<?php echo strtolower($poster->name); ?>'>[m
             <h3>I want to print</h3>[m
             <h2><?php echo $poster->name; ?></h2>[m
             <h5><?php echo isset($poster->size) ? $poster->size : 'POSTER' ?></h5>[m
[1mdiff --git a/application/views/pricing/details/main_content.php b/application/views/pricing/details/main_content.php[m
[1mindex 4e2b141..3a1d7e0 100644[m
[1m--- a/application/views/pricing/details/main_content.php[m
[1m+++ b/application/views/pricing/details/main_content.php[m
[36m@@ -3,7 +3,8 @@[m
     <h4 id="flyer-price">Or show me <a href="#">Flyer Pricing</a></h4>[m
 [m
     <?php[m
[31m-        $this->load->view('common/poster/large_poster_info');[m
[32m+[m[32m        $locals['noRedirect'] = true;[m
[32m+[m[32m        $this->load->view('common/poster/large_poster_info', $locals);[m
         $posterPrice = $posters[0]->price;[m
         $posterSize = $posters[0]->size;[m
         $name = $posters[0]->name;[m
warning: LF will be replaced by CRLF in application/views/common/poster/large_poster_info.php.
The file will have its original line endings in your working directory.
warning: LF will be replaced by CRLF in application/views/pricing/details/main_content.php.
The file will have its original line endings in your working directory.
