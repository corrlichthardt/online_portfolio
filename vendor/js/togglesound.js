var audio = document.getElementById("background_audio");
var isPlaying = false;

function togglePlay() {
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
