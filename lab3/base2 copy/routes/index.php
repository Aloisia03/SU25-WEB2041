<?php

$action = $_GET['action'] ?? '/';

$homeController = new HomeController;
match ($action) {
    '/'         => $homeController->index(),
      'detail'=> $homeController->detail(),
      'create'=> $homeController->create(),
      'store'=> $homeController->store(),
       'delete'=> $homeController->delete(),
       'edit'=> $homeController->edit(),
        'update'=> $homeController->update(),
};
