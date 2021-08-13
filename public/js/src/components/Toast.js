


class Toast {


    constructor(id) {
        this.toast = bootstrap.Toast.getOrCreateInstance(document.getElementById(id))
        this.toastBody = document.getElementById(`${ id }Body`)
    }


    display (msg) {
        this.toastBody.innerHTML = msg
        this.toast.show()
    }
}