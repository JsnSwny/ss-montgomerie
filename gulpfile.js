var gulp = require("gulp");
var sass = require("gulp-sass");
var cssnano = require("gulp-cssnano");
var uglify = require("gulp-uglify");
var gulpIf = require("gulp-if");
var useref = require("gulp-useref");
var concat = require("gulp-concat");

gulp.task("useref", function() {
    return gulp
        .src("public/css/**/*.css")
        .pipe(useref())
        .pipe(gulpIf("*.css", cssnano()))
        .pipe(gulp.dest("public/dist"));
});

gulp.task("sass", function() {
    return gulp
        .src("public/scss/**/*.scss")
        .pipe(sass())
        .pipe(concat("styles.css"))
        .pipe(gulp.dest("public/css"));
});

gulp.task(
    "watch",
    gulp.series("sass", function() {
        gulp.watch("public/scss/**/*.scss", gulp.series(["sass"]));
        // Other watchers
    })
);
