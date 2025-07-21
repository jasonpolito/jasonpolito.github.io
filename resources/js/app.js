// import "./particleBackground";
import fitty from "fitty";
import "./wordRotator";
// import "./_tailwindColors";

const fitties = fitty(".fitty", {
    minSize: 0,
    multiLine: false,
});

import "./painterly";

setTimeout(() => {
    fitties.forEach((fittyInstance) => {
        fittyInstance.fit();
    });
}, 10);
