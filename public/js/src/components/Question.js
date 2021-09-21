


class Question {


    constructor (id, isFrame = false) {
        this.id = id
        this.isFrame = isFrame

        this.element = this.isFrame
            ? parent.document.getElementById(id)
            : document.getElementById(id)
    }


    bindActions () {
        const self = this
        const doc = this.isFrame ? parent.document : document

        let confirmButton = doc.getElementById(`${ this.id }-confirm`)
        let cancelButton = doc.getElementById(`${ this.id }-cancel`)

        $(confirmButton).on('click', function () {
            console.log('Confirmao!')
        })

        $(cancelButton).on('click', function () {
            console.log('Cancelado!')
        })
    }


    question (question) {

        const elementQuestion = this.isFrame
            ? parent.document.getElementById(`${ this.id }-question`)
            : document.getElementById(`${ this.id }-question`)

        $(elementQuestion).append(question)

        return this
    }


    explain (explain) {

        const elementExplain = this.isFrame
            ? parent.document.getElementById(`${ this.id }-explain`)
            : document.getElementById(`${ this.id }-explain`)

        $(elementExplain).append(explain)

        return this
    }


    confirm (onConfirm) {
        this.onConfirm = onConfirm

        this.bindActions()

        return this
    }
}
