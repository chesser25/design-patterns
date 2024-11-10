<?php
    require_once __DIR__ . '/../DTO/Company.php';
    require_once __DIR__ . '/../DTO/Project.php';
    require_once __DIR__ . '/../DTO/Task.php';
    require_once __DIR__ . '/../DTO/Employee.php';
    require_once __DIR__ . '/../DTO/Department.php';
    require_once __DIR__ . '/../DTO/Report/Composite.php';
    require_once __DIR__ . '/../DTO/Report/Leaf.php';
    require_once __DIR__ . '/Serializer.php';

    class CustomSerializer implements Serializer
    {
        public function serialize(array $data): string {
            return json_encode($data);
        }

        public function deserialize(array $data): Composite {
            try {
                return $this->createCompany($data['company']);
            } catch (Throwable $throwable) {
                throw new Exception($throwable->getMessage());
            }
        }

        
        // Helper function to create a Company object
        function createCompany(array $data): Composite {
            $company = new Company($data['name']);
            $departments = array_map([$this, 'createDepartment'], $data['departments']);

            foreach ($departments as $department) {
                if (false === $department instanceof Composite) {
                    throw new Exception('Not valid instance');
                }

                $company->add($department);
            }

            return $company;
        }

        // Helper function to create a Department object
        function createDepartment(array $data): Department {
            $department = new Department($data['name'], $data['manager']);

            $employees = array_map([$this, 'createEmployee'], $data['employees'] ?? []);
            $subDepartments = isset($data['subDepartments']) ? array_map([$this, 'createDepartment'], $data['subDepartments']) : [];
            
            foreach ($employees as $employee) {
                $department->add($employee);
            }

            foreach ($subDepartments as $subDepartment) {
                $department->add($subDepartment);
            }

            return $department;
        }

        
        // Helper function to create an Employee object
        function createEmployee(array $data): Composite {
            $employee = new Employee($data['id'], $data['name'], $data['role']);

            $projects = isset($data['projects']) ? array_map([$this, 'createProject'], $data['projects']) : [];
            $tasks = isset($data['tasks']) ? array_map([$this, 'createTask'], $data['tasks']) : [];

            foreach ($projects as $project) {
                $employee->add($project);
            }

            foreach ($tasks as $task) {
                $employee->add($task);
            }

            return $employee;
        }

        
         // Helper function to create a Project object
         function createProject(array $data): Leaf {
            return new Project($data['projectName'], $data['deadline'], $data['is_active'] ?? false);
        }

        // Helper function to create a Task object
        function createTask(array $data): Leaf {
            return new Task($data['taskName'], $data['deadline']);
        }
    }
?>
