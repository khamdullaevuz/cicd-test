<?php

namespace Config;

use PDO;

class Core
{
    const APP_NAME = "khamdullaev.tech";

    const HOSTNAME = "localhost";
    const DBNAME = "mvc";
    const USERNAME = "root";
    const PASSWORD = "";
    const OPTIONS = [
        PDO::ATTR_ERRMODE => PDO::ERRMODE_EXCEPTION
    ];
}
