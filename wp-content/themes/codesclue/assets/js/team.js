document.addEventListener("DOMContentLoaded", function() {
  const images = document.querySelectorAll(".life-img");

  if (!images.length) return; // stop if no images found

  const base = themeData.themeUri; // from PHP

  const imageSets = [
    [
      `${base}/assets/images/teams/codesclue-team (11).png`,
      `${base}/assets/images/teams/codesclue-team (12).png`,
      `${base}/assets/images/teams/codesclue-team (13).png`,
      `${base}/assets/images/teams/codesclue-team (14).png`
    ],
    [
      `${base}/assets/images/teams/codesclue-team (15).png`,
      `${base}/assets/images/teams/codesclue-team (16).png`,
      `${base}/assets/images/teams/codesclue-team (17).png`,
      `${base}/assets/images/teams/codesclue-team (18).png`
    ],
    [
      `${base}/assets/images/teams/codesclue-team (19).png`,
      `${base}/assets/images/teams/codesclue-team (20).png`,
      `${base}/assets/images/teams/codesclue-team (21).png`,
      `${base}/assets/images/teams/codesclue-team (22).png`
    ],
    [
      `${base}/assets/images/teams/codesclue-team (23).png`,
      `${base}/assets/images/teams/codesclue-team (24).png`,
      `${base}/assets/images/teams/codesclue-team (1).png`,
      `${base}/assets/images/teams/codesclue-team (2).png`
    ]
  ];

  let index = 0;

  setInterval(() => {
    images.forEach((img, i) => {
      img.classList.add("fade-out");
      setTimeout(() => {
        img.src = imageSets[index][i % 4];
        img.classList.remove("fade-out");
      }, 1000);
    });
    index = (index + 1) % imageSets.length;
  }, 5000);
});





//  const images = document.querySelectorAll(".life-img");

//   const imageSets = [
//       [
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (11).png",
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (12).png",
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (13).png",
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (14).png"
//       ],
//       [
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (15).png",
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (16).png",
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (17).png",
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (18).png"
//       ],
//       [
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (19).png",
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (20).png",
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (21).png",
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (22).png"
//       ],
//       [
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (23).png",
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (24).png",
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (1).png",
//         "<?php echo get_template_directory_uri(); ?>/assets/images/teams/codesclue-team (2).png"
//       ]
//     ];


//   let index = 0;
//   setInterval(() => {
//     images.forEach((img, i) => {
//       img.classList.add("fade-out");
//       setTimeout(() => {
//         img.src = imageSets[index][i % 4];
//         img.classList.remove("fade-out");
//       }, 1000);
//     });
//     index = (index + 1) % imageSets.length;
//   }, 5000);