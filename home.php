<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8" />
  <meta http-equiv="X-UA-Compatible" content="IE=edge" />
  <meta name="viewport" content="width=device-width, initial-scale=1.0" />
  <title>TalkIT</title>
  <link href="home.css" rel="stylesheet" />
  <script src="home.js" defer></script>
</head>

<body>
  <div class="container">
    <div class="nav"><span id="talkait">TalkaIT</span></div>
    <div class="left">
      <ul type="none" id="profile">
        <li>
          <a href="overview.php" id="link">Overview</a>
        </li>
        <li>
          <a href="logout.php" id="link">Log out</a>
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
          <button class="surprise" onclick="mood('surprise')"><img
              src="icons/surprisedSVG.svg"><span>Surprise</span></button>
          <button class="disgust" onclick="mood('disgust')"><img src="icons/madSVG.svg"><span>Disgust</span></button>
          <button class="fear" onclick="mood('fear')"><img src="icons/fearSVG.svg"><span>Fear</span></button>
          <button class="angry" onclick="mood('angry')"><img src="icons/angrySVG.svg"><span>Anger</span></button>
          <button class="journal" onclick="mood('journal')" style="margin-bottom: 7px;width:100%;"><img
              src="icons/writeSVG.svg"><span>Note/Journal</span></button>
        </div>
        <br>
        <div id="post" style="display: block;">
          <form id="moodwrite" action="post.php" method="post">
            <textarea id="textarea" disabled>Please select your mood to enable the text field</textarea>
            <button>POST</button>
          </form>
        </div>
      </div>
      <div id="meditate-container">
        <a href="tips.html" id="tip">
          <div class="meditate-tips">
            <p>Why, When and How to meditate</p>
            <p>(tips on meditation)</p>
          </div>
        </a>
        <div class="meditate-audio">
          <img src="icons/playCon.png" id="playButton" onclick="toggleAudio()">
          <audio id="audioPlayer" src="audio/5min.mp3" > </audio>
        </div>
      </div>
    </div>
  </div>
</body>

</html>