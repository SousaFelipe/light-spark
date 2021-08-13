


module.exports = {

    valueFromPercent: (percent, maxValue) => {
        return ((maxValue * percent) / 100)
    },

    percentFromValue: (value, maxValue) => {
        return ((value * 100) / maxValue)
    }
}
