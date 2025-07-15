import fs from "fs";
import path from "path";
import { defineConfig } from "vite";
import laravel from "laravel-vite-plugin";
import tailwindcss from "@tailwindcss/vite";
import autoprefixer from "autoprefixer";

function replaceUrlsInDist({ dir, find, replace }) {
    return {
        name: "replace-urls-post-build",
        closeBundle() {
            const walk = (dirPath) => {
                const entries = fs.readdirSync(dirPath, {
                    withFileTypes: true,
                });
                for (const entry of entries) {
                    const fullPath = path.join(dirPath, entry.name);
                    if (entry.isDirectory()) {
                        walk(fullPath);
                    } else if (
                        entry.isFile() &&
                        /\.(js|css|html|json|txt)$/.test(entry.name)
                    ) {
                        let content = fs.readFileSync(fullPath, "utf-8");
                        const replaced = content.replace(
                            new RegExp(find, "g"),
                            replace
                        );
                        if (replaced !== content) {
                            fs.writeFileSync(fullPath, replaced);
                            console.log(`Replaced in ${fullPath}`);
                        }
                    }
                }
            };
            walk(dir);
        },
    };
}

export default defineConfig({
    plugins: [
        laravel({
            input: ["resources/css/app.css", "resources/js/app.js"],
            refresh: true,
        }),
        tailwindcss(),
        replaceUrlsInDist({
            dir: "dist", // or 'public/build' for Laravel
            find: "http://localhost:8000",
            replace: "https://jasonpolito.github.io/jasonpolito",
        }),
    ],
    css: {
        postcss: {
            plugins: [
                autoprefixer({}), // add options if needed
            ],
        },
    },
});
