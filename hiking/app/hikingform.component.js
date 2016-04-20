System.register(['angular2/core', './model/hiking', './model/venue', './hiking.service', 'angular2/http'], function(exports_1, context_1) {
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
    var core_1, hiking_1, venue_1, hiking_service_1, http_1;
    var HikingFormComponent;
    return {
        setters:[
            function (core_1_1) {
                core_1 = core_1_1;
            },
            function (hiking_1_1) {
                hiking_1 = hiking_1_1;
            },
            function (venue_1_1) {
                venue_1 = venue_1_1;
            },
            function (hiking_service_1_1) {
                hiking_service_1 = hiking_service_1_1;
            },
            function (http_1_1) {
                http_1 = http_1_1;
            }],
        execute: function() {
            HikingFormComponent = (function () {
                function HikingFormComponent(elementRef, _hikingService) {
                    this._hikingService = _hikingService;
                    this.levels = ['Easy', 'Medium',
                        'Sportive', 'Alpine'];
                    this.displayListVenuesError = false;
                    this.newVenue = false;
                    this.model = new hiking_1.Hiking('', '', '', 0, '', '', '', '', '', '20', '20', 20, new venue_1.Venue(), '');
                    this.searchedQuery = 'Nice';
                    this.venues = [];
                    this.hikingConfirmationStatus = 'notSubmitted';
                    this.submitted = false;
                    this.displaySearchMapBtn = false;
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
                    this.getVenues();
                };
                HikingFormComponent.prototype.getVenues = function () {
                    var _this = this;
                    var errorMessage = '';
                    this.displayListVenuesError = false;
                    this._hikingService.getVenues()
                        .subscribe(function (data) { return _this.venues = data; }, function (error) { return _this.displayVenuesError(); });
                };
                HikingFormComponent.prototype.selectVenue = function (selectedVenue) {
                    this.model.venue = selectedVenue;
                    if (selectedVenue.id == 0) {
                        this.newVenue = true;
                        this.displaySearchMapBtn = true;
                    }
                    else {
                        this.newVenue = false;
                        this.displaySearchMapBtn = false;
                    }
                    var testElementsMap = document.getElementsByClassName('gllpLatlonPicker');
                    Array.prototype.filter.call(testElementsMap, function (testElement) {
                        var map = jQuery().gMapsLatLonPicker();
                        map.init(testElement);
                        map.changePosition(selectedVenue.lat, selectedVenue.lon);
                    });
                };
                HikingFormComponent.prototype.searchMap = function () {
                    var queryString = this.model.venue.address + ' ' + this.model.venue.city;
                    var testElementsMap = document.getElementsByClassName('gllpLatlonPicker');
                    Array.prototype.filter.call(testElementsMap, function (testElement) {
                        var map = jQuery().gMapsLatLonPicker();
                        map.init(testElement);
                        map.changeQuery(queryString);
                    });
                };
                HikingFormComponent.prototype.displayVenuesError = function () {
                    this.displayListVenuesError = true;
                };
                HikingFormComponent.prototype.onSubmit = function () {
                    var _this = this;
                    this.submitted = false;
                    this.model.longitude = document.getElementById("longitude").value;
                    this.model.latitude = document.getElementById("latitude").value;
                    this.model.date = document.getElementById("date").value;
                    this._hikingService.createEvent(this.model)
                        .subscribe(function (data) { return _this.hikingConfirmationStatus = data; }, function (error) { return _this.displayConfirmationError(); });
                    return false;
                };
                HikingFormComponent.prototype.displayConfirmationError = function () {
                    this.hikingConfirmationStatus = 'error;';
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
                        templateUrl: 'app/template/hiking-form.component.html',
                        providers: [
                            http_1.HTTP_PROVIDERS,
                            hiking_service_1.HikingService
                        ]
                    }),
                    __param(0, core_1.Inject(core_1.ElementRef)), 
                    __metadata('design:paramtypes', [core_1.ElementRef, hiking_service_1.HikingService])
                ], HikingFormComponent);
                return HikingFormComponent;
            }());
            exports_1("HikingFormComponent", HikingFormComponent);
        }
    }
});
//# sourceMappingURL=hikingform.component.js.map