<?php
//this is class personal trainer which extends the user class
class PersonalTrainer extends User
{
    private String $trainerName;
    //get/set of trainer name
    public function getTrainerName(): string
    {
        return $this->trainerName;
    }
    public function setTrainerName(string $trainerName): void
    {
        $this->trainerName = $trainerName;
    }
    //constructor for this class
    public function __construct($password, $email, $trainerName)
    {
        parent::__construct($password, $email);
        $this->trainerName = $trainerName;
    }
    //this function says the name of the trainer
    public function name()
    {
        echo "Personal Trainers name is $this->trainerName.\n";
    }
    //this function allows trainer to add plans
    public function addPlan(){echo "$this->trainerName added plans\n";}
    //this function allows user to delete the plans
    public function deletePlan(){echo "$this->trainerName deleted plans\n";}
    //this function allows the user to change plans
    public function changePlan(){echo "$this->trainerName changed the plans\n";}
}