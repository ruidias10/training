/* eslint-disable no-undef */
module.exports = {
	entry: './src/main.js',
	output: {
		path: __dirname,
		filename: 'bundle.js',
	},
	module: {
		rules: [
			{
				test: /\.js$/,
				exclude: /node_modules/,
				use: {
					loader: 'babel-loader',
				}
			}
		],
	},
};
