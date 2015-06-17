<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>audioPlayer Demo</title>
<link href="_css/reset.css" rel="stylesheet" type="text/css" />
<link href="_css/main.css" rel="stylesheet" type="text/css">
<script src="http://ajax.googleapis.com/ajax/libs/jquery/1.10.1/jquery.min.js"></script>
<script type="text/javascript" charset="utf-8" src="_lib/audioPlayer.js"></script>
<script>
$(window).load(function () {
	$("#audioWrapper").audioPlayer({
		fx: "bars",
		width: 125,
		height: 35,
		color: [0,0,0,0.65],
		shuffle: true,
		playlist: [
			{src: "_media/audio0001.mp3"},
			{src: "_media/audio0002.mp3"},
			{src: "_media/audio0003.mp3"},
			{src: "_media/audio0004.mp3"},
			{src: "_media/audio0005.mp3"},
			{src: "_media/audio0006.mp3"},
			{src: "_media/audio0007.mp3"},
			{src: "_media/audio0008.mp3"},
			{src: "_media/audio0009.mp3"}
		]
	});
	
	$("#audioWrapper").audioPlayer().play();
});
</script>
</head>
<body>
<div id="audioWrapper"></div>
</body>
</html>