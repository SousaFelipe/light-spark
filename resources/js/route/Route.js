


class Route {


    constructor(prefix = '/') {

        this.instance = {
            prefix:      prefix,
            controller:  'Controller',
            action:      'index',
            middlewares: [],
            parameters:  []
        }
        
    }


    to(controller_action = undefined) {
        if (controller_action) {
            let splited = controller_action.split('@')

            this.instance.controller = splited[0]
            this.instance.action = splited[1]

            return this
        }
        else return [this.instance.controller, this.instance.action]
    }


    prefix(prefix = undefined) {
        if (prefix) {
            this.instance.prefix = prefix
            return this
        }
        else return this.instance.prefix
    }


    controller(controller = undefined) {
        if (controller) {
            this.instance.controller = controller
            return this
        }
        else return this.instance.controller
    }


    action(action = undefined) {
        if (action) {
            this.instance.action = action
            return this
        }
        else return this.instance.action
    }


    parameters(parameters = undefined) {
        if (parameters) {
            this.instance.parameters = parameters
            return this
        }
        else return this.instance.parameters
    }


    middleware(middleware = []) {
        if (middleware) {
            if (!this.instance.middlewares.includes(middleware)) {
                this.instance.middlewares.push(middleware)
            }
            return this
        }
        else return this.instance.middlewares
    }


    auth() {
        return (this.instance.middlewares.includes('auth'))
    }
}



module.exports = Route
