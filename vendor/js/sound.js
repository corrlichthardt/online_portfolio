var audio = document.getElementById("audio");
var isPlaying = true;

function toggleMusic() {
  if (isPlaying) {
    audio.pause()
  } else {
    audio.play();
  }
};

audio.onplaying = function() {
  isPlaying = true;
};

audio.onpause = function() {
  isPlaying = false;
};