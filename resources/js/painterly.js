const displacementMaps = document.querySelectorAll("[data-displacement-map]");
displacementMaps.forEach((el) => {
    const filter = el.querySelector("feTurbulence");
    if (filter) {
        const displacementFilterValues = [0.02, 0.01, 0.021, 0.017];
        let displacementIndex = 0;
        setInterval(() => {
            filter.setAttribute(
                "baseFrequency",
                displacementFilterValues[displacementIndex]
            );
            displacementIndex =
                (displacementIndex + 1) % displacementFilterValues.length;
        }, 500);
    }
});
