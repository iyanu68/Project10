
<?php

include 'head.php';


?>

<style>
    body {
        background:rgba(218, 175, 118, 0.399);
    }
    .fa-solid{
        margin-left: 5em;
        font-size:2em;
        width:30%;
        color:rgba(113, 98, 23, 0.644);
        padding-top:0.5em;
    }
    h1 {
        margin-left:12em;
        font-family:monospace;
        color:rgba(81, 58, 92, 0.813);
        font-weight:bolder;
        padding-top:-0.5em;
    }
    .head {
        margin-top:1em;
        background:rgba(203, 218, 118, 0.644);
    }
    .foot {
        margin-top:0.5em;
        padding-left:20em;
        font-size:1.3em;
        font-weight:bold;
        background:rgba(203, 218, 118, 0.644);
        font-family:monospace;
        padding-top:1.2em;
        padding-bottom:1em;
    }
    
    p {
      margin-left:7em;
      margin-top:2em;
      font-size:1.5em;
      font-family:courier;
      color:rgba(94, 81, 15, 0.644);
      font-weight:bold;
    }
    
    h3 {
        margin-top:2em;
        margin-left:15em;
        margin-top:2em;
        font-weight:bold;
        font-family:courier;
        color:rgba(94, 81, 15, 0.644);
    }
    
    .btn-secondary {
        margin-left:30em;
        margin-top:2em;
        font-size:1.2em;
        font-family:courier;
        color:white;
        padding-left: 3em;
        padding-right:3em;
    }
    .center {
    background-color: rgba(218, 175, 118, 0.399); /* Initial background color */
    opacity: 0; /* Initially hide the content */
    padding: 20px;
    animation: bounceIn 1s forwards, changeBackground 1s forwards;
    }
    @keyframes bounceIn {
    0% {
      opacity: 0;
      transform: translateY(-100px); /* Start above its normal position */
    }
    70% {
      transform: translateY(20px); /* Bounce down */
    }
    100% {
      opacity: 1;
      transform: translateY(0); /* Return to its normal position */
    }
        }
         @keyframes changeBackground {
    from {
      background-color:rgba(218, 175, 118, 0.399); /* Start color */
    }
    to {
      background-color: rgba(196, 216, 123, 0.775); /* End color */
    }
  }
</style>

<body>
    
<div class = "head"> 
    <i class="fa-solid fa-chart-simple"></i>
    <h1>Chart Hub</h1>
</div>

<div class = "center">
   
    <p> Create beautiful pie charts and bar charts based on your data.</p>
    
    <h3> You Wanna Explore the Chart Hub?</h3>
    
    <button class = "btn btn-secondary"><a href = "signup.php" style = "color:white;">Sign Up</a></button><br>
     <button class = "btn btn-secondary"><a href = "signin.php" style = "color:white;">Sign In</a></button>

</div>    
<div class = "foot">
    <p2>&copy; 2024 Chart Generator. All rights reserved.</p2>
  </div>

</body>
</html>