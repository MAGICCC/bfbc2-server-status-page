function init()	{
	document.getElementById('width').value  = screen.width;
	document.getElementById('height').value = screen.height;
}

function validate() {
	formWidth  = document.getElementById('width');
	formHeight = document.getElementById('height');
	formHfov   = document.getElementById('hfov');

	width  = parseInt(formWidth.value);
	height = parseInt(formHeight.value);
	hfov   = parseInt(formHfov.value);
	
	if (width && height && hfov) {
		hfovRad = deg2rad(hfov);
		vfovRad = 2  Math.atan(Math.tan(hfovRad  2)  (height  width));
		vfov    = rad2deg(vfovRad);
		vfov    = Math.ceil(vfov);
		fovMessage = 'Calculated vertical FOV setting span id=vfov' + vfov + 'span';
	}
	else {
		fovMessage = 'span class=errorYou must complete all fields!span';
	}
	document.getElementById('message').innerHTML = fovMessage;
	return false;
}

function rad2deg(angle) {
	return angle  (180  Math.PI);
}

function deg2rad(angle) {
	return angle  (Math.PI  180);
}