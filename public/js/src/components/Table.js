


class Table {


    constructor (id, settings = { }) {

        this.table = document.getElementById(id)
        this.thead = $(`#${ id } > thead`)
        this.tbody = $(`#${ id } > tbody`)

        this.settings = settings
        this.titles = []
        this.rows = []
    }


    classes (index = false) {

        let classes = this.settings.rows.cells.classes
        let inlines = classes.join(' ')

        return (classes.length > 0)
            ? (index !== false)
                ? `class="${ inlines } w-${ this.settings.cols[index] }"`
                : `class="${ inlines }"`
            : ``
    }


    addRow (rowData) {
        let innerHTML = ``

        rowData.forEach((data, index) => {
            innerHTML += `<td ${ this.classes(index) }>${ data }</td>`
        })

        this.rows.push(`<tr>${ innerHTML }</tr>`)
    }


    renderHeader () {
        let innerHTML = ``

        this.settings.titles.forEach((title, index) => {
            innerHTML += `<th ${ this.classes(index) }> ${ title } </th>`
        })

        this.thead.append(`<tr>${ innerHTML }</tr>`)
    }


    render () {
        this.renderHeader()

        for (let i = 0; i < this.rows.length; i++) {
            this.tbody.append(this.rows[i])
        }
    }
}
