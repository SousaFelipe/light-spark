


$(function () {

    new Request(app.api.url(`provedores/read`))
        .get(async response => {
            const provedores = await response.provedores

            const table = new Table('provedores', {
                headers: ['CNPJ', 'RAZÃO', 'ENDEREÇO', '...'],
                columns: [ 2, 3, 6, 1 ]
            })

            provedores.forEach(provedor => {

                console.log(provedor.tokens)

                table.addRow(
                    provedor.id, [
                        app.textMask(provedor.cnpj).cnpj(),
                        provedor.razao,
                        `${ provedor.municipio }, ${ provedor.logradouro }`,
                        `<span class="icon-sm icn-open-in-new"></span>`
                    ],
                    (data) => {
                        alert(data)
                    }
                )
            })

            table.render()
            icons.render()
        })

})
