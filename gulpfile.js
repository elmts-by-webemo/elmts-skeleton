"use strict";

// Load plugins
const autoprefixer = require("autoprefixer");
const browsersync = require("browser-sync").create();
const cssnano = require("cssnano");
const gulp = require("gulp");
const plumber = require("gulp-plumber");
const postcss = require("gulp-postcss");
const rename = require("gulp-rename");
const sass = require('gulp-sass')(require('sass'));
const sourcemaps = require('gulp-sourcemaps');
const livereload = require('gulp-livereload');
const uglify = require('gulp-uglify');
const exec = require('child_process').exec;



// Zadanie do uruchamiania serwera PHP
gulp.task('php-serve', (done) => {
    // Uruchamia serwer PHP
    exec('php -S localhost:8000 -t public', (err, stdout, stderr) => {
        if (err) {
            console.error(`exec error: ${err}`);
            return;
        }

        console.log(`stdout: ${stdout}`);
        console.error(`stderr: ${stderr}`);
    });

    done();
});

// Zadanie do kopiowania całego katalogu
gulp.task('copy-resources-images', (done) => {
    // Używa polecenia xcopy na Windows
    exec('xcopy "resources\\images" "public\\images\\" /E /I', (err, stdout, stderr) => {
        if (err) {
            console.error(`exec error: ${err}`);
            return;
        }

        console.log(`stdout: ${stdout}`);
        console.error(`stderr: ${stderr}`);
    });

    done();
});

// Zadanie Gulp do uruchomienia BrowserSync w trybie proxy
gulp.task('browser-sync', function(done) {
    browsersync.init({
        proxy: 'localhost:8000', // Użyj adresu URL swojego lokalnego serwera PHP
        port: 3000, // Opcjonalnie, port na którym BrowserSync będzie dostępny
        open: true, // Opcjonalnie, czy automatycznie otwierać przeglądarkę
        notify: false // Opcjonalnie, wyłącza powiadomienia BrowserSync
    });

    done();
});


// Compile CSS without minification for style.css
gulp.task("css", () => {
    return gulp
        .src("src/scss/style.scss")
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass({ outputStyle: "expanded" }))
        .pipe(rename("style.css"))
        .pipe(postcss([autoprefixer()]))
        .pipe(sourcemaps.write('maps'))
        .pipe(gulp.dest("src/css"))
        .pipe(browsersync.stream());
});

// Compile CSS without minification for style-project.css
gulp.task("css-project", () => {
    return gulp
        .src("src/scss/style-project.scss")
        .pipe(sourcemaps.init())
        .pipe(plumber())
        .pipe(sass({ outputStyle: "expanded" }))
        .pipe(rename("style-project.css"))
        .pipe(postcss([autoprefixer()]))
        .pipe(sourcemaps.write('maps'))
        .pipe(gulp.dest("src/css"))
        .pipe(browsersync.stream());
});

// Compile and minify CSS for production for style.css
gulp.task("css-minify", () => {
    return gulp
        .src("src/scss/style.scss")
        .pipe(plumber())
        .pipe(sass({ outputStyle: "expanded" }))
        .pipe(rename({ suffix: ".min" }))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(gulp.dest("public/css"));
});

// Compile and minify CSS for production for style-project.css
gulp.task("css-project-minify", () => {
    return gulp
        .src("src/scss/style-project.scss")
        .pipe(plumber())
        .pipe(sass({ outputStyle: "expanded" }))
        .pipe(rename({ suffix: ".min" }))
        .pipe(postcss([autoprefixer(), cssnano()]))
        .pipe(gulp.dest("public/css"));
});

// Zadanie do minifikacji JavaScript
gulp.task('minify-js', function() {
    return gulp.src('src/js/**/*.js') // Wybiera wszystkie pliki JS w folderze src/js i jego podfolderach
        .pipe(uglify()) // Minifikuje pliki JS
        .pipe(rename({ suffix: '.min' })) // Dodaje sufiks .min do nazw plików
        .pipe(gulp.dest('public/js')); // Przenosi minifikowane pliki do folderu public/js
});

// Watch files
gulp.task("watch", () => {
    // Obserwacja zmian w PHP
    gulp.watch('./**/*.php').on('change', browsersync.reload);
    // Obserwacja zmian w SCSS i odświeżanie CSS w przeglądarce
    gulp.watch("src/scss/**/*", gulp.series("css", "css-project", "css-minify", "css-project-minify", function(done) {
        browsersync.reload();
        done();
    }));
    // Obserwacja zmian w JS i przeładowanie przeglądarki
    gulp.watch('src/js/**/*.js', gulp.series('minify-js', function(done) {
        browsersync.reload();
        done();
    }));
    // Obserwuje zmiany w Images
    gulp.watch('resources/images/**/*', gulp.series('copy-resources-images', function(done) {
        browsersync.reload(); // Przeładowanie przeglądarki po skopiowaniu obrazów
        done();
    }));
});

// Default task
gulp.task('default', gulp.series('php-serve', 'copy-resources-images', 'css', 'css-project', 'css-minify', 'css-project-minify', 'minify-js', 'browser-sync', 'watch'));