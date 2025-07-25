// import "./particleBackground";
import fitty from "fitty";
// import "./wordRotator";
// import "./_tailwindColors";
// import Macy from "macy";

const fitties = fitty(".fitty", {
    minSize: 0,
    multiLine: false,
});

import "./painterly";

setInterval(() => {
    fitties.forEach((fittyInstance) => {
        fittyInstance.fit();
        console.log("fitting instances...");
    });
}, 500);

// document.querySelectorAll(".macy").forEach((el) => {
//     const macyInstance = Macy({
//         container: el,
//         trueOrder: false,
//         waitForImages: true,
//         margin: 12,
//         columns: 3,
//         breakAt: {
//             1024: 3,
//             768: 2,
//             640: 1,
//         },
//     });
//     console.log(macyInstance);
// });
