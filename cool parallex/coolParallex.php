<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Untitled Document</title>
<style>
.content {
    width: 100%;
    height: 300px;
    position: relative;
}

.innerContent{
    position: absolute;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
    clip: rect(0, auto, auto, 0);
}

.fixed-container {
    position: fixed;
    top: 0px;
    left: 0px;
    right: 0px;
    bottom: 0px;
    -webkit-backface-visibility: hidden;
    -moz-backface-visibility: hidden;
    backface-visibility: hidden;
    pointer-events: none;
}

h1 {
    position: absolute;
    top: 10%;
    left: 0px;
    right: 0px;
    text-align: center;
    font-size: 26px;
}

a {
    position: absolute;
    top: 45%;
    left: 0px;
    right: 0px;
    text-align: center;
    font-size: 20px;
    display: block;
}
</style>

</head>

<body>
<article class="content">
	<div class="innerContent">
		<div class="fixed-container" style="background: red">
			<h1>Power</h1>
            <a href="http://google.com" target="_blank" title="google">Try and click me</a>
		</div>
	</div>
</article>

<article class="content">
	<div class="innerContent">
		<div class="fixed-container" style="background: green">
			<h1>Imagine a<br />world with a bit<br />more fun</h1>
            <a href="http://google.com" target="_blank" title="google">Go on try!</a>
		</div>
	</div>
</article>

<article class="content">
	<div class="innerContent">
		<div class="fixed-container" style="background: red">
			<h1>Putting the<br />customer in the<br />driving seat</h1>
            <a href="http://google.com" target="_blank" title="google">You can't can you?</a>
		</div>
	</div>
</article>

<article class="content">
	<div class="innerContent">
		<div class="fixed-container" style="background: green">
			<h1>Real friends<br />bring good<br />things everyday</h1>
            <a href="http://google.com" target="_blank" title="google">It's very frustrating</a>
		</div>
	</div>
</article>
</body>
</html>