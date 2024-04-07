import { Network }  from 'vis-network'

export default function visjs({
                                               data,
                                                options,
                                                heightPercentage,
                                                minZoom,
                                                 maxZoom,
                                           })
{
    return {
        init: function() {
            Alpine.effect(() => {
                Alpine.store('theme')

                const chart = this.getChart()

                if (chart) {
                    chart.destroy()
                }

                this.initChart()

                visjs.lastPosition = null;

                visjs.chart.on("zoom", function (params) {
                    if (params.scale < minZoom|| params.scale > maxZoom) { // adjust this value according to your requirement
                        visjs.chart.moveTo({
                            position: visjs.lastPosition, // use the last position before zoom limit
                            scale: params.scale > maxZoom ? maxZoom : minZoom // this scale prevents zooming out beyond the desired limit
                        });
                    } else {
                        // store the current position as the last position before zoom limit
                        visjs.lastPosition = visjs.chart.getViewPosition();
                    }
                });
                // on pan, store the current position
                visjs.chart.on("dragEnd", function () {
                    visjs.lastPosition = visjs.chart.getViewPosition();
                });
            })

            window
                .matchMedia('(prefers-color-scheme: dark)')
                .addEventListener('change', () => {
                    if (Alpine.store('theme') !== 'system') {
                        return
                    }

                    this.$nextTick(() => {
                        const chart = this.getChart()

                        if (chart) {
                            chart.destroy()
                        }

                        this.initChart()
                    })
                })
                window.addEventListener('resize', () => {
                    const chart = this.getChart()

                    if (chart) {
                        chart.destroy()
                        this.initChart()
                    }
                })
        },

        initChart: function() {
            // Chart.defaults.backgroundColor = getComputedStyle(
            //     this.$refs.backgroundColorElement,
            // ).color
            //
            // Chart.defaults.borderColor = getComputedStyle(
            //     this.$refs.borderColorElement,
            // ).color
            var container = this.$refs.container
            // container.style.setProperty('width', '800px')
            container.style.setProperty('height', window.innerHeight*heightPercentage + 'px')

            return visjs.chart = new Network(container, data, options)
        },

        getChart: function() {
            return visjs.chart === undefined ? null : visjs.chart;
        },
    }
}




