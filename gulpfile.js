var gulp = require('gulp');
var merge = require('merge-stream');
var sass = require('gulp-sass');
var sourcemaps = require('gulp-sourcemaps');
var plumber = require('gulp-plumber');
var watch = require('gulp-watch');
var cssnano = require('gulp-cssnano');

function copy(from, to) {
    return gulp.src(from)
        .pipe(gulp.dest(to));
}

gulp.task('copy', function() {
    return merge(
        copy('node_modules/font-awesome/fonts/*', 'public/fonts'),
        copy('node_modules/connect-fonts-ubuntu/fonts/default/*', 'public/fonts'),
        // copy('node_modules/bpg-extrasquare-mtavruli/fonts/*', 'public/fonts'),
        // copy('node_modules/font-larisome/fonts/*', 'public/fonts'),
        copy('node_modules/bootstrap/dist/js/bootstrap.min.js', 'public/js'),
        copy('node_modules/jquery/dist/jquery.min.js', 'public/js')
    );
});

gulp.task('sass', function(cb) {
    return gulp.src('resources/assets/sass/app.scss')
        .pipe(plumber({
            errorHandler: cb,
        }))
        .pipe(sourcemaps.init())
        .pipe(sass())
        .pipe(cssnano())
        .pipe(sourcemaps.write())
        .pipe(gulp.dest('public/css'));
});

gulp.task('default', ['copy', 'sass']);

gulp.task('watch', ['sass'], function(cb) {
    watch('resources/assets/sass/*', function() {
        gulp.start('sass');
    });
});