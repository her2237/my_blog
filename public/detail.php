<?php
$id = $_GET['id'];

$sql = "
SELECT *
FROM article
WHERE id = {$id}
";

$dbHost = "heonaeyun.com"; // 컴퓨터 까지 접근 가능
$dbPort = 3306; // 컴퓨터 안에 있는 MySQL에게 까지 접근가능
$dbId = 'sbsst';
$dbPw = 'sbs123414'; //' MySQL안으로 통과까지 가능
$dbName = 'blog'; // 알맞은 DB까지 접근가능

$dbConn = mysqli_connect("heonaeyun.com", $dbId, $dbPw, $dbName, $dbPort) or die("DB CONNECTION ERROR");

$rs = mysqli_query($dbConn, $sql);
$row = mysqli_fetch_assoc($rs);

include '../part/head.php';
?>

<!-- 하이라이트 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/highlight.min.js"></script>
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/styles/default.min.css">

<!-- 하이라이트 라이브러리, 언어 -->
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/css.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/javascript.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/xml.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/php.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/php-template.min.js"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/highlight.js/10.1.1/languages/sql.min.js"></script>

<!-- 코드 미러 라이브러리 추가, 토스트 UI 에디터에서 사용됨 -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/codemirror/5.48.4/codemirror.min.css" />

<!-- 토스트 UI 에디터, 자바스크립트 코어 -->
<script src="https://uicdn.toast.com/editor/latest/toastui-editor-viewer.min.js"></script>

<!-- 토스트 UI 에디터, 신택스 하이라이트 플러그인 추가 -->
<script src="https://uicdn.toast.com/editor-plugin-code-syntax-highlight/latest/toastui-editor-plugin-code-syntax-highlight-all.min.js"></script>

<!-- 토스트 UI 에디터, CSS 코어 -->
<link rel="stylesheet" href="https://uicdn.toast.com/editor/latest/toastui-editor.min.css" />

<div class="con">
    제목 : <?=$row['title']?>
</div>
<div class="con">
    번호 : <?=$row['id']?>
</div>

<template id="origin1" style="display:none;"><?=$row['body']?></template>
<div id="viewer1" class="con"></div>

<script>
// 유튜브 플러그인 시작
function youtubePlugin() {
  toastui.Editor.codeBlockManager.setReplacer("youtube", function (youtubeId) {
    // Indentify multiple code blocks
    const wrapperId = `yt${Math.random().toString(36).substr(2, 10)}`;

    // Avoid sanitizing iframe tag
    setTimeout(renderYoutube.bind(null, wrapperId, youtubeId), 0);

    return `<div id="${wrapperId}"></div>`;
  });
}

function renderYoutube(wrapperId, youtubeId) {
  const el = document.querySelector(`#${wrapperId}`);

  el.innerHTML = `<iframe width="420" height="315" src="https://www.youtube.com/embed/${youtubeId}"></iframe>`;
}
// 유튜브 플러그인 끝

// repl 플러그인 시작
function replPlugin() {
  toastui.Editor.codeBlockManager.setReplacer("repl", function (replUrl) {
    var postSharp = "";
    if ( replUrl.indexOf('#') !== -1 ) {
      var pos = replUrl.indexOf('#');
      postSharp = replUrl.substr(pos);
      replUrl = replUrl.substr(0, pos);
    }

    if ( replUrl.indexOf('?') === -1 ) {
      replUrl += "?dummy=1";
    }

    replUrl += "&lite=true";
    replUrl += postSharp;

    // Indentify multiple code blocks
    const wrapperId = `yt${Math.random().toString(36).substr(2, 10)}`;

    // Avoid sanitizing iframe tag
    setTimeout(renderRepl.bind(null, wrapperId, replUrl), 0);

    return "<div id=\"" + wrapperId + "\"></div>";
  });
}

function renderRepl(wrapperId, replUrl) {
  const el = document.querySelector(`#${wrapperId}`);

  var urlParams = getUrlParams(replUrl);

  var height = 400;

  if ( urlParams.height ) {
    height = urlParams.height;
  }

  el.innerHTML = '<iframe height="' + height + 'px" width="100%" src="' + replUrl + '" scrolling="no" frameborder="no" allowtransparency="true" allowfullscreen="true" sandbox="allow-forms allow-pointer-lock allow-popups allow-same-origin allow-scripts allow-modals"></iframe>';
}
// repl 플러그인 끝

// codepen 플러그인 시작
function codepenPlugin() {
  toastui.Editor.codeBlockManager.setReplacer("codepen", function (codepenUrl) {
    // Indentify multiple code blocks
    const wrapperId = `yt${Math.random().toString(36).substr(2, 10)}`;

    // Avoid sanitizing iframe tag
    setTimeout(renderCodepen.bind(null, wrapperId, codepenUrl), 0);

    return "<div id=\"" + wrapperId + "\"></div>";
  });
}

function renderCodepen(wrapperId, codepenUrl) {
  const el = document.querySelector(`#${wrapperId}`);

  var urlParams = getUrlParams(codepenUrl);

  var height = 400;

  if ( urlParams.height ) {
    height = urlParams.height;
  }

  el.innerHTML = '<iframe height="' + height + '" style="width: 100%;" scrolling="no" title="" src="' + codepenUrl + '" frameborder="no" allowtransparency="true" allowfullscreen="true"></iframe>';
}
// repl 플러그인 끝

// lib 시작
function getUrlParams(url) {
  var params = {};
  
  url.replace(/[?&]+([^=&]+)=([^&]*)/gi, function(str, key, value) { params[key] = value; });
  return params;
}
// lib 끝

var editor1__initialValue = $('#origin1').html();
var editor1 = new toastui.Editor({
  el: document.querySelector('#viewer1'),
  height: '600px',
  initialValue: editor1__initialValue,
  initialEditType: "markdown",
  previewStyle: "vertical",
  viewer:true,
  plugins: [toastui.Editor.plugin.codeSyntaxHighlight, youtubePlugin, replPlugin, codepenPlugin]
});

</script>

<?php
include '../part/foot.php';
?> 