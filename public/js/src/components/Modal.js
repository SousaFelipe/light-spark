


class Modal {


    constructor (id, isFrame = false) {

        this.element = isFrame
            ? parent.document.getElementById(id)
            : document.getElementById(id)

        this.modal = this.element.childNodes[1]
        this.btnClose = $(`button[data-modal-close="${ id }"]`)

        this.bindAction()
    }


    bindAction () {
        const self = this

        this.btnClose.on('click', function(e) {
            self.close()
        })
    }


    show () {
        const modal = this.modal

        $(this.element).fadeIn('fast', function() {
            $(this).css('display', 'flex')

            $(modal).fadeIn('fast', function () {
                $(this).css('display', 'flex')
            })
        })
        return this
    }


    close () {
        $(this.element).fadeOut('fast', function() {
            $(this).css('display', 'none')
        })
    }
}
