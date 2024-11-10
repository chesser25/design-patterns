<?php
    require_once __DIR__ . '/Report/Composite.php';

    class Employee extends Composite
    {
        private string $id;
        private string $employeeName;
        private string $role;

        public function __construct(
            string $id,
            string $employeeName,
            string $role
        ) {
            $this->id = $id;
            $this->employeeName = $employeeName;
            $this->role = $role;
        }

        public function getInfo(): array {
            $activeProjectsNames = [];

            foreach ($this->leaves as $leaf) {
                if (false === $leaf instanceof Leaf) {
                    throw new Exception('Invalid instance');
                }

                if (true === $leaf instanceof Project) {
                    if (true === $leaf->getInfo()['is_active'] ?? false) {
                        $activeProjectsNames[] = $leaf->getName();
                    }
                }
            }

            return $activeProjectsNames;
        }

        public function getName(): string {
            return $this->employeeName;
        }
    }
?>
