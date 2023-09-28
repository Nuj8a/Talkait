<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TalkIT</title>
  <link href="htest.css" rel="stylesheet" />
  <script src="htest.js" defer></script>
</head>

<body>
  <div class="container">
    <div class="nav"><span id="talkait">TalkaIT</span></div>
    <div class="left">
      <ul type="none" id="profile">
        <li>Id</li>
        <li>
          <span><a href="overview.html">Overview</a></span>
        </li>
        <li>
          <span><a href="index.html">Log out</a></span>
        </li>
      </ul>
    </div>
    <div class="right">
      <div class="write">
        <button id="moodAsk" onclick="moodAsk()"><span id="moodAskSpan">How are you feeling today?</span><img
            src="icons/dropdown.svg"></button>
        <div id="moodOption" style="display: none;">
          <button class="happy" onclick="mood('happy') "><img src="icons/happySVG.svg"><span>Happy</span></button>
          <button class="sad" onclick="mood('sad')"><img src="icons/sadSVG.svg"><span>Sad</span></button>
          <button class="suprise" onclick="mood('suprise')"><img
              src="icons/surprisedSVG.svg"><span>Suprise</span></button>
          <button class="disgust" onclick="mood('disgust')"><img src="icons/madSVG.svg"><span>Disgust</span></button>
          <button class="fear" onclick="mood('fear')"><img src="icons/fearSVG.svg"><span>Fear</span></button>
          <button class="angry" onclick="mood('angry')"><img src="icons/angrySVG.svg"><span>Anger</span></button>
          <button class="journal" onclick="mood('journal')" style="margin-bottom: 7px;width:100%;"><img
              src="icons/writeSVG.svg"><span>Note/Journal</span></button>
        </div>
        <br>
        <div id="post" style="display: block;">
          <form id="moodwrite">
            <textarea id="textarea" disabled>Please select your mood to enable the text field</textarea>
            <button>Post</button>
          </form>
        </div>
      </div>
      <div id="meditate">
        <div id="faqBlock">
        <p id="header">How to start meditating?</p>
        <ul id="tips" type="none">
          <li>Find a comfortable position. Can be done in lying or cross-legged position and even while sitting in a chair.</li>
          <li>Close your eyes or you can do it with eyes open but with eyes closed you will be able to focus more. If you want to do it with eyes open then find a focus point and fix you focus. </li>
          <li>Take a long deep breathe and then just breathe like you do and focus on your breathing.</li>
          <li>You might sway away in your thoughts and it's okay. But if you do, Make your breathing your anchor point to regain your focus and continue to focus on your breathing.</li>
          <li>You can meditate anywhere and at any anytime, Just make sure your surroundings are appropriate for you to meditate.</li>
        </ul>
        </div>
        <div id=listen>
          <div id="music" >
            <audio controls src="audio/5min.mp3"></audio>
            <audio controls src="audio/10min.mp3"></audio>
          </div>
        </div>
      </div>
    </div>
  </div>
  </div>
</body>

</html>