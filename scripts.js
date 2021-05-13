let form;

window.onload = function () {
    form = document.getElementById('input-form');
    form.addEventListener('submit', function (event) {
        const isValid = performValidation();

        if (isValid === false) {
            event.preventDefault();
            event.stopPropagation();
        }
    });
}

function performValidation() {
    const nonEmptyLettersRegex = /^[a-zA-Z\s\,]+$/i
    const emailRegex = /^\S+@\S+\.\S+$/
    const phoneRegex = /\(?([0-9]{3})\)?([ .-]?)([0-9]{3})\2([0-9]{4})/
    const courseRegex = /^[1-4]$/

    const nameInput = document.getElementById('name-input')
    const surnameInput = document.getElementById('surname-input')
    const phoneInput = document.getElementById('phone-input')
    const emailInput = document.getElementById('email-input')

    const univerInput = document.getElementById('univer-input')
    const facInput = document.getElementById('fac-input')
    const courseInput = document.getElementById('course-input')

    const hobbyInput = document.getElementById('hobby-input')


    //check values:
    const isNameCorrect = nonEmptyLettersRegex.test(nameInput.value)
    const isSurnameCorrect = nonEmptyLettersRegex.test(surnameInput.value)
    const isPhoneCorrect = phoneRegex.test(phoneInput.value)
    const isEmailCorrect = emailRegex.test(emailInput.value)

    const isUniverCorrect = nonEmptyLettersRegex.test(univerInput.value)
    const isFacCorrect = nonEmptyLettersRegex.test(facInput.value)
    const isCourseCorrect = courseRegex.test(courseInput.value)

    const isHobbyCorrect = nonEmptyLettersRegex.test(hobbyInput.value)

    //set validation
    nameInput.classList.remove('is-valid', 'is-invalid')
    nameInput.classList.add(isNameCorrect ? 'is-valid' : 'is-invalid');
    surnameInput.classList.remove('is-valid', 'is-invalid')
    surnameInput.classList.add(isSurnameCorrect ? 'is-valid' : 'is-invalid');
    phoneInput.classList.remove('is-valid', 'is-invalid')
    phoneInput.classList.add(isPhoneCorrect ? 'is-valid' : 'is-invalid');
    emailInput.classList.remove('is-valid', 'is-invalid')
    emailInput.classList.add(isEmailCorrect ? 'is-valid' : 'is-invalid');
    univerInput.classList.remove('is-valid', 'is-invalid')
    univerInput.classList.add(isUniverCorrect ? 'is-valid' : 'is-invalid');
    facInput.classList.remove('is-valid', 'is-invalid')
    facInput.classList.add(isFacCorrect ? 'is-valid' : 'is-invalid');
    courseInput.classList.remove('is-valid', 'is-invalid')
    courseInput.classList.add(isCourseCorrect ? 'is-valid' : 'is-invalid');
    hobbyInput.classList.remove('is-valid', 'is-invalid')
    hobbyInput.classList.add(isHobbyCorrect ? 'is-valid' : 'is-invalid');

    //check validation
    return (isNameCorrect && isSurnameCorrect && isPhoneCorrect && isEmailCorrect && isUniverCorrect && isFacCorrect && isCourseCorrect && isHobbyCorrect)
}