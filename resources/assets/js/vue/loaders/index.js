import Vue from 'vue';
import {
    basename
}
from 'path';

const context = require.context('./', true, /^((?!index).)*\.js$/);

var modules = context
    .keys()
    .reduce((obj, path, index) => {
        obj[basename(path, '.js')] = context(path);
        return obj;
    }, {});
for (let key in modules.components) {
    Vue.component(key, modules.components[key]);
}

export default modules;