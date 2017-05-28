// Require plugins
const gulp = require('gulp'),
      sass = require('gulp-sass'),
      gutil = require('gulp-util'),
      plumber = require('gulp-plumber'),
      rename = require('gulp-rename'),
      minifyCSS = require('gulp-clean-css'),
      prefixer = require('gulp-autoprefixer'),
      connect = require('gulp-connect'),
      cp = require('child_process'),
      sourcemaps = require('gulp-sourcemaps'),
      concat = require('gulp-concat'),
      notify = require('gulp-notify'),
      cache = require('gulp-cache'),
      uglify = require('gulp-uglify'),
      imagemin = require('gulp-imagemin'),
      del = require('del'),
      browserSync = require('browser-sync').create();

// Set variables
const base_path = './',
      src = base_path + '_dev/src',
      dist = base_path + 'assets',
      paths = {
          js: src + '/js/*.js',
          libs: src + '/js/libs/*js',
          scss: [ src +'/sass/*.scss',
                  src +'/sass/**/* .scss',
                  src +'/sass/**/**/*.scss'],
          images: [ src + '/images/**/*'],
      };


// Compile Sass
gulp.task('styles', () => {
  return gulp.src(paths.scss)
    .pipe(plumber((error) => {
        gutil.log(gutil.colors.red(error.message));
        gulp.task('styles').emit('end');
    }))
    .pipe(sass())
    .pipe(prefixer('last 3 versions', 'ie 9'))
    .pipe(sourcemaps.init())
    .pipe(minifyCSS())
    // .pipe(sourcemaps.write())
    .pipe(rename({dirname: dist + '/css'}))
    .pipe(gulp.dest('./'))
    .pipe(browserSync.stream())
    .pipe(notify({ message: 'Styles compiled' }));
});

// Compile Scripts Libraries
gulp.task('libs', () => {
  return gulp.src(paths.libs)
    .pipe(plumber((error) => {
        gutil.log(gutil.colors.red(error.message));
        gulp.task('libs').emit('end');
    }))
    .pipe(concat('libs.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(rename({dirname: dist + '/js'}))
    .pipe(gulp.dest('./'))
    .pipe(notify({ message: 'JS libraries compiled' }));
});

// Compile Scripts
gulp.task('scripts', () => {
  return gulp.src(paths.js)
    .pipe(plumber((error) => {
        gutil.log(gutil.colors.red(error.message));
        gulp.task('scripts').emit('end');
    }))
    .pipe(concat('scripts.js'))
    .pipe(rename({suffix: '.min'}))
    .pipe(uglify())
    .pipe(rename({dirname: dist + '/js'}))
    .pipe(gulp.dest('./'))
    .pipe(notify({ message: 'Scripts compiled' }));
});

// Shrink images
gulp.task('images', function() {
  return gulp.src(paths.images)
    .pipe(cache(imagemin({ optimizationLevel: 5, progressive: true, interlaced: true })))
    .pipe(gulp.dest(dist + '/images'))
    .pipe(notify({ message: 'Images compiled' }));
});


// Serve Jekyll using browserSync
gulp.task('serve', () => {
  browserSync.init({
    files: ['assets/**'],
    proxy: "localhost/kirby",
  })
});

// Clean out dist CSS & JS folders
gulp.task('clean', function() {
    return del([dist + '/css', dist + '/js']);
});

// Watch files
gulp.task('watch', () => {
  gulp.watch(paths.scss, ['styles']);
  gulp.watch(paths.libs, ['libs']);
  gulp.watch(paths.js, ['scripts']);
  gulp.watch(paths.images, ['images']);
});

// Run everything
gulp.task('default', ['serve', 'styles', 'scripts', 'libs', 'watch']);
