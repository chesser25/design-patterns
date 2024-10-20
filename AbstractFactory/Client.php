<?php
    require_once 'Factory/FashionFactory.php';
    require_once 'Factory/FendiFactory.php';
    require_once 'Factory/GucciFactory.php';
    require_once 'Factory/PradaFactory.php';

    class Client
    {
        private FashionFactory $fashionFactory;
        
        public function __construct(FashionFactory $fashionFactory)
        {
            $this->fashionFactory = $fashionFactory;
        }

        public function run(): void {
            $bag = $this->fashionFactory->createBag();
            $watch = $this->fashionFactory->createWatch();
            $glasses = $this->fashionFactory->createWatch();

            echo 'Bag price is ' . $bag->getPrice() . '<br>';
            echo 'Bag content is ' . $bag->getContent() . '<br>';
            echo '--------------' . '<br>';

            echo 'Watch price is ' . $watch->getPrice() . '<br>';
            echo 'Current time is ' . $watch->getCurrentTime() . '<br>';
            echo '--------------' . '<br>';

            echo 'Glasses price is ' . $glasses->getPrice() . '<br>';
            echo '--------------' . '<br>';
        }
    }

    echo '<b>Fendi factory!</b>' . '<br>';
    echo '-------------------------' . '<br>';
    $client = new Client(new FendiFactory());
    $client->run();

    echo '<b>Gucci factory!</b>' . '<br>';
    echo '-------------------------' . '<br>';
    $client = new Client(new GucciFactory());
    $client->run();

    echo '<b>Prada factory!</b>' . '<br>';
    echo '-------------------------' . '<br>';
    $client = new Client(new PradaFactory());
    $client->run();
?>

