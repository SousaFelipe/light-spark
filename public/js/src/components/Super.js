


class Super {


    constructor (id) {

        this.id = id
        this.element = document.getElementById(id)
        this.btnClose = $(`button[data-super-close="${ id }"]`)

        this.bindAction()
    }


    bindAction () {
        const self = this

        this.btnClose.on('click', function(e) {
            self.hide()
        })
    }


    setTitle (title) {
        $(`#${ this.id }-titulo`).text(title)
        return this
    }


    setSubitle (subtitle) {
        $(`#${ this.id }-subtitulo`).text(subtitle)
        return this
    }


    show () {
        $(this.element).fadeIn('fast', function() {
            $(this).css('display', 'flex')
        })
        return this
    }


    hide () {
        $(this.element).fadeOut('fast', function() {
            $(this).css('display', 'none')
        })
        return this
    }
}
