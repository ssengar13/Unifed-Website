<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="UTF-8" />
    <title></title>
    <!-- inports  -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/2.1.3/jquery.min.js"></script>
    <!-- <script src="../../views/js/notify.min.js"></script> -->
    <link href="assets/css/chatbot.css" rel="stylesheet" type="text/css" />
  </head>
  <body>
    <!-- <header> -->
    <div id="header" class="header">
      <div id="companyImageDiv" class="company-image">
        <img id="companyImage" src="assets/images/icon/icon_cbt.png" alt="" style="width: 45px; height: 45px; margin-top:0px !important; margin-bottom: 0px !important;" />
        <span class="content1">Unified Support Team<br><p class="text1">We are online to assist you</p></span> 
      </div>
    </div>
    <!-- </header> -->
    <div id="normal-container">
      <div id="conversation-container" class="conversation-container"></div>
      <p style="height: 60px"></p>
      <div class="input-container">
        <input
          tabindex="1"
          id="nlpinput"
          required
          type="text"
          disabled
          required
          class="text-input cursor_disabled"
          rows="1"
          placeholder=""
          autocomplete="off"
        />
        <button
          type="submit"
          class="send cursor_disabled"
          disabled
        >
          <img src="assets/images/icon/send.png" width="20" height="17" />
        </button>
      </div>
      <div class="overlay"></div>
    </div>
    <footer class="footer fixed-bottom" id="footer">
      <img
        class="footer-img"
        width="14px"
        height="14px"
        src="assets/images/logo/logo.png"
        alt="logo"
      />
      <p class="footer-text">
        Powered by <a href="https://unifiedvoice.in/" target="_blank">Unified Voice Communication</a>
      </p>
    </footer>
  </body>
  <script src="chatbot.js"></script>
</html>
