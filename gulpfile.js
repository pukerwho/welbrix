const { src, dest, series } = require('gulp');
const sass = require('gulp-sass');
const concat = require('gulp-concat');

function scss() {
  return src('./source/sass/style.scss')
    .pipe(sass().on('error', sass.logError))
    .pipe(dest('./build/css'));
}

function scripts() {
	return src('./source/javascript/**/*.js')
		.pipe(concat('all.js'))
    .pipe(dest('./build/js'));
}

exports.scss = scss;
exports.scripts = scripts;

exports.default = series(scss, scripts);