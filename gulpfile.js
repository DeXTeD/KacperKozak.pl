var fs = require('fs');

var gulp = require('gulp');
var gutil = require('gulp-util');
var gulpif = require('gulp-if');

var rename = require("gulp-rename");
var coffee = require('gulp-coffee');
var uglify = require('gulp-uglify');
var stylus = require('gulp-stylus');
var minifyCSS = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');
// var browserify = require('gulp-browserify');

var pkg = require('./package.json');

var paths = {
	scripts: [
		'bower_components/jquery/dist/jquery.js',
		'bower_components/jquery-easing/jquery.easing.js',
		'bower_components/circliful/js/jquery.circliful.js',
		'coffee/**/*.coffee'
	],
	scriptsMain: 'coffee/main.coffee',
	styles: ['stylus/**/*.styl'],
	stylesMain: 'stylus/main.styl'
};

var output = {
	styles: 'public/css',
	scripts: 'public/js',
	scriptName: 'min.js'
};


gulp.task('scripts', function() {
	gulp.src(paths.scripts)
		.pipe(gulpif(/[.]coffee$/, coffee().on('error', gutil.log)))
		.pipe(concat(output.scriptName))
		.pipe(gulp.dest(output.scripts));
});

/*gulp.task('uglify', function() {
	gulp.src(output+'/'+pkg.name+'.js')
		.pipe(uglify({
			preserveComments: 'some',
			outSourceMap: false
		}))
		.pipe(rename({extname: ".min.js"}))
		.pipe(gulp.dest(output));
});*/


gulp.task('watch', function() {
	gulp.watch(paths.scripts, ['scripts']);
	gulp.watch(paths.styles,  ['styles']);
});


gulp.task('styles', function() {
	gulp.src(paths.stylesMain)
		.pipe(stylus())
		.pipe(autoprefixer())
		.pipe(gulp.dest(output.styles))
		.pipe(minifyCSS({keepBreaks:true}))
		.pipe(rename({extname: ".min.css"}))
		.pipe(gulp.dest(output.styles));
});


gulp.task('build', ['scripts', 'styles']);
gulp.task('default', ['scripts', 'styles', 'watch']);