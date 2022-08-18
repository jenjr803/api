<?php
date_default_timezone_set('Asia/Taipei');
session_start();

class DB
{
    protected $dsn = "mysql:host=localhost;charset=utf8;dbname=s1100401",
        $table,
        $pdo;

    function __construct($table)
    {
        $this->table = $table;
        $this->pdo = new PDO($this->dsn, $this->user = 's1100401', $this->pw = 's1100401');
    }

    function find($id)
    {
        $sql = "SELECT * FROM $this->table WHERE ";
        if (is_array($id)) {
            foreach ($id as $k => $v) {
                $tmp[] = "`$k`='$v'";
            }
            $sql .= implode(" AND ", $tmp);
        } else {
            $sql .= "`id`='$id'";
        }
        return $this->pdo->query($sql)->fetch(PDO::FETCH_ASSOC);
    }

    function all(...$arg)
    {
        $sql = "SELECT * FROM $this->table ";
        switch (count($arg)) {
            case 1:
                if (is_array($arg[0])) {
                    foreach ($arg[0] as $k => $v) {
                        $tmp[] = "`$k`='$v'";
                    }
                    $sql .= " WHERE " . implode(" AND ", $tmp);
                } else {
                    $sql .= $arg[0];
                }
                break;
            case 2:
                foreach ($arg[0] as $k => $v) {
                    $tmp[] = "`$k`='$v'";
                    $sql .= " WHERE " . implode(" AND ", $tmp) . " " . $arg[1];
                }
                break;
        }
        return $this->pdo->query($sql)->fetchAll(PDO::FETCH_ASSOC);
    }

    function math($m, $c, ...$arg)
    {
        $sql = "SELECT $m($c) FROM $this->table ";
        switch (count($arg)) {
            case 1:
                if (is_array($arg[0])) {
                    foreach ($arg[0] as $k => $v) {
                        $tmp[] = "`$k`='$v'";
                    }
                    $sql .= " WHERE " . implode(" AND ", $tmp);
                } else {
                    $sql .= $arg[0];
                }
                break;
            case 2:
                foreach ($arg[0] as $k => $v) {
                    $tmp[] = "`$k`='$v'";
                    $sql .= " WHERE " . implode(" AND ", $tmp) . " " . $arg[1];
                }
                break;
        }
        return $this->pdo->query($sql)->fetchColumn();
    }

    function save($array)
    {
        if (isset($array['id'])) {
            //update
            foreach ($array as $k => $v) {
                $tmp[] = "`$k`='$v'";
            }
            $sql = "UPDATE $this->table SET " . implode(",", $tmp) . " WHERE `id`={$array['id']}";
        } else {
            //insert
            $col = implode("`,`", array_keys($array));
            $values = implode("','", $array);
            $sql = "INSERT INTO $this->table (`$col`) VALUES ('$values')";
        }
        return $this->pdo->exec($sql);
        // echo $sql;
    }

    function del($id)
    {
        $sql = "DELETE FROM $this->table WHERE";
        if (is_array($id)) {
            foreach ($id as $k => $v) {
                $tmp[] = "`$k`='$v'";
            }
            $sql .= implode(" AND ", $tmp);
        } else {
            $sql .= "`id`='$id'";
        }
        return $this->pdo->exec($sql);
    }
}

function dd($array)
{
    echo "<pre>";
    print_r($array);
    echo "</pre>";
}

function to($url)
{
    header("location:" . $url);
}


$Banner = new DB('por_banner');
$Exp = new DB('por_exp');
$Footer = new DB('por_footer');
$Portfolio = new DB('por_portfolio');
$Skill = new DB('por_skill');
$User = new DB('por_user');


