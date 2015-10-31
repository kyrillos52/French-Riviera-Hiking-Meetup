<?php
/**
 * Class representing a person
 *
 * @author Cyril Grandjean
 * @version 1.0 Class creation
 */
class Person {
    
    /**
     * Person's firstname
     * @var
     */
    private $firstname;

    /**
     * Person's lastname
     * @var
     */
    private $lastname;

    /**
     * Person's email
     * @var
     */
    private $email;

    /**
     * Person's mobile phone
     * @var
     */
    private $mobilePhone;

    /**
     * Indicates if this person can drive and take other people
     * @var
     */
    private $canDrive;
    
    /**
     * Indicates if this person accepts to be taken into another car
     * @var 
     */
    private $canBeTakenIntoAnotherCar;

    /**
     * List of destination to take be people or destination to be taken
     * @var array
     */
    private $destinationToTakeOrToBeTaken;
    
    /**
     * Person's car
     * @var Car
     */
    private $car;
    
    /**
     * Car sharing fees
     * @var
     */
    private $carSharingFees;
  
    function getFirstname() {
        return $this->firstname;
    }

    function getLastname() {
        return $this->lastname;
    }

    function getEmail() {
        return $this->email;
    }

    function getMobilePhone() {
        return $this->mobilePhone;
    }

    function getCanDrive() {
        return $this->canDrive;
    }

    function getCanBeTakenIntoAnotherCar() {
        return $this->canBeTakenIntoAnotherCar;
    }

    function getDestinationToTakeOrToBeTaken() {
        return $this->destinationToTakeOrToBeTaken;
    }

    function getCar() {
        return $this->car;
    }

    function getCarSharingFees() {
        return $this->carSharingFees;
    }

    function setFirstname($firstname) {
        $this->firstname = $firstname;
    }

    function setLastname($lastname) {
        $this->lastname = $lastname;
    }

    function setEmail($email) {
        $this->email = $email;
    }

    function setMobilePhone($mobilePhone) {
        $this->mobilePhone = $mobilePhone;
    }

    function setCanDrive($canDrive) {
        $this->canDrive = $canDrive;
    }

    function setCanBeTakenIntoAnotherCar($canBeTakenIntoAnotherCar) {
        $this->canBeTakenIntoAnotherCar = $canBeTakenIntoAnotherCar;
    }

    function setDestinationToTakeOrToBeTaken($destinationToTakeOrToBeTaken) {
        $this->destinationToTakeOrToBeTaken = $destinationToTakeOrToBeTaken;
    }

    function setCar(Car $car) {
        $this->car = $car;
    }

    function setCarSharingFees($carSharingFees) {
        $this->carSharingFees = $carSharingFees;
    }
}
