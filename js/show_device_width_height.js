var output;
	
	(function(){
		window.addEventListener("resize", show_device_width);
		output = document.createElement("div");
		output.style.position = "absolute";
		output.style.top = "10px";
		output.style.left = "10px";
		output.style.width = "110px";
		output.style.height = "20px";
		output.style.padding = "5px";
		output.style.textAlign = "center";
		output.style.borderRadius = "20px";
		output.style.color = "#000";
		output.style.fontFamily = "Arial, Helvetica, sans-serif";
		output.style.fontSize = "20px";
		output.style.fontWeight = "bold";
		output.style.backgroundColor = "rgba(255, 255, 255, 0.6)";
		output.innerHTML = window.innerWidth + " x " + window.innerHeight;
		document.body.appendChild(output);
	})()
	
	function show_device_width(){
		output.innerHTML = window.innerWidth + " x " + window.innerHeight;
	}
