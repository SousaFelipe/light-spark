
require('./bootstrap')



import Router from './route/Router'


if (!window.APP) {

    window.$(document).ready(function () {

        window.APP = {
            router: new Router(window),
        }
    
        if (window.APP.router.current().auth()) {
            window.axios.get(`api/v1/auth/user`)
                .then(async response => {
                    if (response.status == 200) {
                        const data = await response.data
                        console.log(data)
                    }
                })
        }

        window.APP.router.route()
    })
}
