var ljScroll = {

};

ljScroll.init = function () {
    ljScroll.doExecute();
};

ljScroll.doExecute = function () {
    ljScroll.scroll();

    if (! ljScroll.isFound())
    {
        setTimeout("ljScroll.doExecute();", 2000);
    }
    else
    {
        console.log("found ! we can stop.");
    }
};

ljScroll.scroll = function () {
    document.body.scrollTop = document.body.scrollHeight;
    document.getElementById("yt-comments-paginator").click();
};

ljScroll.isFound = function () {
    var findOwnerReply = document.getElementsByClassName("channel-owner");

    return (findOwnerReply.length > 0);
};

ljScroll.init();
