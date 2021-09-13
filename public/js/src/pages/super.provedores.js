


$(function () {

    new Request(app.api.url(`provedores/read`))
        .get(async response => {
            const provedores = await response.provedores

            const table = new Table('provedores', {
                headers: ['CNPJ', 'RAZÃO', 'ENDEREÇO', 'action'],
                columns: [ 5, 7, 9, 1 ]
            })

            provedores.forEach(provedor => {
                table.addRow(
                    provedor.id, [
                        app.textMask(provedor.cnpj).cnpj(),
                        provedor.razao,
                        `${ provedor.municipio }, ${ provedor.logradouro }`,
                    ]
                ).action(
                    `<span class="icon-sm icn-open-in-new text-primary"></span>`,
                    (row) => console.log(row)
                )
            })

            table.render()
            icons.render()
        })

})
