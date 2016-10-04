"use strict";
var Hiking = (function () {
    function Hiking(organiserName, organiserPhone, name, duration, elevation, level, date, location, link, latitude, longitude, numberOfPeople, venue, additionalInfo) {
        this.organiserName = organiserName;
        this.organiserPhone = organiserPhone;
        this.name = name;
        this.duration = duration;
        this.elevation = elevation;
        this.level = level;
        this.date = date;
        this.location = location;
        this.link = link;
        this.latitude = latitude;
        this.longitude = longitude;
        this.numberOfPeople = numberOfPeople;
        this.venue = venue;
        this.additionalInfo = additionalInfo;
    }
    return Hiking;
}());
exports.Hiking = Hiking;
//# sourceMappingURL=hiking.js.map