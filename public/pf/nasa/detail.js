function PreloadJs__load(srcs, handleProcess, handleComplete) {
    var total = srcs.length;
    var loadedCount = 0;
    for (var i = 0; i < srcs.length; i++) {
        var id = "PreloadJs__el__" + i;
        if (srcs[i].substr(-4).toLowerCase() == ".mp4") {
            var video = document.createElement("video");
            video.setAttribute("src", srcs[i]);
            video.oncanplay = function () {
                loadedCount++;
                handleProcess(loadedCount, total);
                if (loadedCount == total) {
                    handleComplete();
                }
            };
        } else {
            var img = new Image();
            img.src = srcs[i];
            img.onload = function () {
                loadedCount++;
                handleProcess(loadedCount, total);
                if (loadedCount == total) {
                    handleComplete();
                }
            };
        }
    }
}

$(function () {
    PreloadJs__load__init();
});