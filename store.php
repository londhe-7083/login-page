<!-- write a php program to store current date time in cookie and display last visited on 
date time on the webpage upon reopeningof the same page 
 -->

 <html>
     <body bgcolor="87ceeb">
         <center> <h2> last visited time on the web page </h2> </center>
         <br>
         <?php
         $inTwoMonths = 60 * 60 * 12 * 60 + time();
         setcookie('lastVisit', date("G:i - m/d/y"), $inTwoMonths);
         if(isset($_COOKIE['lastVisit'])) 
         {
             $Visit= $_COOKIE['lastVisit'];
             echo"your last visit was -". $Visit;
         }
         else
         echo"you've got some stable cookies!";
         ?>
         </body>
         </html>
