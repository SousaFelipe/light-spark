

let btnEnter = null



let validated = function (email, password) {
    return ((email && email.length > 0) && (password && password.length >= 8))
        ? { email: email, password: password }
        : false
}


let enter = function () {

    const toastMsg = bootstrap.Toast.getOrCreateInstance(document.getElementById('toastMsg'))
    const credentials = validated(document.getElementById('email').value, document.getElementById('password').value)

    if (credentials) {
        btnEnter.setAttribute('disabled', true)

        window.$.ajax({
            method: "POST",
            url: "enter",
            data: credentials
        })
        .done(response => {
            if (response.auth === true) {
                document.getElementById('formEnter').submit()
            }
            else {
                document.getElementById('toastMsgBody').innerHTML = response.errors[0]
                toastMsg.show()
                btnEnter.removeAttribute('disabled')
            }
        })
    }
    else {
        document.getElementById('toastMsgBody').innerHTML = `Preencha os campos <b>Email</b> e <b>Senha</b>!`
        toastMsg.show()

        btnEnter.removeAttribute('disabled')
    }
}



module.exports = {


    index: () => {
        btnEnter = document.getElementById('btnEnter')
        btnEnter.addEventListener("click", enter)
    }
}
