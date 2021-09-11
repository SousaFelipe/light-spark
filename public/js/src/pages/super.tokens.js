


$(function () {
    new Request(app.api.url(`provedores/tokens`))
        .get(async response => {
            const tokens = await response.tokens

            console.log(tokens)
        })
})
