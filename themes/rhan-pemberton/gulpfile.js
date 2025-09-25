const gulp = require('gulp');
const sass = require('gulp-sass')(require('sass'));
const cleanCSS = require('gulp-clean-css');
const fileInclude = require('gulp-file-include');
const uglify = require('gulp-uglify');

// Paths
const paths = {
	scss: 'src/scss/site.scss',
	cssDest: 'dist',
	jsSrc: 'src/js/site.js',
	jsDest: 'dist'
};

// Compile SCSS to CSS and minify
function styles() {
	return gulp.src(paths.scss)
		.pipe(sass().on('error', sass.logError))
		.pipe(cleanCSS({ compatibility: 'ie11' }))
		.pipe(gulp.dest(paths.cssDest));
}

// Process JS with includes
function scripts() {
	return gulp.src(paths.jsSrc)
		.pipe(fileInclude({
			prefix: '//=',
			basepath: '@file'
		}))
		.pipe(uglify()) // <- minify + strip comments
		.pipe(gulp.dest(paths.jsDest));
}

// Watch task
function watch() {
	gulp.watch('src/scss/**/*.scss', styles);
	gulp.watch('src/js/**/*.js', scripts);
}

// Exports
exports.styles = styles;
exports.scripts = scripts;
exports.watch = watch;
exports.default = gulp.series(gulp.parallel(styles, scripts), watch);
