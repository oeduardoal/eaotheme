require("style-loader");
require("css-loader");
require("sass-loader");
require("babel-polyfill");
require("url-loader");
require("file-loader");

const ExtractTextPlugin = require("extract-text-webpack-plugin")
const webpack = require('webpack');

module.exports = {
    entry: ["babel-polyfill","./assets/js/app.js", "./assets/scss/app.scss"],
    output: {
        path: __dirname + "/dist",
        filename: "bundle.js"
    },
    module: {
        rules: [
          {
            test: /\.js$/,
            loader: 'babel-loader',
            query: {
                presets: ['es2015']
              }
          },
          { // regular css files
            test: /\.css$/,
            use: ExtractTextPlugin.extract({
              use: 'css-loader?importLoaders=1',
            }),
          },
          {
            test: /.(ttf|otf|eot|svg|woff(2)?)(\?[a-z0-9]+)?$/,
            use: [{
              loader: 'file-loader',
              options: {
                name: '[name].[ext]',
                outputPath: 'fonts/',    // where the fonts will go
              }
            }]
          },
          { // sass / scss loader for webpack
            test: /\.(sass|scss)$/,
            use: ExtractTextPlugin.extract(['css-loader', 'sass-loader'])
          },
          {
            test: /\.(gif|jpe?g|png)$/,
            loader: 'url-loader?limit=25000',
            query: {
              limit: 10000,
              name: '[name].[hash:8].[ext]'
            }
          },
        ]
    },
    plugins: [
       new ExtractTextPlugin( {
          filename: "bundle.css"
       }),
    ],
};