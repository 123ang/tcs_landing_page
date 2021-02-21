module.exports = {
  "transpileDependencies": [
    "vuetify"
  ],
  devServer: {
    proxy: {
        '/api': {
            target: 'http://localhost:8082',
            changeOrigin: true,
            pathRewrite: {
                '/api': ''
            }
        }
    }
},
  publicPath: process.env.NODE_ENV === 'production'
  ? ''
  : '/'

}