


$(function () {

    new Request(app.api.url(`provedores/ativos`))
        .get(async response => {
            const provedores = await response.provedores

            const table = new Table('provedores', {
                titles: ['CNPJ', 'RAZÃO', 'ENDEREÇO'],
                rows: {
                    cells: { classes: ['cell'] }
                },
                cols: [ 30, 30, 40 ]
            })

            provedores.forEach(provedor => {
                table.addRow([
                    app.textMask(provedor.cnpj).cnpj(),
                    provedor.razao,
                    `${ provedor.municipio }, ${ provedor.logradouro }`
                ])
            })

            table.render()
        })

})
