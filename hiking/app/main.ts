import { platformBrowserDynamic } from '@angular/platform-browser-dynamic';
import { HikingFormModule } from './hikingform.module';
import {enableProdMode} from '@angular/core';
import 'rxjs/Rx';
import 'rxjs/add/operator/map';

enableProdMode();
const platform = platformBrowserDynamic();
platform.bootstrapModule(HikingFormModule);