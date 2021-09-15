


class Toast {


    constructor (id, timeout = 0) {

        this.timeout = timeout
        this.toast = document.getElementById(id)
        this.toastBody = document.getElementById(`${ id }Body`)

        this.bindAction(id)
    }


    bindAction (id) {
        let btnClose = document.querySelectorAll(`[data-spark-close='${ id }']`)[0]
        if (btnClose) {
            btnClose.addEventListener("click", () => this.hide())
        }
    }


    hide () {
        this.toastBody.innerHTML = ''
        $(this.toast).fadeOut('fast', function () {
            $(this).css('display', 'none')
        })
    }


    display (msg) {
        this.toastBody.innerHTML = msg
        $(this.toast).fadeIn('fast', function() {
            $(this).css('display', 'flex')
        })
    }
}
