/**
 * Coding By Lewis.AEdes@gmail.com, LewisFlyBug@gmail.com
 */

var ljComment = {
    serverURI: "http://127.0.0.1:8000",
    youtubeUI: {
        commentInputId: "ytcb-text",
        commentInputBoxId: "ytcb-root",
        commentSendButtonId: "ytcb-reply",
        commentVideoClass: "thumb-title",
        commentContentClass: "comment-text",
        commentByAttr: "data-name",
        commentBundleClass: "comment-item yt-commentbox-top",
        commentReplyButtonClass: "comment-footer-action yt-commentbox-show-reply"
    },
    ljUI: {
        styleId: "ljStyle",
        autoCreatePrefix: "reply_",
        nowOpenCommentId: 0,
        initState: false
    }
};

/**
 * include style
 */
ljComment.ljUI.addStyle = function () {
    var link = document.createElement("link");

    link.setAttribute("id", ljComment.ljUI.styleId);
    link.setAttribute("rel", "stylesheet");
    link.setAttribute("href", ljComment.serverURI + "/style.css");

    document.body.appendChild(link);
};

/**
 * load reply
 *
 * @param name
 * @param video
 * @param message
 */
ljComment.ljUI.loadReply = function (id, name, video, message) {
    var script = document.createElement("script");

    script.setAttribute("type", "text/javascript");

    document.body.appendChild(script);

    script.setAttribute("src", ljComment.serverURI + "/app.php?id=" + id + "&name=" + name + "&video=" + video + "&message=" + message);
};

/**
 * add event
 */
ljComment.ljUI.addEvent = function () {
    var commentList =  document.getElementsByClassName(ljComment.youtubeUI.commentBundleClass);

    for (var index = 0; index < commentList.length; index++)
    {
        var comment = commentList[index];

        ljComment.ljUI.openReplyBox(comment, index);

        if (! ljComment.ljUI.initState)
        {
            ljComment.ljUI.addAutoReplyBox(comment, index);
        }

        var name = comment.getAttribute(ljComment.youtubeUI.commentByAttr);
        var video = (comment.getElementsByClassName(ljComment.youtubeUI.commentVideoClass)[0] || {innerText: ""}).innerText;
        var message = (comment.getElementsByClassName(ljComment.youtubeUI.commentContentClass)[0] || {innerText: ""}).innerText;

        ljComment.ljUI.loadReply(index, name, video, message);
    }
};

/**
 * open reply box
 *
 * @param dom
 * @param index
 */
ljComment.ljUI.openReplyBox = function (dom, index) {
    dom.onmouseover = function () {
        var button = this.getElementsByClassName(ljComment.youtubeUI.commentReplyButtonClass)[0];

        if (button && ljComment.ljUI.nowOpenCommentId != index)
        {
            ljComment.ljUI.nowOpenCommentId = index;
            button.click();
        }
    }
};

ljComment.ljUI.addAutoReplyBox = function (dom, id) {
    var reply = document.createElement("div");

    reply.id = ljComment.ljUI.autoCreatePrefix + id.toString();
    reply.setAttribute("data-auto-id", id);

    /**
     * click use this reply
     */
    reply.onclick = function () {
        var input = document.getElementById(ljComment.youtubeUI.commentInputId);

        input.innerHTML += this.innerText;
    };

    dom.appendChild(reply);
};

ljComment.init = function () {
    ljComment.ljUI.addStyle();
    ljComment.ljUI.addEvent();

    ljComment.ljUI.initState = true;
};

ljComment.init();
