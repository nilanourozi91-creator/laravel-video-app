
// const video = document.getElementById('myVideo');
// const timeDisplay = document.getElementById('timeDisplay');
// video.addEventListener('timeupdate', () =< {
// const current = Math.floor(video.currentTime);
// const duration = Math.floor (video.duration);
// // Convert seconds to minute:second format
// function formatTime(time) {
// }
// const minutes = Math.floor(time / 60);
// const seconds time % 60;
// return minutes + ':' + (seconds < 10 ? '0' : '') + seconds;
// timeDisplay.textContent = formatTime(current) +' /'+ formatTime(duration);
// });

const video =document.getElementById('myv');
const timedisplay =document.getElementById('timedidisplay');
video.addEventListener('timeupdate',()=>{
    const current =Math.floor(video.currentTime);
    const duration = Math.floor(video.current);
    function formathtime(time) {
        const minutes =Math.floor(time/60);
        const secound =time%60;
        return minutes+':'+(secound<10?'0':'')+secound;
        timedisplay.textContent=formathtime(current)

        
    }
})
