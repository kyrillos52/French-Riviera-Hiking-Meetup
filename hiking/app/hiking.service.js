"use strict";
var __decorate = (this && this.__decorate) || function (decorators, target, key, desc) {
    var c = arguments.length, r = c < 3 ? target : desc === null ? desc = Object.getOwnPropertyDescriptor(target, key) : desc, d;
    if (typeof Reflect === "object" && typeof Reflect.decorate === "function") r = Reflect.decorate(decorators, target, key, desc);
    else for (var i = decorators.length - 1; i >= 0; i--) if (d = decorators[i]) r = (c < 3 ? d(r) : c > 3 ? d(target, key, r) : d(target, key)) || r;
    return c > 3 && r && Object.defineProperty(target, key, r), r;
};
var __metadata = (this && this.__metadata) || function (k, v) {
    if (typeof Reflect === "object" && typeof Reflect.metadata === "function") return Reflect.metadata(k, v);
};
var core_1 = require('@angular/core');
var http_1 = require('@angular/http');
var Observable_1 = require('rxjs/Observable');
var HikingService = (function () {
    function HikingService(http) {
        this.http = http;
        this._createEventUrl = 'add-event.php';
        this._venueList = 'get-venues.php';
    }
    HikingService.prototype.getVenues = function () {
        return this.http.get(this._venueList)
            .map(function (res) { return res.json().data; })
            .do(function (data) { return console.log(data); }) // eyeball results in the console
            .catch(this.handleErrorList);
    };
    HikingService.prototype.createEvent = function (hiking) {
        var body = JSON.stringify({
            organiserName: hiking.organiserName,
            organiserPhone: hiking.organiserPhone,
            name: hiking.name,
            duration: hiking.duration,
            elevation: hiking.elevation,
            level: hiking.level,
            date: hiking.date,
            link: hiking.link,
            latitude: hiking.latitude,
            longitude: hiking.longitude,
            numberOfPeople: hiking.numberOfPeople,
            additionalInfo: hiking.additionalInfo,
            venueId: hiking.venue.id,
            venueName: hiking.venue.name,
            venueAddress: hiking.venue.address,
            venueCity: hiking.venue.city
        });
        var headers = new http_1.Headers({ 'Content-Type': 'application/json' });
        var options = new http_1.RequestOptions({ headers: headers });
        return this.http.post(this._createEventUrl, body, options)
            .map(function (res) { return res.json().data; })
            .do(function (data) { return console.log(data); }) // eyeball results in the console
            .catch(this.handleErrorConfirm);
    };
    HikingService.prototype.handleErrorList = function (error) {
        // in a real world app, we may send the server to some remote logging infrastructure
        // instead of just logging it to the console
        return Observable_1.Observable.throw(error.json().error || 'Server error');
    };
    HikingService.prototype.handleErrorConfirm = function (error) {
        // in a real world app, we may send the server to some remote logging infrastructure
        // instead of just logging it to the console
        return Observable_1.Observable.throw(error.json().error || 'Server error');
    };
    HikingService = __decorate([
        core_1.Injectable(), 
        __metadata('design:paramtypes', [http_1.Http])
    ], HikingService);
    return HikingService;
}());
exports.HikingService = HikingService;
//# sourceMappingURL=hiking.service.js.map