<?php

$captain = [
    'age' => 23,
    'name' => 'Jacques Spareau',
    'is_dead' => 'true',
    'famous_last_words' => 'AAaaargh...',
];

class Captain
{
    protected $age;
    protected $name;
    protected $isDead = false;
    
    public function __construct(string $name, int $age = 0)
    {
        $this->age = $age;
        $this->name = $name;
    }
    
    public function __toString()
    {
        return "Le capitaine s'appelle : ".$this->name;
    }
    
    public function death()
    {
        $this->isDead = true;
    }
    
    public function printNameUpper()
    {
        print strtoupper($this->name);
    }
    
    public function isOlder(int $oldAge)
    {
        if ($oldAge > $this->age) {
            print "le capitaine est plus jeune";
        } else {
            print "le capitaine est plus vieux";
        }
    }
}

$jaquesSpareau = new Captain("Jaques Sparreau", 23);

$barbarosa = new Captain("Barbarosa", 42);
$barbarosa->death();

?>
<!doctype html>
<html lang="en">
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
    <meta name="description" content="">
    <meta name="author" content="">
    
    <title>Jumbotron Template for Bootstrap</title>
    
    <!-- Bootstrap core CSS -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
</head>
<body>
    <main role="main">
        <div class="jumbotron">
            <div class="container">
                <h1 class="display-3">Le capitaine en objet</h1>
                <pre>
                    <?php print $jaquesSpareau; ?>
                    <?php $jaquesSpareau->printNameUpper(); ?>
                    <?php var_dump($jaquesSpareau); ?>
                    <?php var_dump($barbarosa); ?>
                </pre>
            </div>
        </div>
    </main>
    
    <footer class="container">
        <p>&copy; Bootstrap 2018</p>
    </footer>
</body>
</html>
