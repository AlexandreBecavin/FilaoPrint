export default {
  // Global page headers: https://go.nuxtjs.dev/config-head
  head: {
    title: 'FilaoPrint',
    htmlAttrs: {
      lang: 'fr'
    },
    meta: [
      { charset: 'utf-8' },
      { name: 'viewport', content: 'width=device-width, initial-scale=1' },
      { hid: 'description', name: 'description', content: '' },
      { name: 'format-detection', content: 'telephone=no' }
    ],
    link: [
      { rel: 'icon', type: 'image/x-icon', href: '/favicon.ico' }
    ]
  },

  server: {
    host: '0.0.0.0',
  },

  watchers: {
    webpack: {
      poll: true
    }
  },

  // Global CSS: https://go.nuxtjs.dev/config-css
  css: [
    '@assets/css/style.css'
  ],

  // Plugins to run before rendering page: https://go.nuxtjs.dev/config-plugins
  plugins: [],

  // Auto import components: https://go.nuxtjs.dev/config-components
  components: true,

  // Modules for dev and build (recommended): https://go.nuxtjs.dev/config-modules
  buildModules: [
    '@nuxtjs/pwa'
  ],

  mode: 'universal',
  render: {
    ssr: false
  },
  // Modules: https://go.nuxtjs.dev/config-modules
  modules: [],

  pwa: {
    icon: { purpose: 'maskable' },
    meta:{
      title:'Filao Print',
      author:'Filao Print',
    },
    manifest: {
      lang: 'fr',
      name: "Filao Print",
      short_name: "Filao Print App",
      display: 'standalone',
      theme_color: '#2C3C4B',
      start_url: '/'
    },
    workbox: {
      dev: true // or use a global variable to track the current NODE_ENV, etc to determine dev mode
    }
  },

  // Build Configuration: https://go.nuxtjs.dev/config-build
  build: {
  }
}
