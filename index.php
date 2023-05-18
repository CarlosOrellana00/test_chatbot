<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>Test de Chat Bot</title>
  <link rel="stylesheet" href="assets/css/style.css">
  <link rel="shortcut icon" href="assets/icon/chat-icon.png">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css"/>
  <script src="https://code.jquery.com/jquery-3.7.0.min.js"></script>
  <script src="https://kit.fontawesome.com/a076d05399.js"></script>
</head>
<body>
  <div class="wrapper">
    <div class="title">Una Simple Prueba de un ChatBot Online</div>
      <div class="form">

        <div class="bot-inbox inbox">
          <div class="icon">
            <i class="fas fa-user"></i>
          </div>
          <div class="msg-header">
            <p>Hello there, how i can help you?</p>
          </div>
        </div>

    </div>
    <div class="typing-field">
      <div class="input-data">
        <input id="data" type="text" placeholder="escribe algo aqui" required>
        <button id="send-btn">Enviar</button>
      </div>
    </div>
  </div>
  <script>
    $(document).ready(function(){
      $("#send-btn").on("click", function(){
        $value = $("#data").val();
        alert($value);
      });
    });
  </script>
</body>
</html>