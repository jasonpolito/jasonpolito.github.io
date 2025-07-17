const PAINTERLY_UPDATE_INTERVAL = 200;
const displacementMaps = document.querySelectorAll("[data-displacement-map]");
displacementMaps.forEach((el) => {
    const filter = el.querySelector("feTurbulence");
    if (filter) {
        const displacementFilterValues = [
            0.02, 0.01, 0.021, 0.017, 0.015, 0.02, 0.022, 0.018, 0.016,
        ];
        let displacementIndex = 0;
        setInterval(() => {
            filter.setAttribute(
                "baseFrequency",
                displacementFilterValues[displacementIndex]
            );
            displacementIndex =
                (displacementIndex + 1) % displacementFilterValues.length;
        }, PAINTERLY_UPDATE_INTERVAL);
    }
});
