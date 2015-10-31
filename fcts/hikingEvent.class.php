<?php
/**
 * Class representing an hiking event
 *
 * @author Cyril Grandjean
 * @version 1.0 Class creation
 */
class HikingEvent {
    
    /**
     * Hiking name
     * @var
     */
    private $name;
    
    /**
     * Hiking meeting time
     * @var 
     */
    private $meetingTime;
    
    /**
    * Hiking meeting location
    * @var Location
    */
    private $meetingLocation;
    
    /**
     * Hiking level
     * @var 
     */
    private $level;
    
    /**
     * Hiking duration
     * @var
     */
    private $hikingDuration; 
    
    /**
     * Hiking elevation
     * @var
     */
    private $elevation;
    
    /**
     * Hiking other details
     * @var 
     */
    private $otherDetails;
    
    /**
     * Hiking link
     * @var type 
     */
    private $link;
    
    /**
     * Hiking organiser
     * @var Person
     */
    private $organiser;
    
    function getName() {
        return $this->name;
    }

    function getMeetingTime() {
        return $this->meetingTime;
    }

    function getMeetingLocation() {
        return $this->meetingLocation;
    }

    function getLevel() {
        return $this->level;
    }

    function getHikingDuration() {
        return $this->hikingDuration;
    }

    function getElevation() {
        return $this->elevation;
    }

    function getOtherDetails() {
        return $this->otherDetails;
    }

    function getLink() {
        return $this->link;
    }

    function getOrganiser() {
        return $this->organiser;
    }

    function setName($name) {
        $this->name = $name;
    }

    function setMeetingTime($meetingTime) {
        $this->meetingTime = $meetingTime;
    }

    function setMeetingLocation(Location $meetingLocation) {
        $this->meetingLocation = $meetingLocation;
    }

    function setLevel($level) {
        $this->level = $level;
    }

    function setHikingDuration($hikingDuration) {
        $this->hikingDuration = $hikingDuration;
    }

    function setElevation($elevation) {
        $this->elevation = $elevation;
    }

    function setOtherDetails($otherDetails) {
        $this->otherDetails = $otherDetails;
    }

    function setLink(type $link) {
        $this->link = $link;
    }

    function setOrganiser(Person $organiser) {
        $this->organiser = $organiser;
    }
}
