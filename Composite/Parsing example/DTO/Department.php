<?php
    require_once __DIR__ . '/Report/Composite.php';

    class Department extends Composite
    {
        private string $departmentName;
        private string $manager;

        public function __construct(
            string $departmentName,
            string $manager
        ) {
            $this->departmentName = $departmentName;
            $this->manager = $manager;
        }

        public function getInfo(): array {
            $info = [];
            $info[$this->departmentName] = [
                'departmentName' => $this->departmentName,
                'manager' => $this->manager
            ];

            $employeesCount = 0;
            $subDepartmentInfo = [];
            $activeProjects = [];

            foreach ($this->leaves as $leaf) {
                if (false === $leaf instanceof Composite) {
                    throw new Exception('Invalid instance');
                }

                if (true === $leaf instanceof Department) {
                    $subDepartmentInfo[] = $leaf->getInfo();
                }

                if (true === $leaf instanceof Employee) {
                    $employeesCount++;
                    $activeProjects = array_merge($activeProjects, $leaf->getInfo());
                }
            }
            $info[$this->departmentName]['employeesCount'] = $employeesCount;
            $info[$this->departmentName]['activeProjects'] = implode(',', $activeProjects);
            $info[$this->departmentName]['subdepartments'] = $subDepartmentInfo;

            return $info;
        }

        public function getName(): string {
            return $this->departmentName;
        }
    }
?>
