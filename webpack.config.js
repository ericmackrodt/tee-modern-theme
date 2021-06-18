const path = require("path");
// const VueLoaderPlugin = require("vue-loader/lib/plugin");
const webpack = require("webpack");

module.exports = {
  mode: "production",
  entry: "./src/js/index.js",
  devtool: "cheap-source-map",
  output: {
    path: path.resolve(__dirname, "modern/js"), // string
    // the target directory for all output files
    // must be an absolute path (use the Node.js path module)
    filename: "client.js", // string
    // the filename template for entry chunks
    // publicPath: "/assets/", // string
    // // the url to the output directory resolved relative to the HTML page
  },
  resolve: {
    // Add `.ts` as a resolvable extension.
    extensions: [".vue", ".js"],
    // alias: { vue: "vue/dist/vue.esm.js" },
  },
  module: {
    rules: [
      // {
      //   test: /\.vue$/,
      //   loader: "vue-loader",
      // },
    ],
  },
  plugins: [
    new webpack.ProvidePlugin({
      $: "jquery",
      jQuery: "jquery",
    }),
    // make sure to include the plugin!
    // new VueLoaderPlugin(),
  ],
};
