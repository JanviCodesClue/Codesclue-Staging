
// document.addEventListener('DOMContentLoaded', function () {
//     const videos = document.querySelectorAll('.video-without-sound');

//     videos.forEach(video => {
//       const canPlayWebm = video.canPlayType('video/webm');
//       if (!canPlayWebm) {
//         const sources = video.querySelectorAll('source');
//         let hasMp4 = Array.from(sources).some(src => src.type === 'video/mp4');
//         // Console and visual confirmation
//         console.log(`Fallback to .mp4 applied for video #${index + 1}: ${mp4Src}`);
//         if (!hasMp4) {
//           // Get current .webm source path and change extension to .mp4
//           const webmSource = video.querySelector('source[type="video/webm"]');
//           if (webmSource) {
//             const mp4Src = webmSource.src.replace(/\.webm$/, '.mp4');
//             const fallback = document.createElement('source');
//             fallback.src = mp4Src;
//             fallback.type = 'video/mp4';
//             video.appendChild(fallback);
//             video.load();
//           }
//         }
//       }
//     });
//   });