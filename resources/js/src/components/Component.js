


class Component {

    /**
     * @param {string} query
     * @param {boolean} jquery
     */
    constructor (query, jquery = true) {
        this.element = jquery
            ? window.$(query)
            : document.getElementById(query)
    }



    root () {
        return this.element
    }
}



module.exports = Component
