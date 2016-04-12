System.register(['angular2/core', './model/hiking'], function(exports_1, context_1) {
    "use strict";
    var __moduleName = context_1 && context_1.id;
    var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
        var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
        if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
        else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
        return c > 3 && r && Object.defineProperty(target, key, r), r;
    };
    var __metadata = (this && this.__metadata) || function (k, v) {
        if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
    };
    var __param = (this && this.__param) || function (paramIndex, decorator) {
        return function (target, key) { decorator(target, key, paramIndex); }
    };
    var core_1, hiking_1;
    var HikingFormComponent;
    return {
        setters:[
            function (core_1_1) {
                core_1 = core_1_1;
            },
            function (hiking_1_1) {
                hiking_1 = hiking_1_1;
            }],
        execute: function() {
            HikingFormComponent = (function () {
                function HikingFormComponent(elementRef) {
                    this.levels = ['Easy', 'Medium',
                        'Sportive', 'Alpine'];
                    this.model = new hiking_1.Hiking('', '', '', 0, '', '', '', '', '', 20, '20', '20', 20, '');
                    this.submitted = false;
                    this.elementRef = elementRef;
                }
                HikingFormComponent.prototype.ngOnInit = function () {
                    var testElementsMap = document.getElementsByClassName('gllpLatlonPicker');
                    Array.prototype.filter.call(testElementsMap, function (testElement) {
                        jQuery().gMapsLatLonPicker().init(testElement);
                    });
                    var testElementsDateTime = document.getElementsByClassName('datetimepicker');
                    Array.prototype.filter.call(testElementsDateTime, function (testElement) {
                        jQuery(testElement).datetimepicker({
                            format: 'DD/MM/YYYY HH:mm'
                        });
                    });
                };
                HikingFormComponent.prototype.onSubmit = function () {
                    this.submitted = false;
                    this.model.longitude = document.getElementById("longitude").value;
                    this.model.latitude = document.getElementById("latitude").value;
                    this.model.date = document.getElementById("date").value;
                };
                Object.defineProperty(HikingFormComponent.prototype, "diagnostic", {
                    // TODO: Remove this when we're done
                    get: function () { return JSON.stringify(this.model); },
                    enumerable: true,
                    configurable: true
                });
                HikingFormComponent = __decorate([
                    core_1.Component({
                        selector: 'hiking-form',
                        templateUrl: 'app/template/hiking-form.component.html'
                    }),
                    __param(0, core_1.Inject(core_1.ElementRef)), 
                    __metadata('design:paramtypes', [core_1.ElementRef])
                ], HikingFormComponent);
                return HikingFormComponent;
            }());
            exports_1("HikingFormComponent", HikingFormComponent);
        }
    }
});
//# sourceMappingURL=hikingform.component.js.map