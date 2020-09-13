import gulp from 'gulp';
import minifycss from 'gulp-minify-css';
import uglify from 'gulp-uglify';
import concat from 'gulp-concat';
import imagemin from 'gulp-imagemin';
import rename from 'gulp-rename';
import babel from 'gulp-babel';
import sass from 'gulp-sass';
sass.compiler = require("node-sass"); //Necessário para funcionar gulp-sass

gulp.task('prepare-css', gulp.series(function () {
    const projectDir = "src/css/**/*";
    const buildDir = "build/css/";
    return gulp.src(projectDir)
        .pipe(gulp.dest("src/css/"))//coloca os arquivos css na pasta css
        .pipe(concat('style.css'))//Concatena 
        .pipe(minifycss())//Minifica os arquivos 
        .pipe(rename({ suffix: '.min' }))//Renomeia o arquivo para min
        .pipe(gulp.dest(buildDir));// E coloca na pasta de build
}));
gulp.task('prepare-scss', gulp.series(function () {
    const projectDirScss = "src/scss/**/*";
    const buildDir = "build/scss/";
    return gulp.src(projectDirScss)
        .pipe(sass()) // Converte Sass para CSS com gulp-sass
        .pipe(concat('style.scss'))//Concatena 
        .pipe(minifycss())//Minifica os arquivos 
        .pipe(rename({ suffix: '.min' }))//Renomeia o arquivo para min
        .pipe(gulp.dest(buildDir));// E coloca na pasta de build
}));
gulp.task('prepare-js', gulp.series(function () {
    const projectDir = "src/js/**/*";
    const buildDir = "build/js/";
    return gulp.src(projectDir)
        .pipe(babel({ "presets": ["@babel/preset-env"] }))
        .pipe(concat('scripts.js'))
        .pipe(uglify())
        .pipe(rename({ suffix: '.min' }))
        .pipe(gulp.dest(buildDir));
}));

gulp.task('optimize-img', gulp.series(function () {
    const projectDir = "src/img/**/*";
    const buildDir = "build/img/";;
    return gulp.src(projectDir)
        .pipe(imagemin())
        .pipe(gulp.dest(buildDir));
}));

gulp.task('watch', gulp.series(function () {
    const projectDirCss = "src/css/**/*";
    const projectDirScss = "src/scss/**/*";
    const projectDirJs = "src/js/**/*";
    const projectDirImg = "src/img/**/*";

    gulp.watch(projectDirCss, gulp.series('prepare-css'));
    gulp.watch(projectDirScss, gulp.series('prepare-scss'));
    gulp.watch(projectDirJs, gulp.series('prepare-js'));
    gulp.watch(projectDirImg, gulp.series('optimize-img'));
}));

gulp.task('default', gulp.series('prepare-css', 'prepare-scss', 'prepare-js', 'optimize-img', 'watch'));

