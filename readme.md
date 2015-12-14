# Getting start

1. server start at `public`
2. `filter.js` 是打包整理留言 {分析用} 的腳本，整理好後 `ljAi.messages.output` 即可。
3. `client.js` 是拿來與 youtube ui 溝通的街口，他會把 youtube 吃到的訊息傳入 server, 並接收吐出的訊息。
4. permutations.html 是用來協助生產排列組合的工具。

# Quick code

```js
var n = document.createElement('script');
n.setAttribute('language', 'JavaScript');
n.setAttribute('src', 'http://127.0.0.1:8000/client.js?rand=' + new Date().getTime());
document.body.appendChild(n);
```

## 備註 code

### 捲到 youtube 留言最底下。

```js
document.body.scrollTop = document.body.scrollHeight;
document.getElementById("yt-comments-paginator").click();
```

