function isMobile() {
    return /Mobi|Android|iPhone|iPad|iPod|BlackBerry|IEMobile|Opera Mini/i.test(
        navigator.userAgent
    );
}

function buildParticleBackground() {
    const canvas = document.getElementById("flowfield");
    const canvasParent = document.getElementById("fullystacked");
    const ctx = canvas.getContext("2d");

    let width = canvasParent.clientWidth;
    let height = canvasParent.clientHeight;
    canvas.width = width;
    canvas.height = height;

    // Flow field settings
    const fieldSpacing = 20;
    let cols, rows, field;
    let zOffset = 0;

    // Particle settings
    const numParticles = 1000;
    const particles = [];

    // Resize
    function resizeCanvas() {
        console.log(canvasParent.clientHeight, canvasParent.clientWidth);
        width = canvasParent.clientWidth;
        height = canvasParent.clientHeight;
        canvas.width = width;
        canvas.height = height;

        cols = Math.floor(width / fieldSpacing);
        rows = Math.floor(height / fieldSpacing);
        field = new Array(cols * rows).fill(0);
    }
    window.addEventListener("resize", resizeCanvas);
    resizeCanvas();

    // Perlin Noise (Simplex style)
    class SimplexNoise {
        constructor() {
            this.grad3 = [
                [1, 1, 0],
                [-1, 1, 0],
                [1, -1, 0],
                [-1, -1, 0],
                [1, 0, 1],
                [-1, 0, 1],
                [1, 0, -1],
                [-1, 0, -1],
                [0, 1, 1],
                [0, -1, 1],
                [0, 1, -1],
                [0, -1, -1],
            ];
            this.p = Array.from(
                {
                    length: 256,
                },
                () => Math.floor(Math.random() * 256)
            );
            this.perm = [...this.p, ...this.p];
        }

        dot(g, x, y, z) {
            return g[0] * x + g[1] * y + g[2] * z;
        }

        noise(xin, yin, zin) {
            const F3 = 1 / 3;
            const G3 = 1 / 6;
            let n0, n1, n2, n3;

            let s = (xin + yin + zin) * F3;
            let i = Math.floor(xin + s);
            let j = Math.floor(yin + s);
            let k = Math.floor(zin + s);

            let t = (i + j + k) * G3;
            let X0 = i - t;
            let Y0 = j - t;
            let Z0 = k - t;
            let x0 = xin - X0;
            let y0 = yin - Y0;
            let z0 = zin - Z0;

            let i1, j1, k1;
            let i2, j2, k2;

            if (x0 >= y0) {
                if (y0 >= z0) {
                    i1 = 1;
                    j1 = 0;
                    k1 = 0;
                    i2 = 1;
                    j2 = 1;
                    k2 = 0;
                } else if (x0 >= z0) {
                    i1 = 1;
                    j1 = 0;
                    k1 = 0;
                    i2 = 1;
                    j2 = 0;
                    k2 = 1;
                } else {
                    i1 = 0;
                    j1 = 0;
                    k1 = 1;
                    i2 = 1;
                    j2 = 0;
                    k2 = 1;
                }
            } else {
                if (y0 < z0) {
                    i1 = 0;
                    j1 = 0;
                    k1 = 1;
                    i2 = 0;
                    j2 = 1;
                    k2 = 1;
                } else if (x0 < z0) {
                    i1 = 0;
                    j1 = 1;
                    k1 = 0;
                    i2 = 0;
                    j2 = 1;
                    k2 = 1;
                } else {
                    i1 = 0;
                    j1 = 1;
                    k1 = 0;
                    i2 = 1;
                    j2 = 1;
                    k2 = 0;
                }
            }

            let x1 = x0 - i1 + G3;
            let y1 = y0 - j1 + G3;
            let z1 = z0 - k1 + G3;
            let x2 = x0 - i2 + 2 * G3;
            let y2 = y0 - j2 + 2 * G3;
            let z2 = z0 - k2 + 2 * G3;
            let x3 = x0 - 1 + 3 * G3;
            let y3 = y0 - 1 + 3 * G3;
            let z3 = z0 - 1 + 3 * G3;

            let ii = i & 255;
            let jj = j & 255;
            let kk = k & 255;
            let gi0 = this.perm[ii + this.perm[jj + this.perm[kk]]] % 12;
            let gi1 =
                this.perm[ii + i1 + this.perm[jj + j1 + this.perm[kk + k1]]] %
                12;
            let gi2 =
                this.perm[ii + i2 + this.perm[jj + j2 + this.perm[kk + k2]]] %
                12;
            let gi3 =
                this.perm[ii + 1 + this.perm[jj + 1 + this.perm[kk + 1]]] % 12;

            let t0 = 0.6 - x0 * x0 - y0 * y0 - z0 * z0;
            if (t0 < 0) n0 = 0.0;
            else {
                t0 *= t0;
                n0 = t0 * t0 * this.dot(this.grad3[gi0], x0, y0, z0);
            }

            let t1 = 0.6 - x1 * x1 - y1 * y1 - z1 * z1;
            if (t1 < 0) n1 = 0.0;
            else {
                t1 *= t1;
                n1 = t1 * t1 * this.dot(this.grad3[gi1], x1, y1, z1);
            }

            let t2 = 0.6 - x2 * x2 - y2 * y2 - z2 * z2;
            if (t2 < 0) n2 = 0.0;
            else {
                t2 *= t2;
                n2 = t2 * t2 * this.dot(this.grad3[gi2], x2, y2, z2);
            }

            let t3 = 0.6 - x3 * x3 - y3 * y3 - z3 * z3;
            if (t3 < 0) n3 = 0.0;
            else {
                t3 *= t3;
                n3 = t3 * t3 * this.dot(this.grad3[gi3], x3, y3, z3);
            }

            return 32.0 * (n0 + n1 + n2 + n3);
        }
    }

    const simplex = new SimplexNoise();

    function generateFlowField() {
        let index = 0;
        for (let y = 0; y < rows; y++) {
            for (let x = 0; x < cols; x++) {
                const angle =
                    simplex.noise(x * 0.1, y * 0.1, zOffset) * Math.PI * 2;
                field[index++] = angle;
            }
        }
    }

    class Particle {
        constructor() {
            this.reset();
        }

        reset() {
            this.x = Math.random() * width;
            this.y = Math.random() * height;
            this.vx = 0;
            this.vy = 0;
            this.speed = 1;
            this.history = [];
        }

        update() {
            const col = Math.floor(this.x / fieldSpacing);
            const row = Math.floor(this.y / fieldSpacing);
            const index = row * cols + col;

            if (field[index] !== undefined) {
                const angle = field[index];
                this.vx += Math.cos(angle) * 0.1;
                this.vy += Math.sin(angle) * 0.1;
            }

            this.vx *= 0.9;
            this.vy *= 0.9;
            this.x += this.vx;
            this.y += this.vy;

            this.history.push([this.x, this.y]);
            if (this.history.length > 5) this.history.shift();

            // Reset if out of bounds
            if (this.x < 0 || this.x > width || this.y < 0 || this.y > height) {
                this.reset();
            }
        }

        draw(ctx) {
            if (this.history.length < 2) return;
            ctx.beginPath();
            ctx.moveTo(this.history[0][0], this.history[0][1]);
            for (let i = 1; i < this.history.length; i++) {
                ctx.lineTo(this.history[i][0], this.history[i][1]);
            }
            ctx.strokeStyle = "rgba(188, 58, 160, 0.2)";
            ctx.lineWidth = 1;
            ctx.stroke();
        }
    }

    for (let i = 0; i < numParticles; i++) {
        particles.push(new Particle());
    }

    function animate() {
        // Fade out the previous frame (makes trails temporary)
        ctx.globalCompositeOperation = "destination-out";
        ctx.fillStyle = "rgba(0, 0, 0, 0.1)"; // slightly stronger = faster fade
        ctx.fillRect(0, 0, width, height);

        // Set back to normal drawing
        ctx.globalCompositeOperation = "lighter"; // or 'source-over' if you want subtle blend
        zOffset += 0.003; // small increments give smooth flow
        generateFlowField();

        particles.forEach((p) => {
            p.update();
            p.draw(ctx);
        });

        requestAnimationFrame(animate);
    }

    animate();
    setTimeout(() => {
        canvas.classList.remove("opacity-0"); // Fade in the canvas after setup
    }, 100);
}

if (!isMobile()) {
    buildParticleBackground();
}
