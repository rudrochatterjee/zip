<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>real-time-chat</title>
  <script defer src="http://localhost:8000/socket.io/socket.io.js"></script>
  <!-- <script defer src="https://bolpurhighaschoolgroup.000webhostapp.com/bootsspeps/js/client.js"></script> -->
  <script defer src="js/client.js"></script>
  <link rel="stylesheet" href="css/style.css">
</head>
<body>
  <nav>
    <img class="logo" src="" alt="">
  </nav>
  <div class="container">
    <!-- <div class="message left"></div> -->
    <!-- <div class="message right"></div> -->
  </div>
  <div class="send">
    <form action="#" id="send-container">
      <input type="text" name="messageInp" id="messageInp">
      <button class="btn" type="submit">send</button>
    </form>
  </div>
</body>
</html>