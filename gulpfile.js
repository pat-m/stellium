'use strict';

const gulp = require('gulp');
const sass = require('gulp-sass');

gulp.task('styles', function () {
    return gulp.src('./assets/styles/main.scss')
        .pipe(sass().on('error', sass.logError))
        .pipe(gulp.dest('./dist/styles'));
});

gulp.task('watch', function () {
    gulp.watch('./assets/styles/**/*.scss', ['styles']);
});

gulp.task('default', ['styles']);