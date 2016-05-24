var gulp    = require('gulp');
var phpcs   = require('gulp-phpcs');
var phplint = require('gulp-phplint');
var shell   = require('gulp-shell');

gulp.task('sniff', function () {
    return gulp.src('src/**/*.php')
        .pipe(phpcs({
            bin: 'bin/phpcs',
            standard: 'PSR2',
            warningSeverity: 0
        }))
        .pipe(phpcs.reporter('log'));
});

gulp.task('beautify', shell.task(['bin/phpcbf --standard=PSR2 --ignore=vendor/ src/']));

gulp.task('phplint', function() {
  gulp.src('src/**/*.php')
      .pipe(phplint());
});

gulp.task('lint', ['phplint', 'sniff'], function() {
  console.log('Linting complete!');
});
