const wordRotators = document.querySelectorAll("[data-word-rotator]");
if (wordRotators.length) {
    wordRotators.forEach((element) => {
        const elts = {
            text1: element.querySelector(".text1"),
            text2: element.querySelector(".text2"),
        };

        const texts = JSON.parse(element.dataset.wordRotator);

        const morphTime = 1;
        const cooldownTime = 0.5;

        let textIndex = texts.length - 1;
        let time = new Date();
        let morph = 0;
        let cooldown = cooldownTime;

        elts.text1.textContent = texts[textIndex % texts.length];
        elts.text2.textContent = texts[(textIndex + 1) % texts.length];

        function doMorph() {
            morph -= cooldown;
            cooldown = 0;

            let fraction = morph / morphTime;

            if (fraction > 1) {
                cooldown = cooldownTime;
                fraction = 1;
            }

            setMorph(fraction);
        }

        // A lot of the magic happens here, this is what applies the blur filter to the text.
        function setMorph(fraction) {
            // fraction = Math.cos(fraction * Math.PI) / -2 + .5;

            elts.text2.style.filter = `blur(${Math.min(
                8 / fraction - 8,
                100
            )}px)`;
            elts.text2.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

            fraction = 1 - fraction;
            elts.text1.style.filter = `blur(${Math.min(
                8 / fraction - 8,
                100
            )}px)`;
            elts.text1.style.opacity = `${Math.pow(fraction, 0.4) * 100}%`;

            elts.text1.textContent = texts[textIndex % texts.length];
            elts.text2.textContent = texts[(textIndex + 1) % texts.length];
        }

        function doCooldown() {
            morph = 0;

            elts.text2.style.filter = "";
            elts.text2.style.opacity = "100%";

            elts.text1.style.filter = "";
            elts.text1.style.opacity = "0%";
        }

        // Animation loop, which is called every frame.
        function animate() {
            requestAnimationFrame(animate);

            let newTime = new Date();
            let shouldIncrementIndex = cooldown > 0;
            let dt = (newTime - time) / 1000;
            time = newTime;

            cooldown -= dt;

            if (cooldown <= 0) {
                if (shouldIncrementIndex) {
                    textIndex++;
                }

                doMorph();
            } else {
                doCooldown();
            }
        }

        // Start the animation.
        animate();
    });
}
