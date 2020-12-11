What does this widget do?
- The widget displays 3 customer comments that you yourself write.  
each comment contains the following data: review, customer name,  client city, current date.

The data is output from the array in  a random order every time the page is updated.

The comment date is the current date.How to install the widget?

1. Download the widget to the root directory of your site.
2. On the pages where you need to display the widget, write in the head:    
<link href="otz/css/main.css" media="all" rel="stylesheet" type="text/css"\>        
<?php include 'otz/script/main.php'; ?\>        
<meta content="width=device-width, initial-scale=1" name="viewport"\>
3. In the area of the page where you want to display comments, addthe contents of a div class="reviews-list k-content-container" from a file index.php


