var tag = document.createElement('script');

tag.src = "https://www.youtube.com/iframe_api";
var firstScriptTag = document.getElementsByTagName('script')[0];
firstScriptTag.parentNode.insertBefore(tag, firstScriptTag);

var player;
function onYouTubeIframeAPIReady() {
    player = new YT.Player('player', {
        height: '360',
        width: '655',
        videoId: 'giXuZgW1sDo',
        playerVars: {'rel': 0, 'enablejsapi': 1, 'modestbranding': 1, 'showinfo': 0},
        events: {
        'onReady': onPlayerReady
        }
    });
}

function onPlayerReady(event) {
    event.target.setVolume(100);
    let iframe = document.querySelector("iframe");
    iframe.classList.add('embed-item');
}