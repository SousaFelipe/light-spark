


const toast = new Toast('toastMsg', 5)



let login = function (target) {

    const credentials = getValidated(
        document.getElementById('email').value,
        document.getElementById('password').value
    )

    if (credentials) {
        app.button('btnEnter').setLoding(true)
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
        app.form('formSignIn').submit()
    }
    else {

        if (response.errors.email) {
            app.input('input-email').invalidate()
            toast.display(response.errors.email)
        }
        else if (response.errors.password) {
            app.input('input-password').invalidate()
            toast.display(response.errors.password)
        }

        target.removeAttribute('disabled')
        app.button('btnEnter').setLoding(false)
    }
}
