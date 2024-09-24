const path = require('path');
const defaultConfig = require("@wordpress/scripts/config/webpack.config");

module.exports = {
  ...defaultConfig,
  entry: {
    index: path.resolve(__dirname, 'src', 'index.js'),
    frontend: path.resolve(__dirname, 'src', 'frontend.js'),
  },
  output: {
    path: path.resolve(__dirname, 'build'),
    filename: '[name].js',
  },
  module: {
    rules: [
      {
        test: /\.(js|jsx)$/, // .js와 .jsx 파일을 Babel로 처리
        exclude: /node_modules/,
        use: {
          loader: 'babel-loader',
          options: {
            presets: ['@babel/preset-env', '@babel/preset-react'], // JSX 변환을 위한 Babel 프리셋 추가
          },
        },
      },
      ...(defaultConfig.module?.rules || []), // 기본 설정 로더 유지
    ],
  },
  resolve: {
    extensions: ['.js', '.jsx'], // .jsx 파일 확장자도 처리
  },
};
