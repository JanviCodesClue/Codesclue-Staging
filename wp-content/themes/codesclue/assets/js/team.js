const images = document.querySelectorAll(".life-img");

    // Replace with your actual image sets
    const imageSets = [
      [
        "https://picsum.photos/400/250?random=11",
        "https://picsum.photos/400/250?random=12",
        "https://picsum.photos/400/250?random=13",
        "https://picsum.photos/400/250?random=14"
      ],
      [
        "https://picsum.photos/400/250?random=21",
        "https://picsum.photos/400/250?random=22",
        "https://picsum.photos/400/250?random=23",
        "https://picsum.photos/400/250?random=24"
      ],
      [
        "https://picsum.photos/400/250?random=31",
        "https://picsum.photos/400/250?random=32",
        "https://picsum.photos/400/250?random=33",
        "https://picsum.photos/400/250?random=34"
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