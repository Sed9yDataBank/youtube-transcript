<?php

function encodeURIComponent($str) {
  $revert = array('%21'=>'!', '%2A'=>'*', '%27'=>"'", '%28'=>'(', '%29'=>')');
  return strtr(rawurlencode($str), $revert);
}

$code = <<<EOF
var regexp = new RegExp(/playerCaptionsTracklistRenderer.*?(youtube.com\/api\/timedtext.*?)"/);
var match = regexp.exec(document.body.innerHTML);
if (!match) {
  alert ("No captions found");
  return;
}
var url = regexp.exec(document.body.innerHTML)[1];
open("ocalhost:8000/transyt/caption.php?url=" + encodeURIComponent(url));
EOF;

$code = encodeURIComponent($code);
print <<<EOF
<head>
	<title>YouTube Transcript Generator Bookmarklet</title>
	<style>
body {
  font-family:arial;
  padding: 16px;
}
</style>
</head>
<body>
	<h3>YouTube Transcript Generator Bookmarklet</h3>
	Drag the below "link" into the bookmark bar in any browser.
	Then when you're viewing a YouTube video, you can simply click it to view the transcription of the video using Machine Learning, YouTube API, PHP, and JavaScript.
	<BR/>
	<table style='border-radius:8px;font-size:15px;border:1px #ccc solid; background-color:#fafafa;padding:8px;margin:8px'>
		<tr>
			<TD>
				<a href="javascript:(function(){ $code })()">Transcribe</a> (Drag to bookmark bar)
			</td>
		</tr>
	</table>
</body>
EOF;
