<!DOCTYPE html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>Binary translate</title>
		<link rel="stylesheet" href="https://use.typekit.net/ins2wgm.css">
		<?php echo "<style>".preg_replace(array('/\s*(\w)\s*{\s*/','/\s*(\S*:)(\s*)([^;]*)(\s|\n)*;(\n|\s)*/','/\n/','/\s*}\s*/'),array('$1{ ','$1$3;',"",'} '),file_get_contents("app.css"))."</style>"?>
    </head>
    <body>
		<h1>Binary translator</h1>
		<div class="form">
			<textarea placeholder="Text..." name="text"></textarea>
			<button type="button" value="Submit">Translate</button>
			<div class="output"></div>
		</div>
		<script>
			let btn = document.querySelector("button")
			btn.addEventListener("click", () => {
				let val = document.querySelector("textarea").value
				fetch(`/api?text=${val}&format=on`)
				.then((response) => response.text())
	  			.then((data) => document.querySelector(".output").innerHTML = data);
			})
		</script>
		<footer>
			<a href="https://codeflake.vercel.app/cs/binary" style="color: #fff;">Binary in 1 minute</a><br>
			Made with <svg viewBox="0 0 72 72" xmlns="http://www.w3.org/2000/svg"><path fill="#EA5A47" d="M59.5 25c0-6.9036-5.5964-12.5-12.5-12.5-4.7533 0-8.8861 2.6536-11 6.5598C33.8861 15.1536 29.7533 12.5 25 12.5c-6.9036 0-12.5 5.5964-12.5 12.5 0 2.9699 1.0403 5.6942 2.7703 7.8387l-.0043.0034L36 58.5397l20.7339-25.6975-.0043-.0034C58.4597 30.6942 59.5 27.9699 59.5 25z"></path><path fill="none" stroke="#000" stroke-linejoin="round" stroke-miterlimit="10" stroke-width="2" d="M59.5 25c0-6.9036-5.5964-12.5-12.5-12.5-4.7533 0-8.8861 2.6536-11 6.5598C33.8861 15.1536 29.7533 12.5 25 12.5c-6.9036 0-12.5 5.5964-12.5 12.5 0 2.9699 1.0403 5.6942 2.7703 7.8387l-.0043.0034L36 58.5397l20.7339-25.6975-.0043-.0034C58.4597 30.6942 59.5 27.9699 59.5 25z"></path>
			</svg> by xnotkingdev_ 
		</footer>
    </body>
</html>
