<!DOCTYPE html>
<html>
<!--
/**
 * Class: CST-336
 * HW 1: HTML and CSS
 * Authors:
 * - Victor Ramirez
 **/
-->
<!-- All styles and javascript go inside the head -->
    <head>
		<meta charset="utf-8" />
		<title> Artificial Intelligence, Machine Learning and Deep Learning </title>        
    <link href="css/styles.css" rel="stylesheet" type="text/css" />
    <link href="https://fonts.googleapis.com/css?family=Pacifico&display=swap" rel="stylesheet">
    </head>
    <!-- closing head -->
    <!-- This is the body -->
    <!-- This is where we place the content of our website -->
    <body>       
      <header>
        <h1> Artificial Intelligence, Machine Learning and Deep Learning </h1>
      </header>
      <hr />
      <nav>        
        <a id="current" href="index.php">Home</a>
        <a href="artificial_intelligence.html">Artificial Intelligence</a>
        <a href="machine_learning.html">Machine Learning</a>
        <a href="deep_learning.html">Deep Learning</a>                               
      </nav>      
      <br /><br />
      <main>        
          <figure>
            <img src="img/ai_6_1.jpg" alt="Picture of AI" />
          </figure>
          <div class="w3-panel w3-border">
            <br />  
            <h3>Hello!</h3>
            <br />          
            <p>Thank you for visting my Artificial Intelligence, Machine Learning and Deep Learning Website. Artificial intelligence (AI) is the ability of a computer program or a machine to think and learn. The sections on this site expalin each topic in depth.<p>
            <br /><br />
            
            <em id="textClick">"That which does not kill us makes us <strong>stronger</strong>."</em><br /> - Friedrich Nietzsche
            
            <!-- new html -->
            <button onclick="myFunction()" type="button">Click me to change the text color!</button>           
            
            <!-- new html -->
            <script>
              function myFunction() 
              {
                document.getElementById("textClick").style.color = "blue";
              }
            </script>

          </div>        
      </main>
      <!-- This is the footer -->
        <!-- The footer goes inside the body but not always -->
        <footer id="main_footer">
          <figure>
            <!-- <img src="img/CSUMB_Logo_540_Bay_Blue.png" alt="Picture of CSUMB Logo" /> -->
          </figure>
          <hr>
          CST336 Internet Programming. 2019&copy; Ramirez <br /> 
          <strong>Disclaimer:</strong> The information in this webpage is fictitious. <br />
          It is used for academic purposes only.
        </footer>
        <!-- closing footer -->        
    </body>    
    <!-- closing body -->
</html>