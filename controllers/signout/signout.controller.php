<?php
require '../../database/database.php';
session_start();

session_destroy();

header('location: ../customers/create_customer.controller.php');