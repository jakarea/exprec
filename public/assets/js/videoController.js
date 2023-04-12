let videoWrapper = document.querySelector(".video-container");
let video = document.querySelector(".video-container__video");
let videoControls = document.querySelector(".video-container__controls");
let fullscreenControl = document.querySelector(".control--fullscreen");
let playControl = document.querySelector(".control--play");
let stopControl = document.querySelector(".control--stop");
let replayControl = document.querySelector(".control--replay");
let rewindControl = document.querySelector(".control--backward");
let forwardControl = document.querySelector(".control--forward");
let volumeControl = document.querySelector(".control--volume__button");
let volumeSlider = document.querySelector(".control--volume__slider");
let progressBar = document.querySelector(".progress");

// EVENTS

// Show player controls
videoWrapper.addEventListener("mouseover", () => {
	playerControlsVisibility(true);
});

// Hide player controls
videoWrapper.addEventListener("mouseout", () => {
	playerControlsVisibility(false);
});

// Pause/play video
playControl.addEventListener("click", (e) => {
	let $this = e.currentTarget;
	if ($this.classList.contains("paused")) {
		video.play();
	} else {
		video.pause();
	}
	$this.classList.toggle("paused");
});

// Stop video
stopControl.addEventListener("click", () => {
	video.pause();
	video.currentTime = 0;
	playControl.classList.add("paused");
});

// Replay video
replayControl.addEventListener("click", () => {
	video.currentTime = 0;
	playControl.classList.remove("paused");
	video.play();
});

// Rewind video
rewindControl.addEventListener("click", () => {
	video.currentTime = video.currentTime - 10;
});

// Forward video
forwardControl.addEventListener("click", () => {
	video.currentTime = video.currentTime + 10;
});

// Mute/unmute video
volumeControl.addEventListener("click", (e) => {
	volumeControl.parentNode.classList.toggle("muted");
	if (volumeControl.parentNode.classList.contains("muted")) {
		volumeSlider.value = 0;
		video.volume = 0;
	} else {
		volumeSlider.value = 1;
		video.volume = 1;
	}
});

// Volume slider
volumeSlider.addEventListener("input", () => {
	if (volumeSlider.value > 0) {
		volumeControl.parentNode.classList.remove("muted");
	} else {
		volumeControl.parentNode.classList.add("muted");
	}
	video.volume = volumeSlider.value;
});

// Progressbar
video.addEventListener("timeupdate", (e) => {
	let progress = (100 / video.duration) * video.currentTime;
	document
		.querySelector(".progress__current")
		.setAttribute("style", `width:${progress}%`);
});

progressBar.addEventListener("click", (e) => {
	let goToTime = (e.offsetX / progressBar.offsetWidth) * video.duration;
	video.currentTime = goToTime;
});

// Fullscreen mode
fullscreenControl.addEventListener("click", () => {
	let isFullscreen = videoWrapper.classList.contains("fullscreen");
	if (!isFullscreen) {
		turnFullscreen(true);
	} else {
		turnFullscreen(false);
	}
});

document.addEventListener("webkitfullscreenchange", function (e) {
	let isFullscreen = videoWrapper.classList.contains("fullscreen");
	videoWrapper.classList.toggle("fullscreen");
});

document.addEventListener("mozfullscreenchange", function (e) {
	let isFullscreen = videoWrapper.classList.contains("fullscreen");
	videoWrapper.classList.toggle("fullscreen");
});

document.addEventListener("fullscreenchange", function (e) {
	let isFullscreen = videoWrapper.classList.contains("fullscreen");
	videoWrapper.classList.toggle("fullscreen");
});

// functions
let playerControlsVisibility = (visibility) => {
	if (visibility) {
		videoControls.classList.add("visible");
	} else {
		videoControls.classList.remove("visible");
	}
};

let turnFullscreen = (fullscreen) => {
	if (fullscreen) {
		if (videoWrapper.requestFullScreen) {
			videoWrapper.requestFullScreen();
		} else if (videoWrapper.webkitRequestFullScreen) {
			videoWrapper.webkitRequestFullScreen();
		} else if (videoWrapper.mozRequestFullScreen) {
			videoWrapper.mozRequestFullScreen();
		}
	} else {
		if (document.cancelFullScreen) {
			document.cancelFullScreen();
		} else if (document.mozCancelFullScreen) {
			document.mozCancelFullScreen();
		} else if (document.webkitCancelFullScreen) {
			document.webkitCancelFullScreen();
		} else if (document.msCancelFullScreen) {
			document.msCancelFullScreen();
		}
	}
};
