<?php include 'includes/header.php';?>     
<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 
  <form action=""><?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact-include.php'; #site keys & code here
    
        $toAddress = "diegocano_1999@hotmail.com";  //place your/your client's email address here
        $toName = "Diego Cano"; //place your client's name here
        $website = "Contact form test";  //place NAME of your client's website

        // echo loadContact('multiple.php');#demonstrates a simple contact form
        echo loadContact('includes/multiple.php');#demonstrates multiple form elements

	?></form>

</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
<h3 class='basic'>Basic Website Design Cycle.</h3>
<ul class='websiteCycle'>
<li><a href="https://blog.hubspot.com/marketing/web-design-html-css-javascript#:~:text=HTML%20provides%20the%20basic%20structure,the%20behavior%20of%20different%20elements.">Web Design 101: How HTML, CSS, and JavaScript Work</a></li>
<li><a href="http://cs.tsu.edu/ghemri/CS117/ClassNotes/Web%20Development%20Life%20Cycle_small.htm#:~:text=The%20Web%20development%20life%20cycle,testing%2C%20and%20implementation%20and%20maintenance.">Web Development Life Cycle</a></li>
<li><a href="https://webflow.com/blog/the-web-design-process-in-7-simple-steps">7 simple steps to the web design process</a></li>
</ul>

 
</aside>
<!-- END RIGHT COL -->
<?php include 'includes/footer.php';?>