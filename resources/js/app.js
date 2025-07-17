// import "./particleBackground";
import fitty from "fitty";
import "./wordRotator";

const fitties = fitty(".fitty");

// import "./painterly";

setTimeout(() => {
    fitties.forEach((fittyInstance) => {
        fittyInstance.fit();
    });
}, 10);
