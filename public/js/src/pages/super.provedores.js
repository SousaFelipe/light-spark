


$(function () {

    new Request(app.api.url(`provedores/ativos`))
        .get(async response => {
            const provedores = await response.provedores

            const table = new Table('provedores', {
                headers: ['CNPJ', 'RAZÃO', 'ENDEREÇO', 'TOKENS'],
                columns: [ 2, 3, 5, 2 ]
            })

            provedores.forEach(provedor => {
                table.addRow(
                    provedor.id, [
                        app.textMask(provedor.cnpj).cnpj(),
                        provedor.razao,
                        `${ provedor.municipio }, ${ provedor.logradouro }`
                    ],
                    (data) => {
                        alert(data)
                    }
                )
            })

            table.render()
        })

})
