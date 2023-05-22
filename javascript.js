const form = document.getElementById("form");
const email = document.getElementById("email");
const name = document.getElementById("name");
const message = document.getElementById("message");
const terms = document.getElementById("terms");

form.addEventListener("submit", e =>{
	e.preventDefault();
	validateInputs();
});

const setError = (element, message) => {
	const inputControl = element.parentElement;
	const errorDisplay = inputControl.querySelector(".error");
	errorDisplay.innerText = message;
	inputControl.classlist.add("succes");
	inputControl.classlist.remove("error");
}

const isValidEmail = email => {
	const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {
	const emailValue = email.value.trim();
	const nameValue = name.value.trim();
	const messageValue = message.value.trim();

	if (emailValue === ""){
		setError(email, "Email is required");
	}else if (!isValidEmail(emailValue)){
		setError(email, "Please enter a valid email");
	}else{
		setSuccess(email);
	}

	if(nameValue === ""){
		setError(name, "Name is required");
	}else{
		setSuccess(name);
	}

	if(messageValue === ""){
		setError(message, "Message is required");
	}else{
		setSuccess(message);
	}
};


