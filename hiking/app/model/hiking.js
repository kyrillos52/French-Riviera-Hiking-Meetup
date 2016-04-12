System.register([], function(exports_1, context_1) {
    "use strict";
    var __moduleName = context_1 && context_1.id;
    var Hiking;
    return {
        setters:[],
        execute: function() {
            Hiking = (function () {
                function Hiking(organiserName, organiserPhone, name, duration, elevation, level, date, location, link, limit, latitude, longitude, numberOfPeople, additionalInfo) {
                    this.organiserName = organiserName;
                    this.organiserPhone = organiserPhone;
                    this.name = name;
                    this.duration = duration;
                    this.elevation = elevation;
                    this.level = level;
                    this.date = date;
                    this.location = location;
                    this.link = link;
                    this.limit = limit;
                    this.latitude = latitude;
                    this.longitude = longitude;
                    this.numberOfPeople = numberOfPeople;
                    this.additionalInfo = additionalInfo;
                }
                return Hiking;
            }());
            exports_1("Hiking", Hiking);
        }
    }
});
//# sourceMappingURL=hiking.js.map