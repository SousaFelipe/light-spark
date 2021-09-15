


class Super {


    constructor (id) {
        this.element = $(`#${ id }`)
    }


    targetData (data) {
        this.data = data
        return this
    }


    show () {
        this.element.css('display', 'flex')
        return this
    }


    hide () {
        this.element.css('display', 'none')
        return this
    }
}
