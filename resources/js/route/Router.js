
import routes from '../config/routes'



export default class Router {



    constructor(context) {
        this.uri(context)
    }



    uri(context = undefined) {
        if (context) {
            this.currentUri = context.location.pathname
        }
        return this.currentUri
    }



    current(context = undefined) {
        let uri = this.uri(context)
        let route = null

        for (const r in routes) {
            route = routes[r]
            if (uri.includes(route.prefix())) break
        }

        return route
    }


    equals(route) {

        if (this.uri().indexOf(route.prefix()) < 0) {
            return false
        }

        if (this.uri().length == route.prefix().length) {
            return this.uri() == route.prefix()
        }
    }


    parameters() {

        const route = this.current()

        if (route && route.parameters().length > 0) {

            let parameterVals = []
            let routeParams = route.parameters()

            let currentUri = this.uri().split('/')
                currentUri.splice(0, 1)

            let routeUri = route.prefix().concat('/').concat(routeParams).split('/')
                routeUri.splice(0, 1)

            for (let i = 0; i < routeParams.length; i++) {
                    let p = currentUri.length + i

                parameterVals.push(
                    currentUri[p] ? currentUri[p] : currentUri[p - 1]
                )
            }

            return parameterVals
        }

        return []
    }



    route() {

        const route = this.current()

        if (route && this.equals(route)) {
            let controller = require(`../src/controllers/${ route.controller() }`)
            controller[route.action()](this.parameters())
        }
    }
}
