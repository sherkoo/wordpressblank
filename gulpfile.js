/* ==================================================

@Description: Starter gulpfile
@Author: Stephen Herko
@Url: stephenherko.com
@Twitter: @stpehenherko

================================================== */

/* ==================================================

Node Modules

================================================== */

var gulp = require('gulp'),
    gulpUtil = require('gulp-util'),
    concat = require('gulp-concat'),
    uglify = require('gulp-uglify'),
    minify = require('gulp-minify-css'),
    changed = require('gulp-changed'),
    compass = require('gulp-compass'),
    livereload = require('gulp-livereload'),
    watch = require('gulp-watch');

/* ==================================================

Tasks

================================================== */

// task: default
gulp.task('default', ['watch']);

// task: javascripts
gulp.task('scripts', function(){
  return gulp.src('assets/js/libs/*.js')
    .pipe(concat('main.min.js'))
    .pipe(uglify())
    .pipe(gulp.dest('assets/js/min'))
});

//task: compass
gulp.task('compass', function(){
  return gulp.src('sass/*.scss')
    .pipe(compass({
      config_file: 'config.rb',
      css: 'stylesheets',
      sass: 'sass'
    }))
    .pipe(gulp.dest('stylesheets'));
});

// task: css
gulp.task('css', function(){
  return gulp.src('assets/css/libs/*.css')
    .pipe(concat('main.min.css'))
    .pipe(minify())
    .pipe(gulp.dest('assets/css/min'))
    .pipe(livereload());
});

/* ==================================================

Watch

================================================== */

// watch over changes of source files
gulp.task('watch', function() {
  gulp.watch('*').on('change', livereload.changed);
  gulp.watch('assets/js/**', ['scripts']);
  gulp.watch('assets/css/**', ['css']);
  gulp.watch('./sass/*.scss', ['compass']).on('change', livereload.changed);
  gulp.watch('./stylesheets/style.css').on('change', livereload.changed);
});
