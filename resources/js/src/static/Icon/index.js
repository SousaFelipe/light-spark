
const repository = require('./repository')



let svg = function(w, h, path) {
    return (`
        <svg style="width: ${ w }px; height: ${ h }px" viewBox="0 0 24 24">
            <path d="${ path }" />
        </svg>
    `)
}


export default class Icon {


    static render () {

        const icons = window.$('span[class*="dcns-"]')

        let classList = []
        let classItem = ''
        let element = null
        let icon = undefined

        icons.each(function (index) {

            classList = $(this).attr('class').split(/\s+/)
            classItem = classList.filter(item => (item.search('dcns-') >= 0))[0]
            icon = repository.filter(repoIcon => (repoIcon.name == classItem.split('-').splice(1).join('-')))[0]

            if (icon) {
                element = window.$(`.${ classItem }`)
                element.html(svg(element.width(), element.height(), icon.path))
            }
            else {
                console.error(`Ico "${ classItem }" not found on repsitory`)
            }

            classList = []
            classItem = ''
            element = null
            icon = undefined

        })
    }
}
