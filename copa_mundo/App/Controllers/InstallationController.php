<?php

namespace App\Controllers;

use Slim\Http\Request;
use Slim\Http\Response;
use App\Repositories\InstallationRepository;


class InstallationController {

    private mixed $container;
    private InstallationRepository $repository;

    public function __construct($container)
    {
        $this->container = $container;
        $this->repository = new InstallationRepository();
    }

    public function install(){
        $this->repository->createTables();
    }

    
}