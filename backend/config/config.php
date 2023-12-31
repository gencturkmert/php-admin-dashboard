<?php
require_once("backend/core/db.php");
require_once("backend/services/EmployeeService.php");
require_once("backend/services/AnimalService.php");
require_once("backend/services/CampService.php");
require_once("backend/services/UserService.php");
require_once("backend/daos/EmployeeDao.php");
require_once("backend/daos/AnimalDao.php");
require_once("backend/daos/CampDao.php");
require_once("backend/daos/UserDao.php");
require_once("backend/daos/KindDao.php");
require_once("backend/auth/auth.php");



// Create DAO instances
$employeeDao = new EmployeeDao($conn);
$animalDao = new AnimalDao($conn);
$campDao = new CampDao($conn);
$userDao = new UserDao($conn);
$kindDao = new KindDao($conn);

// Create Service instances with injected DAOs
$employeeService = new EmployeeService($employeeDao);
$animalService = new AnimalService($animalDao, $kindDao, $campDao, $employeeDao);
$campService = new CampService($campDao);
$userService = new USerService($userDao);

$auth = new Auth($userDao);
