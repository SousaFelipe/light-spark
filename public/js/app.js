


$(function () {
    icons.render()

    if (window.APP == undefined) {

        window.APP = {

            form: (id) => {
                let element = document.getElementById(id)

                return {
                    submit: () => {
                        element.submit()
                    },
                }
            },

            input: (id) => {
                const element = document.getElementById(id)

                return {

                    invalidate: () => {
                        element.classList.add('is-invalid')
                        element.addEventListener('change', function(ev) {
                            element.classList.remove('is-invalid')
                            element.removeEventListener('change', ev)
                        })
                    }
                }
            },

            button: (id) => {
                const element = document.getElementById(id)

                return {
                    setLoding: (loading, disabled = true) => {

                        if (loading) {

                            window.APP.ENV.set(`loading-btn-${ id }`, element.innerText)
                            element.innerHTML = `<div class="spinner"></div>`

                            if (disabled) {
                                element.setAttribute('disabled', true)
                            }
                        }
                        else {
                            element.innerHTML = window.APP.ENV.get(`loading-btn-${ id }`)
                            window.APP.ENV.remove(`loading-btn-${ id }`)
                        }
                    }
                }
            },

            textMask: (clean) => {
                return {
                    cnpj: (format = '$1.$2.$3/$4-$5') => {
                        return clean.replace(/\D/g, '').replace(/^(\d{2})(\d{3})?(\d{3})?(\d{4})?(\d{2})?/, format)
                    }
                }
            },


            url: (level = false) => {
                return {

                    web: (endpoint) => {
                        return level
                            ? `${ config.webUri }/${ level }/${ endpoint }`
                            : `${ config.webUri }/${ endpoint }`
                    },

                    api: (endpoint) => {
                        return level
                            ? `${ config.apiUri }/${ level }/${ endpoint }`
                            : `${ config.apiUri }/${ endpoint }`
                    }
                }
            },

            api: {

                url: (endpoint) => {
                    return `${ config.apiUri }/${ endpoint }`
                }
            },
        }

        window.APP.ENV = {

            get: (name) => {
                return window.APP.ENV[name] ? window.APP.ENV[name] : { }
            },

            set: (name, value) => {
                window.APP.ENV[name] = value
            },

            remove: (name) => {
                if (window.APP.ENV[name]) {
                    delete window.APP.ENV[name]
                }
            }
        }
    }
})
