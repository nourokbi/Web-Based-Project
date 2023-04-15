const form = document.getElementById('form');
const fullname = document.getElementById('name');
const username = document.getElementById('uname');
const email = document.getElementById('email');
const password = document.getElementById('password');
const cpassword = document.getElementById('c-password');
const birthDate = document.getElementById('birth');
const address = document.getElementById('address');

//a listener on submit...
form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};

const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}


const validateInputs = () => {
    const nameValue = fullname.value.trim();
    const usernameValue = username.value.trim();
    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();
    const cpasswordValue = cpassword.value.trim();
    const birthDateValue = birthDate.value.trim();
    const addressValue = address.value.trim();

    if(nameValue === '') {
        setError(fullname, 'Full name is required');
    }else {
        setSuccess(fullname);
    }

    if(usernameValue === '') {
        setError(username, 'Username is required');
    }else if(usernameValue.length< 5){
        setError(username,'Username should be longer than 5 characters');
    } else {
        setSuccess(username);
    }

    if(emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if(passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8 ) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

    if(cpasswordValue === '') {
        setError(cpassword, 'Please confirm your password');
    } else if (cpasswordValue !== passwordValue) {
        setError(cpassword, "Passwords don't match");
    } else {
        setSuccess(cpassword);
    }

    if(birthDateValue === '') {
        setError(birthDate, 'Birth Date is required');
    } else {
        setSuccess(birthDate);
    }

    if(addressValue === '') {
        setError(address, 'Address is required');
    } else {
        setSuccess(address);
    }

};