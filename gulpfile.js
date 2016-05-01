var gulp = require("gulp"),
    browser = require("browser-sync"),
    sass = require("gulp-sass"),
    autoprefixer = require("gulp-autoprefixer"),
    uglify = require("gulp-uglify"), //js min
    connect = require('gulp-connect-php'),
    plumber = require("gulp-plumber"), //エラーハンドリング
    imagemin = require("gulp-imagemin");

var dir = {
    dev: './themes_dev/', //themeの名前を足して使う
    pub: './themes/'
}

gulp.task("sass", function() { //タスクの登録
    gulp.src(dir.dev+"sass/**/*.scss") //読み出すファイル
        .pipe(plumber())
        .pipe(sass()) //行う処理
        .pipe(autoprefixer())
        .pipe(gulp.dest(dir.pub)) //出力先に出力
        .pipe(gulp.dest(dir.dev))
        .pipe(browser.reload({stream:true}));
});

gulp.task("js", function() {
    gulp.src([dir.dev+"js/**/*.js","!"+dir.dev+"**/*.js"])
        .pipe(plumber())
        .pipe(uglify())
        .pipe(gulp.dest(dir.pub+"js/min"))
        .pipe(browser.reload({stream:true}));
});

gulp.task("watchTask", function() {
    gulp.watch(dir.dev+"images/**", function() {
    gulp.src([dir.dev+"images/**/*.jpeg",dir.dev+"images/**/*.png"],{base: dir.dev})
        .pipe(imagemin())
        .pipe(gulp.dest(dir.pub));
    });
});

gulp.task('reload', function(){
    browser.reload({stream:true});
});

gulp.task("watch", function() {
    gulp.watch([dir.dev+"js/**/*.js","!"+dir.dev+"js/min/**/*.js"],["js"]);
    gulp.watch(dir.dev+"sass/**/*.scss",["sass"]);
    gulp.watch(dir.dev+"*.html",["copy"]);
    gulp.watch(dir.dev+'*.php',["copy"]);
});

//コピー
gulp.task('copy', function() {
    gulp.src(
        [dir.dev+"*.html",dir.dev+"*.php",dir.dev+"**/*.css"],
        {base: dir.dev}
    ) // コピー元ディレクトリの指定
        .pipe(gulp.dest(dir.pub)); // コピー先ディレクトリの指定
});

//default
gulp.task('default',['copy','watch','sass','watchTask','reload']);
