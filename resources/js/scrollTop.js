let timer = null;
$('#publish-top').on('click', function () {
    cancelAnimationFrame(timer);
    //获取当前毫秒数
    let startTime = +new Date();
    //获取当前页面的滚动高度
    let b = document.body.scrollTop || document.documentElement.scrollTop;
    let d = 500;
    let c = b;
    timer = requestAnimationFrame(function func() {
        let t = d - Math.max(0, startTime - (+new Date()) + d);
        document.documentElement.scrollTop = document.body.scrollTop = t * (-c) / d + b;
        timer = requestAnimationFrame(func);
        if (t === d) {
            cancelAnimationFrame(timer);
        }
    });
});