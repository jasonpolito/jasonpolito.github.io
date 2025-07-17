// import "./particleBackground";
import fitty from "fitty";
import "./wordRotator";
import "./_tailwindColors";

const fitties = fitty(".fitty");

import "./painterly";

setTimeout(() => {
    fitties.forEach((fittyInstance) => {
        fittyInstance.fit({
            multiLine: false,
        });
    });
}, 10);
