


$(function () {

    new Request(window.APP.url('super/admin').web('provedores/listar'))
        .get(async response => {
            const provedores = await response.provedores

            const table = new Table('provedores', {
                headers: ['CNPJ', 'RAZÃO', 'ENDEREÇO', 'action'],
                columns: [ 5, 7, 9, 1 ]
            })

            provedores.forEach(provedor => {
                table.addRow(
                    provedor.id, [
                        window.APP.textMask(provedor.cnpj).cnpj(),
                        provedor.razao,
                        `${ provedor.municipio }, ${ provedor.logradouro }`,
                    ]
                ).action(
                    `<span class="icon-sm icn-open-in-new text-primary"></span>`,
                    (row) => mostrarDetalhesProvedor(row)
                )
            })

            table.render()
            icons.render()
        })

})



function mostrarDetalhesProvedor (row) {

    new Request(window.APP.url('super/admin').web(`provedores/buscar/${ row }`))
        .get(async response => {
            const provedor = response.provedor

            $(`#fantasia`).val(provedor.nome_fantasia)
            $('#titular').val(provedor.titular)
            $('#ctt-titular').val(window.APP.textMask(provedor.titular_contato).cell())

            $('#cep').val(window.APP.textMask(provedor.cep).cep())
            $('#cidade').val(`${ provedor.municipio } - ${ provedor.uf }`)
            $('#logradouro').val(`Bairro ${ provedor.bairro }, ${ provedor.logradouro }`)

            new Super('provedor-detalhes')
                .setTitle(provedor.razao)
                .setSubitle(window.APP.textMask(provedor.cnpj).cnpj())
                .show()

            console.log(provedor)
        })
}
