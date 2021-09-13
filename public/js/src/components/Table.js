


class Table {


    constructor (id, settings = { }) {

        this.header = $(`#${ id } > div.table-header`)
        this.body = $(`#${ id } > div.table-body`)

        this.settings = settings
        this.rows = []

        this.layout = this.createLayout()
    }


    createLayout () {
        let inlineLayout = ``
        let lasColumnPos = (this.settings.columns.length - 1)

        this.settings.columns.forEach((col, i) => {
            inlineLayout += (i < lasColumnPos)
                ? `${ col }fr `
                : `${ col }fr`
        })

        return inlineLayout
    }


    addRow (id, data, callback = null) {

        let row = $(`<div/>`)
            .attr('id', id)
            .addClass('table-row')
            .css('grid-template-columns', this.layout)

        if (callback != null) {
            row.css('cursor', 'pointer')
            .on('click', function (event) {
                callback.call(this, id)
            })
        }

        data.forEach(data => {
            row.append(
                $('<div/>')
                    .addClass('table-cell')
                    .append(data)
            )
        })

        this.rows.push(row)
    }


    renderHeader (header) {
        this.header.append(
            $(`<span/>`)
                .addClass('table-header-cell')
                .text(header)
        )
    }


    renderRow (row) {
        this.body.append(row)
    }


    render () {
        this.header.css('grid-template-columns', this.layout)
        this.settings.headers.forEach(header => this.renderHeader(header))
        this.rows.forEach(row => this.renderRow(row))
    }
}
