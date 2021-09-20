

$(function () {

    const provedoresTable = new Table('provedores', {
        headers: ['CNPJ', 'RAZÃO', 'ENDEREÇO', 'action'],
        columns: [ 4, 8, 8, 2 ]
    })

    new Request(window.APP.url('super/admin').web('provedores/listar'))
        .get(async response => {
            const provedores = await response.provedores

            provedores.forEach(provedor => {
                provedoresTable.addRow(
                    provedor.id, [
                        window.APP.mask(provedor.cnpj).cnpj(),
                        provedor.razao,
                        `${ provedor.municipio }, ${ provedor.logradouro }`,
                    ]
                ).action(
                    `<span class="icon-sm icn-open-in-new text-primary"></span>`,
                    (row) => location.replace(window.APP.url('super/admin').web(`provedores/detalhes/${ row }`))
                )
            })

            provedoresTable.render()
            icons.render()
        })

})



function mostrarDetalhesProvedor (row) {

    const provedoresURI = window.APP.url('super/admin').web(`provedores/buscar/${ row }`)
    const tokensURI = window.APP.url('super/admin').web(`tokens/listar/${ row }`)

    const tokensTable = new Table('tokens', {
        headers: ['STATUS', 'TOKEN', 'action'],
        columns: [ 3, 17, 2 ]
    })

    const superLayout = new Super('provedor-detalhes')
        .setOnClose(() => tokensTable.clear())
        .show()

    new Request(provedoresURI)
        .get(async response => {
            const provedor = await response.provedor
            superLayout.setTitle(provedor.razao)
            superLayout.setSubitle(`${ provedor.nome_fantasia } - ${ window.APP.mask(provedor.cnpj).cnpj() }`)
            preencherInputs(provedor)
        })

    new Request(tokensURI)
        .get(async response => {
            const tokens = await response.tokens

            tokens.forEach(token => {
                let obj = new Token(token)

                tokensTable.addRow(
                    token.id, [
                        obj.status(),
                        token.token,
                    ]
                ).action(
                    obj.action(),
                    (row) => questionAtivarToken(row)
                )
            })

            tokensTable.render()
            icons.render()
        })
}



function preencherInputs (provedor) {

    $(`#fantasia`).val(provedor.nome_fantasia)
    $('#titular').val(provedor.titular)
    $('#ctt-titular').val(window.APP.mask(provedor.titular_contato).cell())

    $('#cep').val(window.APP.mask(provedor.cep).cep())
    $('#cidade').val(`${ provedor.municipio }-${ provedor.uf }`)
    $('#logradouro').val(`Bairro ${ provedor.bairro }, ${ provedor.logradouro }`)

    $('#ctt1').val(window.APP.mask(provedor.contatos.split(';')[0]).cell())
    $('#ctt2').val(window.APP.mask(provedor.contatos.split(';')[1]).cell())
    $('#abertura').val(window.APP.mask(provedor.data_abertura).date())
    $('#situacao').val(window.APP.mask(provedor.data_situacao).date())

}



function questionAtivarToken(tokenID) {
    const question = confirm('Deseja realmente ativar esse Token?\nAo ativar, os usuários associados a ele terão acesso ao sistem imediatamente!')

    if (question === true) {

    }
    else {

    }
}
