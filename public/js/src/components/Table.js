


class Table {


    constructor(id) {

        this.table = document.getElementById(id)
        this.thead = $(`#${ id } > thead > tr`)
        this.tbody = $(`#${ id } > tbody`)

        this.data = {
            fields: [],
            values: []
        }
    }


    head(titles = []) {

        let innerHTML = ``

        titles.forEach(title => {
            innerHTML += `<th> ${ title } </th>`
        })

        this.thead.append(innerHTML)
    }


    fields(fields = []) {
        this.data.fields = fields
    }


    data(data) {
        this.data.values = data
    }


    render() {

    }
}
