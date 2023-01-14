// https://nuxt.com/docs/api/configuration/nuxt-config
export default defineNuxtConfig({
    modules: [
        '@nuxtjs/tailwindcss'
    ],
    app: {
        head: {
            title: 'PiAnchorChannel - Official Website',
            meta: [
                { name: "description", content: "A German company based in Berlin offers innovative anchoring solutions for the construction industry. Our team of development engineers is dedicated to innovating and developing new products based on customer demands." }
            ],
            link: [
                { rel: 'icon', type: 'image/x-icon', href: '/images/favicon.png' }
            ]
        }
    }
})
