<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <title>Nikitha's Clock and Calender</title>
  <link rel='stylesheet' href='https://netdna.bootstrapcdn.com/font-awesome/3.2.1/css/font-awesome.css'>
  <link rel="stylesheet" href="./style.css">

</head>

<body>
  
  <head>
    <link href='https://fonts.googleapis.com/css?family=Lato' rel='stylesheet' type='text/css'>
  </head>

  <body>
  <p style="padding-top:100px;text-align: center;"> <?php
    getDate('H:i:s');
    
    ?></p>
    <div id="calendar">
      <div id="calendar_header"><i class="icon-chevron-left"></i>
        <h1></h1><i class="icon-chevron-right"></i>
      </div>
      <div id="calendar_weekdays"></div>
      <div id="calendar_content"></div>
    </div>
  </body>
  <script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/2.1.3/jquery.min.js'></script>
  <script src="./script.js"></script>

</body>

</html>