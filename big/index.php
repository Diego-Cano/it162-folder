<?php include 'includes/header.php';?>     
<!-- MAKE SURE YOU GET YOUR (3) IMAGES SAVED INTO YOUR IMAGES FOLDER -->
 
<h3>Client Questionnaire</h3>
 <p>Develop and place an updated version of the "multiple.php" contact form (located in your web120 includes folder) on this main page.
  Adjust its fields to ask the basic questions you'd always need to ask any client to help determine if you can help them with their website 
  needs.</p>
  <form action=""><?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact-include.php'; #site keys & code here
    
        $toAddress = "dcano2810@gmail.com";  //place your/your client's email address here
        $toName = "Diego Cano"; //place your client's name here
        $website = "Contact form test";  //place NAME of your client's website

        // echo loadContact('multiple.php');#demonstrates a simple contact form
        echo loadContact('includes/multiple.php');#demonstrates multiple form elements

	?></form>
</section>
<!-- END LEFT COL -->

<!-- START RIGHT COL -->
<aside>
<h3>Basic Website Design Cycle</h3>
<p>
Provide at least 3 (linked) resources that help you and/or your web team with steps found in very basic website design and development cycle.
 For example, client surveys, wireframing tools, etc.</p>

 <p>Here's a website to help get you started,</p>

 <a href="https://business.tutsplus.com/articles/..." target="_top">https://business.tutsplus.com/articles/...</a>
</aside>
<!-- END RIGHT COL -->
<?php include 'includes/footer.php';?>