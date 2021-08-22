/*============Define my  tables ====================*/
if (!defined('MY_TABLE_NAME')) {
    define('MY_TABLE_NAME', 'my table name');
} else {
    echo sprintf('<h1>This table  %s already exists</h1>', MY_TABLE_NAME);
}