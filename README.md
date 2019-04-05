# CodeIgniter Starter

Starter Pack for CodeIgniter Framework

## Getting Started

This projects is quick starter for CodeIgniter framework and has some basic setups 
in it.


### Prerequisites

Any HTTP Server and DB Engine (OPTIONAL).

### Installing

Clone the repo.

```
git clone https://github.com/brspower/codeigniter-starter.git YourProjectName
```

Some changes are required.

In "application/config"


```
$config['base_url'] = 'YOUR-BASE-URL';
```
For Database Configurations (MYSQL)

```
$db['default'] = array(
	'dsn'	=> '',
	'hostname' => 'localhost',
	'username' => 'DB-USER',
	'password' => 'DB-PASS',
	'database' => 'DB-NAME',
	...
);
```




## Built With

* [PHP](https://www.php.net/) - General-Purpose Scripting Language That Is Especially Suited to Web Development.
* [CodeIgniter](https://codeigniter.com/) - PHP Framework


