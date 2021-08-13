


const brand    = ['#0094FE', '#02AAFF', '#88CBFF', '#C7E7FE', '#F0F8FF']
const accent   = ['#00E096', '#20E3A2', '#88F1CB', '#C7FAE7', '#EBFDF7']
const info     = ['#884DFF', '#9764FF', '#C4A6FF', '#E3D4FF', '#F8F5FF']
const warning  = ['#FFB55E', '#FEBF73', '#FFDAAF', '#FFEDD9', '#FFF9F2']
const danger   = ['#FF3D71', '#FF5683', '#FF9EB8', '#FFD1DD']



module.exports = {

    brand: brand,
    accent: accent,
    info: info,
    warning: warning,
    danger: danger,

    color: (name, level = 1) => {

        const colors = {
            'brand':    (level) => brand[level],
            'accent':   (level) => accent[level],
            'info':     (level) => info[level],
            'warning':  (level) => warning[level],
            'danger':   (level) => danger[level],
        }

        return (colors[name] || colors['brand'])(level)
    },

    pallete: (level = 1) => {
        return [
            brand[level],
            accent[level],
            info[level],
            warning[level],
            danger[(level < 4) ? level : 3]
        ]
    }
}
