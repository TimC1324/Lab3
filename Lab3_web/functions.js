function alert_paragraph_color() {
    // Get values from inputs
    let borderR = document.getElementById("border_R").value;
    let borderG = document.getElementById("border_G").value;
    let borderB = document.getElementById("border_B").value;
    let borderWidth = document.getElementById("border_width").value;

    let bgR = document.getElementById("bg_R").value;
    let bgG = document.getElementById("bg_G").value;
    let bgB = document.getElementById("bg_B").value;

    // Create CSS color strings
    let borderColor = `rgb(${borderR}, ${borderG}, ${borderB})`;
    let bgColor = `rgb(${bgR}, ${bgG}, ${bgB})`;

    // Get the div element
    let paragraph = document.getElementById("paragraph");

    // Apply the new styles
    paragraph.style.borderColor = borderColor;
    paragraph.style.borderWidth = `${borderWidth}px`;
    paragraph.style.backgroundColor = bgColor;
}

function validate() {
	var pass1 = document.getElementById("pass1").value;
	var pass2 = document.getElementById("pass2").value;

	if (pass1.length < 8) {
		alert("The length of the first password is less than 8 letters!")
		} else if (pass2.length < 8) {
			alert("The length of the second password is less than 8 letters!")
		} else if (pass1 != pass2) {
			alert("The two passwords don't match!")
		} else {
			alert("The passwords match. Good job!")
		}
}