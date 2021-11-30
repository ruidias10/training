#### Thanks to
  - https://rocketseat.com.br/
  - https://eslint.org/docs/user-guide/getting-started


#### Install software:
  - NodeJS https://nodejs.org/en/


#### Prepare environment:
  - $ npm init
  - $ npm install @babel/cli
  - $ npm install @babel/core
  - $ npm install @babel/preset-env
  - $ npm install @babel/plugin-proposal-object-rest-spread
  - $ npm install eslint
  - $ npm install --save-dev webpack
  - $ npm install --save-dev webpack-cli
  - $ npm install --save-dev babel-loader


#### Add babel file and configure it to make JavaScript compatible with older browsers
  .babelrc
```
  {
      "presets": ["@babel/preset-env"],
      "plugins": ["@babel/plugin-proposal-object-rest-spread"]
  }
```


#### Inform babel which file should be monitored and where the bundle will be created. -w listening to changes
  package.json
```
  "scripts": {
    "dev": "babel ./src/main.js -o ./bundle.js -w",
    "dev-babel": "babel ./src/main.js -o ./bundle.js -w",
    "dev-webpack": "webpack --mode=development -w",
    "lint": "./node_modules/.bin/eslint */*.js --fix"
  }
```


#### Configure webpack
  webpack.config.js
```
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
```


#### Run project
  - $ npm run dev (dev name > package.json > scripts.dev)
  - $ npm run dev-babel
  - $ npm run dev-webpack


#### Eslint

##### Run Eslint
  - $ ./node_modules/.bin/eslint src/main.js

##### Setup a configuration file
  - $ ls -la node_modules/.bin (find eslint bin)
  - $ ./node_modules/.bin/eslint --init
```
    ➜  JavaScript-ES6 git:(master) ✗ ./node_modules/.bin/eslint --init
    ? How would you like to configure ESLint? Answer questions about your style
    ? Which version of ECMAScript do you use? ES2015
    ? Are you using ES6 modules? Yes
    ? Do you use CommonJS? No
    ? Do you use JSX? No
    ? What style of indentation do you use? Tabs
    ? What quotes do you use for strings? Single
    ? What line endings do you use? Unix
    ? Do you require semicolons? Yes
    ? What format do you want your config file to be in? JavaScript
    Successfully created .eslintrc.js file
```


