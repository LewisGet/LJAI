/**
 * youtube 留言回應整理器
 *
 * coding By Lewis.AEdes@gmail.com
 */

var ljAi = {
    youtubeUi: {
        comment: {
            bundleClass: "comment-item yt-commentbox-top",
            rootBundleClass: "comment-item yt-commentbox-top reply channel-owner",
            getUsername: function (dom) {
                return dom.getAttribute("data-name");
            },
            getThisMessage: function (dom) {
                var messageDom = dom.getElementsByClassName("comment-text-content")[0];

                if (messageDom)
                {
                    return messageDom.innerText;
                }

                return "";
            },
            getVideoTitle: function (dom) {
                var videoTitleDom = dom.getElementsByClassName("thumb-title")[0];

                if (videoTitleDom)
                {
                    return videoTitleDom.innerText;
                }

                return "";
            },
            getReplyButton: function (dom) {
                return dom.getElementsByClassName("comment-footer-action yt-commentbox-show-reply ")[0];
            }
        }
    },
    messages: {
        commentList: [],
        rootCommentList: [],
        getAllComment: function () {
            return document.getElementsByClassName(ljAi.youtubeUi.comment.bundleClass);
        },
        getRootComment: function () {
            return document.getElementsByClassName(ljAi.youtubeUi.comment.rootBundleClass);
        },
        getRootReplyComment: function (dom) {
            var findDom = dom;

            for (;;) {
                findDom = findDom.parentElement;

                if (findDom.className == "comment-entry") {
                    break;
                }
            }

            return findDom.getElementsByClassName(ljAi.youtubeUi.comment.bundleClass)[0];
        }
    }
};

ljAi.messages.initAllComment = function () {
    var comments = this.getAllComment();

    for (var index = 0; index < comments.length; index++)
    {
        var thisComment = comments[index];

        var username = ljAi.youtubeUi.comment.getUsername(thisComment)
        var message = ljAi.youtubeUi.comment.getThisMessage(thisComment);
        var video = ljAi.youtubeUi.comment.getVideoTitle(thisComment);

        this.commentList.push({
            username: username,
            message: message,
            video: video
        });
    }
};

ljAi.messages.initRootComment = function () {
    var comments = this.getRootComment();

    for (var index = 0; index < comments.length; index++)
    {
        var thisComment = comments[index];
        var replyComment = ljAi.messages.getRootReplyComment(thisComment);

        var commentUsername = ljAi.youtubeUi.comment.getUsername(replyComment);
        var commentMessage = ljAi.youtubeUi.comment.getThisMessage(replyComment);
        var commentVideo = ljAi.youtubeUi.comment.getVideoTitle(thisComment);

        var rootReply = ljAi.youtubeUi.comment.getThisMessage(thisComment);

        this.rootCommentList.push({
            commentUsername: commentUsername,
            commentMessage: commentMessage,
            rootReply: rootReply,
            video: commentVideo
        });
    }
};

ljAi.messages.init = function () {
    ljAi.messages.initAllComment();
    ljAi.messages.initRootComment();
};

/**
 * 若直接將物件 json encode php 會爆掉，因此特設此 function 處理過大物件
 */
ljAi.messages.output = function (type) {
    var comments = ljAi.messages.rootCommentList

    if ("all" == type)
    {
        comments = ljAi.messages.commentList;
    }

    var outputString = "";

    for (var index = 0; index < comments.length; index++)
    {
        outputString += "$rootComment[] = <<<JSON\n" + JSON.stringify(comments[index]) + "\nJSON;\n\n";
    }

    console.log(outputString);
};

ljAi.messages.init();
