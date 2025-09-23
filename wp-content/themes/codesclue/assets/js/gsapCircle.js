// gsap.registerPlugin(ScrollTrigger);

// const wrappers = document.querySelectorAll(".wrapper");
// const circles = document.querySelectorAll(".circle");
// const circleRadius = circles[0].clientWidth / 2;

// gsap.set(wrappers, {
// 	x: () => (gsap.utils.random(circleRadius, window.innerWidth - circleRadius) / window.innerWidth * 100) + "vw",
// 	y: () => (gsap.utils.random(circleRadius, window.innerHeight - circleRadius) / window.innerHeight * 100) + "vh"
// });

// gsap.set(circles, {
// 	xPercent: -20,
// 	yPercent: -10
// });


// const s3 = gsap.timeline({
// 	defaults: {ease: "none", duration: 1},
// 	scrollTrigger: {
// 		trigger: "#container",
// 		scrub: true,
// 		start: "top top",
// 		end: "bottom top",
// 		invalidateOnRefresh: true
// 	}
// });

// s3.addLabel("pin1")
//   .to(wrappers, {
// 	  x: '80vw',
// 	  y: '50vh',
//   })
//   .to(wrappers, {
// 	  x: '20vw'
//   })
//   .to(wrappers, {
// 	  x: '80vw'
//   })
//   .addLabel("pin2")
//   .to(wrappers, {
// 	  x: index => (window.innerWidth / 5) * (index + 1)
//   });



// // timeline, elements to pin, minimum pin distance
// setupTimelinePins(s3, ".pinnedsection", 300);



// // helper function
// // parameters: timeline, elements to pin (can be an Array of elements or selector text), minimum pin distance (defaults to 300px)
// function setupTimelinePins(tl, sections, minPinLength) {
// 	sections = gsap.utils.toArray(sections);
// 	minPinLength = minPinLength || 300; // default to 300px
// 	let distances, ratios, multiplier, triggers,
// 		st = tl.scrollTrigger,
// 		labels = tl.labels,
// 		totalDuration = tl.totalDuration(),
// 		findNextPin = i => {
// 			let num = i,
// 				pin;
// 			while (!pin && i < sections.length && pin !== 0) {
// 				pin = labels["pin" + (num+1)];
// 				!pin && pin !== 0 && sections.splice(i, 1); // didn't find, so delete from sections.
// 				num++;
// 			}
// 			return pin || pin === 0 ? num : null;
// 		},
// 		durations = [],
// 		calculate = () => { // wrap this logic in a function so we can re-calculate on resize (responsive)
// 			triggers && triggers.forEach(t => t.revert());
// 			st.refresh(); // calculate the start/end values
// 			triggers && triggers.forEach(t => t.revert());
// 			let totalDistance = 0,
// 				firstTop = sections[0].offsetTop,
// 				firstST = triggers ? triggers[0] : ScrollTrigger.create({
// 					trigger: sections[0],
// 					start: "top top",
// 					end: "+=100%"
// 				});
// 			if (triggers) {
// 				triggers.forEach(t => t.revert()); // only necessary for 3.6.1 and earlier
// 				firstST.refresh();
// 				triggers.forEach(t => t.revert()); // firstST.refresh() can trigger pinning/padding/layout changes
// 			}
// 			distances = sections.map((section, i) => { // scroll distance between each section's start
// 				let next = sections[i + 1],
// 					distance = next ? next.offsetTop - section.offsetTop : st.end - (firstST.start + (section.offsetTop - firstTop));
// 				totalDistance += distance;
// 				return distance + minPinLength; // factor in the minimum pin length
// 			});
// 			totalDistance += sections.length * minPinLength;
// 			ratios = sections.map((section, i) => ((durations[i] / totalDuration) / (distances[i] / totalDistance)) || 0);
// 			multiplier = 1 / Math.min(...ratios);
// 		},
// 		l = sections.length,
// 		cur = findNextPin(0),
// 		i, next;
// 	for (i = 1; i <= l; i++) { // calculate the time between pin labels in the timeline. If a pin is missing, remove it from the sections Array (skip)
// 		next = findNextPin(i);
// 		durations.push((next ? labels["pin" + next] : totalDuration) - labels["pin" + cur]);
// 		cur = next;
// 	}
// 	durations.forEach((n, i) => n || (durations.splice(i, 1) && sections.splice(i, 1))); // don't allow zero durations or pinning will be infinite.
// 	calculate();
// 	triggers = sections.map((section, i) => {
// 		return ScrollTrigger.create({
// 			trigger: section,
// 			pin: true,
// 			start: "top top",
// 			refreshPriority: 100 - i, // to ensure these resize before the parent refreshes, thus it includes the pinning adjustments
// 			end: () => "+=" + (distances[i] * (ratios[i] * multiplier - 1) + minPinLength) // use function-based to make it responsive
// 		});
// 	});
// 	ScrollTrigger.addEventListener("refreshInit", calculate); // to make responsive
// 	ScrollTrigger.refresh();
// }