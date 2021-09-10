


class Toast {


    constructor (id, timeout = 0) {

        this.timeout = timeout
        this.toast = document.getElementById(id)
        this.toastBody = document.getElementById(`${ id }Body`)

        this.findCloseButton(id)
    }


    findCloseButton (id) {

        let btnClose = document.querySelectorAll(`[data-spark-close='${ id }']`)[0]

        if (btnClose) {
            btnClose.addEventListener("click", () => this.changeState('out'))
        }
    }



    changeState (type = 'in') {
        let toast = this.toast
        let op = (type === 'out') ? 1.0 : 0.1

        if (type == 'in') {
            toast.style.display = 'flex'
        }

        var timer = setInterval(function () {

            if (type == 'out') {
                if (op <= 0) {
                    clearInterval(timer)
                    toast.style.display = 'none'
                }
            }
            else if (op >= 1) {
                clearInterval(timer)
            }

            toast.style.opacity = op
            toast.style.filter = ('alpha(opacity=' + op * 100 + ")")

            if (type == 'out') op -= (op * 0.1)
            else op += (op * 0.1)

        }, 10)
    }


    display (msg) {
        this.toastBody.innerHTML = msg
        this.changeState('in')
    }
}
