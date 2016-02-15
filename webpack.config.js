module.exports = {
    entry: "./resources/assets/js/app.js",
    output: {
        path: "./public/js",
        filename: "app.js",
    },
    resolve: {
        modulesDirectories: ['./node_modules', './resources/assets/js/'],
    },
    module: {
        loaders: [{
            test: /\.jsx?$/,
            exclude: /(node_modules|bower_components)/,
            loader: 'babel',
        }, {
            test: /\.vue$/,
            exclude: /(node_modules|bower_components)/,
            loader: 'vue',
        }, ],
    },
    babel: {
        presets: ['es2015', 'stage-0'],
        plugins: ['transform-runtime', 'transform-decorators-legacy', 'add-module-exports']
    }
};