<?php

declare(strict_types=1);

namespace Danilocgsilva\DatabaseDiscoverCli;

class DatabaseDiscoverCli
{
    private string $connectionName;
    private string $address;
    private string $user;
    private string $password;
    private Db $db;

    public function __construct()
    {
        $this->db = new Db();
    }

    public function addConnection()
    {
        $this->connectionName = readline("Please, give a name for your database connection: ");
        $this->address = readline("Please, give the database address: ");
        $this->user = readline("Please, give the database user: ");
        $this->password = $this->askHidden("Please, give the database password: ");

        print("The connection name is " . $this->connectionName . "\n");
        print("The address from connection is " . $this->address . "\n");
        print("The user is " . $this->user . "\n");
        print("The password is " . $this->password . "\n");

        $this->db->save(
            $this->connectionName,
            $this->address,
            $this->user,
            $this->password
        );
    }

    private function askHidden(string $prompt): string
    {
        print($prompt);
        system('stty -echo');
        $password = trim(fgets(STDIN));
        system('stty echo');
        return $password;
    }
}
