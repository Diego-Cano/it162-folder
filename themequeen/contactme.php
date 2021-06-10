<?php include 'includes/header.php'?>
<?php
        /*
         * Below are 2 different forms to be re-used       
         * 
         * Only use one at a time, comment out the other!       
         *
         */

        include 'includes/contact_include.php'; #site keys & code here
    
        $toAddress = "dcano2810@gmail.com";  //place your/your client's email address here
        $toName = "Theme Queen"; //place your client's name here
        $website = "Theme Queen Contact Form";  //place NAME of your client's website

        echo loadContact('includes/simple.php');#demonstrates a simple contact form
        // echo loadContact('includes/ultiple.php');#demonstrates multiple form elements

	?>
    </section>
    
    <aside>
      <p>Jelly beans tart jelly oat cake candy canes pastry marshmallow cotton candy lemon drops. 
          Pie sesame snaps tiramisu liquorice fruitcake chocolate bar pastry chocolate cookie. 
          Fruitcake marzipan topping candy canes jujubes macaroon tiramisu topping icing. Halvah muffin bear claw.
          Jelly croissant marshmallow jelly-o. Toffee jujubes dragée ice cream sesame snaps dragée chocolate bar.
          Biscuit tootsie roll jelly. Marzipan tootsie roll macaroon jelly-o gingerbread danish sweet jelly beans macaroon.</p>
    </aside>
  </main>
  <?php include 'includes/footer.php'?> 