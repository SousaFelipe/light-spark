


class Table {


    constructor(id) {
        this.table = document.getElementById(id)
        this.thead = $(`#${ id } > thead > tr`)
        this.tbody = $(`#${ id } > tbody`)
    }


    head(titles = []) {

        let innerHTML = ``

        titles.forEach(title => {
            innerHTML += `<th> ${ title } </th>`
        })

        this.thead.append(innerHTML)
    }


    body(data) {

    }
}