<?php
    require_once __DIR__ . '/Report/Composite.php';

    class Company extends Composite
    {
        private string $companyName;

        public function __construct(string $companyName)
        {
            $this->companyName = $companyName;
        }

        public function getInfo(): array {
            $info = [];

            foreach ($this->leaves as $department) {
                if (false === $department instanceof Composite) {
                    throw new Exception('Invalid instance');
                }

                $info[] = $department->getInfo();
            }

            return $info;
        }

        public function getName(): string {
            return $this->companyName;
        }
    }
?>
