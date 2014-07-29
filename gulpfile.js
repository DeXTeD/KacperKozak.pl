var fs = require('fs');

var gulp = require('gulp');
var gutil = require('gulp-util');

var rename = require("gulp-rename");
var coffee = require('gulp-coffee');
var uglify = require('gulp-uglify');
var stylus = require('gulp-stylus');
var minifyCSS = require('gulp-minify-css');
var autoprefixer = require('gulp-autoprefixer');
var concat = require('gulp-concat');

var pkg = require('./package.json');

var paths = {
	scripts: [
		'coffee/main.coffee'
	],
	styles: ['stylus/main.styl']
};

var output = {
	styles: 'public/css',
	scripts: 'public/js'
};


gulp.task('scripts', function() {
	gulp.src(paths.scripts)
		.pipe(concat(pkg.name+'.coffee'))
		.pipe(gulp.dest(output.scripts))
		.pipe(coffee().on('error', gutil.log))
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
	gulp.src(paths.styles)
		.pipe(stylus())
		.pipe(autoprefixer())
		.pipe(gulp.dest(output.styles))
		.pipe(minifyCSS({keepBreaks:true}))
		.pipe(rename({extname: ".min.css"}))
		.pipe(gulp.dest(output.styles));
});


gulp.task('build', ['scripts', 'styles']);
gulp.task('default', ['scripts', 'styles', 'watch']);