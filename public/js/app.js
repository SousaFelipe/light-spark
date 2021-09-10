


$(function () {
    icons.render()
})



const env = () => {

    if (!window.ENV) {
        window.ENV = { }
    }

    return {

        get: (name) => {
            return window.ENV[name] ? window.ENV[name] : { }
        },

        set: (name, value) => {
            window.ENV[name] = value
        },

        remove: (name) => {
            if (window.ENV[name]) {
                delete window.ENV[name]
            }
        }
    }
}



const app = {



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

                    env().set(`loading-btn-${ id }`, element.innerText)
                    element.innerHTML = `<div class="spinner"></div>`

                    if (disabled) {
                        element.setAttribute('disabled', true)
                    }
                }
                else {
                    element.innerHTML = env().get(`loading-btn-${ id }`)
                    env().remove(`loading-btn-${ id }`)
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



    api: {

        url: (endpoint) => {
            return `${ config.apiUri }/${ endpoint }`
        }
    },
}
