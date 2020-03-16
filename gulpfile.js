var gulp = require("gulp");
var sass = require("gulp-sass");

gulp.task("sass", function() {
    return gulp
        .src("public/scss/**/*.scss")
        .pipe(sass()) // Using gulp-sass
        .pipe(gulp.dest("public/css"));
});

gulp.task(
    "watch",
    gulp.series("sass", function() {
        gulp.watch("public/scss/**/*.scss", gulp.series(["sass"]));
        // Other watchers
    })
);
