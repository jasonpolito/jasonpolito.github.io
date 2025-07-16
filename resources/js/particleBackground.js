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

    const fieldSpacing = 20;
    let cols, rows, field;
    let zOffset = 0;

    const isMobileDevice = isMobile();
    const numParticles = isMobileDevice ? 500 : 1000;
    const particles = [];
    const emittedParticles = [];

    let mouse = { x: null, y: null };
    let lastBurstTime = 0;

    class EmittedParticle {
        constructor(x, y) {
            this.x = x;
            this.y = y;
            this.vx = (Math.random() - 0.5) * 2;
            this.vy = (Math.random() - 0.5) * 2;
            this.life = 1.0;
            this.startTime = performance.now();
        }

        update() {
            this.x += this.vx;
            this.y += this.vy;
            this.life = 1 - (performance.now() - this.startTime) / 3000;
        }

        draw(ctx) {
            if (this.life <= 0) return;
            ctx.beginPath();
            ctx.arc(this.x, this.y, 1.5, 0, Math.PI * 2);
            ctx.fillStyle = `rgba(255, 255, 255, ${this.life})`;
            ctx.fill();
        }

        isAlive() {
            return this.life > 0;
        }
    }

    function resizeCanvas() {
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

    window.addEventListener("mousemove", (e) => {
        const rect = canvas.getBoundingClientRect();
        mouse.x = e.clientX - rect.left;
        mouse.y = e.clientY - rect.top;

        if (isMobileDevice) {
            const now = performance.now();
            if (now - lastBurstTime > 100) {
                for (let i = 0; i < 8; i++) {
                    emittedParticles.push(
                        new EmittedParticle(mouse.x, mouse.y)
                    );
                }
                lastBurstTime = now;
            }
        }
    });

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
            this.p = Array.from({ length: 256 }, () =>
                Math.floor(Math.random() * 256)
            );
            this.perm = [...this.p, ...this.p];
        }
        dot(g, x, y, z) {
            return g[0] * x + g[1] * y + g[2] * z;
        }
        noise(xin, yin, zin) {
            const F3 = 1 / 3,
                G3 = 1 / 6;
            let s = (xin + yin + zin) * F3;
            let i = Math.floor(xin + s);
            let j = Math.floor(yin + s);
            let k = Math.floor(zin + s);
            let t = (i + j + k) * G3;
            let x0 = xin - (i - t);
            let y0 = yin - (j - t);
            let z0 = zin - (k - t);
            let i1, j1, k1, i2, j2, k2;
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
            const grad = (xi, yi, zi, gi) => {
                let t = 0.6 - xi * xi - yi * yi - zi * zi;
                if (t < 0) return 0;
                t *= t;
                return t * t * this.dot(this.grad3[gi], xi, yi, zi);
            };
            let ii = i & 255,
                jj = j & 255,
                kk = k & 255;
            let gi0 = this.perm[ii + this.perm[jj + this.perm[kk]]] % 12;
            let gi1 =
                this.perm[ii + i1 + this.perm[jj + j1 + this.perm[kk + k1]]] %
                12;
            let gi2 =
                this.perm[ii + i2 + this.perm[jj + j2 + this.perm[kk + k2]]] %
                12;
            let gi3 =
                this.perm[ii + 1 + this.perm[jj + 1 + this.perm[kk + 1]]] % 12;
            return (
                32.0 *
                (grad(x0, y0, z0, gi0) +
                    grad(x0 - i1 + G3, y0 - j1 + G3, z0 - k1 + G3, gi1) +
                    grad(
                        x0 - i2 + 2 * G3,
                        y0 - j2 + 2 * G3,
                        z0 - k2 + 2 * G3,
                        gi2
                    ) +
                    grad(
                        x0 - 1 + 3 * G3,
                        y0 - 1 + 3 * G3,
                        z0 - 1 + 3 * G3,
                        gi3
                    ))
            );
        }
    }

    const simplex = new SimplexNoise();

    for (let i = 0; i < numParticles; i++) {
        particles.push(new Particle());
    }

    function animate() {
        ctx.globalCompositeOperation = "destination-out";
        ctx.fillStyle = "rgba(0, 0, 0, 0.1)";
        ctx.fillRect(0, 0, width, height);

        ctx.globalCompositeOperation = "lighter";
        zOffset += 0.003;
        generateFlowField();

        const qt = new Quadtree({ x: 0, y: 0, width, height }, 4);
        for (const p of particles) qt.insert(p);

        let nearby = [];
        if (mouse.x !== null && mouse.y !== null) {
            nearby = qt.query({
                x: mouse.x - 300,
                y: mouse.y - 300,
                width: 600,
                height: 600,
            });
        }

        for (const p of particles) {
            p._nearMouse = nearby.includes(p);
            p.update();
            p.draw(ctx);
        }

        for (let i = emittedParticles.length - 1; i >= 0; i--) {
            const ep = emittedParticles[i];
            ep.update();
            ep.draw(ctx);
            if (!ep.isAlive()) emittedParticles.splice(i, 1);
        }

        requestAnimationFrame(animate);
    }

    animate();
    setTimeout(() => canvas.classList.remove("opacity-0"), 100);
}

buildParticleBackground();
window.addEventListener("resize", buildParticleBackground);
