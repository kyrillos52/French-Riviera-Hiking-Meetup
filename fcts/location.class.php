<?php

/**
 * Class representing a location
 *
 * @author Cyril Grandjean
 * @version 1.0 Class creation
 */
class Location {
    
    /**
     * Location address
     * @var 
     */
    private $address;
    
    /**
     * Location town
     * @var
     */
    private $town;
    
    /**
     * GPS latitude
     * @var
     */
    private $latitude;
    
    /**
     * GPS longitude
     * @var
     */
    private $longitude;
    
    function getAddress() {
        return $this->address;
    }

    function getTown() {
        return $this->town;
    }

    function getLatitude() {
        return $this->latitude;
    }

    function getLongitude() {
        return $this->longitude;
    }

    function setAddress($address) {
        $this->address = $address;
    }

    function setTown($town) {
        $this->town = $town;
    }

    function setLatitude($latitude) {
        $this->latitude = $latitude;
    }

    function setLongitude($longitude) {
        $this->longitude = $longitude;
    }
}
