

$(function () {
    const mask = window.APP.mask

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
                        mask(provedor.cnpj).cnpj(),
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
    const mask = window.APP.mask

    new Request(window.APP.url('super/admin').web(`provedores/buscar/${ row }`))
        .get(async response => {
            const provedor = await response.provedor

            $(`#fantasia`).val(provedor.nome_fantasia)
            $('#titular').val(provedor.titular)
            $('#ctt-titular').val(mask(provedor.titular_contato).cell())

            $('#cep').val(mask(provedor.cep).cep())
            $('#cidade').val(`${ provedor.municipio }-${ provedor.uf }`)
            $('#logradouro').val(`Bairro ${ provedor.bairro }, ${ provedor.logradouro }`)

            $('#ctt1').val(mask(provedor.contatos.split(';')[0]).cell())
            $('#ctt2').val(mask(provedor.contatos.split(';')[1]).cell())
            $('#abertura').val(mask(provedor.data_abertura).date())
            $('#situacao').val(mask(provedor.data_situacao).date())

            new Super('provedor-detalhes')
                .setTitle(provedor.razao)
                .setSubitle(`${ provedor.nome_fantasia } - ${ mask(provedor.cnpj).cnpj() }`)
                .show()

            console.log(provedor)
        })

    new Request(window.APP.url('super/admin').web(`tokens/listar/${ row }`))
        .get(async response => {
            const tokens = await response.tokens
            console.log(tokens)
        })
}
