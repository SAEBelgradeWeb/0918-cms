const path = require("path");

module.exports = {
  outputDir: 'public',
  chainWebpack: config => {
    config
      .entry("app")
      .clear()
      .add("./resources/main.js")
      .end();
    config.resolve.alias
      .set("@", path.join(__dirname, "./resources"))
  }
};
