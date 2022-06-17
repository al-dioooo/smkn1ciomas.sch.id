<script setup>
    import { use } from "echarts/core"
    import { SVGRenderer } from "echarts/renderers"
    import { GaugeChart } from "echarts/charts"
    import { ref } from "vue"
    import VChart from "vue-echarts"

    const props = defineProps({
        title: String,
        subtitle: String,
        progress: Object,
        showProgress: {
            type: Boolean,
            default: true
        },
        link: {
            type: String,
            default: null
        }
    })

    use([
        SVGRenderer,
        GaugeChart
    ])

    const option = ref({
        series: [
            {
                type: 'gauge',
                startAngle: 90,
                endAngle: -270,
                pointer: {
                    show: false
                },
                progress: {
                    show: props.showProgress,
                    overlap: false,
                    roundCap: true,
                    clip: false
                },
                axisLine: {
                    lineStyle: {
                        width: 5
                    }
                },
                splitLine: {
                    show: false,
                    distance: 0,
                    length: 10
                },
                axisTick: {
                    show: false
                },
                axisLabel: {
                    show: false,
                    distance: 100
                },
                data: [
                    {
                        value: props.progress.percentage,
                        detail: {
                            valueAnimation: true,
                            offsetCenter: ['0%', '0%']
                        }
                    }
                ],
                detail: {
                    height: 18,
                    fontSize: 18,
                    color: 'inherit',
                    formatter: props.showProgress ? '{value}%' : '{value}'
                }
            }
        ]
    })
</script>

<template>
    <div class="flex items-center p-2 mt-8 space-x-4 border rounded-xl">
        <v-chart class="w-24 h-24 aspect-square" :option="option" />
        <div>
            <p class="text-sm">{{ subtitle }}</p>
            <p class="text-xl">{{ title }}</p>
        </div>
    </div>
</template>
