const moodAskBtn = document.getElementById('moodAsk');
const moodAskSpan = document.getElementById('moodAskSpan');
const moodOptionBtn = document.getElementById('moodOption');
const postDiv = document.getElementById('post');
const textarea = document.getElementById('textarea');

const date = new Date();
const year = date.getFullYear();
const month = date.getMonth() + 1;
const day = date.getDate();

const happy = document.getElementsByClassName('happy');
const sad = document.getElementsByClassName('sad');
const surprise = document.getElementsByClassName('surprise');
const disgust = document.getElementsByClassName('disgust');
const fear = document.getElementsByClassName('fear');
const angry = document.getElementsByClassName('happy');
const journal = document.getElementsByClassName('journal');

let pressCount = 0;
function moodAsk() {
    if (pressCount % 2 == 0) {

        moodOptionBtn.style.display = 'block'
    } else {

        moodOptionBtn.style.display = 'none'
    }
    pressCount++;
}

function mood(moodInput) {
    pressCount--;
    postDiv.style.display = "block";
    moodAskBtn.innerText = year + " - " + month + " - " + day;
    switch (moodInput) {
        case 'happy':
            textarea.name = "happy";
            moodAskBtn.style.backgroundColor = "rgb(255, 255, 0, 0.2)";
            break;
        case 'sad':
            textarea.name = "sad";
            moodAskBtn.style.backgroundColor = "rgb(7, 151, 179,0.2)";
            break;
        case 'surprise':
            textarea.name = "surprise";
            moodAskBtn.style.backgroundColor = "rgb(212, 113, 0,0.2)";
            break;
        case 'disgust':
            textarea.name = "disgust";
            moodAskBtn.style.backgroundColor = "rgb(11, 75, 11,0.2)";
            break;
        case 'fear':
            textarea.name = "fear";
            moodAskBtn.style.backgroundColor = "rgb(19, 19, 121,0.2)";
            break;
        case 'angry':
            textarea.name = "angry";
            moodAskBtn.style.backgroundColor = "rgb(195, 3, 3,0.2)";
            break;
        case 'journal':
            textarea.name = "journal";
            moodAskBtn.style.backgroundColor = "rgb(0, 0, 0,0.2)";
            break;
        default:
            break;
    }
    moodOptionBtn.style.display = 'none';
    textarea.disabled = false;
    textarea.innerText = "";
}




var audio = document.getElementById("audioPlayer");
var playButton = document.getElementById("playButton");

function toggleAudio() {
    if (audio.paused) {
        audio.play();
        playButton.src = "icons/stopCon.png";
        playButton.alt = "pause" // Change to pause button image
    } else {
        audio.pause();
        playButton.src = "icons/playCon.png";  // Change back to play button image
        playButton.alt = "play"
    }
}

