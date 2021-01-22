const MonacoWebpackPlugin = require('monaco-editor-webpack-plugin');
const Encore = require('@symfony/webpack-encore');

if (!Encore.isRuntimeEnvironmentConfigured()) {
    Encore.configureRuntimeEnvironment(process.env.NODE_ENV || 'dev');
}

Encore.setOutputPath('public/build/')
    .setPublicPath('/build')
    .addEntry('tailwindcss', './assets/css/tailwindcss.css')
    .addEntry('fontawesome', './assets/js/fontawesome.js')
    .addEntry('monaco', './assets/js/monaco-editor.js')
    .addPlugin(new MonacoWebpackPlugin())
    .enablePostCssLoader()
    .splitEntryChunks()
    .enableSingleRuntimeChunk()
    .cleanupOutputBeforeBuild()
    .enableSourceMaps(!Encore.isProduction())
    .enableVersioning(Encore.isProduction())
    .enableSassLoader()
;

module.exports = Encore.getWebpackConfig();
