<?php
    require_once 'Factory/CarFactory.php';
    require_once 'Factory/TeslaFactory.php';
    require_once 'Factory/AudiFactory.php';

    class Client
    {
        private CarFactory $carFactory;
        
        public function __construct(CarFactory $carFactory)
        {
            $this->carFactory = $carFactory;
        }

        public function run(): void {
            $car = $this->carFactory->create();
            $isCarCharged = $car->charge();

            if($isCarCharged) {
                $car->go();
                $car->stop();
            }
        }
    }

    // Create Tesla car
    $client = new Client(new TeslaFactory());

    // Go by Tesla if it is charged
    $client->run();

    // Create Audi car
    $client = new Client(new AudiFactory());

    // Go by Audi if it is charged
    $client->run();
?>

