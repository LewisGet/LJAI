# Getting start

1. server start at `public`
2. `filter.js` 是打包整理留言 {分析用} 的腳本，整理好後 `ljAi.messages.output` 即可。
3. `client.js` 是拿來與 youtube ui 溝通的街口，他會把 youtube 吃到的訊息傳入 server, 並接收吐出的訊息。


## TO DO

1. client.js 是舊程式碼，未整理。可能與新開發邏輯有衝突。
2. server youtube 接收未完成。
3. server youtube 傳出未完成。

## 備註 code

### 捲到 youtube 留言最底下。

```js
document.body.scrollTop = document.body.scrollHeight;
document.getElementById("yt-comments-paginator").click();
```

