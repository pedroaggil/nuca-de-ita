<?php // Database functions
    include 'config.php';

    // Connecting database with PDO method
        // Variables of conecting in database
            $host = 'mysql:host=localhost'; // Host of database

            $dbname = ''; // Name of database
            $username = ''; // Credentials: database username
            $pass = ''; // Credentials: database password

            $conn = $host .';dbname='. $dbname;

    try {
        $pdo = new PDO($conn, $username, $pass);
        $pdo->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
    } catch(PDOException $e) {
        echo 'ERROR: ' . $e->getMessage();
    }

    // Drop table
    function dropTable($table) {
        $drop = 'DROP TABLE '. $table;
        return $GLOBALS['pdo']->query($drop);
    }

    /* CRUD: General commands */

        // Recommended: CRUD insert and update commands
        function MySQL_Execute($command) {
            return $GLOBALS['pdo']->query($command);
        }
    
    /* CRUD: Select */

        // Select all from table
        function selectAll($table, $orderBy = '') {
            if($orderBy !== '') {
                $src = 'SELECT * FROM '. $table .' ORDER BY '. $orderBy;
            } else {
                $src = 'SELECT * FROM '. $table;
            }
            return $GLOBALS['pdo']->query($src);
        }

        // Select column name from table
        function selectColumn($column, $table, $orderBy = '') {
            if($orderBy !== '') {
                $src = 'SELECT '. $column .' FROM '. $table .' ORDER BY '. $orderBy;
            } else {
                $src = 'SELECT '. $column .' FROM '. $table;
            }
            return $GLOBALS['pdo']->query($src);
        }

        // Select all from table where clause
        function selectAllWhere($table, $condition, $orderBy = '') {
            if($orderBy !== '') {
                $src = 'SELECT * FROM '. $table .' WHERE '. $condition .' ORDER BY '. $orderBy;
            } else {
                $src = 'SELECT * FROM '. $table .' WHERE '. $condition;
            }
            return $GLOBALS['pdo']->query($src);
        }

        // Select column name from table
        function selectColumnWhere($column, $table, $condition, $orderBy = '') {
            if($orderBy !== '') {
                $src = 'SELECT '. $column .' FROM '. $table .' WHERE '. $condition .' ORDER BY '. $orderBy;
            } else {
                $src = 'SELECT '. $column .' FROM '. $table .' WHERE '. $condition;
            }
            return $GLOBALS['pdo']->query($src);
        }

    /* CRUD: Delete */
        
        // Delete from table where
        function Delete($table, $condition) {
            $del = 'DELETE FROM '. $table .' WHERE '. $condition;
            return $GLOBALS['pdo']->query($del);
        }

        // Delete all from table
        function deleteAll($table) {
            $del = 'DELETE FROM '. $table;
            return $GLOBALS['pdo']->query($del);
        }
?>