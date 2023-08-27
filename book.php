<!DOCTYPE html>
<html lang="en">
<head>
   
   <title>book</title>

  
   <link rel="stylesheet" href="css/style.css">

</head>
<body>
   


<section class="header">

   <a href="home.php" class="logo">travel.</a>

   <nav class="navbar">
      <a href="home.php">home</a>
   
      <a href="book.php">book</a>
   </nav>

   <div id="menu-btn"></div>

</section>

<section class="booking">

   <h1 class="heading-title">book your trip!</h1>

   <form action="book_form.php" action="ticket.php" method="post" class="book-form">

      <div class="flex">
         <div class="inputBox">
            <span>name :</span>
            <input type="text" placeholder="enter your name" name="name">
         </div>
         <div class="inputBox">
            <span>email :</span>
            <input type="email" placeholder="enter your email" name="email">
         </div>
         <div class="inputBox">
            <span>phone :</span>
            <input type="number" placeholder="enter your number" name="phone">
         </div>
         <div class="inputBox">
            <span>address :</span>
            <input type="text" placeholder="enter your address" name="address">
         </div>
         <div class="inputBox">
            <span>where to :</span>
            <input type="text" placeholder="place you want to visit" name="location">
         </div>
         <div class="inputBox">
            <span>how many :</span>
            <input type="number" placeholder="number of guests" name="guests">
         </div>
         <div class="inputBox">
            <span>arrivals :</span>
            <input type="date" name="arrivals">
         </div>
         <div class="inputBox">
            <span>leaving :</span>
            <input type="date" name="leaving">
         </div>
      </div>

      <input type="submit" value="submit" class="btn" name="send">

   </form>

</section>

<section class="footer">

   <div class="box-container">

      <div class="box">
         <h3>quick links</h3>
         <a href="home.php"> home</a>
         <a href="book.php"> book</a>
      </div>

      <div class="box">
         <h3>extra links</h3>
         <a href="#">  ask questions</a>
         <a href="#">  about us</a>
         <a href="#">  privacy policy</a>
         <a href="#">  terms of use</a>
      </div>

      <div class="box">
         <h3>contact info</h3>
         <a href="#"> +918582808578 </a>
         <a href="#"> +848572059285 </a>
         <a href="#"> soumyodipc@gmail.com </a>
         <a href="#">  kolkata, india - 700123 </a>
      </div>

      <div class="box">
         <h3>follow us</h3>
         <a href="https://www.facebook.com/riki.roy.108889">  facebook </a>
         <a href="#">  twitter </a>
         <a href="#">  instagram </a>
         <a href="https://www.linkedin.com/in/soumyodip-choudhury-899484247/">  linkedin </a>
      </div>

   </div>



</section>

</body>
</html>