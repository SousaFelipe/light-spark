


$(function () {

    new Request(`http://127.0.0.1:8000/api/provedores/ativos`)
        .get(async response => {
            const provedores = await response.provedores

            /*new Table('provedores')
                .head(['Nº', 'CNPJ', 'RAZÃO', 'FANTASIA', 'ENDEREÇO', 'CONTATOS'])
                .body(response.provedores)*/

            console.log(provedores)
        })

    new Table('provedores')
        .head(['Nº', 'CNPJ', 'RAZÃO', 'FANTASIA', 'ENDEREÇO'])
        .fields(['id', 'cnpj', 'razao', 'nome_fantasia', 'endereco'])
})
