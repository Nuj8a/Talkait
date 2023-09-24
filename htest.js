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
const suprise = document.getElementsByClassName('suprise');
const disgust = document.getElementsByClassName('disgust');
const fear = document.getElementsByClassName('fear');
const angry = document.getElementsByClassName('happy');
const journal = document.getElementsByClassName('journal');

let pressCount = 0;
function moodAsk() {
    if (pressCount % 2 == 0) {
        // moodAskBtn.style.boxShadow = "0px 5px 3px rgb(205,205,205)";
        moodOptionBtn.style.display = 'block'
    } else {
        // moodAskBtn.style.boxShadow = " 0px 3px 8px rgb(215, 215, 215)";
        moodOptionBtn.style.display = 'none'
    }
    pressCount++;
}

function mood(happy) {
    pressCount--;
    postDiv.style.display = "block";
    moodAskBtn.innerText = year + " - " + month + " - " + day;
    switch (happy) {
        case 'happy':
            textarea.name = "happy";
            moodAskBtn.style.backgroundColor = "rgb(255, 255, 0, 0.2)";
            break;
        case 'sad':
            textarea.name = "sad";
            moodAskBtn.style.backgroundColor = "rgb(7, 151, 179,0.2)";
            break;
        case 'suprise':
            textarea.name = "suprise";
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
    console.log(textarea.name);
    console.log(moodAskBtn.style.backgroundColor);
}
