"use strict";
var platform_browser_dynamic_1 = require('@angular/platform-browser-dynamic');
var hikingform_module_1 = require('./hikingform.module');
var core_1 = require('@angular/core');
require('rxjs/Rx');
require('rxjs/add/operator/map');
core_1.enableProdMode();
var platform = platform_browser_dynamic_1.platformBrowserDynamic();
platform.bootstrapModule(hikingform_module_1.HikingFormModule);
//# sourceMappingURL=main.js.map