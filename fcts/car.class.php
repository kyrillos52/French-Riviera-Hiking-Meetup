<?php

/**
 * Class representing a car
 *
 * @author Cyril Grandjean
 * @version 1.0 Class creation
 */
class Car {
    
    /**
     * Number of seats available in the car
     * @var
     */
    private $numberOfSeatsAvailable;
    
    /**
     * Car's driver
     * @var Person
     */
    private $driver;
    
    /**
     * List of person representing the car's passengers
     * @var array
     */
    private $passengers;
    
    /**
     * List of location where the cars will take people
     * @var array
     */
    private $stops;
    
    function getNumberOfSeatsAvailable() {
        return $this->numberOfSeatsAvailable;
    }

    function getDriver() {
        return $this->driver;
    }

    function getPassengers() {
        return $this->passengers;
    }

    function getStops() {
        return $this->stops;
    }

    function setNumberOfSeatsAvailable($numberOfSeatsAvailable) {
        $this->numberOfSeatsAvailable = $numberOfSeatsAvailable;
    }

    function setDriver(Person $driver) {
        $this->driver = $driver;
    }

    function setPassengers($passengers) {
        $this->passengers = $passengers;
    }

    function setStops($stops) {
        $this->stops = $stops;
    }
}
