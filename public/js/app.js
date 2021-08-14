


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
        let element = document.getElementById(id)

        return {

            invalidate: () => {
                element.classList.add('is-invalid')
                element.addEventListener('change', function(ev) {
                    element.classList.remove('is-invalid')
                    element.removeEventListener('change', ev)
                })
            }

        }
    }
}
