<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel='stylesheet'><link rel="stylesheet" href="./styler.css">
    <title>Reservation Form</title>
</head>
<body>
  <div class='bold-line'></div>
  <div class='container'>
    <div class='window'>
      <div class='overlay'></div>
      <div class='content'>
        <div class='welcome'>Hello There!</div>
        <div class='subtitle'>We're almost done on reserving your Room. Just fill up this reservation form.</div>
        <form action="locale/formhandler.inc.php" method="post">
          <div class='input-fields'>
            <input type='text'  name="fname" placeholder='First name' class='input-line full-width' required></input>
            <input type='text' name="lname" placeholder='Last name' class='input-line full-width' required></input>
            <input type='email' name="email" placeholder='Email' class='input-line full-width' required></input>
            <input type='text' name="contactnum" placeholder='Contact#' class='input-line full-width'></input>
          
          </div>
            <div class='spacing'>or Go Back and choose Another Room 
              <a href="rooms.html"><span class='highlight'> Back </span></a>
            </div>
          <div><button class='ghost-round full-width'>Submit Reservation</button></div>
        </form>
      </div>
    </div>
  </div>
</body>
</html>
