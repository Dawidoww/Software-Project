<?php

class PersonalTrainer extends User
{
    private String $trainerName;

    public function getTrainerName(): string
    {
        return $this->trainerName;
    }
    public function setTrainerName(string $trainerName): void
    {
        $this->trainerName = $trainerName;
    }

    public function __construct($password, $email, $trainerName)
    {
        parent::__construct($password, $email);
        $this->trainerName = $trainerName;
    }
    public function name()
    {
        echo "Personal Trainers name is $this->trainerName.\n";
    }
    public function addPlan(){echo "$this->trainerName added plans\n";}
    public function deletePlan(){echo "$this->trainerName deleted plans\n";}
    public function changePlan(){echo "$this->trainerName changed the plans\n";}
}