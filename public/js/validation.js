//! Validation with simple approch

function submitFormValidation() {

    const form = document.getElementById('register-form')
    const email = document.forms['valForm']['email'];
    const fname = document.forms['valForm']['fname'];
    const phone = document.forms['valForm']['phone'];
    const password = document.forms['valForm']['password'];





    //! Show input Error massage
    function showError(input, message) {
        const formContorl = input.parentElement;
        formContorl.className = "form-control error";
        const small = formContorl.querySelector('small')
        small.innerHTML = message
    }

    //
    function showSuccess(input) {
        const formContorl = input.parentElement;
        formContorl.className = "form-control success";

    }

    // Email Validation
    function checkEmail(email) {
        const re = /^(([^<>()\[\]\\.,;:\s@"]+(\.[^<>()\[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
        if (re.test(email.value.trim())) {
            showSuccess(email)
        } else {
            showError(email, 'Email is not valid')
        }
    }



    /// checking Required Feilds 
    function checkRequired(inputArr) {
        inputArr.forEach((input) => {
            if (input.value.trim() === '') {
                showError(input, `${getFieldNameCap(input)} is required`)
            } else {
                showSuccess(input)
            }
        })
    }
    // Get fieldname Capitalize 
    function getFieldNameCap(input) {
        return input.id.charAt(0).toUpperCase() + input.id.slice(1)
    }

    //Check input Lenght
    function checkLenght(input, min, max) {
        if (input.value.length < min) {
            showError(input, `${getFieldNameCap(input)} must be at least ${min} characters`)

        } else if (input.value.length > max) {
            showError(input, `${getFieldNameCap(input)} must be less then ${max} characters`)

        } else {
            showSuccess(input)
        }

    }

    form.addEventListener('submit', (e) => {
        e.preventDefault();
        checkRequired([fname, email, phone, password])
        checkLenght(fname, 3, 15)
        checkLenght(password, 8, 30)
        checkLenght(phone, 10)
        checkEmail(email)


    })

}




