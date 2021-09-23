


/*$(function () {

    const table = new Table('provedores', {
        headers: ['CNPJ', 'RAZÃO', 'ENDEREÇO', 'action'],
        columns: [ 4, 8, 8, 2 ]
    })

    new Request(window.APP.url('super/admin').web('provedores/listar'))
        .get(async response => {
            const provedores = await response.provedores

            provedores.forEach(provedor => {
                table.addRow(
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

            table.render()
            icons.render()
        })

})*/



const provedores = [
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
    { cnpj: '23866988000171', razao: 'Upnet Tecnologia e Informacao Eireli', logradouro: 'Rua Conego Aureliano Mota, 96' },
]



$(function () {

    $.extend($.fn.dataTable.defaults, {
        "autoWidth":    false,
        "searching":    false,
        "ordering":     false,
        "info":         false,
        "lengthChange": false,
        pageLength:     8,
        language: {
            oPaginate: {
                sNext: '<span class="icon icon-md icn-chevron-right"></span>',
                sPrevious: '<span class="icon icon-md icn-chevron-left"></span>',
            }
        }
    })

    new Request(window.APP.url('super/admin').web('provedores/listar'))
        .get(async response => {

            let table = $('#provedores').DataTable({
                data: provedores,
                columns: [
                    { data: 'cnpj' },
                    { data: 'razao' },
                    { data: 'logradouro' }
                ],
                columnDefs: [
                    {
                        targets: 0, className: 'text-start',
                    }
                ]
            })

            icons.render()
        })
})
