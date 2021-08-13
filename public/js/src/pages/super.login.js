


const toast = new Toast('toastMsg')



let doEnter = function (target) {

    const credentials = getValidated(
        document.getElementById('email').value,
        document.getElementById('password').value
    )

    if (credentials) {
        target.setAttribute('disabled', true)
        new Request('enter', credentials).post(response => handleAuthentication(response, target))
    }
    else {
        toast.display(`Preencha os campos <b>Email</b> e <b>Senha</b>!`)
        target.removeAttribute('disabled')
    }
}



let getValidated = function (email, password) {
    return ((email && email.length > 0) && (password && password.length >= 8))
        ? { email: email, password: password }
        : false
}



let handleAuthentication = function (response, target) {
    if (response.auth === true) {
        document.getElementById('formEnter').submit()
    }
    else {
        toast.display(response.errors[0])
        target.removeAttribute('disabled')
    }
}
